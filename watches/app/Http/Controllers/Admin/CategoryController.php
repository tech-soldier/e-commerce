<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //display a view all of our catargories


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create A New Category'; 

        $categories = Category::all(); 

        return view('/admin/create/create_category', compact('categories', 'title')); 
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
            'category_name' => 'required|string|max:255'
        ]); 

        Category::create([
            'category_name' => $valid['category_name']
        ]); 

        return redirect('/admin/categories_table')->with('success', 'Category was successfully created'); 

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
        $categories = Category::find($id);
        $title = 'Edit Categories'; 
        return view('/admin/edit/edit_categories', compact('title', 'categories')); 
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
            'id' => 'required|integer',
            'category_name' => 'required|string|max:255'
          
        ]);

        $category = Category::find($valid['id']);

        if($category->save() ) {
        return redirect('/admin/categories_table')->with('success', 'Your category is successfully updated');
      }

      return redirect('/admin/categories_table')->with('error', 'There was a problem updating the category');
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
