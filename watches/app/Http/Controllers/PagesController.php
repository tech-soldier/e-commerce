<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class PagesController extends Controller
{
    /**
     * returns home page
     * @return array
     */
    public function watchhome(){
        $title = 'TechWatch Home';
        $id = Auth::id(); //get authenticated user id
        $user = User::find($id); // get authenticated user
        return view('watchhome', compact('user'));
    }

      /**
     * returns contact page
     * @return array
     */

    public function contact(){
        $title = 'Contact';
        $id = Auth::id(); //get authenticated user id
        $user = User::find($id); // get authenticated user
        return view('contact', compact('user'));
    }

    /**
     * returns about page
     * @return array
     */
    public function about(){
        $title = 'About';
        $id = Auth::id(); //get authenticated user id
        $user = User::find($id); // get authenticated user
        return view('about', compact('user'));
    }

    /**
     * returns detail page
     * @return array
     */
    public function detail(){
        $title = 'Product Detail';
        $id = Auth::id(); //get authenticated user id
        $user = User::find($id); // get authenticated user
        return view('detail', compact('user'));
    }

    /**
     * returns shop page
     * @return array
     */
    public function shop(){
        $title = 'Shop';
        $id = Auth::id(); //get authenticated user id
        $user = User::find($id); // get authenticated user
        return view('shop', compact('user'));
    }

    /**
     * returns shop page
     * @return array
     */
    public function cart(){
        $title = 'Shopping Cart';
        $id = Auth::id(); //get authenticated user id
        $user = User::find($id); // get authenticated user
        return view('cart', compact('user'));
    }
}
