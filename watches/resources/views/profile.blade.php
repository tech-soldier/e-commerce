
@extends('layouts/layout')

@section('content')

    <div class="container page my-5" id="profile_page">
        <h1 class="mb-3 py-3 px-3 bg-secondary text-light">My Personal Information
            <span class="float-right">
                <button type="button" class="btn btn-outline-light text-uppercase">update profile</button>
            </span>
            <span style="display: block; clear: both;"></span>
        </h1>
        
        <div class="row pb-3">
            <div class="col-4">

                <!-- this will need to test if there is an image associated -->
                <img src="images/profile_placeholder.png" alt="" width="100%">

            </div>
            <div class="col-8">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">First Name:</span>
                        <span class="float-right">{{ $user->first_name }}</span>
                    </li>
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">Last Name:</span>
                        <span class="float-right">{{ $user->last_name }}</span>
                    </li>
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">Billing Address:</span>
                        <span class="float-right">{{ $user->billing_address }}</span>
                    </li>
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">City:</span>
                        <span class="float-right">{{ $user->city }}</span>
                    </li>
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">Province:</span>
                        <span class="float-right">{{ $user->province }}</span>
                    </li>
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">Country:</span>
                        <span class="float-right">{{ $user->country }}</span>
                    </li>
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">Postal Code:</span>
                        <span class="float-right">{{ $user->postal_code }}</span>
                    </li>
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">Email Address:</span>
                        <span class="float-right">{{ $user->email }}</span>
                    </li>
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">Phone Number:</span>
                        <span class="float-right">{{ $user->phone_number }}</span>
                    </li>
                </ul>
            </div>
        </div>

        <h2 class="py-3 px-3 bg-secondary text-light">
            Total Orders: 
            <span class="font-weight-bold">{{ count($orders) }}</span>
            <span class="float-right">
                <button type="button" class="btn btn-outline-light text-uppercase" id="button_orders">see orders</button>
            </span>
            <span style="display: block; clear: both;"></span>
        </h2>

        <div id="orders_hidden" class="mt-4">
            <table class="table table-hover text-center">
                <thead class="bg-light">
                    <tr>
                        <th scope="col">Order Number</th>
                        <th scope="col">Ordered</th>
                        <th scope="col">Shipped To</th>
                        <th scope="col">Total</th>
                        <th scope="col">Details</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($orders as $order) : ?>
                        <tr>
                            <th scope="row">{{$order->id}}</th>
                            <td>{{ $order->created_at->diffForHumans() }}</td>
                            <td>{{$order->shipping_address}}</td>
                            <td>{{$order->total}}</td>
                            <td>
                                <button type="button" class="btn btn-outline-primary">see order</button>
                            </td>
                        </tr>
                    <?php endforeach ; ?>

                </tbody>
            </table>
        </div>       

        <div class="row">
        </div>

    </div>

@endsection