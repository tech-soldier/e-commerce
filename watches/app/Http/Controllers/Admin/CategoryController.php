<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;


class CategoryController extends Controller
{
    /**
     * search query for category 
     * @return array view of search terms specified 
     */
    public function search()
    {
        $search_term = $_GET['query']; 
        $categories = Category::where('category_name', 'LIKE', '%'.$search_term.'%')->get(); 

        return view('/admin/search/search_categories', compact('categories', 'search_term')); 
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $title = 'Edit Categories'; 

        return view('/admin/edit/edit_categories', compact('title', 'category')); 
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
        // validate form submition 
        $valid = $request->validate([
            'category_name' => 'required|string|min:2|max:255'   
        ]);

        // get the category and update its name
        $category = Category::find($request['id']);
        $category->category_name = $valid['category_name'];

        // save into database and redirect accordingly with appropriate message
        if($category->save() ) {
            return redirect('/admin/categories_table')->with('success', 'Your category is successfully updated');
        }
        return redirect('/admin/categories_table')->with('error', 'There was a problem updating the category'); 
    }

    /**
     * get the category that was deleted
     * @return deleted category
     */
    public function restoreCategory()
    {
        $categories = Category::onlyTrashed()->get();
        $title = "Archive Categories";

        return view('/admin/restore/restore_category', compact('categories', 'title'));
    }

    /**
     * Restore the deleted category
     * @param  int $id 
     * @return \Illuminate\Http\Response  
     */
    public function restoreBack($id)
    {
        Category::withTrashed()
        ->where('id', $id)
        ->restore();

        if(isset(request()->id)){
            return redirect('/admin/restore/restore_category')->with('success', 'Your Category was successfully restored. Go back and check the Categories Table'); 
        }
        return redirect('/admin/restore/restore_category')->with('error', 'There was a problem restoring the category.'); 
    }

    /* Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $valid = $request->validate([
            'id' => 'required|integer'
        ]);

        if( Category::find($valid['id'] )->delete() ) {
            return back()->with('success', 'The category has been deleted!');
        }
        return back()->with('error', 'There was a problem deleting that category');
    }


}
