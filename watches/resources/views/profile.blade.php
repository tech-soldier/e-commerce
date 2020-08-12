
@extends('layouts/layout')

@section('content')

    <div class="container page my-5" id="profile_page">
        <h1 class="mb-3 py-3 px-3 bg-secondary text-light">My Personal Information
            <span class="float-right mobile_wide">
                <a href="/profile/{{$user->id}}/edit">
                    <button type="button" class="btn btn-outline-light text-uppercase mobile_wide">edit profile</button>
                </a>
            </span>
            <span style="display: block; clear: both;"></span>
        </h1>
        
        <div class="row pb-3">
            <div class="col-4">

                <!-- this will need to test if there is an image associated -->
                <img src="{{ !empty($user->image) ? '/storage/images/' . $user->image : '/storage/images/profile_placeholder.png' }}" alt="" width="100%">

            </div>
            <div class="col-8">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">First Name:</span>
                        <span class="float-right">{{ (!empty($user->first_name)) ? $user->first_name : '-' }}</span>
                    </li>
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">Last Name:</span>
                        <span class="float-right">{{ (!empty($user->last_name)) ? $user->last_name : '-' }}</span>
                    </li>
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">Billing Address:</span>
                        <span class="float-right">{{ (!empty($user->billing_address)) ? $user->billing_address : '-' }}</span>
                    </li>
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">City:</span>
                        <span class="float-right">{{ (!empty($user->city)) ? $user->city : '-' }}</span>
                    </li>
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">Province:</span>
                        <span class="float-right">{{ (!empty($user->province)) ? $user->province : '-' }}</span>
                    </li>
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">Country:</span>
                        <span class="float-right">{{ (!empty($user->country)) ? $user->country : '-' }}</span>
                    </li>
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">Postal Code:</span>
                        <span class="float-right">{{ (!empty($user->postal_code)) ? $user->postal_code : '-' }}</span>
                    </li>
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">Email Address:</span>
                        <span class="float-right">{{ (!empty($user->email)) ? $user->email : '-' }}</span>
                    </li>
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">Phone Number:</span>
                        <span class="float-right">{{ (!empty($user->phone_number)) ? $user->phone_number : '-' }}</span>
                    </li>
                </ul>
            </div>
        </div>

        <?php if(count($orders) > 0) : // if there are orders ?>
            <h2 class="py-3 px-3 bg-secondary text-light">
                Total Orders: 
                <span class="font-weight-bold">{{ count($orders) }}</span>
                <span class="float-right mobile_wide">
                    <button type="button" class="btn btn-outline-light text-uppercase mobile_wide" id="button_orders">see orders</button>
                </span>
                <span style="display: block; clear: both;"></span>
            </h2>

            <div id="orders_hidden" class="mt-4">
                <table class="table table-hover text-center">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col">Order Number</th>
                            <th class="mobile_disapear" scope="col">Ordered</th>
                            <th class="mobile_disapear" scope="col">Shipped To</th>
                            <th scope="col">Total</th>
                            <th scope="col">Details</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($orders as $order) : ?>
                            <tr>
                                <th class="align-middle">{{$order->id}}</th>
                                <td class="mobile_disapear">{{ $order->created_at->diffForHumans() }}</td>
                                <td class="mobile_disapear">{{$order->shipping_address}}</td>
                                <td>${{$order->total}}</td>
                                <td>
                                    <a href="/thankyou/{{$order->id}}"><button type="button" class="btn btn-outline-primary">see order</button></a>
                                </td>
                            </tr>
                        <?php endforeach ; ?>

                    </tbody>
                </table>
            </div>
        <?php else : ?>
            <h2 class="py-3 px-3 bg-secondary text-light">
                No orders yet 
            </h2>            
        <?php endif ; ?>       

    </div>

@endsection