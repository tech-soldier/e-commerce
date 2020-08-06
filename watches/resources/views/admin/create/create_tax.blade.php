@extends('layouts/admin')


@section('content')

<div class="container" style="width: 50%;">
    <h1>{{ $title }}</h1>
    <form method="post" action="/admin/create/create_tax" enctype="multipart/form-data" >
      @csrf 
      <div class="form-group">
        <label for="tax_id">Tax ID: </label>
        <input type="text" name="tax_id" disabled class="form-control" id="tax_id" value="{{ old('tax_id') }}">
        @error('tax_id')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>
       <div class="form-group">
        <label for="province">Province: </label>
        <input type="text" name="province" class="form-control" id="province" value="{{ old('province') }}">
        @error('province')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>
      
       <div class="form-group">
        <label for="GST">GST: </label>
        <input type="text" name="GST" class="form-control" id="GST" value="{{ old('GST') }}">
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

      <p><button type="submit" class="btn btn-primary">Submit</button></p>
    </form>
</div>

@stop 