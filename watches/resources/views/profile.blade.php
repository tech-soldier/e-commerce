
@extends('layouts/layout')

@section('content')

    <div class="container page my-5">
        <h1 class="mb-5">My Personal Information</h1>
        <div class="row">
            <div class="col-4">
                <img src="images/profile_placeholder.png" alt="" width="100%">
            </div>
            <div class="col-8">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0">First Name:<span class="float-right">Alexandr</span></li>
                    <li class="list-group-item px-0">Last Name:<span class="float-right">Pasko</span></li>
                    <li class="list-group-item px-0">Billing Address:<span class="float-right">43 Inkster str.</span></li>
                    <li class="list-group-item px-0">City:<span class="float-right">Calgary</span></li>
                    <li class="list-group-item px-0">Province:<span class="float-right">Alberta</span></li>
                    <li class="list-group-item px-0">Country:<span class="float-right">Canada</span></li>
                    <li class="list-group-item px-0">Postal Code:<span class="float-right">35Y6U7</span></li>
                    <li class="list-group-item px-0">Email Address:<span class="float-right">pasko2050@gmail.com</span></li>
                    <li class="list-group-item px-0">Phone Number:<span class="float-right">(825) 146-9007</span></li>
                </ul>
            </div>
        </div>

        <div class="row">
        </div>

    </div>

@endsection
