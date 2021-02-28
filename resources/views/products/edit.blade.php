@extends('layouts.app')
<style>
    .teacher_image{
         height: 170px;
         width: 170px;
         padding-right: 1px ;
         padding-left: 1px;
         background: #eee;
         border-radius: 50%;
         margin-bottom: 10px;
     }
     .image > input[type="file"]{
         display: none;
     }
     .btn-choose{
         padding: 3px;
         text-align: center;
         background: gray;
         border: none;
         color: black;
         border-radius: 50%;
     }
     
 </style>
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
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" ><i class="fa fa-product-hunt"></i> Update Product Form</h4>
                </div>
                <form action="{{url('/products/update')}}" method="post">
                    <input  type="hidden" name="id" id="id" class="form-control text-capitalize" value="{{$product->id}}">
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
                                                <input type="text" name="name" id="name" class="form-control text-capitalize" value="{{$product->name}}">
                                            </div>
                                        </div>
                                        {{-- Category--}}
                                        <div class="col-md-12 form-group">
                                            <label>Category</label>
                                            <select name="categories" id="categories" class="form-control">
                                                <option value="{{$product->categories[0]->id}}" selected="true"> {{$product->categories[0]->name}}</option> 
                                                @foreach($categories as $item)
                                                <option value="{{$item->id}}"> {{$item->name}}</option> 
                                                @endforeach
                                            </select>
                                        </div>
                                        {{--short description--}}
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Short Description</label>
                                                <textarea name="short_description" id="short_description" rows="4" class="form-control text-capitalize"   ><?php echo (strip_tags($product->short_description));?></textarea>
                                            </div>
                                        </div>
                                        {{-- description--}}
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="description" id="description" rows="5" class="form-control text-capitalize"  ><?php echo (strip_tags($product->description));?></textarea>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                            </div>
                        </div>
                        <div class="panel-heading">
                            <b><i class="fa fa-money"> Price</i></b>
                            <b class="pull-right"></b>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Regular Price</label>
                                    <input type="text" name="regular_price" id="regular_price" class="form-control text-capitalize" value="{{$product->price}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sale Price</label>
                                    <input type="text" name="sale_price" id="sale_price" class="form-control text-capitalize" value="{{$product->sale_price}}">
                                </div>
                            </div>
                        </div>
    
                        <div class="panel-heading">
                            <b><i class="fa fa-archive"> Stock</i></b>
                            <b class="pull-right"></b>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-6">
                                <label>Status</label>
                                <select name="stock_status" id="stock_status" class="form-control">
                                    <option value="instock">In stock</option>
                                    <option value="outofstock">Out of stock</option>
                                    <option value="onbackorder">On backorder</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input type="text" name="stock_quantity" id="stock_quantity" class="form-control text-capitalize" value="{{$product->stock_quantity}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href={{url('/products')}}><button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button></a>
                    {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
                </div>
            </form>
            </div>
        </div>
     </div>
   </div>
@endsection

@push('scripts') 
    <script type="text/javascript">

        $('#browse_file').on('click',function(){
            $('#image').click();
        });
        $('#image').on('change',function(e){
            showFile(this,'#showImage');
        })
        function showFile(fileInput,img,showName)
        {
            if(fileInput.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $(img).attr('src' , e.target.result);
                }
                reader.readAsDataURL(fileInput.files[0]);
            }
            $(showName).text(fileInput.files[0].name)
        };
    </script>
@endpush
