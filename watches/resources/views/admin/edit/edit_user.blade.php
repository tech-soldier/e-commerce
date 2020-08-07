@extends('layouts/admin')

@section('content')

<div class="card my-r">
    
    <div class="card-header">
        <h1 class="card-title">{{ $title }}</h1>
    </div>
    
    <div class="card-body">
    
        <p><a href="/admin/orders_table" class="btn btn-warning class=previous">&laquo; Back</a></p>
        
        <form class="form" action="/admin/orders_table" method="post" enctype="multipart/form-data">

           <input type="hidden" name="id" value="{{ $order->id }}" />


           @csrf
           @method('PUT')

           <div class="form-group">
           
                <label for="user_id">User ID</label>
                 <input id="user_id" class="form-control" name="user_id" value="{{ $order->user_id }}" />
                @error('user_id')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>
           
           <div class="form-group">
           
                <label for="watch_id">Watch ID</label>
                 <input id="watch_id" class="form-control" name="watch_id" value="{{ $order->watch_id }}" />
                @error('watach_id')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>
            
            <div class="form-group">
           
                <label for="first_name">First Name</label>
                 <input id="first_name" class="form-control" name="first_name" value="{{  $order->first_name}}" />
                @error('first_name')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>
            
            <div class="form-group">
           
                <label for="email">Email</label>
                 <input id="email" class="form-control" name="email" value="{{ $order->email }}" />
                @error('email')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>
            
            <div class="form-group">
           
            <label for="billing_address">Billing Address</label>
                 <input id="billing_address" class="form-control" name="billing_address" value="{{ $order->billing_address }}" />
                @error('billing_address')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>
            
            <div class="form-group">
           
            <label for="shipping_address">Shipping Address</label>
                 <input id="shipping_address" class="form-control" name="shipping_address" value="{{ $order->shipping_address }}" />
                @error('pshipping_address')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>
            
             <div class="form-group">
           
            <label for="sub_total">Sub Total</label>
                 <input id="sub_total" class="form-control" name="sub_total" value="{{ $order->sub_total }}" />
                @error('sub_total')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>

            <div class="form-group">
           
            <label for="GST">GST</label>
                 <input id="GST" class="form-control" name="GST" value="{{ $order->GST }}" />
                @error('GST')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>

            <div class="form-group">
           
            <label for="PST">PST</label>
                 <input id="PST" class="form-control" name="PST" value="{{ $order->PST }}" />
                @error('PST')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>

            <div class="form-group">
           
            <label for="total">Total</label>
                 <input id="total" class="form-control" name="total" value="{{ $order->total }}" />
                @error('total')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-primary">Submit</button>

            </div>

          </form>
        </div>
    </div>


@stop           
           
          
         
        
       
      
     
    
   
  
 


















