<?php

use \App\Http\Controllers\CartController;

?>

@extends('layouts/layout')

@section('content')
<div class="container">
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
                <div>460 Portage Ave. Winnipeg, Canada</div>
                <div>Email: techwatch7@gmail.com</div>
                <div>Phone: +48 444 666 3333</div>
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
                        <th class="center">#</th>
                        <th>Item</th>
                        <th>Description</th>
                        <th class="right">Unit Cost</th>
                        <th class="center">Qty</th>
                        <th class="right">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="center">1</td>
                        <td class="left strong">Origin License</td>
                        <td class="left">Extended License</td>
                        <td class="right">$999,00</td>
                        <td class="center">1</td>
                        <td class="right">$999,00</td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
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
                                <strong>GST: </strong>
                            </td>
                            <td class="right">${{$final_order->GST}}</td>
                        </tr>
                        <tr>
                            <td class="left">
                                <strong>PST: </strong>
                            </td>
                            <td class="right">${{$final_order->PST}}</td>
                        </tr>
                        <tr>
                            <td class="left">
                                <strong>HST: </strong>
                            </td>
                            <td class="right">${{$final_order->HST}}</td>
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
            </div>

        </div>
    </div>
</div>
</div>
@endsection