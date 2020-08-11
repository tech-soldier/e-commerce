<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Admin; 

class AdminController extends Controller
{
    /**
     * search query for admin 
     * @return view of search terms specified 
     */
    public function search()
    {
        $search_term = $_GET['query']; 
        $admin = Order::where('id', 'LIKE', '%'.$search_term.'%')->orWhere('billing_address', 'LIKE', '%'.$search_term.'%')->orWhere('shipping_address', 'LIKE', '%'.$search_term.'%')->get(); 

        return view('/admin/search/search_orders', compact('admin', 'search_term')); 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('watches')->get();
        print_r($data);
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
            'admin_email' => 'required|email|unique:admins,admin_email', 
            'password'  => 'required|string|max:255'
        ]); 

        Admin::create([
            'admin_email' => $valid['admin_email'], 
            'password' => password_hash($valid['password'], PASSWORD_DEFAULT)
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
        // 
    }
}
