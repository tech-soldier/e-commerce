<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Watch; 
use App\Category; 
// use App\Validator;

class WatchController extends Controller
{
    /**
     * search query for watches 
     * @return array view of search terms specified 
     */
    public function search()
    {
        $search_term = $_GET['query']; 
        $watches = Watch::where('watch_name', 'LIKE', '%'.$search_term.'%')->orWhere('material', 'LIKE', '%'.$search_term.'%')->orWhere('main_color', 'LIKE', '%'.$search_term.'%')->orWhere('long_description', 'LIKE', '%'.$search_term.'%')->get(); 

        return view('/admin/search/search_watches', compact('watches', 'search_term')); 
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
            $image = time() . '_' . $file->getClientOriginalName();
            //save the image
            $path = $file->storeAs('public/images', $image);
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
            'cover_img' => $image ?? '',
            'short_description' => $valid['short_description'],
            'long_description' => $valid['long_description']
        ]); 

        return redirect('/admin/watches_table')->with('success', 'Watch was successfully created'); 
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
        $categories = Category::all(); 
        $title = 'Edit Watch'; 

        return view('/admin/edit/edit_watch', compact('title', 'watch', 'categories')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $valid = $request->validate([
            'id' => 'required|integer',
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

        if(!empty($valid['cover_img'])){
        $file = $request->file('cover_img');
        //getting the orginal file name
        $image = time() . '_' . $file->getClientOriginalName();
        //save the image
        $path = $file->storeAs('public/images', $image);
    }
        $watch = Watch::find($valid['id']);
        $watch->SKU = $valid['SKU'];
        $watch->watch_name = $valid['watch_name'];
        $watch->in_stock = $valid['in_stock'] ?? 0;
        $watch->quantity = $valid['quantity'];
        $watch->price = $valid['price'];
        $watch->cost = $valid['cost'];
        $watch->material = $valid['material'];
        $watch->main_color = $valid['main_color'];
        $watch->movement = $valid['movement'];
        $watch->gender = $valid['gender'];
        $watch->category_id = $valid['category_id'] ?? 1;
        $watch->diameter = $valid['diameter'];
        $watch->strap_width = $valid['strap_width'];
        $watch->weight = $valid['weight'];
        $watch->water_resistant = $valid['water_resistant'];
        $watch->short_description = $valid['short_description'];
        $watch->long_description = $valid['long_description'];
        if(!empty($cover_img)) {
             $watch->cover_img = $image;
        }
        if($watch->save() ) {
            return redirect('/admin/watches_table')->with('success', 'Watch was successfully updated');
        }
        return redirect('/admin/watches_table')->with('error', 'There was a problem updating the watch');
    }

    /**
     * get the watch that was deleted
     * @return deleted watch
     */
    public function restoreWatch()
    {
        $watches = Watch::onlyTrashed()->get();
        $title = "Archive Table Watches";
        return view('/admin/restore/restore_watch', compact('watches', 'title')); 
    }

    /**
     * Restore the deleted watch
     * @param  int $id 
     * @return \Illuminate\Http\Response  
     */
    public function restoreBack($id)
    {
        Watch::withTrashed()
        ->where('id', $id)
        ->restore();

        if(isset(request()->id)){
            return redirect('/admin/restore/restore_watch')->with('success', 'Your watch was successfully restored. Go back and check the Watches Table'); 
        }
        return redirect('/admin/restore/restore_watch')->with('error', 'There was a problem restoring the watch.'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $valid = $request->validate([
            'id' => 'required|integer'
        ]);

        if( Watch::find($valid['id'] )->delete() ) {
            return back()->with('success', 'The watch has been deleted!');
        }
        return back()->with('error', 'There was a problem deleting that watch');
    }

}
