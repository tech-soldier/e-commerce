@extends('layouts/layout')

@section('content')



<div class="container page my-5">

        <span id="status"></span>

        <table id="cart" class="table table-hover table-condensed">
            <thead>
            <tr>
                <th style="width:50%" class="bg-light">Product</th>
                <th style="width:10%" class="bg-light">Price</th>
                <th style="width:8%" class="bg-light">Quantity</th>
                <th style="width:22%" class="text-center bg-light">Subtotal</th>
                <th style="width:10%" class="bg-light"></th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <td data-th="Product" class="align-middle">
                    <div class="row">
                        <div class="col-sm-3 hidden-xs"><img src="images/product2.jpg" width="100" height="100" class="img-responsive"/></div>
                        <div class="col-sm-9 align-middle">
                            <h4 class="mt-3">Rolex</h4>
                        </div>
                    </div>
                </td>
                <td data-th="Price">$244</td>
                <td data-th="Quantity">
                    <input type="number" value="1" class="form-control quantity" />
                </td>
                <td data-th="Subtotal" class="text-center">$<span class="product-subtotal">244</span></td>
                <td class="actions" data-th="">
                    <button class="btn btn-info btn-sm update-cart" data-id=""><i class="fas fa-sync-alt"></i></button>
                    <button class="btn btn-danger btn-sm remove-from-cart" data-id=""><i class="fas fa-trash"></i></button>
                    <i class="fa fa-circle-o-notch fa-spin btn-loading" style="font-size:24px; display: none"></i>
                </td>
            </tr>


            </tbody>
            <tfoot>

            <tr class="visible-xs">
                <td colspan="5" class="text-right"><strong>Subtotal $<span class="cart-total">244</span></strong></td>
            </tr>
            <tr class="visible-xs">
                <td colspan="5" class="text-right"><strong>GST $<span class="cart-total">7</span></strong></td>
            </tr>
            <tr class="visible-xs">
                <td colspan="5" class="text-right"><strong>PST $<span class="cart-total">9</span></strong></td>
            </tr>
            <tr class="visible-xs">
                <td colspan="5" class="text-right"><strong>Shipping $<span class="cart-total">12</span></strong></td>
            </tr>

            <tr>

                <td><a href="{{ url('/') }}" class="btn btn-primary"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                <td colspan="2" class="hidden-xs"></td>
                <td colspan="2" class="hidden-xs text-right"><strong>Total $<span class="cart-total">262</span></strong></td>
            </tr>
        </tfoot>
    </table>
</div>


@endsection
