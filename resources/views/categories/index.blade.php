@extends('layouts.app')

@section('content')
<br>
    <section class="content-header">
        <h1 class="pull-left"><i class="fa fa-categorie-hunt"> categories</i></h1>
        <h1 class="pull-right">
           <a data-toggle="modal" data-target="#add-cat-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" ><i class="fa fa-plus-circle"> Add New categorie</i></a>
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
                @include('categories.table')
                <form action="/categories/add" method ="post">
                    @csrf
                    @include('categories.fields')
                </form>
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

