<?php
    use App\Http\Controllers\CartController;
?>

@extends('layouts/layout')

@section('content')

    <div class="container py-5">
        <div class="row">
            <div class="col-sm-12">
                @if (Session::has('error'))
                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif
            </div>
        </div>
        <form action="{{ route('checkout.place.order') }}" method="post" enctype="multipart/form-data" novalidate >
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <header class="card-header bg-secondary text-white">
                            <h4 class="card-title mt-2">Billing Details</h4>
                        </header>
                        <article class="card-body">
                            <div class="form-row">
                                <div class="form-group">
                                    <input type="hidden" name="user_id" disabled class="form-control" id="user_id" value="{{ $user['id'] }}">
                                </div>
                                <div class="col form-group">
                                    <label>First name</label>
                                    <input type="text" class="form-control bg-light" name="first_name" id="first_name" value="{{ $user['first_name'] }}">
                                    @error('id')
                                    <span class="alert-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col form-group">
                                    <label>Last name</label>
                                    <input type="text" class="form-control bg-light" name="last_name" value="{{ $user['last_name'] }}">
                                    @error('last_name')
                                    <span class="alert-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control bg-light" name="billing_address" id="billing_address" value="{{ $user['billing_address'] }}">
                                @error('billing_address')
                                <span class="alert-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>City</label>
                                    <input type="text" class="form-control bg-light" name="city" id="city" value="{{ $user['city'] }}">
                                    @error('city')
                                    <span class="alert-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Country</label>
                                    <input type="text" class="form-control bg-light" name="country" id="country" value="{{ $user['country'] }}">
                                    @error('country')
                                    <span class="alert-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlSelect1">Province</label>
                                    <select class="form-control province" id="province" name="province">
                                        <option disabled selected value="default"> -- Select Province -- </option>
                                        @foreach($taxes as $tax)
                                            <option value="{{$tax->province}}">
                                                {{$tax->province}}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('province')
                                    <span class="alert-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group  col-md-6">
                                    <label>Postal Code</label>
                                    <input type="text" class="form-control bg-light" name="postal_code" id="postal_code" value="{{ $user['postal_code'] }}">
                                    @error('postal_code')
                                    <span class="alert-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="phone" class="form-control bg-light" name="phone_number" value="{{ $user['phone_number'] }}">
                                @error('phone_number')
                                <span class="alert-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control bg-light" name="email" value="{{ $user['email'] }}">
                                @error('email')
                                <span class="alert-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="card_type">Card Type</label>
                                    <select class="form-control province" id="card_type" name="card_type">
                                        <option disabled selected> -- Select Card Type -- </option>
                                        <option value="Visa">Visa</option>
                                        <option value="Mastercard">Mastercard</option>
                                        <option value="Amex">Amex</option>
                                    </select>
                                    @error('card_type')
                                    <span class="alert-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group  col-md-6">
                                    <label>Name On Card</label>
                                    <input type="text" class="form-control bg-light" name="card_name" value="{{ old('card_name') }}">
                                    @error('card_name')
                                    <span class="alert-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group  col-md-6">
                                    <label>Card Number</label>
                                    <input type="text" class="form-control bg-light" name="card_number" value="{{ old('card_number') }}">
                                    @error('card_number')
                                    <span class="alert-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group  col-md-6">
                                    <label>4 Digit Card Expiry  </label>
                                    <input type="text" class="form-control bg-light" name="card_expiry" value="{{ old('card_expiry') }}">
                                    @error('card_expiry')
                                    <span class="alert-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group  col-md-6">
                                    <label>CVV</label>
                                    <input type="text" class="form-control bg-light" name="cvv" value="{{ old('cvv') }}">
                                    @error('cvv')
                                    <span class="alert-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </article>
                    </div>  <!-- /.card -->

                    <div class="card mt-3">
                        <header class="card-header bg-secondary text-white">
                            <h4 class="card-title mt-2">Shipping Details</h4>
                        </header>
                        <article class="card-body">

                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control bg-light" name="shipping_address" id="shipping_address" value="{{ old('shipping_address') }}">
                                @error('shipping_address')
                                <span class="alert-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>City</label>
                                    <input type="text" class="form-control bg-light" name="shipping_city" id="shipping_city" value="{{ old('shipping_city') }}">
                                    @error('shipping_city')
                                    <span class="alert-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Country</label>
                                    <input type="text" class="form-control bg-light" name="shipping_country" id="shipping_country" value="{{ old('country') }}">
                                    @error('shipping_country')
                                    <span class="alert-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlSelect1">Province</label>
                                    <select class="form-control" id="shipping_province" name="shipping_province">
                                        <option disabled selected value="default"> -- Select Province -- </option>
                                        @foreach($taxes as $tax)
                                            <option value="{{$tax->province}}">
                                                {{$tax->province}}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('shipping_province')
                                    <span class="alert-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group  col-md-6">
                                    <label>Postal Code</label>
                                    <input type="text" class="form-control bg-light" name="shipping_postal_code" id="shipping_postal_code" value="{{ old('shipping_postal_code') }}">
                                    @error('shipping_postal_code')
                                    <span class="alert-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" name="check-address" class="form-check-input" id="check-address">
                                <label class="form-check-label" for="materialUnchecked">Same as Billing Address</label>
                            </div>

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
                                        <dt>Subtotal: $<span id="subtotal" name="subtotal" class="text-dark">{{ CartController::getCartTotal() }}</span></dt>
                                    </dl>

                                    <dl class="dlist-align">
                                        <dt class="text-primary"><span id="tax" class="text-dark"></span></dt>
                                    </dl>

                                    <dl class="dlist-align">
                                        <dt>Shipping: <span id="shipping" class="text-dark"></span></dt>
                                    </dl>
                                    <dl class="dlist-align">
                                        <dt class="text-primary">Total: </dt>
                                        <dd class="text-right h5 b text-dark" id="total_final" name="total"></dd>
                                        <div class="form-group">
                                            <input type="hidden" name="total" disabled class="form-control" id="total" value=" ">
                                        </div>
                                    </dl>

                                </article>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <button type="submit" class="subscribe btn btn-primary btn-lg btn-block">Place Order</button>
                        </div>
                    </div>
                </div>
            </div> <!--  /.row -->
        </form> <!-- /.form -->
    </div>  <!-- /.container -->


    <script type="text/javascript">

        //sending an ajax request to the checkout Controller to calculate the costs on quantity filed update

        $(".province").on('change', function() {

            var ele = $(this).val();
            var tax = $("#tax");
            var total = $("#subtotal").text();
            var shipping = $("#shipping");
            var total_final = $("#total_final");
            var order_total = $("#total");


            $.ajax({
                url: '{{ url('checkout-calculate-cost') }}',
                method: "patch",
                data: {_token: '{{ csrf_token() }}', province: ele, subtotal: total},
                dataType: "json",
                success: function (response) {

                    tax.text(response.tax_message);
                    shipping.text('$' + response.shipping);
                    total_final.text('$' + response.total);
                    order_total.setAttribute("value", response.total);

                }
            });
        });

        //setting the value of shipping address form field same to billing address fields on checkbox checked

        $('#check-address').change(function() {


            if ($('#check-address').is(':checked')) {

                $('#shipping_address').val($("#billing_address").val());
                $('#shipping_city').val($("#city").val());
                $('#shipping_country').val($("#country").val());
                $('#shipping_postal_code').val($("#postal_code").val());
                $('#shipping_province').val($("#province").val());

            } else {
                $('#shipping_address').val("");
                $('#shipping_city').val("");
                $('#shipping_country').val("");
                $('#shipping_postal_code').val("");
                $('#shipping_province').val("default");
            }

        });


    </script>

@endsection
