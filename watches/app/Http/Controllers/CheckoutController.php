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
            $pst = round($subtotal * $taxes->GST, 3);
            return response()->json(['gst' => $gst, 'pst' => $pst]);

      }
    }
}
