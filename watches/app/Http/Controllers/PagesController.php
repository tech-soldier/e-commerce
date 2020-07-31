<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * returns home page
     * @return array
     */
    public function homepage(){
        $title = 'Home';
        return view('homepage');
    }

      /**
     * returns contact page
     * @return array
     */
    public function contact(){
        $title = 'contact';
        return view('contact');
    }

    /**
     * returns about page
     * @return array
     */
    public function about(){
        $title = 'about';
        return view('about');
    }

    /**
     * returns detail page
     * @return array
     */
    public function detail(){
        $title = 'Product Detail';
        return view('detail');
    }

    /**
     * returns shop page
     * @return array
     */
    public function shop(){
        $title = 'Shop';
        return view('shop');
    }
}
