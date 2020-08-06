<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Watch; 
use App\Category; 

class WatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Create A New Watch"; 
        $watches = Watch::all(); 
        $categories = Category::all(); 

        return view("/admin/create/create_watch", compact("title", "watches", "categories")); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd('you are here');

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
            'category_id' => 'nullable|integer', 
            'diameter' => 'required|string|max:255', 
            'strap_width' => 'required|string|max:255', 
            'strap_length' => 'required|string|max:255', 
            'weight' => 'required|string|max:255', 
            'water_resistant' => 'required|string|max:255', 
            'cover_img' => 'required|string|max:255',
            'short_description' => 'required|string|max:255', 
            'long_description' => 'required|string|max:500'

        ]); 
 
        if(!empty($valid['cover_img'])) {
            //get the uploaded file
            $file = $request->file('cover_img');

            //get the original filename
            //concatenate time so if same file uploaded, won't be overridden
            $image = time() . '_' . $file->getClientOriginalName();

            //save the image
            $path = $file->storeAs('cover_img', $image);
        }

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
            'cover_img' => $valid['cover_img'] ?? '',
            'short_description' => $valid['short_description'],
            'long_description' => $valid['long_description']

        ]); 

            //return redirect('/admin/'); 
            return redirect('/admin/watches_table')->with('success', 'Watch was successfully created'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $watch=Watch::find($id);
        $title = 'Edit Watch'; 
        return view('/admin/edit/edit_watch', compact('title', 'watch')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $valid = $request->validate([
           
            'SKU' => 'required|max:10',
            'watch_name'=> 'required|string|max:255',
            'in_stock' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'cost' => 'required|numeric',
            'material' => 'required|string|max:255',
            'main_color' => 'required|string|max:255',
            'movement' => 'require|string|max:255',
            'gender' => 'require|string|max:255',
            'category_id' => 'require|integer',
            'diamenter' => 'require|integer',
            'strap_width' => 'require|string|max:255',
            'weight' => 'require|integer',
            'water_resistant' => 'require|string|max:255',
            'cover_img' => 'nullable|cover_img',
            'short_description' => 'require',
            'long_description' => 'require'

        ]);

         if(!empty($valid['cover_img'])){

        $file = $request->file('cover_img');
        //getting the orginal file name
        $fcover_img = time() . '_' . $file->getClientOriginalNAme();

        //save the image
        $path = $file->storeAs('images', $cover_img);

    }

    $watch = Watch::find($valid['SKU']);
    $watch->watch_name = $valid['watch_name'];
    $watch->in_stock = $valid['in_stock'];
    $watch->quantity = $valid['quantity'];
    $watch->price = $valid['price'];
    $watch->cost = $valid['cost'];
    $watch->material = $valid['material'];
    $watch->main_color = $valid['main_color'];
    $watch->movement = $valid['movement'];
    $watch->gender = $valid['gender'];
    $watch->category_id = $valid['category_id'];
    $watch->diamenter = $valid['diamenter'];
    $watch->strap_width = $valid['strap_width'];
    $watch->weight = $valid['weight'];
    $watch->water_resistant = $valid['water_resistant'];
    $watch->short_description = $valid['short_description'];
    $watch->long_description = $valid['long_description'];
    if(!empty($cover_img)) {
         $watch->cover_img = '/cover_img/' .$cover_img;
    }

    if($watch->save() ) {
        return redirect('/admin/watches_table')->with('success', 'Your watch is successfully updated');

    }

    return redirect('/admin/watches_table')->with('error', 'There was a problem updating the watch');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
