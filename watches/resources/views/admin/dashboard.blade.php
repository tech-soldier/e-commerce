@extends('layouts/admin')

@section('content')
<div class="container">
    <div class="card my-4 ">
        
        <div class="card-header">
            <h1 class="card-title">{{ $title }}</h1>
        </div>

        <div class="card-body">
        
            <table class="table">
                <thead class="bg-light">
                    <tr>
                        <th>Watches Overview</th><th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Min Price: </strong> $ {{ $min }}</td>

                    </tr>
                </tbody>    
                    
            </table>
            
            

        </div>
        
    </div>

</div>
    


@stop