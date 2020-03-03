<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url().'/assets/img/fevicon.png'?>" />
  <title>Green Surfer Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <?php include 'includes/csslinks.php'; ?>
  <style>
      #data{
           font-family: century gothic;
      }
      #data tr th{
          background:grey; 
          font-weight:bold;
          color:white;
          padding-top:15px;
          padding-bottom:15px;
       }
      #data tr:nth-child(even){ background:#f2f2f2; }
      #data tr:nth-child(odd) { background:#f3faff}
      #data tr:hover{
          background:#eaeaea;
          
      } 
      textarea {
          resize: none;
      }
      
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/header.php'; ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include 'includes/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row">
            <div class="col-md-3">
                 <form role="form" method="POST" id="#">
                      <div class="input-group input-group-sm">
                      <input type="text" class="form-control">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-info btn-warning">Go!</button>
                      </span>
                     </div>
                  </form>
            </div>
        </div>
              
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>home/adminhome"><i class="fa fa-dashboard"></i> Dashboards</a></li>
        <li class="active">Products</li>
      </ol>
    </section>
    <section class="content">

      <!-- Default box -->
      <div class="box  box-success">
          
        <div class="box-header with-border">
          <h3 class="box-title">Products</h3>
          
          <div class="box-tools pull-right">
             <button type="button" class="btn btn-success" onclick="addProducts()" id="addProducts">Add</button>
      
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                    <i class="fa fa-times"></i></button>
                    
            </div>
        </div>
        <div class="box-body">
                <div class="table-responsive"> 
                   <table id="data" class="table table-bordered table-hover ">
                    <thead>
                       <tr>
                        <th width="5%">S.No.</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Wattage</th>
                        <th>Price</th>
                         <th>Color</th>
                         <th>Shape</th>
                        <th>Packaging</th>
                        <th>Cutting Size</th>
                        <th>Full Size</th>
                        <th>Date</th>
                        <th>Remark</th>
                        <th  style="text-align:center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                          <?php $sn = 0; foreach($products as $product){ ?>
                         <tr>
                        <td width="5%"><?php  echo ++$sn;  ?></td>
                        <td><img src='<?php echo base_url($product->pro_imgurl)?>' height="90" width="100"></td>
                        <td><?php echo $product->pro_name;?></td>
                        <td><?php echo $product->pro_code;?></td>
                        <td><?php echo $product->pro_watt;?></td>
                        <td><?php echo $product->pro_price;?></td>
                        <td><?php echo $product->pro_color;?></td>
                        <td><?php echo $product->pro_shape;?></td>
                        <td><?php echo $product->pro_packaging;?></td>
                        <td><?php echo $product->pro_csize;?></td>
                        <td><?php echo $product->pro_fsize;?></td>
                        <td><?php echo $product->pro_date;?></td>
                        <td><?php echo $product->pro_remark;?></td>
                        <td  style="text-align:center">
                            <button type="button" class="btn btn-primary btn-sm" onclick="#" title="Click here to view more"><i class="fa fa-expand"></i></button>
                             <button type="button" class="btn btn-success btn-sm" onclick="edit_products(<?php echo $product->pro_id;?>)" title="Click here to edit"><i class="fa fa-pencil"></i></button>
                             <button type="button" class="btn btn-danger btn-sm" onclick="delete_products(<?php echo $product->pro_id;?>)" title="Click here to delete"><i class="fa fa-times"></i></button>
                        </td>
                      </tr>
                          <?php } ?>
                    </tbody>
                    <tfoot>
                      
                    </tfoot>
                  </table>
                  </div> 
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- Main content -->
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'includes/footer.php';?>

  <!-- Control Sidebar -->
  

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<div id="insProducts" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Products</h4>
      </div>
      <div class="modal-body">
          <form role="form" method="POST" id="insProductForm" enctype="multipart/form-data">
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name ="pro_name" id="pro_name">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="code">Code</label>
                  <input type="text" class="form-control" name ="pro_code" id="pro_code">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="Watt">Watt</label>
                  <select class="form-control" id="pro_watt" name="pro_watt" >
                      <option value="1W">1W</option>
                      <option value="2W">2W</option>
                      <option value="3W">3W</option>
                      <option value="4W">4W</option>
                      <option value="5W">5W</option>
                      <option value="5+3W">5+3W</option>
                      <option value="5+5W">5+5W</option>
                      <option value="6W">6W</option>
                      <option value="7W">7W</option>
                      <option value="7+7W">7+7W</option>
                      <option value="8W">8W</option>
                      <option value="9W">9W</option>
                      <option value="10W">10W</option>
                      <option value="10+10W">10+10W</option>
                      <option value="12W">12W</option>
                      <option value="15W">15W</option>
                      <option value="18W">18W</option>
                      <option value="18+1W">18+1W</option>
                      <option value="20W">20W</option>
                      <option value="22W">22W</option>
                      <option value="24W">24W</option>
                      <option value="26W">26W</option>
                      <option value="28W">28W</option>
                      <option value="30W">30W</option>
                      <option value="32W">32W</option>
                      <option value="35W">35W</option>
                      <option value="36W">36W</option>
                      <option value="36+1W">36+1W</option>
                      <option value="40W">40W</option>
                      <option value="45W">45W</option>
                      <option value="48W">48W</option>
                      <option value="50W">50W</option>
                      <option value="70W">70W</option>
                      <option value="90W">90W</option>
                      <option value="100W">100W</option>
                      <option value="150W">150W</option>
                      <option value="200W">200W</option>
                  </select>
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                   <div class="form-group">
                      <label for="Price">Price</label>
                      <input type="text" class="form-control" name ="pro_price" id="pro_price">
                  </div>
              </div>   
               <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="Color">Color</label>
                      <select class="form-control" id="pro_color" name="pro_color" id="pro_color">
                          <option value="Warm">Warm</option>
                          <option value="Natural">Natural</option>
                          <option value="Red">Red</option>
                          <option value="Blue">Blue</option>
                          <option value="Green">Green</option>
                          <option value="Orange">Orange</option>
                          <option value="Yellow">Yellow</option>
                          <option value="Pink">Pink</option>
                          <option value="RGB">RGB</option>
                          <option value="3 in One">3 in One</option>
                      </select>
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="mcontact">Packaging</label>
                      <input type="text" class="form-control" name ="pro_packaging" id="pro_packaging">
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="date">Date</label>
                      <input type="date" class="form-control" name = "pro_date" id="pro_date">
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="Cutting Size">Cutting Size</label>
                      <input type="text" class="form-control" name = "pro_csize" id="pro_csize">
                  </div>
              </div>
             
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="Shape">Shape</label>
                      <select class="form-control" id="pro_shape" name="pro_shape">
                          <option value="Round">Round</option>
                          <option value="Square">Square</option>
                      </select>
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="remark">Remarks</label>
                      <textarea class="form-control" rows="1" name = "pro_remark" id="pro_remark"></textarea>
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="website">Full Size</label>
                      <input type="text" class="form-control" name = "pro_fsize" id="pro_fsize">
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="doc">Image</label>
                  <input type="file" class="form-control" name = "pro_imgurl" id="pro_imgurl">
              </div>
              </div>
              <button type="submit" name="save" id="save" value="" class="btn btn-success" >Submit</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-sm-12 col-md-12">
                <span id="warningmsg" style="font-family:verdana; color:red;font-size:14px;font-weight:bold;text-align:left"></span>
          </div>
        
      </div>
    </div>

  </div>
</div>

<div id="updProducts" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Products</h4>
      </div>
      <div class="modal-body">
          <form role="form" method="POST" id="updProductForm" enctype="multipart/form-data">
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="name">Name</label>
                  <input type="hidden" class="form-control" name ="pro_id" id="pro_id" value="">
                  <input type="text" class="form-control" name ="pro_name" id="pro_name">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="code">Code</label>
                  <input type="text" class="form-control" name ="pro_code" id="pro_code">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="Watt">Watt</label>
                  <select class="form-control" id="pro_watt" name="pro_watt" >
                      <option value="1W">1W</option>
                      <option value="2W">2W</option>
                      <option value="3W">3W</option>
                      <option value="4W">4W</option>
                      <option value="5W">5W</option>
                      <option value="5+3W">5+3W</option>
                      <option value="5+5W">5+5W</option>
                      <option value="6W">6W</option>
                      <option value="7W">7W</option>
                      <option value="7+7W">7+7W</option>
                      <option value="8W">8W</option>
                      <option value="9W">9W</option>
                      <option value="10W">10W</option>
                      <option value="10+10W">10+10W</option>
                      <option value="12W">12W</option>
                      <option value="15W">15W</option>
                      <option value="18W">18W</option>
                      <option value="18+1W">18+1W</option>
                      <option value="20W">20W</option>
                      <option value="22W">22W</option>
                      <option value="24W">24W</option>
                      <option value="26W">26W</option>
                      <option value="28W">28W</option>
                      <option value="30W">30W</option>
                      <option value="32W">32W</option>
                      <option value="35W">35W</option>
                      <option value="36W">36W</option>
                      <option value="36+1W">36+1W</option>
                      <option value="40W">40W</option>
                      <option value="45W">45W</option>
                      <option value="48W">48W</option>
                      <option value="50W">50W</option>
                      <option value="70W">70W</option>
                      <option value="90W">90W</option>
                      <option value="100W">100W</option>
                      <option value="150W">150W</option>
                      <option value="200W">200W</option>
                  </select>
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                   <div class="form-group">
                      <label for="Price">Price</label>
                      <input type="text" class="form-control" name ="pro_price" id="pro_price">
                  </div>
              </div>   
               <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="Color">Color</label>
                      <select class="form-control" id="pro_color" name="pro_color" id="pro_color">
                          <option value="Warm">Warm</option>
                          <option value="Natural">Natural</option>
                          <option value="Red">Red</option>
                          <option value="Blue">Blue</option>
                          <option value="Green">Green</option>
                          <option value="Orange">Orange</option>
                          <option value="Yellow">Yellow</option>
                          <option value="Pink">Pink</option>
                          <option value="RGB">RGB</option>
                          <option value="3 in One">3 in One</option>
                      </select>
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="mcontact">Packaging</label>
                      <input type="text" class="form-control" name ="pro_packaging" id="pro_packaging">
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="date">Date</label>
                      <input type="date" class="form-control" name = "pro_date" id="pro_date">
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="Cutting Size">Cutting Size</label>
                      <input type="text" class="form-control" name = "pro_csize" id="pro_csize">
                  </div>
              </div>
             
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="Shape">Shape</label>
                      <select class="form-control" id="pro_shape" name="pro_shape">
                          <option value="Round">Round</option>
                          <option value="Square">Square</option>
                      </select>
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="remark">Remarks</label>
                      <textarea class="form-control" rows="1" name = "pro_remark" id="pro_remark"></textarea>
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="website">Full Size</label>
                      <input type="text" class="form-control" name = "pro_fsize" id="pro_fsize">
                  </div>
              </div>
              <p>&nbsp;</p>
              <button type="submit" name="updateproducts" id="updateproducts" value="" class="btn btn-success" >Update</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-sm-12 col-md-12">
                <span id="warningmsg" style="font-family:verdana; color:red;font-size:14px;font-weight:bold;text-align:left"></span>
          </div>
        
      </div>
    </div>

  </div>
</div>
<?php include 'includes/jslinks.php'; ?>

  <script type="text/javascript">
	$(document).ready(function(){
             $('#insProductForm').submit(function(e){
                   e.preventDefault(); 
                           var  url = "<?php echo base_url('home/do_upload')?>";
		         $.ajax({
		             url:url,
		             type:"post",
		             data:new FormData(this), //this is formData
		             processData:false,
		             contentType:false,
		             cache:false,
		             async:false,
		              success: function(data){
//		                  alert("Upload Image Successful.");
                                    alert('Product add Successfully');
                                    $('#insProducts').find('#insProductForm').each(function(){
                                    this.reset();
                                    });
                                    $('#insProducts').modal('hide');
//                                    alert(data);
                                   location.reload();
		           }
                           
		         });
		});
		

	});
	
</script>
  <script type="text/javascript"> 
    
    function edit_products(id)
    { 
     alert(id);
     // show bootstrap modal
      $('#updProducts').modal('show');
      
      $("#updProducts").on('shown.bs.modal', function(){
            //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo base_url('home/products_edit')?>/"+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
              
            $('[name="pro_id"]').val(data.pro_id);
            $('[name="pro_name"]').val(data.pro_name);
            $('[name="pro_code"]').val(data.pro_code);
            $('[name="pro_watt"]').val(data.pro_watt);
            $('[name="pro_price"]').val(data.pro_price);
            $('[name="pro_color"]').val(data.pro_color);
            $('[name="pro_packaging"]').val(data.pro_packaging);
            $('[name="pro_date"]').val(data.pro_date);
            $('[name="pro_csize"]').val(data.pro_csize);
            $('[name="pro_shape"]').val(data.pro_shape);
            $('[name="pro_remark"]').val(data.pro_remark);
            $('[name="pro_fsize"]').val(data.pro_fsize);
            $('[name="pro_imgurl"]').val(data.pro_imgurl);
           

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
        
      
        });
        
      });
   
    } 
    
   function addProducts()
    { 
     // show bootstrap modal
      $('#insProducts').modal('show');
      
      $("#insProducts").on('shown.bs.modal', function(){
            $('#insProducts').find('#insProductForm').each(function(){
               this.reset();
                }); 
            //Ajax Load data from ajax
      });
   }
   
  $("#updProductForm").submit(function(){
        alert("The Update was clicked.");
            var id = $("#pro_id").val();
            alert(id);
            var  url = "<?php echo base_url('home/products_update')?>";
		         $.ajax({
		             url:url,
		             type:"post",
		             data:new FormData(this), //this is formData
		             processData:false,
		             contentType:false,
		             cache:false,
		             async:false,
		              success: function(data){
		                  alert(data);
                                    alert('Product Update Successfully');
                                    $('#updProducts').find('#updProductForm').each(function(){
                                    this.reset();
                                    });
                                    $('#updProducts').modal('hide');
//                                    alert(data);
                                   location.reload();
		           }
                           
		         });
        });
  </script>
  
  <script>
     function delete_products(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
        var  url = "<?php echo base_url('home/delete_products')?>/"+id;
          $.ajax({
            url : url,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

      }
    }
     
  
  
  
  </script>
</body>
</html>
