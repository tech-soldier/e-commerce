@extends('layouts/admin')


@section('content')

<div class="container" style="width: 50%;">
    <h1>{{ $title }}</h1>
    <p><a href="/admin/taxes_table" class="btn btn-warning">Back to Tax Table</a></p>

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

      <div class="form-group">Choose Either: 
        <button id="pst" class="btn btn-secondary">PST</button>
        <span id="or">OR</span>
        <button id="hst" class="btn btn-secondary">HST</button>
      </div>
      
       <div class="form-group pst-div">
        <label for="GST">GST: </label>
        <input type="text" name="GST" class="form-control" id="GST" value="{{ old('GST') }}">
        @error('GST')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

       <div class="form-group pst-div">
        <label for="PST">PST: </label>
        <input type="text" class="form-control" name="PST" id="PST" value="{{ old('PST') }}">
        @error('PST')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group" id="hst-div">
        <label for="HST">HST: </label>
        <input type="text" class="form-control" name="HST" id="HST" value="{{ old('HST') }}">
        @error('HST')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

      <p><button type="submit" class="btn btn-primary">Submit</button></p>
    </form>
</div>

<script>
$(document).ready(function(){
  $("#hst-div").hide();
  $('.pst-div').hide(); 
  $("#pst").click(function(){
    event.preventDefault();
    $("#hst-div").hide('slow');
    $('.pst-div').show('slow'); 
    $('#show').hide('slow'); 

  });
  $("#hst").click(function(){
    event.preventDefault();
    $("#hst-div").show('slow');
    $('.pst-div').hide('slow'); 
    $('#hide').hide('slow'); 

  });
});
</script>

@stop 