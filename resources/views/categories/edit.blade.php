
@extends('layouts.app')
@section('content')
<section class="content-header">
    <h1>
        
    </h1>
</section>
<div class="content">
   @include('adminlte-templates::common.errors')
   <div class="box box-primary">
    <div class="box-body">
        <div class="modal-content">
            <div class="modal-header">
               
                <h4 class="modal-title" ><i class="fa fa-category-hunt"></i> Update Category Form</h4>
            </div>
            <form action="{{url('/categories/update')}}" method="post">
                <input  type="hidden" name="id" id="id" class="form-control text-capitalize" value="{{$category->id}}">
                @csrf
            <div class="modal-body">
                <div class="panel panel-default">


                    <div class="panel-heading">
                        <b><i class="fa fa-book"> Detail</i></b>
                        <b class="pull-right"></b>
                    </div>

                    <div class="panel-body" style="padding-bottom:4px;">
                        <div  style="col-lg-12 col-md-12 col-sm-12">
                                <div>
                                    {{-- name--}}
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" id="name" class="form-control text-capitalize" value="{{$category->name}}">
                                        </div>
                                    </div>
                                   {{-- name--}}
                                   <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input type="text" name="slug" id="slug" class="form-control text-capitalize" value="{{$category->slug}}">
                                    </div>
                                </div>
                                    
                                    {{-- description--}}
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" id="description" rows="5" class="form-control text-capitalize"  ><?php echo (strip_tags($category->description));?></textarea>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                        </div>
                    </div>
                    
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href={{url('/categories')}}><button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button></a>
                {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
            </div>
        </form>
        </div>
    </div>
 </div>
</div>
@endsection


