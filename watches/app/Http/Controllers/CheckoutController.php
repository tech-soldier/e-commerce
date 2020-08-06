<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tax;

class CheckoutController extends Controller
{
    public function getCheckout()
    {
        return view('checkout');
    }

    public function calculateCost(Request $request)
//    {
//        if($request->province)
        {
            $taxes = Tax::where('province', '=', $request->province)->get();


            return response()->json(['taxes' => $taxes]);


//        }
    }
}
