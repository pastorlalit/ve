<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/images/vibrantfevicon.png" " />
        <title>Users</title>
        <!-- Tell the browser to be responsive to screen width -->
        <?php include 'includes/csslinks.php'; ?>
    </head>
    <body class="hold-transition sidebar-mini skin-green">
        <div class="wrapper">
            <?php include 'includes/header.php'; ?>
            <?php include 'includes/sidebar.php'; ?>
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Users
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url() ?>admin-panel"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Users</li>
                    </ol>
                </section>
                <p>&nbsp;</p>
                <!-- Main content -->
                <section class="content">
                    <!-- Small boxes (Stat box) -->
                    
                    <div class="row">
                        <section class="col-lg-12 connectedSortable">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <?php 
                                                   $userUpdateMsg = $this->session->flashdata('userUpdateMsg');
                                                    switch ($userUpdateMsg) {
                                                    case "success":
                                                        echo '<div class="alert alert-success square " data-close="true">
                                                               <p>User Updated Successfully! <i class="fa fa-thumbs-o-up ico-block"></i></p>
                                                              </div>';
                                                    break;
                                                    case "error":
                                                    echo '<div class="alert alert-danger square " data-close="true">
                                                                <p><i class="fa fa-info-circle"></i> Something went wrong!</p>
                                                         </div>';
                                                    break;
                                                   
                                                    default:
                                                    
                                                   
                                                    }
                                                    ?>
                                            <div class="pull-right">
                                                <div class="pull-right box-tools">
                                                    <a id="add__blog" href="<?php echo base_url() ?>add-video" type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add</a>
                                                    <a id="reload__blogs" href="<?php echo base_url() ?>users" type="button" class="btn btn-warning">
                                                        <i class="fa fa-repeat"></i> Reload
                                                    </a>
                                                    

                                                </div>
                                            </div>
                                        </div><!-- /.box-header -->

                                         <div class="box-body">
                                             
                                            <div class="table-responsive"> 
                                                <table id="admn-datatables" class="table table-bordered table-hover ">
                                                    <thead>
                                                        <tr>
                                                            <th width="5%">S.N.</th>
                                                            <th width="10%">Name</th>
                                                            <th width="25%">Username / Email</th>
                                                           
                                                            <th width="10%">contact_no</th>
                                                            <th width="10%">Type</th>
                                                            <th width="20%">Status</th>
                                                            <th width="30%">Date</th>
                                                            <th width="5%" colspan="3" style="text-align:center">Action</th>
                                                        </tr>
                                                         
                                                    </thead>
                                                    <tbody>
                                                          <tbody>
                                                        <?php
                                                        $sn = 0;
                                                        
                                                        if (!empty($users)): foreach ($users as $user):
                                                               
                                                                $sn++;
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $sn; ?></td>
                                                            <td><?php echo $user->name; ?></td>
                                                            <td><?php echo $user->email; ?></td>
                                                            
                                                            <td><?php echo $user->contact_no; ?></td>
                                                            <td><?php echo $user->user_type; ?></td>
                                                            <td><?php 
                                                                if($user->status==='Active'){ 
                                                                   ?>
                                                                <button class="btn btn-success" onclick="updateStatus(<?php echo $user->user_id;?>, 'Inactive')"><?php echo $user->status; ?> </button>
                                                               <?php }else if($user->status=='Inactive'){ ?>
                                                                     <button class="btn btn-danger " onclick="updateStatus(<?php echo $user->user_id;?>, 'Active')"><?php echo $user->status; ?> </button>
                                                               <?php  }
                                                               ?>
                                                            </td>
                                                            <td><?php 
                                                             $vdate = $user->date;
                                                                        $date = date("d-m-Y", strtotime($vdate));
                                                                 echo $date; 
                                                           ?></td>
                                                            
                                                            <td><button id ="preview__blog" onclick="previewVideo(<?php echo $user->user_id; ?>)" type="button" class="btn btn-success btn-sm"  title="Click here to preview user"><i class="fa fa-eye"></i></button></td>
                                                            <td><button id="edit__blog" type="button" onclick="editVideo(<?php echo $user->user_id; ?>)" class="btn btn-warning btn-sm"  title="Click here to edit user"><i class="fa fa-pencil-square-o"></i></button></td>
                                                            <td><button  id="delete__blog" onclick="delVideo(<?php echo $user->user_id; ?>)" type="button" class="btn btn-danger btn-sm"  title="Click here to delete user"><i class="fa fa-times"></i></button></td>
                                                           
                                                        </tr>
                                                            <?php
                                                            endforeach;
                                                        else:
                                                            ?>
                                                        <tr>
                                                            <td colspan="8">
                                                                <p class="text-red"><b>No data found..</b></p>
                                                            </td>
                                                        </tr>
                                                          
                                                        <?php endif; ?>  
                                                    </tbody>
                                                   
                                                    <tfoot>

                                                    </tfoot>
                                                </table>
                                            </div>         

                                        </div>
                                        <div class="box-footer">
                                            
                                            <div class="box-tools pull-right">
                                                <?php  echo $this->pagination->create_links();   ?> 
                                            </div>
                                        </div> <!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div><!-- /.col -->
                            </div>
                        </section>
                        
                    </div>
                    
                  




                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
<?php include 'includes/footer.php'; ?>

            <!-- Control Sidebar -->


            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 3 -->

<?php include 'includes/jslinks.php'; ?>
        <script type="text/javascript">
              function delVideo(id){
                  if(confirm("Are you want to delete?")){
                       window.location.href = "<?php echo base_url().'Users/delVideo/'?>"+id;
                   }
                }
              function updateStatus(id, status){
                  if(confirm("Are you want to update?")){
                       window.location.href = "<?php echo base_url().'User/updateStatus/'?>"+id+"/"+status;
                   }
                }
             function previewVideo(id){
              window.location.href = "<?php echo base_url().'User/videoDetails/'?>"+id;
             }
             function editVideo(id){
                 window.location.href = "<?php echo base_url().'User/editVideo/'?>"+id;
             }
        </script>

    </body>
</html>
