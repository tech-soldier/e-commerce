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
        $title = 'Create A New Watch'; 
        $watches = Watch::all(); 
        $categories = Category::all(); 

        return view('/admin/create/create_watch', compact('title', 'watches', 'categories')); 
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
            'in_stock' => 'required|integer', 
            'quantity' => 'required|integer',
            'price' => "required|regex:/^\d+(\.\d{1,2})?$/", 
            'cost' => "required|regex:/^\d+(\.\d{1,2})?$/", 
            'material' => 'required|string|max:255', 
            'main_color' => 'required|string|max:255',
            'movement' => 'required|string|max:255', 
            'gender' => 'required|string|max:255', 
            'category_id' => 'nullable|integer', 
            'diameter' => 'required|string|max:255', 
            'strap_width' => 'required|string|max:255', 
            'strap_length' => 'required|string|max:255', 
            'weight' => 'required|string|max:255', 
            'water_resistant' => 'required|string|max:255', 
            'cover_img' => 'nullable|image',
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
            'in_stock' => $valid['in_stock'] ?? 0, 
            'quantity' => $valid['quantity'], 
            'price'=> $valid['price'],
            'cost'=> $valid['cost'],
            'material'=> $valid['material'],
            'main_color' => $valid['main_color'],
            'movement'=> $valid['movement'],
            'gender' => $valid['gender'], 
            'category_id' => $valid['category_id'] ?? 1,
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
        //
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
        //
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
