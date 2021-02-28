<style>
    input[readonly],textarea{
        background: white !important;
        border:none;
    }
    span{
        padding-left: 20px;
        
    }
</style>
 

        <section class="content-header">
            <h1>
              {{$product->name}} 
            </h1>
            
          </section>
      
          <!-- Main content -->
          <section class="content">
      
            <div class="row">
              <div class="col-md-3">
      
                <!-- Profile Image -->
                <div class="box box-primary">
                  <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="{{$product->images[0]->src}}" 
                    width="50" height="50" style="border-radius:50%; width:150px; height:150px; vartical-align:middle;" alt="Teacher profile picture">
      
                    <h3 class="profile-username text-center">{{$product->name}}</h3>
      
                    <p class="text-muted text-center">{{$product->categories[0]->name}}</p>
                    <div >
                      <pre>
                        <h4>Short Description</h4>
                        <?php echo (strip_tags($product->short_description));?>

                      </pre>
                    
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <div class="nav-tabs-custom">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#activity" data-toggle="tab">Informations</a></li>
                    
                  </ul>
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">

                      <div class="post clearfix">
                        
                        <br>
                        <h3>Details</h3>
                        
                        <ul class="list-group list-group-unbordered">
                          <li class="list-group-item">
                            <b>category</b> <a class="pull-right">{{$product->categories[0]->name}}</a>
                          </li>
                          <li class="list-group-item">
                            <b>Regular Price</b> <a class="pull-right">{{$product->price}} DH</a>
                          </li>
                          <li class="list-group-item">
                            <b>Sale Price</b> <a class="pull-right">{{$product->sale_price}} DH</a>
                          </li>
                          <li class="list-group-item">
                            <b>Stock Status</b> <a class="pull-right">{{$product->stock_status}} </a>
                          </li>
                          <li class="list-group-item">
                            <b>Quantity in Stock</b> <a class="pull-right">{{$product->stock_quantity}} </a>
                          </li>
                        </ul>
                      </div>
                      
                        
                      <h3>Description</h3>
                      <?php echo (strip_tags($product->description));?>
  
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>  
          </section>
         