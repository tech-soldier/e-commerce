<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function watches()
    {
    	$data['title'] = 'Watches'; 
        $data['ballplayers'] = Watch::all();
        return view('/admin/watches_table', $data);
    	//return view('/admin/dashboard', compact('title')); 	
    }
}
