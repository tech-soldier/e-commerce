<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
      /**
     * returns about page
     * @return array
     */
    public function contact(){
        
        $title = 'contact';
        return view('contact');
    }
}
