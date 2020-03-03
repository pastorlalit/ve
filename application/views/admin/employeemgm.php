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
          <h3 class="box-title">Employee Master </h3>
          
          <div class="box-tools pull-right">
             <button type="button" class="btn btn-success" onclick="addEmployee()" id="addCustomers">Add</button>
             <button type="button" class="btn btn-success" onclick="addCustomers()" id="addCustomers">Leaves</button>
             <button type="button" class="btn btn-success" onclick="addCustomers()" id="addCustomers">Visit Reports</button>
             <button type="button" class="btn btn-success" onclick="addCustomers()" id="addCustomers">Expense Reports</button>
      
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
                        <th>S.No.</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Designation</th>
                        <th>Department</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Parents Number</th>
                        <th>Joining Date</th>
                        <th>Aadhar No.</th>
                        <th>Pan No.</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th  style="text-align:center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                          <?php $sn = 0; foreach($employees as $employee){ ?>
                         <tr>
                        <td width="5%"><?php  echo ++$sn;  ?></td>
                        <td><?php echo $employee->emp_fname;?></td>
                        <td><?php echo $employee->emp_lname;?></td>
                        <td><?php echo $employee->emp_designation;?></td>
                        <td><?php echo $employee->emp_department;?></td>
                        <td><?php echo $employee->emp_email;?></td>
                        <td><?php echo $employee->emp_mob;?></td>
                        <td><?php echo $employee->emp_parentsnumber;?></td>
                        <td><?php echo $employee->emp_joiningdate;?></td>
                        <td><?php echo $employee->emp_aadhar;?></td>
                        <td><?php echo $employee->emp_panno;?></td>
                        <td><?php echo $employee->emp_address;?></td>
                        <td><?php echo $employee->emp_city;?></td>
                        <td><?php echo $employee->emp_state;?></td>
                         <td  style="text-align:center">
                             <button type="button" class="btn btn-primary btn-sm" onclick="viewProfile(<?php echo $employee->emp_id;?>)" title="Click here to view more"><i class="fa fa-expand"></i></button>
                             <button type="button" class="btn btn-success btn-sm" onclick="edit_employee(<?php echo $employee->emp_id;?>)" title="Click here to edit"><i class="fa fa-pencil"></i></button>
                             <button type="button" class="btn btn-danger btn-sm" onclick="delete_employee(<?php echo $employee->emp_id;?>)" title="Click here to delete"><i class="fa fa-times"></i></button>
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
<div id="insEmployee" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Employee</h4>
      </div>
      <div class="modal-body">
          <form role="form" method="POST" id="insEmployeeForm">
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="name">First Name</label>
                  <input type="text" class="form-control" name ="emp_fname" id="emp_fname">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="name">Last Name</label>
                  <input type="text" class="form-control" name ="emp_lname" id="emp_lname">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="name">Designation</label>
                  <input type="text" class="form-control" name ="emp_designation" id="emp_designation" value="">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="dept">Department</label>
                  <input type="text" class="form-control" name ="emp_department" id="emp_department" value="">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                   <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name ="emp_email" id="emp_email">
                  </div>
              </div>    
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="mcontact">Mobile Number</label>
                      <input type="text" class="form-control" name ="emp_mob" id="emp_mob">
                  </div>
              </div>
               <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="Parents Number">Parents Number</label>
                      <input type="text" class="form-control" name = "emp_parentsnumber" id="emp_parentsnumber">
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="ddate">Date of Birth</label>
                      <input type="date" class="form-control" name = "emp_dob" id="emp_dob">
                  </div>
              </div>
               <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="joiningdate">Joining Date</label>
                  <input type="date" class="form-control" name = "emp_joiningdate" id="emp_joiningdate">
                 </div>
              </div>
             <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="aadhar">Aadhar Number </label>
                      <input type="text" class="form-control" name = "emp_aadhar" id="emp_aadhar">
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="panno">PAN Number</label>
                  <input type="text" class="form-control" name = "emp_panno" id="emp_panno">
              </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="address">Address</label>
                   <textarea class="form-control" rows="1" name = "emp_address" id="emp_address"></textarea>
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="city">City</label>
                  <input type="text" class="form-control" name = "emp_city" id="emp_city">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="panno">State</label>
                  <input type="text" class="form-control" name = "emp_state" id="emp_state">
                 </div>
              </div>
             
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="remark">Remarks</label>
                      <textarea class="form-control" rows="1" name = "emp_remark" id="emp_remark"></textarea>
                  </div>
              </div>
               <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="doc">Employee Pic</label>
                  <input type="file" class="form-control" name = "emp_pic" id=emp_pic">
              </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="doc">Aadhar Card Copy</label>
                  <input type="file" class="form-control" name = "emp_aadharcopy" id="emp_aadharcopy">
              </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="doc">Pancard Copy</label>
                  <input type="file" class="form-control" name = "emp_pancopy" id="emp_pancopy">
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

<div id="updEmployee" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Employee</h4>
      </div>
      <div class="modal-body">
          <form role="form" method="POST" id="updEmployeeForm">
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="name">First Name</label>
                  <input type="hidden" class="form-control" name ="emp_id" id="emp_id">
                  <input type="text" class="form-control" name ="emp_fname" id="emp_fname">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="name">Last Name</label>
                  <input type="text" class="form-control" name ="emp_lname" id="emp_lname">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="name">Designation</label>
                  <input type="text" class="form-control" name ="emp_designation" id="emp_designation" value="">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="dept">Department</label>
                  <input type="text" class="form-control" name ="emp_department" id="emp_department" value="">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                   <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name ="emp_email" id="emp_email">
                  </div>
              </div>    
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="mcontact">Mobile Number</label>
                      <input type="text" class="form-control" name ="emp_mob" id="emp_mob">
                  </div>
              </div>
               <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="Parents Number">Parents Number</label>
                      <input type="text" class="form-control" name = "emp_parentsnumber" id="emp_parentsnumber">
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="ddate">Date of Birth</label>
                      <input type="date" class="form-control" name = "emp_dob" id="emp_dob">
                  </div>
              </div>
               <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="joiningdate">Joining Date</label>
                  <input type="date" class="form-control" name = "emp_joiningdate" id="emp_joiningdate">
                 </div>
              </div>
             <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="aadhar">Aadhar Number </label>
                      <input type="text" class="form-control" name = "emp_aadhar" id="emp_aadhar">
                  </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="panno">PAN Number</label>
                  <input type="text" class="form-control" name = "emp_panno" id="emp_panno">
              </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="address">Address</label>
                   <textarea class="form-control" rows="1" name = "emp_address" id="emp_address"></textarea>
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="city">City</label>
                  <input type="text" class="form-control" name = "emp_city" id="emp_city">
                 </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="panno">State</label>
                  <input type="text" class="form-control" name = "emp_state" id="emp_state">
                 </div>
              </div>
             
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                      <label for="remark">Remarks</label>
                      <textarea class="form-control" rows="1" name = "emp_remark" id="emp_remark"></textarea>
                  </div>
              </div>
               <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="doc">Employee Pic</label>
                  <input type="file" class="form-control" name = "emp_pic" id=emp_pic">
              </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="doc">Aadhar Card Copy</label>
                  <input type="file" class="form-control" name = "emp_aadharcopy" id="emp_aadharcopy">
              </div>
              </div>
              <div class="col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="doc">Pancard Copy</label>
                  <input type="file" class="form-control" name = "emp_pancopy" id="emp_pancopy">
              </div>
              </div>
             
              <button type="submit" name="updateemployee" id="updateemployee" value="" class="btn btn-success" >Submit</button>
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

<div id="viewprofile" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">View Profile</h4>
      </div>
      <div class="modal-body">
        
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
            $('#insEmployeeForm').submit(function(e){
                   e.preventDefault(); 
                           var  url = "<?php echo base_url('home/insertEmployee')?>";
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
                                    alert('Employee add Successfully');
                                    $('#insEmployee').find('#insEmployeeForm').each(function(){
                                    this.reset();
                                    });
                                    $('#insEmployee').modal('hide');
//                                    alert(data);
                                   location.reload();
		           }
                           
		         });
		});
		

	});

    
</script>

 <script type="text/javascript">
    function delete_query(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
        var  url = "<?php echo base_url('home/delete_query')?>/"+id;
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
    
   function addEmployee()
    { 
     // show bootstrap modal
      $('#insEmployee').modal('show');
      
      $("#insEmployee").on('shown.bs.modal', function(){
            //Ajax Load data from ajax
       
      
      });
      
 
    
    }
</script>
<script>
        function edit_employee(id){
            
                  alert(id);
     // show bootstrap modal
      $('#updEmployee').modal('show');
      
      $("#updEmployee").on('shown.bs.modal', function(){
            //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo base_url('home/employee_edit')?>/"+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {   
            $('[name="emp_id"]').val(data.emp_id);
            $('[name="emp_fname"]').val(data.emp_fname);
            $('[name="emp_lname"]').val(data.emp_lname);
            $('[name="emp_designation"]').val(data.emp_designation);
            $('[name="emp_department"]').val(data.emp_department);
            $('[name="emp_email"]').val(data.emp_email);
            $('[name="emp_mob"]').val(data.emp_mob);
            $('[name="emp_parentsnumber"]').val(data.emp_parentsnumber);
            $('[name="emp_dob"]').val(data.emp_dob);
            $('[name="emp_joiningdate"]').val(data.emp_joiningdate);
            $('[name="emp_aadhar"]').val(data.emp_aadhar);
            $('[name="emp_panno"]').val(data.emp_panno);
            $('[name="emp_address"]').val(data.emp_address);
            $('[name="emp_city"]').val(data.emp_city);
            $('[name="emp_state"]').val(data.emp_state);
            $('[name="emp_remark"]').val(data.emp_remark);
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
        
      
        });
        
      });
   }
  
    $("#updEmployeeForm").submit(function(){
         var  url = "<?php echo base_url('home/employee_update')?>";
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
                                    alert('Employee Updated Successfully');
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
     function delete_employee(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
        var  url = "<?php echo base_url('home/delete_employee')?>/"+id;
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
  <script>
function viewProfile()
    { 
     // show bootstrap modal
      $('#viewprofile').modal('show');
      
      $("#viewprofile").on('shown.bs.modal', function(){
            //Ajax Load data from ajax
       
      
      });
      }
  </script>     
      
      
</body>
</html>
