<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tax;
use \CartController;

class CheckoutController extends Controller
{
    public function getCheckout()
    {
        return view('checkout');
    }


    public function calculateCost(Request $request) {
        if($request->province and $request->subtotal) {
            $taxes = Tax::where('province', '=', $request->province)->first();
            $subtotal = floatval($request->subtotal);
            $gst = $subtotal * $taxes->GST;
            $pst = $subtotal * $taxes->GST;
            return response()->json(['gst' => $gst, 'pst' => $pst]);
            
      }
    }
}
