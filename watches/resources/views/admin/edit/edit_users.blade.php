@extends('layouts/admin')


@section('content')

<div class="container" style="width: 50%;">
    <h1>{{ $title }}</h1>
    <p><a href="/admin/users_table" class="btn btn-warning">Back to users</a></p>

    <form method="post" action="/admin/edit/edit_users" enctype="multipart/form-data" >

        <div class="form-group">
            <label for="id">User ID: </label>
            <input type="hidden" name="id" class="form-control" id="id" value="{{ old('id', $user->id) }}">
            
        </div>

        <div class="form-group">
            <label for="first_name">First Name: </label>
            <input type="text" name="first_name" class="form-control" id="first_name" value="{{ old('first_name', $user->first_name) }}">
            @error('first_name')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="last_name">Last Name: </label>
            <input type="text" class="form-control" name="last_name" id="last_name" value="{{ old('last_name', $user->last_name) }}">
            @error('last_name')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="billing_address">Billing Address: </label>
            <input type="text" class="form-control" name="billing_address" id="billing_address" value="{{ old('billing_address', $user->billing_address) }}">
            @error('billing_address')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email: </label>
            <input type="text" name="email" class="form-control" id="email" value="{{ old('email', $user->email) }}">
            @error('email')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="city">City: </label>
            <input type="text" class="form-control" name="city" id="city" value="{{ old('city', $user->city) }}">
            @error('city')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
                <label for="province">Province:</label><br />
                <input id="province" name="province" class="form-control" value="{{ old('province', $user->province) }}" />
                @error('province')
                    <span class="error"> {{ $message }}</span>
                @enderror
            </div>

        <div class="form-group">
            <label for="country">Country: </label>
            <input type="text" class="form-control" name="country" id="country" value="{{ old('country', $user->country) }}">
            @error('country')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="postal_code">Postal Code: </label>
            <input type="text" class="form-control" name="postal_code" id="postal_code" value="{{ old('postal_code', $user->postal_code) }}">
            @error('postal_code')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone_number">Phone Number: </label>
            <input type="text" class="form-control" name="phone_number" id="phone_number" value="{{ old('phone_number', $user->phone_number) }}">
            @error('phone_number')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">     
            <label for="image">User Image</label> <br />
                @if(!empty($user->image))
                    <img src="/storage/images/{{ $user->image }}" alt="{{ $user->name }}" width="200" />
                @endif
            <input type="file" class="form-control-file" id="image" name="image" value="{{ old('image', $user->image) }}" />
            @error('image')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="is_admin">Is Admin</label> <br />
            <input type="radio" name="is_admin" value="0" {{ ($user->is_admin=="0")? "checked" : "" }} />
            False &nbsp;
            <input type="radio" name="is_admin" value="1" {{ ($user->is_admin=="1")? "checked" : "" }} />
            True
        </div>
        @csrf 
        
        <p><button type="submit" class="btn btn-primary">Submit</button></p>
    </form>  <!-- /.form -->

</div>  <!--  /.container -->

@stop 