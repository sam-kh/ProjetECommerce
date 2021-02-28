@extends('layouts.app')

@section('content')
<br>
    <section class="content-header">
        <h1 class="pull-left"><i class="fa fa-categorie-hunt"> Orders</i></h1>
        <h1 class="pull-right">
          
        </h1>
    </section>
    <br>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @include('orders.table')
                
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

