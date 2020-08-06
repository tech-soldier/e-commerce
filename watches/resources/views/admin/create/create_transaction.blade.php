@extends('layouts/admin')


@section('content')

<div class="container" style="width: 50%;">
    <h1>{{ $title }}</h1>
    <form method="post" action="/admin/create/create_transaction" enctype="multipart/form-data" >
      @csrf 
      <div class="form-group">
        <label for="transaction_id">Transaction ID: </label>
        <input type="text" name="transaction_id" disabled class="form-control" id="transaction_id" value="{{ old('transaction_id') }}">
        @error('transaction_id')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>
      
       <div class="form-group">
        <label for="order_id">Order ID: </label>
        <input type="text" name="order_id" class="form-control" id="order_id" value="{{ old('order_id') }}">
        @error('order_id')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>
      
       <div class="form-group">
        <label for="transaction_code">Transaction Code: </label>
        <input type="text" name="transaction_code" class="form-control" id="transaction_code" value="{{ old('transaction_code') }}">
        @error('transaction_code')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="transaction">Transaction: </label>
        <input type="text" class="form-control" name="transaction" id="transaction" value="{{ old('transaction') }}">
        @error('transaction')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

      <p><button type="submit" class="btn btn-primary">Submit</button></p>
    </form>
</div>

@stop 