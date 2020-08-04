
@extends('layouts/layout')

@section('content')

    <div class="container page my-5">
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
                        <span class="float-right">Alexandr</span>
                    </li>
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">Last Name:</span>
                        <span class="float-right">Pasko</span>
                    </li>
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">Billing Address:</span>
                        <span class="float-right">43 Inkster str.</span>
                    </li>
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">City:</span>
                        <span class="float-right">Calgary</span>
                    </li>
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">Province:</span>
                        <span class="float-right">Alberta</span>
                    </li>
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">Country:</span>
                        <span class="float-right">Canada</span>
                    </li>
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">Postal Code:</span>
                        <span class="float-right">35Y6U7</span>
                    </li>
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">Email Address:</span>
                        <span class="float-right">pasko2050@gmail.com</span>
                    </li>
                    <li class="list-group-item px-0 pb-1 font-weight-bold">
                        <span class="text-secondary">Phone Number:</span>
                        <span class="float-right">(825) 146-9007</span>
                    </li>
                </ul>
            </div>
        </div>

        <h2 class="py-3 px-3 bg-secondary text-light">
            Total Orders:
            <span class="font-weight-bold"> 2</span>
            <span class="float-right">
                <button type="button" class="btn btn-outline-light text-uppercase" id="button_orders">my orders</button>
            </span>
            <span style="display: block; clear: both;"></span>
        </h2>

        <div id="orders_hidden" class="mt-4">
            <table class="table table-hover">
                <thead class="bg-light">
                    <tr>
                        <th scope="col">Order Number</th>
                        <th scope="col">Order Summury</th>
                        <th scope="col">Shipped To</th>
                        <th scope="col">Total</th>
                        <th scope="col">Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">456789</th>
                        <td>2 items</td>
                        <td>Winnipeg (R3N 1Z3)</td>
                        <td>$1258.00</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary">see order</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">876543</th>
                        <td>1 item</td>
                        <td>Winnipeg (R3N 1Z3)</td>
                        <td>$578.00</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary">see order</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">098765</th>
                        <td>3 items</td>
                        <td>Winnipeg (R3N 1Z3)</td>
                        <td>$2799.00</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary">see order</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>       

        <div class="row">
        </div>

    </div>

@endsection
