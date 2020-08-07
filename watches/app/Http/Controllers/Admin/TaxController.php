<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Tax; 

class TaxController extends Controller
{

    public function search()
    {
        $search_term = $_GET['query']; 
        $taxes = Tax::where('province', 'LIKE', '%'.$search_term.'%')->orWhere('PST', 'LIKE', '%'.$search_term.'%')->get(); 

        return view('/admin/search/search_taxes', compact('taxes', 'search_term')); 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create A New Tax'; 

        $taxes = Tax::all(); 

        return view('/admin/create/create_tax', compact('title', 'taxes')); 
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
            'province' => 'required|string|max:255',
            'PST' => "required|regex:/^\d+(\.\d{1,2})?$/"
        ]); 

        Tax::create([
            'province' => $valid['province'],  
            'PST' => $valid['PST']

        ]); 

        return redirect('/admin/taxes_table')->with('success', 'PST was successfully created'); 
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
