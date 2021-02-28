@extends('layouts.app')

@section('content')
<br>
    <section class="content-header">
        <h1 class="pull-left"> Dashboard</h1>
        
    </section>
    <br>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-1">
                    <h1 class="page-header"></h1>
                    <div class="row placeholders">
                               <div class="col-xs-6 col-sm-3 placeholder">
                                   <p id="large">
                                       {{$orders}}
                                   </p>
                                   <hr>
                                   <span class="text-muted">Total Orders</span>
                               </div>
                               <div class="col-xs-6 col-sm-3 placeholder">
                                   <p id="large">
                                    {{$categories}}
                                   </p>
                                   <hr>
                                   <span class="text-muted">Total Categories</span>
                               </div>
                               <div class="col-xs-6 col-sm-3 placeholder">
                                   <p id="large">
                                    {{$products}}
                                   </p>
                                   <hr>
                                   <span class="text-muted">All Products</span>
                               </div>
                               <div class="col-xs-6 col-sm-3 placeholder">
                                   <p id="large">
                                    {{$sales[0]->total_sales}}
                                   </p>
                                   <hr>
                                   <span class="text-muted">Total Sales</span>
                               </div>
                     </div>
             </div>
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

