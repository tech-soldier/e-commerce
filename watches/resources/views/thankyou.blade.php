<?php

use \App\Http\Controllers\CartController;

?>

@extends('layouts/layout')

@section('content')
    <div class="container my-5">
        <h1>{{$final_order->full_name}}</h1>
        <div class="card">
            <div class="card-header">
                Invoice
                <strong>{{$final_order->created_at}}</strong>
                <span class="float-right"> <strong>Status:</strong> {{$final_order->transaction_status}}</span>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h6 class="mb-3">From:</h6>
                        <div>
                            <strong>Tech Watch Ltd.</strong>
                        </div>
                        <div>Contact info:</div>
                        <div>460 Portage Ave. Winnipeg, MB, Canada</div>
                        <div>Email: techwatch7@gmail.com</div>
                        <div>Phone: 204 666 3333</div>
                    </div>

                    <div class="col-sm-6">
                        <h6 class="mb-3">To:</h6>
                        <div>
                            <strong>{{$final_order->full_name}}</strong>
                        </div>
                        <div>Attn: {{$final_order->full_name}}</div>
                        <div>{{$final_order->shipping_address}} Canada</div>
                        <div>Email: {{$final_order->email}}</div>
                    </div>
                </div>

                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="center">Order ID</th>
                            <th>Watch</th>
                            <th>Price</th>
                            <th class="right">Quantity</th>
                            <th class="center">Time</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order_all as $item)
                            <tr>
                                @foreach($item as $key => $value)
                                    @if($key != "watch_id" && $key != "updated_at")
                                        <td class="center">{{ $value}}</td>
                                    @endif
                                @endforeach
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div> <!-- /.table-responsive -->
                <div class="row">
                    <div class="col-lg-4 col-sm-5">

                    </div>

                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                            <tr>
                                <td class="left">
                                    <strong>Subtotal</strong>
                                </td>
                                <td class="right">${{$final_order->subtotal}}</td>
                            </tr>
                            <tr>
                                <td class="left">
                                    <strong>Taxes: </strong>
                                </td>
                                <td class="right">${{$final_order->GST + $final_order->PST + $final_order->HST}}</td>
                            </tr>

                            <tr>
                                <td class="left">
                                    <strong>Shipping: </strong>
                                </td>
                                <td class="right">${{$final_order->shipping}}</td>
                            </tr>

                            <tr>
                                <td class="left">
                                    <strong>Total</strong>
                                </td>
                                <td class="right">
                                    <strong>${{$final_order->total}}</strong>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div> <!-- /.col -->
                </div>  <!-- /.row -->
            </div>  <!-- /. cardbody -->
        </div>  <!-- /. card -->
    </div>  <!-- /.container -->
@endsection
