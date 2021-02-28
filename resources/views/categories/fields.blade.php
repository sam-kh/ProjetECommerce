





<div class="modal fade" id="add-cat-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="width:40%" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" > New Category Form</h4>
            </div>
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
                                            <input type="text" name="name" id="name" class="form-control text-capitalize" >
                                        </div>
                                    </div>
                                    {{--short description--}}
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Slug</label>
                                            <input name="slug" id="slug"  class="form-control text-capitalize"  >
                                        </div>
                                    </div>
                                    {{-- description--}}
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" id="description" rows="3" class="form-control text-capitalize"  ></textarea>
                                        </div>
                                    </div>
                                    
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


