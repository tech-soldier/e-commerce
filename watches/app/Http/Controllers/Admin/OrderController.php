<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Tax; 
use App\Order; 
use App\Watch; 
use App\User; 


class OrderController extends Controller
{
    public function search()
    {
        $search_term = $_GET['query']; 
        $orders = Order::where('id', 'LIKE', '%'.$search_term.'%')->orWhere('billing_address', 'LIKE', '%'.$search_term.'%')->orWhere('shipping_address', 'LIKE', '%'.$search_term.'%')->get(); 

        return view('/admin/search/search_orders', compact('orders', 'search_term')); 
    }


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
        $title = 'Create A New Order'; 
        $orders = Order::all(); 
        $user = User::all();
        $watch = Watch::all(); 
        $taxes = Tax::all(); 


        return view('/admin/create/create_order', compact('title', 'orders', 'taxes'));
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
            'user_id' => 'required|integer',                                                       
            'first_name' => 'required|string|max:255',                                                      
            'email' => 'required|email',                                                 
            'billing_address' => 'required|string|max:255',                                              
            'shipping_address' => 'required|string|max:255',
            'subtotal' => "required|regex:/^\d+(\.\d{1,2})?$/",     
            'GST' => "required|regex:/^\d+(\.\d{1,2})?$/",   
            'PST' => "required|regex:/^\d+(\.\d{1,2})?$/",  
            'HST' => "required|regex:/^\d+(\.\d{1,2})?$/",  
            'shipping' => "required|regex:/^\d+(\.\d{1,2})?$/", 
            'transaction_status' => 'required|integer', 
            'total' => "required|regex:/^\d+(\.\d{1,2})?$/"                                   
        ]); 


         Order::create([
            'user_id' => $valid['user_id'],                                                       
            'first_name' => $valid['first_name'],                                                      
            'email'=> $valid['email'],                                                 
            'billing_address' => $valid['billing_address'],                                              
            'shipping_address' => $valid['shipping_address'],
            'subtotal' => $valid['subtotal'], 
            'GST' => $valid['GST'], 
            'PST' => $valid['PST'],
            'HST' => $valid['HST'], 
            'shipping' => $valid['shipping'], 
            'transaction_status' => $valid['transaction_status'],                                               
            'total' => $valid['total']
         ]); 

         return redirect('/admin/orders_table')->with('success', 'Order was successfully created'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Order';
        $order = Order::find($id); 
        $user = User::all();
        $watch = Watch::all(); 
        $taxes = Tax::all();
        return view('/admin/edit/edit_orders', compact('title', 'order', 'user', 'watch', 'taxes')); 
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
            'user_id' => 'required|integer',                                                       
            'first_name' => 'required|string|max:255',                                                      
            'email' => 'required|email',                                                 
            'billing_address' => 'required|string|max:255',                                              
            'shipping_address' => 'required|string|max:255',
            'subtotal' => "required|regex:/^\d+(\.\d{1,2})?$/",                                              
            'tax_id' => 'required|integer',                                                         
            'total' => "required|regex:/^\d+(\.\d{1,2})?$/"   
         ]);   
         dd($valid);
    

        $order = Order::find($valid['id']);
        $order->first_name = $valid['first_name'];
        $order->user_id = $valid['user_id'];
        $order->email = $valid['email'];
        $order->billing_address = $valid['billing_address'];
        $order->shipping_address = $valid['shipping_address'];
        $order->subtotal = $valid['subtotal'];
        $order->tax_id = $valid['tax_id'];
        $order->total = $valid['total'];
       

        if($order->save() ) {
            return redirect('/admin/orders_table')->with('success', 'Your order is successfully updated');

        }

        return redirect('/admin/orders_table')->with('error', 'There was a problem updating the order');

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
        
        if( Order::find($valid['id'] )->delete() ) {
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
