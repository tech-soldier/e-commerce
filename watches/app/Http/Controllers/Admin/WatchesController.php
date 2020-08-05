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
		$title = 'Create A New Watch'; 
		$watches = Watch::all(); 
		$categories = Category::all(); 
		return view('/admin/create/create_watch', compact('categories', 'watches','title')); 
	}

	public function store(Request $request)
	{
		
		$valid = $request->validate([
			'SKU' => 'required|integer', 
			'watch_name' => 'required|string|max:255',
			'in_stock' => 'required|tinyInteger',
			'quantity' => 'required|integer',
			'price' => 'required|integer', // change later
			'cost' => 'required|integer', // change later 
			'material' => 'required|string|max:255', 
			'movement' => 'required|string|max:255', 
			'gender' => 'required|string|max:255', 
			'category_id' => 'required|integer', 
			'diameter' => 'required|string|max:255', 
			'strap_width' => 'required|string|max:255', 
			'strap_length' => 'required|string|max:255', 
			'weight' => 'required|string|max:255', 
			'water_resistant' => 'required|string|max:255', 
			'cover_img' => 'required|string|max:255',
			'short_description' => 'required|string|max:255', 
			'long_description' => 'required|string|max:500', 

		]); 
 
  		// if(!empty($valid['image'])) {
    //         //get the uploaded file
    //         $file = $request->file('image');

    //         //get the original filename
    //         //concatenate time so if same file uploaded, won't be overridden
    //         $image = time() . '_' . $file->getClientOriginalName();

    //         //save the image
    //         $path = $file->storeAs('images', $image);
    //     }

        Watch::create([
        	'SKU' => $valid['SKU'], 
			'watch_name' => $valid['watch_name'], 
			'in_stock' => $valid['in_stock'], 
			'quantity' => $valid['quantity'], 
			'price'=> $valid['price'],
			'cost'=> $valid['cost'],
			'material'=> $valid['material'],
			'movement'=> $valid['movement'],
			'gender' => $valid['gender'], 
			'category_id' => $valid['category_id'],
			'diameter' => $valid['diameter'], 
			'strap_width' => $valid['strap_width'],
			'strap_length' => $valid['strap_length'],
			'weight' => $valid['weight'],
			'water_resistant' => $valid['water_resistant'],
			'cover_img' => $valid['cover_img'],
			'short_description' => $valid['short_description'],
			'long_description' => $valid['long_description']

        ]); 

        	//return redirect('/admin/'); 
     	    return redirect('/admin/watches_table')->with('success', 'Watch was successfully created'); 
	}
}
