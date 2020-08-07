<?php

namespace App\Http\Controllers;
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
//            session()->put('subtotal', $subtotal);
//            session()->put('gst', $gst);
//            session()->put('pst', $pst);
//            //session()->put('hst', $hst);
//            session()->put('shipping', $shipping);

            return response()->json(['gst' => $gst, 'pst' => $pst, 'shipping' => $shipping, 'total' => $total]);


        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function placeOrder(Request $request) {
//        //5 px
//
//        //validate cart info
//        //save order , get id
//
//        //fake order id
//        $order_id=345;



        $valid = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'billing_address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'postal_code' => 'required|string|max:6',
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
            'HST' => $cost['pst'],
            'shipping' => $cost['shipping'],
            'total' => $cost['order_total']
        ]);

        session()->forget('cart');
        $order_id = $order->id;

        //5bx object
//        $transaction = new _5bx(env('BX_LOGIN'), env("BX_KEY"));
//        $transaction->ref_num($order_id);
//
//
//        function processTransaction(_5bx $transaction)
//        {
//            // Replace hard coded values with your own variables
//            $transaction->amount('5.99'); // total sale
//            $transaction->card_num('4111111111111111'); // credit card number
//            $transaction->exp_date ('0822'); // expiry date month and year (august 2022)
//            $transaction->cvv('333'); // card cvv number
//            $transaction->ref_num('2011099'); // your reference or invoice number
//            $transaction->card_type('visa'); // card type (visa, mastercard, amex)
//            return $transaction->authorize_and_capture(); // returns JSON object
//
//        }
//
//        //send transaction to 5bx
//        $response = processTransaction($transaction);
//    dd($response);
//
//    if($response->transaction_response->response_code ==1) {
//        //save transaction info into transaction table
//        //update order table if you have transaction_status field = 1
//    } else {
//        // set transaction_status field in order table to failed (0)
//        //return back with errors
//        //return back()->withErrors((array) $response->errors);
//    }

        
        return redirect('/shop')->with('success', 'Order was successfully created');
    }

}
