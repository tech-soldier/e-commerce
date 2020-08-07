<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User; 

class UserController extends Controller
{

    public function search()
    {
        $search_term = $_GET['query']; 
        $users = User::where('first_name', 'LIKE', '%'.$search_term.'%')->orWhere('last_name', 'LIKE', '%'.$search_term.'%')->orWhere('email', 'LIKE', '%'.$search_term.'%')->get(); 

        return view('/admin/search/search_users', compact('users', 'search_term')); 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create A New User'; 

        $users = User::all(); 

        return view('/admin/create/create_user', compact('title', 'users')); 
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
            'email' => 'required|email|unique:users,email', 
            'password' => 'required|string|max:255',
            'first_name' => 'required|string|max:255', 
            'last_name' => 'required|string|max:255', 
            'billing_address' => 'required|string|max:255', 
            'city' => 'required|string|max:255', 
            'province' => 'required|string|max:255', 
            'country' => 'required|string|max:255', 
            'postal_code' => 'required|string|max:6', 
            'phone_number' => 'required|regex:/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/'
        ]); 

        User::create([
            'email' => $valid['email'], 
            'password' => password_hash($valid['password'], PASSWORD_DEFAULT),
            'first_name' => $valid['first_name'], 
            'last_name' => $valid['last_name'], 
            'billing_address' => $valid['billing_address'], 
            'city' => $valid['city'], 
            'province' => $valid['province'], 
            'country' => $valid['country'], 
            'postal_code' => $valid['postal_code'], 
            'phone_number' => $valid['phone_number']
        ]); 

        return redirect('/admin/users_table')->with('success', 'User was successfully created'); 
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
    public function destroy(Request $request)
    {
        $valid = $request->validate([
            'id' => 'required|integer'
        ]);
        
        if( User::find($valid['id'] )->delete() ) {
            return back()->with('success', 'The record has been deleted!');
        }
        return back()->with('error', 'There was a problem deleting that record');
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
}
