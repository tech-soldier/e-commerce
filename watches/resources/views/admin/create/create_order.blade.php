@extends('layouts/admin')


@section('content')

<div class="container" style="width: 50%;">
    <h1>{{ $title }}</h1>
    <form method="post" action="/admin/create/create_order" enctype="multipart/form-data" >
      @csrf 
      <div class="form-group">
        <input type="text" name="order_id" hidden class="form-control" id="order_id" value="{{ old('order_id') }}">
        
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
        <label for="GST">GST: </label>
        <input type="text" class="form-control" name="GST" id="GST" value="{{ old('GST') }}">
        @error('GST')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>
      
      <div class="form-group">
        <label for="PST">PST: </label>
        <input type="text" class="form-control" name="PST" id="PST" value="{{ old('PST') }}">
        @error('PST')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="HST">HST: </label>
        <input type="text" class="form-control" name="HST" id="HST" value="{{ old('HST') }}">
        @error('HST')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="shipping">Shipping: </label>
        <input type="text" class="form-control" name="shipping" id="shipping" value="{{ old('shipping') }}">
        @error('shipping')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="transaction_status">Transaction Status</label> <br />
        <input type="radio" name="transaction_status" checked value="0" />
        False &nbsp;
        <input type="radio" name="transaction_status" value="1" />
        True
      </div>

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