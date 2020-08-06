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
        $order = Order::all(); 
        $user = User::all();
        $watch = Watch::all(); 
        $taxes = Tax::all(); 


        return view('/admin/create/create_order', compact('title', 'order', 'taxes'));
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
            'tax_id' => 'required|integer',                                                         
            'total' => "required|regex:/^\d+(\.\d{1,2})?$/"                                   
        ]); 


         Order::create([
            'user_id' => $valid['user_id'],                                                       
            'first_name' => $valid['first_name'],                                                      
            'email'=> $valid['email'],                                                 
            'billing_address' => $valid['billing_address'],                                              
            'shipping_address' => $valid['shipping_address'],
            'subtotal' => $valid['subtotal'],                                              
            'tax_id' => $valid['tax_id'],                                                         
            'total' => $valid['total']
         ]); 

         return redirect('/admin/orders_table')->with('success', 'Order was successfully created'); 
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
        $order=Order::find($id);
        $title = 'Edit Order'; 
        return view('/admin/edit/edit_orders', compact('title', 'order')); 
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

            'user_id' => 'required|integer',
            'watch_id' => 'required|integer', 
            'first_name' => 'required|string|max:255', 
            'email_address' => 'required|string|max:255', 
            'billing_address' => 'required|string|max:255', 
            'shipping_address' => 'required|string|max:255', 
            'subtotal' => 'reqired|integer', 
            'GST' => 'required|integer', 
            'PST' => 'required|integer', 
            'total' => 'required|integer', 
         ]);   

        if(!empty($valid['watch_id'])){

        $file = $request->file('watch_id');
        //getting the orginal file name
        $watch_id = time() . '_' . $file->getClientOriginalNAme();

        //save the watch_id
        $path = $file->storeAs('', $watch_id);
    }

    $order = Order::find($valid['user_id']);
    $order->watch_id = $valid['watch_id'];
    $order->first_name = $valid['first_name'];
    $order->email_address = $valid['email_address'];
    $order->billing_address = $valid['billing_address'];
    $order->subtotal = $valid['subtotal'];
    $order->GST = $valid['GST'];
    $order->PST = $valid['PST'];
    $order->total = $valid['total'];
    if(!empty($watch_id)) {
         $watch->watch_id = '/watch_id/' .$watch_id;
    }

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
    public function destroy($id)
    {
        //
    }
}
