<?php

namespace App\Http\Controllers;
use App\Transaction;
use Pagerange\Bx\_5bx;
use App\Order;
use \Auth;
use App\User;
use App\Watch;
use Illuminate\Http\Request;
use App\Tax;
use \CartController;
use \DB;
use \Carbon\Carbon;

class CheckoutController extends Controller
{
    /**
     * get Checkout
     * @return array
     */
    public function getCheckout()
    {
        $taxes = Tax::all();
        $title = "Checkout";

        $id = Auth::id();
        $user = User::find($id);

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

            // checking what type of taxes a province has

            if ($taxes->HST != 0){
                $tax = $taxes->HST*$request->subtotal;
                $tax_message = "HST: $" . round($tax, 2);
                $gst = 0;
                $pst = 0;
                $hst = $taxes->HST;
            } else if ($taxes->PST != 0) {
                $tax = ($taxes->GST*$request->subtotal) + ($taxes->PST*$request->subtotal);
                $tax_message = "PST: $" .  round($taxes->PST*$request->subtotal, 2) . ", " . "GST: $" . round($taxes->GST*$request->subtotal, 2);
                $gst = $taxes->GST;
                $pst = $taxes->PST;
                $hst = 0;
            } else {
                $tax = $taxes->GST*$request->subtotal;
                $tax_message = "GST: $" . " " . round($tax, 2);
                $gst = $taxes->GST;
                $pst = 0;
                $hst = 0;
            }

            $items_total = 0;

            $cart = session()->get('cart');

            foreach($cart as $id => $details) {
                $items_total += $details['quantity'];
            }

            $shipping = $items_total * 3;
            $total = round($shipping + $tax + $subtotal,2);

            //getting cart out of session

            $cost = [
                "order_total" => $total,
                "subtotal" => $subtotal,
                "tax" => $tax,
                "gst" => $gst*$request->subtotal,
                "pst" => $pst*$request->subtotal,
                "hst" => $hst*$request->subtotal,
                "tax_message" => $tax_message,
                "shipping" => $shipping
            ];

            session()->put('cost', $cost);

            return response()->json(['tax' => $tax, 'tax_message' => $tax_message, 'shipping' => $shipping, 'total' => $total]);

        }
    }

    /**
     * Store a new order in the database, complete payment and transaction.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function placeOrder(Request $request) {

        $current_year = date("Y");
        $current_month = date("m");
        $now = $current_year.$current_month;
        $today = intval($now);
        $max_date = intval($today + 8000);
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
            'card_type' => 'required|in:Visa, Mastercard, Amex',
            'card_name' => 'required|string|max:255',
            'card_number' => 'required|numeric|digits_between:15,16',
            'card_expiry' => 'required|numeric|min:0920',
            'cvv' => "required|numeric|min:301|max:499",
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
            'HST' => $cost['hst'],
            'shipping' => $cost['shipping'],
            'total' => $cost['order_total']
        ]);

        // updated watches quantity in the database
        $order_id = $order->id;
        $cart = session()->get('cart');

        //create records in order_watches table
        foreach($cart as $id => $value) {
            DB::table('order_watch')->insert([
                'watch_id' => $id,
                'order_id' => $order_id,
                'watch_name' => $value['watch_name'],
                'quantity' => $value['quantity'],
                'price' => $value['price'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            //update watches quantity
            $update_watch = Watch::find($id);
            $update_watch->quantity -= $value['quantity'];
            $update_watch->save();
        }



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

                //clean session, empty cart
                session()->forget('cart');

                return redirect("/thankyou/".$order_id)->with('success', 'Order was successfully created');

            } else {
                $errors = $response->transaction_response->errors;
                return redirect()->back()->with('error', 'Transaction failed, unfortunately. ' . json_encode($errors));
            }

        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    /**
     * function for displaying a thank you page after the order is completed successfully
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function thankyou($id)
    {
        $title = 'Thank You ';
        $final_order = Order::find($id);

        // test, only authenticated user who ordered can access the page
        $user = Auth::user();
        if((!isset($user->id)) || (!isset($final_order->user_id)) || ($user->id != $final_order->user_id)){
            return redirect('')->with('error', 'You are not authorized to see that page');
        } // if passed the test, the user is the one

        $order_all = DB::table('order_watch')->where('order_id', $id)->get();

        return view('thankyou', compact('title', 'final_order', 'order_all', 'user'));
    }

}
