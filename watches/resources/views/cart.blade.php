
@extends('layouts/layout')

@section('content')

    <div class="container page my-5">
        @if (Session::has('error'))
            <p class="alert alert-danger">{{ Session::get('error') }}</p>
        @endif
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

            <?php $total = 0 ?>

            @if(session('cart'))
                @foreach((array) session('cart') as $id => $details)

                    <?php $total += $details['price'] * $details['quantity'] ?>
                    <tr>
                        <td data-th="Product" class="align-middle">
                            <div class="row">

                                <div class="col-sm-3 hidden-xs"><img src="/storage/images/{{ $details['cover_img'] }}" alt="{{ $details['cover_img'] }}" width="100" height="100" class="img-responsive"/></div>

                                <div class="col-sm-9 align-middle">
                                    <h4 class="mt-3">{{$details['watch_name']}}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">{{$details['price']}}</td>
                        <td data-th="Quantity">
                            <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" data-id="{{ $id }}"/>
                        </td>
                        <td data-th="Subtotal" class="text-center">$<span class="product-subtotal">{{ $details['price'] * $details['quantity'] }}</span></td>
                        <td class="actions" data-th="">
                            <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fas fa-trash"></i></button>
                            <i class="fa fa-circle-o-notch fa-spin btn-loading" style="font-size:24px; display: none"></i>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
            <tfoot>
            <tr class="visible-xs">
                <td colspan="5" class="text-right"><strong><span class="message text-danger"></span></strong></td>
            </tr>
            <tr>
                <td colspan="5" class="text-right"><strong>Total $<span class="cart-total">{{ $total }}</span></strong></td>
            </tr>
            <tr>
                <td><a href="{{ url('/shop') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                <td colspan="3" class="hidden-xs"></td>
                <td><a href="{{ route('checkout.index') }}" class="btn btn-primary"> Checkout</a></td>
            </tr>
            </tfoot>
        </table> <!-- /.table -->
    </div> <!-- /.container -->

    <script type="text/javascript">

        // sending ajax request for removing an item from the cart

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            var parent_row = ele.parents("tr");
            var cart_total = $(".cart-total");

            if(confirm("Are you sure?")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    dataType: "json",
                    success: function (response) {
                        parent_row.remove();
                        cart_total.text(response.total);
                    }
                });
            }
        });

        //sending ajax request to calculate the new subtotal and total
        $(".quantity").change(function (e) {
            e.preventDefault();

            var ele = $(this);
            var parent_row = ele.parents("tr");
            var quantity = ele.val();
            var product_subtotal = parent_row.find("span.product-subtotal");
            var cart_total = $(".cart-total");
            var message =  $(".message");

            $.ajax({
                url: '{{ url('update-cart') }}',
                method: "patch",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: quantity},
                dataType: "json",
                success: function (response) {
                    console.log(ele.val())
                    product_subtotal.text(response.subTotal);
                    cart_total.text(response.total);
                    message.text(response.message);
                    ele.val(response.quantity);
                }
            });
        });

    </script>

@endsection
