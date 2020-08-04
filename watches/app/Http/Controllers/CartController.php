<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Watch;

class CartController extends Controller
{
    public function addToCart($watch_id)
    {
        $watch = Watch::find($watch_id);

        //getting cart out of session
        $cart = session()->get('cart');

        // checking if cart is empty and this is the first watch in the cart
        if (!$cart) {

            $cart = [
                $watch_id => [
                    "watch_name" => $watch->watch_name,
                    "quantity" => 1,
                    "price" => $watch->price,
                    "cover_img" => $watch->cover_img
                ]
            ];

            session()->put('cart', $cart);
        }

        // if cart not empty then check if this product exist and increment its quantity
        if (isset($cart[$watch_id])) {

            $cart[$watch_id]['quantity']++;

            session()->put('cart', $cart);
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$watch_id] = [
            "watch_name" => $watch->watch_name,
            "quantity" => 1,
            "price" => $watch->price,
            "cover_img" => $watch->cover_img
        ];

        session()->put('cart', $cart);

    }
}
