<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Watch;

class CartController extends Controller
{

    /**
     * adding a product to a cart
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addToCart($id)
    {
        $watch = Watch::find($id);

        //getting cart out of session
        $cart = session()->get('cart');

        // checking if cart is empty and this is the first watch in the cart
        if (!$cart) {

            $cart = [
                $id => [
                    "watch_name" => $watch->watch_name,
                    "quantity" => 1,
                    "price" => $watch->price,
                    "cover_img" => $watch->cover_img
                ]
            ];

            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist and increment its quantity
        if (isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "watch_name" => $watch->watch_name,
            "quantity" => 1,
            "price" => $watch->price,
            "cover_img" => $watch->cover_img
        ];

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');

    }

    /**
     * getCartTotal
     *
     *
     * @return float|int
     */
    public static function getCartTotal()
    {
        if (session()->has('cart')) {
            $total = 0;

            $cart = session()->get('cart');

            foreach ($cart as $id => $details) {
                $total += $details['price'] * $details['quantity'];
            }

            return round($total, 2);
        }
    }


    /**
     * @param Request $request
     *
     * removing an item from a cart
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            $total = $this->getCartTotal();

            return response()->json(['total' => $total]);

            session()->flash('success', 'Product removed successfully');
        }
    }


    /**
     * @param Request $request
     *
     * updating quantity of a product in a cart and total/subtotal accordingly
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            //checking the number of watches left in the database and sendin an ajax response accordingly

            $watch_name = $cart[$request->id]["watch_name"];

            $watch = Watch::where('watch_name' , '=', $watch_name)->first();

            if ($watch->quantity < 2) {
                $message = "Sorry, no more items left in stock";
                return response()->json(['message' => $message]);
            } elseif ((($watch->quantity) - ($request->quantity)) >= 0) {

                $message = "Quantity updated";
                $cart[$request->id]["quantity"] = $request->quantity;
                session()->put('cart', $cart);
                $subTotal = round($cart[$request->id]['quantity'] * $cart[$request->id]['price'], 2);
                $total = round($this->getCartTotal(),2);

                return response()->json(['total' => $total, 'subTotal' => $subTotal, 'message' => $message, 'quantity' => $request->quantity]);

                session()->flash('success', 'Cart updated successfully');
            } else {
                $message = "Sorry, there are only " . $watch->quantity . " watches left in stock";
                return response()->json(['message' => $message, 'quantity' => $watch->quantity]);
            }

        }
    }
}



