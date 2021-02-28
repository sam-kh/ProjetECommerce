@extends('layouts.app')

@section('content')
<br>
    <section class="content-header">
        <h1 class="pull-left"><i class="fa fa-product-hunt"> Products</i></h1>
        <h1 class="pull-right">
            <a href="{{url('/products/export')}}" class="btn btn-default pull-right" style="margin-top: -10px;margin-bottom: 5px" > Export</i></a>
           <a data-toggle="modal" data-target="#add-pro-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" ><i class="fa fa-plus-circle"> Add New Product</i></a>
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
                @include('products.table')
                <form action="/products/add" method ="post" enctype="multipart/form-data" >
                    @csrf
                    @include('products.fields')
                </form>
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

