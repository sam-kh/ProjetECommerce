
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





<div class="modal fade" id="add-pro-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="width:60%" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" ><i class="fa fa-product-hunt"></i> New Product Form</h4>
            </div>
            <div class="modal-body">
                <div class="panel panel-default">


                    <div class="panel-heading">
                        <b><i class="fa fa-book"> Detail</i></b>
                        <b class="pull-right"></b>
                    </div>

                    <div class="panel-body" style="padding-bottom:4px;">
                        <div  style="col-lg-9 col-md-9 col-sm-9">
                                <div>
                                    {{-- name--}}
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" id="name" class="form-control text-capitalize" placeholder="Product Name">
                                        </div>
                                    </div>
                                    {{-- Category--}}
                                    <div class="col-md-9 form-group">
                                        <label>Category</label>
                                        <select name="categories" id="categories" class="form-control">
                                            @foreach($categories as $item)
                                            <option value="{{$item->id}}"> {{$item->name}}</option> 
                                            @endforeach
                                        </select>
                                    </div>
                                    {{--short description--}}
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label>Short Description</label>
                                            <textarea name="short_description" id="short_description" rows="2" class="form-control text-capitalize"  ></textarea>
                                        </div>
                                    </div>
                                    {{-- description--}}
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" id="description" rows="3" class="form-control text-capitalize"  ></textarea>
                                        </div>
                                    </div>
                                    
                                </div>
                                {{--image--}}
                                <div >
                                    <div class="form-group form-group-login">
                                        <table style="margin:0 auto;">
                                            <thead>
                                                <tr class="info">
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="image" >
                                                        {!! Html::image('image_teacher/profile.jpg',null ,['class'=>'teacher_image' , 'id'=>'showImage' ])!!}
                                                        <input type="file" name="image" id="image"  accept="image/x-png,image/png,image/jpg,image/jpeg" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center; background:#ddd;">
                                                        <input type="button" name="browse_file" id="browse_file" class="form-control text-capitalize btn-choose" class="btn btn-outline-danger" value="Choose">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
                                <input type="text" name="regular_price" id="regular_price" class="form-control text-capitalize" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sale Price</label>
                                <input type="text" name="sale_price" id="sale_price" class="form-control text-capitalize" >
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
                                <input type="text" name="stock_quantity" id="stock_quantity" class="form-control text-capitalize" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
            </div>
        </div>
    </div>
</div>

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

