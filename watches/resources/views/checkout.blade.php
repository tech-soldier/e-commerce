<?php

use \App\Http\Controllers\CartController;

?>

@extends('layouts/layout')

@section('content')


        <div class="container py-5">
            <div class="row">
                <div class="col-sm-12">
{{--                    @if (Session::has('error'))--}}
{{--                        <p class="alert alert-danger">{{ Session::get('error') }}</p>--}}
{{--                    @endif--}}
                </div>
            </div>
            <form action="" method="POST" role="form">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <header class="card-header bg-secondary text-white">
                                <h4 class="card-title mt-2">Billing Details</h4>
                            </header>
                            <article class="card-body">
                                <div class="form-row">
                                    <div class="col form-group">
                                        <label>First name</label>
                                        <input type="text" class="form-control bg-light" name="first_name">
                                    </div>
                                    <div class="col form-group">
                                        <label>Last name</label>
                                        <input type="text" class="form-control bg-light" name="last_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control bg-light" name="address">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>City</label>
                                        <input type="text" class="form-control bg-light" name="city">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Country</label>
                                        <input type="text" class="form-control bg-light" name="country">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group  col-md-6">
                                        <label>Province</label>
                                        <input type="text" class="form-control bg-light" name="province">
                                    </div>
                                    <div class="form-group  col-md-6">
                                        <label>Postal Code</label>
                                        <input type="text" class="form-control bg-light" name="postal_code">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="phone" class="form-control bg-light" name="phone" value="">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control bg-light" name="email" value="{{ auth()->user()->email }}">
                                </div>



                                <div class="form-row">
                                    <div class="form-group  col-md-6">
                                        <label>Name On Card</label>
                                        <input type="text" class="form-control bg-light" name="card_name">
                                    </div>
                                    <div class="form-group  col-md-6">
                                        <label>Card Number</label>
                                        <input type="text" class="form-control bg-light" name="card_number">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group  col-md-6">
                                        <label>Card Expiry</label>
                                        <input type="text" class="form-control bg-light" name="card_expiry">
                                    </div>
                                    <div class="form-group  col-md-6">
                                        <label>CVV</label>
                                        <input type="text" class="form-control bg-light" name="cvv">
                                    </div>
                                </div>

                            </article>
                        </div>

                            <div class="card mt-3">
                                <header class="card-header bg-secondary text-white">
                                    <h4 class="card-title mt-2">Shipping Details</h4>
                                </header>
                                <article class="card-body">

                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control bg-light" name="address">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>City</label>
                                            <input type="text" class="form-control bg-light" name="city">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Country</label>
                                            <input type="text" class="form-control bg-light" name="country">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group  col-md-6">
                                            <label>Province</label>
                                            <input type="text" class="form-control bg-light" name="province">
                                        </div>
                                        <div class="form-group  col-md-6">
                                            <label>Postal Code</label>
                                            <input type="text" class="form-control bg-light" name="postal_code">
                                        </div>
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="materialUnchecked">
                                        <label class="form-check-label" for="materialUnchecked">Same as Billing Address</label>
                                    </div>
                                    <button type="button" class="btn btn-info">Info</button>
                                </article>
                            </div>
                    </div>


                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <header class="card-header bg-secondary text-white">
                                        <h4 class="card-title mt-2">Your Order</h4>
                                    </header>
                                    <article class="card-body">
                                        <dl class="dlist-align">
                                            <dt>Subtotal: ${{ CartController::getCartTotal() }}</dt>
                                        </dl>
                                        <dl class="dlist-align">
                                            <dt>GST: $19</dt>
                                        </dl>
                                        <dl class="dlist-align">
                                            <dt>PST: $23</dt>
                                        </dl>
                                        <dl class="dlist-align">
                                            <dt>Shipping: $12</dt>
                                        </dl>
                                        <dl class="dlist-align">
                                            <dt>Total: </dt>
                                            <dd class="text-right h5 b">$20,000</dd>
                                        </dl>
                                    </article>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <button type="submit" class="subscribe btn btn-primary btn-lg btn-block">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


@endsection
