@extends('layouts/admin')


@section('content')

<div class="container" style="width: 50%;">
    <h1>{{ $title }}</h1>
    <p><a href="/admin/orders_table" class="btn btn-warning">Back to Orders</a></p>

    <form method="post" action="/admin/edit/edit_orders" enctype="multipart/form-data" >
        <input type="hidden" name="_method" value="PUT" />
        @csrf 
        @method('PUT')

        <div class="form-group">
            <input type="text" name="id" hidden class="form-control" id="id" value="{{ old('id', $order->id) }}">
        </div>

        <div class="form-group">
            <label for="user_id">Order ID: </label>
            <input type="text" name="user_id" disabled class="form-control" id="user_id" value="{{ old('user_id', $order->user_id) }}">
            
            @error('user_id')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>
      
        <div class="form-group">
            <label for="full_name">Full Name: </label>
            <input type="text" name="full_name" class="form-control" id="full_name" value="{{ old('full_name', $order->full_name) }}">
            @error('full_name')
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

        @if($order->HST == 0.00)
        <div class="form-group">
            <label for="GST">GST: </label>
            <input type="text" class="form-control" disabled name="GST" id="GST" value="{{ old('GST', $order->GST) }}">
            @error('GST')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>
        @else 
        <div class="form-group">
            <input type="text" class="form-control" hidden name="GST" id="GST" value="{{ old('GST', $order->GST) }}">
            @error('GST')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>
        @endif

        @if($order->HST == 0.00)
        <div class="form-group">
            <label for="PST">PST: </label>
            <input type="text" class="form-control" name="PST" id="PST" value="{{ old('PST', $order->PST) }}">
            @error('PST')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>
        @else
        <div class="form-group">
            <input type="text" class="form-control" hidden name="PST" id="PST" value="{{ old('PST', $order->PST) }}">
            @error('PST')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>
        @endif

        @if($order->PST != 0.00)
        <div class="form-group">
            <input type="text" class="form-control" hidden name="HST" id="HST" value="{{ old('HST', $order->HST) }}">
            @error('HST')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>
        @else
        <div class="form-group">
            <label for="HST">HST: </label>
            <input type="text" class="form-control" name="HST" id="HST" value="{{ old('HST', $order->HST) }}">
            @error('HST')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>
        @endif

        <div class="form-group">
            <label for="shipping">Shipping: </label>
            <input type="text" class="form-control" name="shipping" id="shipping" value="{{ old('shipping', $order->shipping) }}">
            @error('shipping')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="transaction_status">Transaction Status</label> <br />
            <input type="radio" name="transaction_status" value="0" {{ ($order->transaction_status=="0")? "checked" : "" }} />
            False &nbsp;
            <input type="radio" name="transaction_status" value="1" {{ ($order->transaction_status=="1")? "checked" : "" }} />
            True
        </div>

        <div class="form-group">
            <label for="total">Total: </label>
            <input type="text" class="form-control" name="total" id="total" value="{{ old('total', $order->total) }}">
            @error('total')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <p><button type="submit" class="btn btn-primary">Submit</button></p>
    </form>  <!-- /.form -->
</div> <!--  /.container -->

@stop 