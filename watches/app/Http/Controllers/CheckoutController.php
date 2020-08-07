<?php

namespace App\Http\Controllers;

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
            $total = $shipping + $gst + $pst + $subtotal;



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

        dd($request['order_subtotal']);

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

        return redirect('/shop')->with('success', 'Order was successfully created');
    }

}
