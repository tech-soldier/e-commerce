@extends('layouts/admin')


@section('content')

<div class="container" style="width: 50%;">
    <h1>{{ $title }}</h1>
    <p><a href="/admin/taxes_table" class="btn btn-warning">Back to Tax Table</a></p>

    <form method="post" action="/admin/edit/edit_tax" enctype="multipart/form-data" >
        <input type="hidden" name="_method" value="PUT" />
        @csrf 
        @method('PUT')
        <div class="form-group">
            <input type="text" name="id" hidden class="form-control" id="id" value="{{ old('id', $taxes->id ) }}">
            @error('id')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="province">Province: </label>
            <input type="text" name="province" disabled class="form-control" id="province" value="{{ old('province', $taxes->province) }}">
            @error('province')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>
      

        @if($taxes->province == 'Manitoba' || $taxes->province == 'Saskatchewan' || $taxes->province == 'British  Columbia' || $taxes->province == 'Quebec' || $taxes->province == 'Alberta' || $taxes->province == 'Nunavut' ||   $taxes->province == 'Yukon')
        <div class="form-group">
            <label for="GST">GST: </label>
            <input type="text" name="GST" disabled class="form-control" id="GST" value="{{ old('GST', $taxes->GST) }}">
            @error('GST')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>
        @else 
        <div class="form-group">
            <input type="text" name="GST" disabled class="form-control" hidden id="GST" value="{{ old('GST', $taxes->GST) }}">
            @error('GST')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>
        @endif

        @if($taxes->province == 'Manitoba' || $taxes->province == 'Saskatchewan' || $taxes->province == 'British Columbia' || $taxes->province == 'Alberta' || $taxes->province == 'New Brunswick' || $taxes->province ==     'Northwest Territories' || $taxes->province == 'Nunavut' || $taxes->province == 'Yukon')
        <div class="form-group">
            <label for="PST">PST: </label>
            <input type="text" class="form-control" name="PST" id="PST" value="{{ old('PST', $taxes->PST) }}">
            @error('PST')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>
        @elseif($taxes->province == 'Quebec')
      <div class="form-group">
            <label for="PST">*QST: </label>
            <input type="text" class="form-control" name="PST" id="PST" value="{{ old('PST', $taxes->PST) }}">
            @error('PST')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>
        @else 
        <div class="form-group">
            <input type="text" class="form-control" hidden name="PST" id="PST" value="{{ old('PST', $taxes->PST) }}">
            @error('PST')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>
        @endif

        @if($taxes->province == 'Ontario' || $taxes->province == 'Prince Edward Island' || $taxes->province == 'Nova  Scotia' || $taxes->province == 'Newfoundland and Labrador' || $taxes->province == 'New Brunswick')
        <div class="form-group">
            <label for="HST">HST: </label>
            <input type="text" class="form-control" name="HST" id="HST" value="{{ old('HST', $taxes->HST) }}">
            @error('HST')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>
        @else 
        <div class="form-group">
            <input type="text" class="form-control" hidden name="HST" id="HST" value="{{ old('HST', $taxes->HST) }}">
            @error('HST')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>
        @endif

        <p><button type="submit" class="btn btn-primary">Submit</button></p>
    </form>
</div>

@stop 