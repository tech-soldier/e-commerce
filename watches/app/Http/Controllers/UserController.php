<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $user=User::find($id);
        $title = 'Edit Profile';

        return view('/profile_edit', compact('user','title'));
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
        // validate the record beeing updated
        $valid = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'billing_address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'province' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'postal_code' => 'nullable|string|max:255',
            'email' => 'required|string|max:255',
            'phone_number' => 'nullable|string|min:7|max:32',
            //'category_id' => 'required|integer',
            //'image' => 'nullable|image',            
            'id' => 'required|integer'
        ]);

        // if image provided save the file in storage and get the name of the image
        /*if(!empty($valid['image'])){
            $file = $request->file('image'); // get the uploaded file
            $image = time() . '_' . $file->getClientOriginalName(); //get the original filename
            $path = $file->storeAs('images', $image); // save the image (link to storage added) 
        }*/

        // find the record in database
        $user = User::find($valid['id']);

        // assign new values (validated)
        $user->first_name = $valid['first_name'];
        $user->last_name = $valid['last_name'];
        $user->billing_address = $valid['billing_address'];
        /*if(!empty($image)){
            $user->image = $image; // saving just a filename            
        }*/
        $user->city = $valid['city'];
        $user->province = $valid['province'];
        $user->country = $valid['country'];
        $user->postal_code = $valid['postal_code'];
        $user->email = $valid['email'];
        $user->phone_number = $valid['phone_number'];

        // if changes were made redirect to list view with success message
        if( $user->save()){
            return redirect('/profile')->with('success', 'Your profile has been successfully updated!');
        }

        // something went wrong, redirect to list view with error message
        return redirect('/profile')->with('error', 'There was a problem updating your profile');        
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
