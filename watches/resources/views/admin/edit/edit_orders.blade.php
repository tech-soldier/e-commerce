@extends('layouts/admin')

@section('content')

<div class="container" style="width: 50%;">
    <h1>{{ $title }}</h1>
  <p><a href="/admin/orders_table" class="btn btn-warning class=previous">&laquo; Back</a></p>

   <form class="form" action="/admin/edit/orders_table" method="post" enctype="multipart/form-data">

         


           @csrf

           @method('PUT')
   
      <div class="form-group">
        <label for="id">Order ID: </label>
        <input type="hidden" name="id"  class="form-control" id="id" value="{{ old('id', $order->id) }}">
        
      </div>

       <div class="form-group">
        <label for="user_id">User ID: <span style="color:#cfcfcf">(Your personal User ID)</span> </label>
        <input type="text" name="user_id" class="form-control" id="user_id" value="{{ old('user_id', $order->user_id) }}">
        @error('user_id')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>
      
        <div class="form-group">
        <label for="first_name">First Name: </label>
        <input type="text" name="first_name" class="form-control" id="first_name" value="{{ old('first_name', $order->first_name) }}">
        @error('first_name')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

       <div class="form-group">
        <label for="email">Email: </label>
        <input type="text" class="form-control" name="email" id="email" value="{{ old('email', $order->email) }}">
        @error('email')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="billing_address">Billing Address: </label>
        <input type="text" class="form-control" name="billing_address" id="billing_address" value="{{ old('billing_address', $order->billing_address) }}">
        @error('billing_address')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="shipping_address">Shipping Address: </label>
        <input type="text" class="form-control" name="shipping_address" id="shipping_address" value="{{ old('shipping_address', $order->shipping_address) }}">
        @error('shipping_address')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="subtotal">Subtotal: </label>
        <input type="text" class="form-control" name="subtotal" id="subtotal" value="{{ old('subtotal', $order->subtotal) }}">
        @error('subtotal')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="tax_id">Tax: <span style="color:#cfcfcf">(Choose Province for GST% + PST% )</span></label>
        <select class="form-control" name="tax_id">
            <option value="">Select a Province</option>
            @foreach($taxes as $tax) 
            <option 
                @if($tax->id == old('tax_id'))
                selected
                @endif
                value="{{ $tax->tax_id }}">{{ ucfirst($tax->province) }}</option>
            @endforeach
        </select>
        @error('tax_id')
            <span class="alert-danger">{{ $message }}</span>
        @enderror

      </div>
      


      <div class="form-group">
        <label for="total">Total: </label>
        <input type="text" class="form-control" name="total" id="total" value="{{ old('total', $order->total) }}">
        @error('total')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

      <p><button type="submit" class="btn btn-primary">Submit</button></p>
    </form>

     {{ dd($errors)}}
</div>

@stop 