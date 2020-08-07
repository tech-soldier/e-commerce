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
//        //5bx object
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


        $request->validate([
            'first_name' => 'required|string|max:255',
            'email' => 'required|email',
            'billing_address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'postal_code' => 'required|string|max:6',
////        'shipping_address' => 'required|string|max:255',
////        'subtotal' => "required|regex:/^\d+(\.\d{1,2})?$/",
////        'tax_id' => 'required|integer',
////        'total' => "required|regex:/^\d+(\.\d{1,2})?$/"
        ]);


        Order::create([
            'user_id' => auth()->user()->id,
            'first_name' => $request['first_name'],
            'email'=> $request['email'],
            'billing_address' => $request['country'] . ' ' .  $request['billing_address'] . ' ' .
                $request['city'] . ' ' . $request['province'] . ' ' . $request['postal_code'],
            'shipping_address' => $request['billing_address'],
            'subtotal' => $request['order_subtotal'],
            'tax_id' => 2,
            'total' => $request['total']
        ]);

//        $user = User::find(auth()->user()->id);
//
//        $user->first_name = $request['first_name'];
//        $user->last_name = $request['last_name'];
//        $user->billing_address = $request['billing_address'];
//        $user->city = $request['city'];
//        $user->province = $request['province'];
//        $user->country = $request['country'];
//        $user->first_name = $request['postal_code'];
//        $user->first_name = $request['postal_code'];
//
//
//        $user->save();

        //return redirect('/invoice')->with('success', 'Order was successfully created');
        return redirect('/shop')->with('success', 'Order was successfully created');
    }

}
