@extends('layouts/admin')

@section('content')
<div class="container">
    <div class="card my-4 ">
        
        <div class="card-header">
            <h1 class="card-title">{{ $title }}</h1>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm">
                    <div class="card text-white bg-primary mb-3" style="max-width: 24rem;">
                      <div class="card-header"><i style="font-size: 5em" class="fas fa-money-bill-wave"></i> Prices Overview </div>
                      <div class="card-body">
                        <h5 class="card-title"><strong>Average Price: </strong> $ {{ number_format($min, 2) }}</h5>
                        <p class="card-text"><strong>Min Price: </strong> $ {{ number_format($min, 2) }}</p>
                        <p class="card-text"><strong>Name of Most Affordable Watch: </strong> {{ $cheap }}</p>
                        <p class="card-text"><strong>Max Price: </strong> $ {{ number_format($max, 2) }}</p>
                        <p class="card-text"><strong>Currently Most Expensive: </strong> {{ $expensive }}</p>
                        <p><a href="/admin/watches_table" type="button"  class="btn btn-success">Watches Table <i class="fas fa-arrow-right"></i></a></p>

                      </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="card text-white bg-danger mb-3" style="max-width: 24rem;">
                      <div class="card-header"><i style="font-size: 5em" class="fas fa-user"></i> Users Overview</div>
                      <div class="card-body">
                        <h5 class="card-title"><strong>Total Registered Accounts:</strong> {{ $users }} </h5>
                        <p class="card-text"><strong>TechWatch Adminstrators: </strong> 

                                    @foreach($admin as $admin)
                                        <p class="card-text">{{ $admin->first_name . ' ' . $admin->last_name }}</p>
                                    @endforeach </p>

                        <p><a href="/admin/users_table" type="button"  class="btn btn-success">Users Table <i class="fas fa-arrow-right"></i></a></p>
                      </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="card text-white bg-warning mb-3" style="max-width: 24rem;">
                      <div class="card-header"><i style="font-size: 5em" class="fas fa-shopping-cart"></i> Orders Overview </div>
                      <div class="card-body">
                        <h5 class="card-title"><strong>Total Orders: </strong> {{ $totorder }}</h5>
                        <p class="card-text"><strong>Highest Order Total: </strong> $ {{ number_format($maxorder, 2) }}</p>
                        <p class="card-text"><strong>Lowest Order Total: </strong> $ {{ number_format($minorder, 2) }}</p>
                        <p class="card-text"><strong>Average Order Total: </strong> $ {{ number_format($avgorder, 2) }}</p>
                        <p><a href="/admin/orders_table" type="button"  class="btn btn-success">Orders Table <i class="fas fa-arrow-right"></i></a></p>
                      </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm">
                    <div class="card text-white bg-secondary mb-3" style="max-width: 44rem;">
                      <div class="card-header">Taxes Across the Nation: </div>
                      <div class="card-body">
                        <h5 class="card-title"><small>Current GST: </small><strong style="font-size: 5em">{{ $GST * 100 }} % <i class="fas fa-globe"></i></strong></h5>
                        <div class="row">
                            <div class="col-sm">
                                <strong>Provinces Using HST:</strong><br />
                                    @foreach($hst as $hst)
                                        <p class="card-text">{{ $hst->province}}</p>
                                    @endforeach
                            </div>
                            <div class="col-sm">
                                <strong>Provinces Using PST/GST:</strong><br />
                                    @foreach($gst as $gst)
                                        <p class="card-text">{{ $gst->province}}</p>
                                    @endforeach
                            </div>
                        </div>
                            <p><a href="/admin/taxes_table" type="button"  class="btn btn-success">Taxes Table <i class="fas fa-arrow-right"></i></a></p>
                      </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="card bg-light mb-3" style="max-width: 44rem;">
                      <div class="card-header"><i style="font-size: 5em" class="fas fa-align-left"></i> Categories Overview</div>
                      <div class="card-body">
                        <h5 class="card-title"><strong>Total Number of Categories:</strong> {{ $categories }}</h5>
                       <strong>Categories: </strong>
                        @foreach($catname as $cat)
                            <p class="card-text">{{ $cat->category_name }}</p>
                        @endforeach

                        <p><a href="/admin/categories_table" type="button"  class="btn btn-success">Categories Table <i class="fas fa-arrow-right"></i></a></p>

                      </div>
                    </div>
                </div>

            </div>
        </div>  <!-- /.card body -->
        
    </div> <!-- /.card -->

</div>  <!-- /.container -->
<script src="https://kit.fontawesome.com/e8b317f565.js" crossorigin="anonymous"></script>
    


@stop