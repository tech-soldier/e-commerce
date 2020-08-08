<?php

namespace App\Http\Controllers;
use App\Transaction;
use Pagerange\Bx\_5bx;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use App\Tax;
use \CartController;

class CheckoutController extends Controller
{
    public function getCheckout()
    {
        $taxes = Tax::all();
        $title = "Checkout";
        $user = User::all();

        return view('checkout', compact('taxes', 'title', 'user'));
    }


    /**
     * @param Request $request
     *
     * returns json with cost details
     * @return \Illuminate\Http\JsonResponse
     */
    public static function calculateCost(Request $request) {
        if($request->province and $request->subtotal) {
            $taxes = Tax::where('province', '=', $request->province)->first();
            $subtotal = floatval($request->subtotal);
            $gst = round($subtotal * $taxes->GST, 3);
            $pst = round($subtotal * $taxes->PST, 3);
            $items_total = 0;

            $cart = session()->get('cart');

            foreach($cart as $id => $details) {
                $items_total += $details['quantity'];
            }

            $shipping = $items_total * 3;
            $total = round($shipping + $gst + $pst + $subtotal,2);

            //getting cart out of session

            $cost = [
                "order_total" => $total,
                "subtotal" => $subtotal,
                "gst" => $gst,
                "pst" => $pst,
                "shipping" => $shipping
            ];

            session()->put('cost', $cost);

            return response()->json(['gst' => $gst, 'pst' => $pst, 'shipping' => $shipping, 'total' => $total]);


        }
    }

    /**
     * Store a new order in the database, complete payment and transaction.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function placeOrder(Request $request) {

        $valid = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'billing_address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'postal_code' => 'required|string|max:6',
            // PLEASE MAKE SURE CARD VALIDATION WORKS //
            'card_type' => 'required|string',
            'card_name' => 'required|string|max:255',
            'card_number' => 'required|numeric|digits_between:15,16',
            'card_expiry' => 'required|numeric|digits:4',
            'cvv' => 'required|numeric|min:301|max:499',
            /////////////////////////////////////////////////
            'shipping_address' => 'required|string|max:255',
            'shipping_city' => 'required|string|max:255',
            'shipping_province' => 'required|string|max:255',
            'shipping_country' => 'required|string|max:255',
            'shipping_postal_code' => 'required|string|max:6',
        ]);

        $cost = session()->get('cost');

        $order = Order::create([
            'user_id' => auth()->user()->id,
            'full_name' => $valid['first_name'] . ' ' . $valid['last_name'],
            'email'=> $valid['email'],
            'billing_address' => $valid['country'] . ', ' .  $valid['billing_address'] . ', ' .
                $valid['city'] . ', ' . $valid['province'] . ' ' . $valid['postal_code'],
            'shipping_address' => $valid['shipping_country'] . ', ' .  $valid['shipping_address'] . ', ' .
                $valid['shipping_city'] . ', ' . $valid['shipping_province'] . ' ' . $valid['shipping_postal_code'],
            'subtotal' => $cost['subtotal'],
            'GST' => $cost['gst'],
            'PST' => $cost['pst'],
            // EDIT HST
            'HST' => $cost['pst'],
            'shipping' => $cost['shipping'],
            'total' => $cost['order_total']
        ]);

        //clean session, empty cart
        session()->forget('cart');
        $order_id = $order->id;

        try {

            $transaction = new _5bx(env('BX_LOGIN'), env("BX_KEY"));
            $transaction->amount($cost['order_total']);
            $transaction->card_num($valid['card_number']); // credit card number
            $transaction->exp_date ($valid['card_expiry']); // eg  1118
            $transaction->cvv($valid['cvv']); // card cvv number
            $transaction->ref_num($order_id); // your reference or invoice number
            $transaction->card_type($valid['card_type']); // card type

            $response = $transaction->authorize_and_capture(); // returns object
            //dd$response);
            if ($response->transaction_response->response_code == '1') {
                // Your transaction was authorized...
                echo "Success! Authorization Code: " .
                    $response->transaction_response->auth_code;

                //save transaction info into transaction table
                Transaction::create([
                    'order_id' => $order_id,
                    'transaction_status' => 1,
                    'response_code' => $response->transaction_response->trans_id,
                    'auth_code' => $response->transaction_response->auth_code,
                    'transaction' => json_encode($response)
                ]);

                //update order table if you have transaction_status field = 1
                $update_order = Order::find($order_id);

                $update_order->transaction_status = 1;
                $update_order->save();

            } else {
                
                //return back with errors
                //return back()->withErrors((array) $response->errors);
                echo "Failed";
            }

        } catch (Exception $e) {
            die($e->getMessage());
        }

        return redirect('/shop')->with('success', 'Order was successfully created');
    }

}
