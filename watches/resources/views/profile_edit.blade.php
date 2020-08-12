
@extends('layouts/layout')

@section('content')

    <div class="container page my-5" id="profile_page">

        <div class="card my-3  bg-light">
            <div class="card-header bg-secondary text-light">
                <h1 class="card-title my-2">{{ $title }}</h1>
            </div> 

            <div class="card-body">
                <form class="form" action="/profile/edit" method="post" enctype="multipart/form-data">

                    @method('PUT')

                    <div class="form-group">
                        <label for="email">Email <span class="text-muted">(permanent as username)</span></label>
                        <input type="text" class="form-control" name="email" id="email" disabled value="{{ old('email', $user->email) }}" />

                        @error('email')
                            <span class="alert-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" name="first_name" id="first_name" value="{{ old('first_name', $user->first_name) }}" />

                        @error('first_name')
                            <span class="alert-danger">{{ $message }}</span>
                        @enderror
                    </div> 

                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" name="last_name" id="last_name" value="{{ old('last_name', $user->last_name) }}" />

                        @error('last_name')
                            <span class="alert-danger">{{ $message }}</span>
                        @enderror
                    </div>  

                    <div class="form-group">
                        <label for="billing_address">Billing Address</label>
                        <input type="text" class="form-control" name="billing_address" id="billing_address" value="{{ old('billing_address', $user->billing_address) }}" />

                        @error('billing_address')
                            <span class="alert-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="city" id="city" value="{{ old('city', $user->city) }}" />

                        @error('city')
                            <span class="alert-danger">{{ $message }}</span>
                        @enderror
                    </div>                               

                    <div class="form-group">
                        <label for="province">Province</label>
                        <select class="form-control" name="province" id="province">
                            <option value="">Choose Province</option>
                            @foreach($provinces as $province)
                            <option 
                            @if($province->province == old('province', $user->province)) 
                                selected 
                            @endif 
                             value="{{ $province->province }}">
                                {{ $province->province }}
                            </option>
                            @endforeach
                        </select>
                        @error('province')
                            <span class="alert-danger">{{ $message }}</span>
                        @enderror                   
                    </div>

                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" name="country" id="country" value="{{ old('country', $user->country) }}" />

                        @error('country')
                            <span class="alert-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="postal_code">Postal Code</label>
                        <input type="text" class="form-control" name="postal_code" id="postal_code" value="{{ old('postal_code', $user->postal_code) }}" />

                        @error('postal_code')
                            <span class="alert-danger">{{ $message }}</span>
                        @enderror
                    </div>                

                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" class="form-control" name="phone_number" id="phone_number" value="{{ old('phone_number', $user->phone_number) }}" />

                        @error('phone_number')
                            <span class="alert-danger">{{ $message }}</span>
                        @enderror
                    </div>                
                   

                    <div class="form-group">
                        <label for="image">User Image</label>
                        <input type="file" class="" name="image" id="image" value="{{ old('image', $user->image) }}" />
                        @error('image')
                            <span class="alert-danger">{{ $message }}</span>
                        @enderror
                    </div>  

                    <div>
                        <img src="{{ !empty($user->image) ? '/storage/images/' . $user->image : '/storage/images/profile_placeholder.png' }}" alt="profile image" width="300">
                    </div>            

                    @csrf

                    <input type="hidden" name="id" value="{{ old('id', $user->id) }}">

                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </div>

                </form>
            </div>

            <div class="card-footer bg-secondary text-white">
                <p class="text-center">Your personal information is protected</p>
            </div>
        </div>      

    </div> <!--  /.container -->

@endsection