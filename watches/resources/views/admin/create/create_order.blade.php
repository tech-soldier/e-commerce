@extends('layouts/admin')


@section('content')

<div class="container" style="width: 50%;">
    <h1>{{ $title }}</h1>
    <form method="post" action="/admin/create/create_order" enctype="multipart/form-data" >
      @csrf 
      <div class="form-group">
        <label for="order_id">Order ID: </label>
        <input type="text" name="order_id" disabled class="form-control" id="order_id" value="{{ old('order_id') }}">
        @error('order_id')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>
       <div class="form-group">
        <label for="user_id">User ID: <span style="color:#cfcfcf">(Your personal User ID)</span> </label>
        <input type="text" name="user_id" class="form-control" id="user_id" value="{{ old('user_id') }}">
        @error('user_id')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>
      
       <div class="form-group">
        <label for="first_name">First Name: </label>
        <input type="text" name="first_name" class="form-control" id="first_name" value="{{ old('first_name') }}">
        @error('first_name')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

       <div class="form-group">
        <label for="email">Email: </label>
        <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">
        @error('email')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="billing_address">Billing Address: </label>
        <input type="text" class="form-control" name="billing_address" id="billing_address" value="{{ old('billing_address') }}">
        @error('billing_address')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="shipping_address">Shipping Address: </label>
        <input type="text" class="form-control" name="shipping_address" id="shipping_address" value="{{ old('shipping_address') }}">
        @error('shipping_address')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="subtotal">Subtotal: </label>
        <input type="text" class="form-control" name="subtotal" id="subtotal" value="{{ old('subtotal') }}">
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
      @error('category_name')
            <span class="alert-danger">{{ $message }}</span>
      @enderror

      <div class="form-group">
        <label for="total">Total: </label>
        <input type="text" class="form-control" name="total" id="total" value="{{ old('total') }}">
        @error('total')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

      <p><button type="submit" class="btn btn-primary">Submit</button></p>
    </form>
</div>

@stop 