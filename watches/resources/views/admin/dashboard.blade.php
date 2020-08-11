@extends('layouts/admin')

@section('content')
<div class="container">
    <div class="card my-4 ">
        
        <div class="card-header">
            <h1 class="card-title">{{ $title }}</h1>
        </div>

        <div class="card-body">
            <!-- overview of watches -->
            <table class="table">
                <thead class="bg-light">
                    <tr>
                        <th>Watches Overview</th><th></th><th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Min Price: </strong> $ {{ $min }}</td>
                        <td><strong>Max Price: </strong> $ {{ $max }}</td>
                        <td><strong>Avg Price: </strong> $ {{ $avg }}</td>
                    </tr>
                </tbody>             
            </table>
            <!-- /. overview of watches -->
            <hr>
            <!-- overview of users -->
            <table class="table">
                <thead class="bg-light">
                    <tr>
                        <th>Users Overview</th>
                    </tr>
                </thead>
                <tbody>
                    <td><strong>Number of Users: </strong> {{ $users }}</td>
                </tbody>
            </table>
            <!-- /. overview of users -->
            <hr>
            <!-- overview of orders -->
            <table class="table">
                <thead class="bg-light">
                    <tr>
                        <th>Orders Oveview</th><th></th><th></th>
                    </tr>
                </thead>
                <tbody>
                    <td><strong>Highest Order Total: </strong> {{ $maxorder }}</td>
                    <td><strong>Lowest Order Total: </strong> {{ $minorder }}</td>
                    <td><strong>Average Order Total: </strong> {{ $avgorder }}</td>
                </tbody>
            </table>           
            <!-- /. overview of orders -->
        </div>  <!-- /.card body -->
        
    </div> <!-- /.card -->

</div>  <!-- /.container -->
    


@stop