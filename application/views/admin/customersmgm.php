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
        <li class="active">Customers</li>
      </ol>
    </section>
    <section class="content">

      <!-- Default box -->
      <div class="box  box-success">
          
        <div class="box-header with-border">
          <h3 class="box-title">Business Partners </h3>
          
          <div class="box-tools pull-right">
             <button type="button" class="btn btn-success" onclick="addCustomers()" id="addCustomers">Add</button>
      
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
                        <th>Name</th>
                        <th>Contact Person</th>
                        <th>Position</th>
                        <th>GST</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Landline</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Dob</th>
                       
                        <th  style="text-align:center">Action</th>
                      </tr>
                    </thead>
                     
                    <tbody>
                         <?php $sn = 0; foreach($customers as $customer){ ?>
                      <tr>
                        <td><?php echo ++$sn;?></td>
                        <td><?php echo $customer->cust_firm;?></td>
                        <td><?php echo $customer->cust_name;?></td>
                        <td><?php echo $customer->cust_position;?></td>
                        <td><?php echo $customer->cust_gstnumber;?></td>
                        <td><?php echo $customer->cust_email;?></td>
                        <td><?php echo $customer->cust_mobile;?></td>
                        <td><?php echo $customer->cust_landline;?></td>
                        <td><?php echo $customer->cust_address;?></td>
                        <td><?php echo $customer->cust_city;?></td>
                        <td><?php echo $customer->cust_dob;?></td>
                        <td  width ="10%" style="text-align:center">
                             <button type="button" class="btn btn-primary btn-sm" onclick="edit_query()" title="Click here to view more"><i class="fa fa-expand"></i></button>
                             <button type="button" class="btn btn-success btn-sm" onclick="edit_customer(<?php echo $customer->cust_id;?>)" title="Click here to edit"><i class="fa fa-pencil"></i></button>
                             <button type="button" class="btn btn-danger btn-sm" onclick="delete_customer(<?php echo $customer->cust_id;?>)" title="Click here to delete"><i class="fa fa-times"></i></button>
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
<div id="insCustomers" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Customer</h4>
      </div>
      <div class="modal-body">
          <form role="form" method="POST" id="insCustomerForm">
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name ="cust_name" id="cust_name">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="orgname">Org. Name</label>
                  <input type="text" class="form-control" name ="cust_firm" id="cust_firm">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="position">Position</label>
                  <input type="text" class="form-control" name ="cust_position" id="cust_position" value="Owner">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                   <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name ="cust_email" id="cust_email">
                  </div>
              </div>    
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="mcontact">Mobile Number</label>
                      <input type="text" class="form-control" name ="cust_mobile" id="cust_mobile">
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="dob">Date of Birth</label>
                      <input type="date" class="form-control" name = "cust_dob" id="cust_dob">
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="website">Website</label>
                      <input type="text" class="form-control" name = "cust_website" id="cust_website">
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="lcontact">Land Line No.</label>
                      <input type="text" class="form-control" name ="cust_landline" id="cust_landline">
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="gstno">GST Number</label>
                      <input type="text" class="form-control" name = "cust_gstnumber" id="cust_gstnumber">
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="panno">PAN Number</label>
                  <input type="text" class="form-control" name = "cust_pannumber" id="cust_pannumber">
              </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="panno">Address</label>
                  <input type="text" class="form-control" name = "cust_address" id="cust_address">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="city">City</label>
                  <input type="text" class="form-control" name = "cust_city" id="cust_city">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="state">State</label>
                  <input type="text" class="form-control" name = "cust_state" id="cust_state">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="cust_ddate">Dealership Date</label>
                  <input type="date" class="form-control" name = "cust_ddate" id="cust_ddate">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="remark">Remarks</label>
                      <textarea class="form-control" rows="1" name = "cust_remark" id="cust_remark"></textarea>
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="doc">Aadhar Card Copy</label>
                  <input type="file" class="form-control" name = "cust_aadhar" id="cust_aadhar">
              </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="doc">Pancard Copy</label>
                  <input type="file" class="form-control" name = "cust_pancard" id="cust_pancard">
              </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="doc">GST Certificate</label>
                  <input type="file" class="form-control" name = "cust_gst" id="cust_gst">
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

<div id="updCustomers" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Customer</h4>
      </div>
      <div class="modal-body">
          <form role="form" method="POST" id="updCustomersForm">
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="name">Name</label>
                  <input type="hidden" class="form-control" name ="cust_id" id="cust_id">
                  <input type="text" class="form-control" name ="cust_name" id="cust_name">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="orgname">Org. Name</label>
                  <input type="text" class="form-control" name ="cust_firm" id="cust_firm">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="position">Position</label>
                  <input type="text" class="form-control" name ="cust_position" id="cust_position" value="Owner">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                   <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name ="cust_email" id="cust_email">
                  </div>
              </div>    
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="mcontact">Mobile Number</label>
                      <input type="text" class="form-control" name ="cust_mobile" id="cust_mobile">
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="dob">Date of Birth</label>
                      <input type="text" class="form-control" name = "cust_dob" id="cust_dob">
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="website">Website</label>
                      <input type="text" class="form-control" name = "cust_website" id="cust_website">
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="lcontact">Land Line No.</label>
                      <input type="text" class="form-control" name ="cust_landline" id="cust_landline">
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="gstno">GST Number</label>
                      <input type="text" class="form-control" name = "cust_gstnumber" id="cust_gstnumber">
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="panno">PAN Number</label>
                  <input type="text" class="form-control" name = "cust_pannumber" id="cust_pannumber">
              </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="panno">Address</label>
                  <input type="text" class="form-control" name = "cust_address" id="cust_address">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="city">City</label>
                  <input type="text" class="form-control" name = "cust_city" id="cust_city">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="state">State</label>
                  <input type="text" class="form-control" name = "cust_state" id="cust_state">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="cust_ddate">Dealership Date</label>
                  <input type="text" class="form-control" name = "cust_ddate" id="cust_ddate">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="remark">Remarks</label>
                      <textarea class="form-control" rows="1" name = "cust_remark" id="cust_remark"></textarea>
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
<?php include 'includes/jslinks.php'; ?>
<script>
  function addCustomers()
    { 
     // show bootstrap modal
      $('#insCustomers').modal('show');
      
      $("#insCustomers").on('shown.bs.modal', function(){
            //Ajax Load data from ajax
     });
    }
  
</script>
  
 <script type="text/javascript">
	$(document).ready(function(){
            $('#insCustomerForm').submit(function(e){
                   e.preventDefault(); 
                   alert('Click');
                           var  url = "<?php echo base_url('home/insertCustomer')?>";
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
                                    alert('Customer add Successfully');
                                    $('#insCustomers').find('#insCustomerForm').each(function(){
                                    this.reset();
                                    });
                                    $('#insCustomers').modal('hide');
//                                    alert(data);
                                   location.reload();
		           }
                           
		         });
		});
		

	});

    
</script>
<script>
    function edit_customer(id){
            
                  alert(id);
     // show bootstrap modal
      $('#updCustomers').modal('show');
      
      $("#updCustomers").on('shown.bs.modal', function(){
            //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo base_url('home/customer_edit')?>/"+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {   
             
            $('[name="cust_id"]').val(data.cust_id);
            $('[name="cust_name"]').val(data.cust_name);
            $('[name="cust_firm"]').val(data.cust_firm);
            $('[name="cust_position"]').val(data.cust_position);
            $('[name="cust_email"]').val(data.cust_email);
            $('[name="cust_mobile"]').val(data.cust_mobile);
            $('[name="cust_dob"]').val(data.cust_dob);
            $('[name="cust_website"]').val(data.cust_website);
            $('[name="cust_landline"]').val(data.cust_landline);
            $('[name="cust_gstnumber"]').val(data.cust_gstnumber);
            $('[name="cust_pannumber"]').val(data.cust_pannumber);
            $('[name="cust_address"]').val(data.cust_address);
            $('[name="cust_city"]').val(data.cust_city);
            $('[name="cust_state"]').val(data.cust_state);
            $('[name="cust_ddate"]').val(data.cust_ddate);
            $('[name="cust_remark"]').val(data.cust_remark);
            
          
            
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
        
      
        });
        
      });
   }
  
    $("#updCustomersForm").submit(function(){
         var  url = "<?php echo base_url('home/customer_update')?>";
		         $.ajax({
		             url:url,
		             type:"post",
		             data:new FormData(this), //this is formData
		             processData:false,
		             contentType:false,
		             cache:false,
		             async:false,
		              success: function(data){
//		                  alert(data);
                                    alert('Customer Updated Successfully');
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
     function delete_customer(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
        var  url = "<?php echo base_url('home/delete_customer')?>/"+id;
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
