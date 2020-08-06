<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Admin; 

class AdminController extends Controller
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
        $data['title'] = 'Create A New Admin'; 

        $data['admins'] = Admin::all(); 

        return view('/admin/create/create_admin', $data); 
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
            'admin_email' => 'required|string|max:255', 
            'password'  => 'required|string|max:255'
        ]); 

        Admin::create([
            'admin_email' => $valid['admin_email'], 
            'password' => $valid['password']
        ]); 

        return redirect('/admin/admin_table')->with('success', 'Admin was successfully created'); 

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
    public function destroy (Request $request)
    {
        // // validated -- make sure id is passed in request
        // $valid = $request->validate([
        //     'customer_id' => 'required|integer'
        // ]);

        // // Try to delete the post and send the user back to the posts 
        // // index view with a flash message
        // if( User::find($valid['customer_id'])->delete() ) {
        //     return back()->with('success', 'Post has been deleted!');
        // }
        // return back()->with('error', 'There was a problem deleting that post');
    }
}
