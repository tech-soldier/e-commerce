<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Order; 
use App\Watch; 
use App\User; 


class OrderController extends Controller
{
    /**
     * search query for orders 
     * @return array view of search terms specified 
     */
    public function search()
    {
        $search_term = $_GET['query']; 
        $orders = Order::where('id', 'LIKE', '%'.$search_term.'%')->orWhere('billing_address', 'LIKE', '%'.$search_term.'%')->orWhere('shipping_address', 'LIKE', '%'.$search_term.'%')->get(); 

        return view('/admin/search/search_orders', compact('orders', 'search_term')); 
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

        return view('/admin/create/create_order', compact('title', 'orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if((isset($request->GST) && isset($request->HST)) || (isset($request->PST) && isset($request->HST)) ) {
            return redirect('/admin/create/create_order')->with('error', 'Only either GST and PST or HST.'); 
        }

        $valid = $request->validate([      
            'user_id' => 'required|integer',                                                       
            'full_name' => 'required|string|max:255',                                                      
            'email' => 'required|email',                                                 
            'billing_address' => 'required|string|max:255',                                              
            'shipping_address' => 'required|string|max:255',
            'subtotal' => "required|regex:/^\d+(\.\d{1,2})?$/",     
            'GST' => "nullable|regex:/^\d+(\.\d{1,2})?$/",   
            'PST' => "nullable|regex:/^\d+(\.\d{1,2})?$/",  
            'HST' => "nullable|regex:/^\d+(\.\d{1,2})?$/",  
            'shipping' => "required|regex:/^\d+(\.\d{1,2})?$/", 
            'transaction_status' => 'required|integer', 
            'total' => "required|regex:/^\d+(\.\d{1,2})?$/"                                   
        ]); 

        Order::create([
            'user_id' => $valid['user_id'],                                                       
            'full_name' => $valid['full_name'],                                                      
            'email'=> $valid['email'],                                                 
            'billing_address' => $valid['billing_address'],                                              
            'shipping_address' => $valid['shipping_address'],
            'subtotal' => $valid['subtotal'], 
            'GST' => $valid['GST'] ?? 0.05, 
            'PST' => $valid['PST'] ?? 0.00,
            'HST' => $valid['HST'] ?? 0.00, 
            'shipping' => $valid['shipping'], 
            'transaction_status' => $valid['transaction_status'] ?? 0,                                               
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
        
        return view('/admin/edit/edit_orders', compact('title', 'order')); 
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
            'full_name' => 'required|string|max:255',                                                      
            'email' => 'required|email',                                                 
            'billing_address' => 'required|string|max:255',                                              
            'shipping_address' => 'required|string|max:255',
            'subtotal' => "required|regex:/^\d+(\.\d{1,2})?$/",     
            'PST' => "nullable|regex:/^\d+(\.\d{1,2})?$/",  
            'HST' => "nullable|regex:/^\d+(\.\d{1,2})?$/",  
            'shipping' => "required|regex:/^\d+(\.\d{1,2})?$/", 
            'transaction_status' => 'required|integer', 
            'total' => "required|regex:/^\d+(\.\d{1,2})?$/"
         ]);   
    
            $order = Order::find($valid['id']);
            $order->full_name = $valid['full_name'];
            $order->email = $valid['email'];
            $order->billing_address = $valid['billing_address'];
            $order->shipping_address = $valid['shipping_address'];
            $order->subtotal = $valid['subtotal'];
            $order->PST = $valid['PST'] ?? 0.00; 
            $order->HST = $valid['HST'] ?? 0.00;
            $order->shipping = $valid['shipping']; 
            $order->transaction_status = $valid['transaction_status'] ?? 0; 
            $order->total = $valid['total'];
       
        if($order->save() ) {
            return redirect('/admin/orders_table')->with('success', 'Your order was successfully updated');
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
            return back()->with('success', 'The order has been deleted!');
        }
        return back()->with('error', 'There was a problem deleting that order');
    }

    
}
