<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * returns home page
     * @return array
     */
    public function watchhome(){
        $title = 'TechWatch Home';
        return view('watchhome');
    }

      /**
     * returns contact page
     * @return array
     */

    public function contact(){
        $title = 'Contact';
        return view('contact');
    }

    /**
     * returns about page
     * @return array
     */
    public function about(){
        $title = 'About';
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
