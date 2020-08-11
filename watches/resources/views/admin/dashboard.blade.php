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
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                      <div class="card-header">Prices Overview <i style="font-size: 5em" class="fas fa-money-bill-wave"></i></div>
                      <div class="card-body">
                        <h5 class="card-title"><strong>Average Price: </strong> $ {{ number_format($min, 2) }}</h5>
                        <p class="card-text"><strong>Min Price: </strong> $ {{ number_format($min, 2) }}</p>
                         <p class="card-text"><strong>Max Price: </strong> $ {{ number_format($max, 2) }}</p>
                      </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                      <div class="card-header">Users Overview <i style="font-size: 5em" class="fas fa-user"></i></div>
                      <div class="card-body">
                        <h5 class="card-title"><strong>Total Users:</strong> {{ $users }} </h5>
                        <p class="card-text"><strong>Admin: </strong> 2 </p>
                        <p class="card-text"><strong>Non-admin: </strong> 6 </p>
                      </div>
                    </div>
                </div>


                <div class="col-sm">
                    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                      <div class="card-header">Orders Overview <i style="font-size: 5em" class="fas fa-shopping-cart"></i></div>
                      <div class="card-body">
                        <h5 class="card-title"><strong>Total Orders: </strong> {{ $totorder }}</h5>
                        <p class="card-text"><strong>Highest Order Total: </strong> {{ $maxorder }}</p>
                         <p class="card-text"><strong>Lowest Order Total: </strong> {{ $minorder }}</p>
                      </div>
                    </div>
                </div>
            </div>

            <hr>
            <!-- overview of users -->
            <table class="table">
                <thead class="bg-light">
                    <tr>
                        <th>Tables Overview</th><th></th><th></th><th></th><th></th>
                    </tr>
                </thead>
                <tbody>
                    <td><strong>Users: </strong> {{ $users }}</td>
                    <td><strong>Watches: </strong> {{ $watches }}</td>
                    <td><strong>Categories: </strong> {{ $categories }}</td>
                    <td><strong>Provinces We ship too: </strong> {{ $provinces }}</td>
                </tbody>
            </table>
            <!-- /. overview of users -->
            <hr>
        </div>  <!-- /.card body -->
        
    </div> <!-- /.card -->

</div>  <!-- /.container -->
<script src="https://kit.fontawesome.com/e8b317f565.js" crossorigin="anonymous"></script>
    


@stop