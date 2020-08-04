@extends('layouts/admin')

@section('content')

<div class="container py-2">
    <div class="row my-2">
        <!-- edit form column -->
        <div class="col-lg-4">
            <h2 class="text-center font-weight-light">Create Watch</h2>
        </div>

       <!--  <p><a href="" class="btn btn-warning" class="previous" class="text-left">&laquo; Back</a><p> -->
        <div class="col-lg-8 mt-50">
            
        </div>
        <div class="col-lg-8 order-lg-1 personal-info">
            <form role="form">
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Watch ID</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" disabled value="" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Watch name</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" value="" />
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Created At</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="number" value="" />
                    </div>
                </div>
               
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Updated At</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="number" value="" />
                    </div>
                </div>
            </form>

            <div class="form-group">

                <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </div>
       
    </div>
</div>

@stop 