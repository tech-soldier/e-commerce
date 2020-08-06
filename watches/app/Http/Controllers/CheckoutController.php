<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tax;
use \CartController;

class CheckoutController extends Controller
{
    public function getCheckout()
    {
        $taxes = Tax::all();
        $title = "Checkout";

        return view('checkout', compact('taxes', 'title'));
    }


    public function calculateCost(Request $request) {
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
}
