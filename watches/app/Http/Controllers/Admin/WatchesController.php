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

    public function edit($id) {
    //     $watch=Watch::find($id);
    //     $title = 'Edit Watch';
    //     return view('/admin/edit/edit_watch', compact('title', 'watch'));
    }

    public function update(Request $request)
    {
        // $valid = $request->validate([

        //     'SKU' => 'required|max:10',
        //     'watch_name'=> 'required|string|max:255',
        //     'in_stock' => 'required',
        //     'quantity' => 'required|integer',
        //     'price' => 'required|numeric',
        //     'cost' => 'required|numeric',
        //     'material' => 'required|string|max:255',
        //     'main_color' => 'required|string|max:25',
        //     'movement' => 'require|string|max:255',
        //     'gender' => 'require|string|max:255',
        //     'category_id' => 'require|integer',
        //     'diamenter' => 'require|integer',
        //     'strap_width' => 'require|string|max:255',
        //     'weight' => 'require|integer',
        //     'water_resistant' => 'require|string|max:255',
        //     'cover_img' => 'nullable|cover_img',
        //     'short_description' => 'require',
        //     'long_description' => 'require'

        // ]);

    //     if(!empty($valid['cover_img'])){

    //     $file = $request->file('cover_img');
    //     //getting the orginal file name
    //     $fcover_img = time() . '_' . $file->getClientOriginalNAme();

    //     //save the image
    //     $path = $file->storeAs('images', $cover_img);

    // }

    // $watch = Watch::find($valid['SKU']);
    // $watch->watch_name = $valid['watch_name'];
    // $watch->in_stock = $valid['in_stock'];
    // $watch->quantity = $valid['quantity'];
    // $watch->price = $valid['price'];
    // $watch->cost = $valid['cost'];
    // $watch->material = $valid['material'];
    // $watch->main_color = $valid['main_color'];
    // $watch->movement = $valid['movement'];
    // $watch->gender = $valid['gender'];
    // $watch->category_id = $valid['category_id'];
    // $watch->diamenter = $valid['diamenter'];
    // $watch->strap_width = $valid['strap_width'];
    // $watch->weight = $valid['weight'];
    // $watch->water_resistant = $valid['water_resistant'];
    // $watch->short_description = $valid['short_description'];
    // $watch->long_description = $valid['long_description'];
    // if(!empty($cover_img)) {
    //      $watch->cover_img = '/cover_img/' .$cover_img;
    // }

    // if($watch->save() ) {
    //     return redirect('/admin/watches_table')->with('success', 'Your watch is successfully updated');

    // }

    // return redirect('/admin/watches_table')->with('error', 'There was a problem updating the watch');

     }


}
