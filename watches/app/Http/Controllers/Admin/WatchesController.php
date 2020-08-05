<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Watch; 
use App\Category; 

class WatchesController extends Controller
{
    public function create()
	{
		$title = 'Create new Watch'; 
		$categories = Category::all(); 
		return view('/admin/create/create_watch', compact('categories', 'title')); 
	}
}
