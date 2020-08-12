@extends('layouts/admin')


@section('content')

<div class="container" style="width: 50%;">
    <h1>{{ $title }}</h1>
    <p><a href="/admin/users_table" class="btn btn-warning">Back to Users Table</a></p>

    <form method="post" action="/admin/create/create_user" enctype="multipart/form-data" >

        @csrf 
        <div class="form-group">
            <label for="id">User ID: </label>
            <input type="text" name="id" disabled class="form-control" id="id" value="{{ old('id') }}">
            @error('id')
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
            <label for="last_name">Last Name: </label>
            <input type="text" class="form-control" name="last_name" id="last_name" value="{{ old('last_name') }}">
            @error('last_name')
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
            <label for="email">Email: </label>
            <input type="text" name="email" class="form-control" id="email" value="{{ old('email') }}">
            @error('email')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="city">City: </label>
            <input type="text" class="form-control" name="city" id="city" value="{{ old('city') }}">
            @error('city')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="province">Province: </label>
            <input type="text" class="form-control" name="province" id="province" value="{{ old('province') }}">
            @error('province')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="country">Country: </label>
            <input type="text" class="form-control" name="country" id="country" value="{{ old('country') }}">
            @error('country')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="postal_code">Postal Code: </label>
            <input type="text" class="form-control" name="postal_code" id="postal_code" value="{{ old('postal_code') }}">
            @error('postal_code')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone_number">Phone Number: </label>
            <input type="text" class="form-control" name="phone_number" id="phone_number" value="{{ old('phone_number') }}">
            @error('phone_number')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password: </label>
            <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}">
            @error('password')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <img src="{{ !empty($user->image) ? '/storage/images/' . $user->image : '/storage/images/profile_placeholder.png' }}" alt="profile image" width="200">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" name="image" id="image" value="{{ old('image') }}" />
            @error('image')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>  

        <div class="form-group">
            <label for="is_admin">Is Admin</label> <br />
            <input type="radio" name="is_admin" value="0" checked />
            False &nbsp;
            <input type="radio" name="is_admin" value="1"  />
            True
        </div>

        <p><button type="submit" class="btn btn-primary">Submit</button></p>

    </form>

</div>

@stop 
