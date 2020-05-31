<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/images/vibrantfevicon.png"  />
        <title>Current Affairs</title>
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
                        Current Affairs
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url() ?>admin-panel"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Current Affairs</li>
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
                                                   $ca_update_Msg = $this->session->flashdata('ca_update_Msg');
                                                    switch ($ca_update_Msg) {
                                                    case "no-record":
                                                        echo '<div class="alert alert-success square " data-close="true">
                                                               <p>No record found! <i class="fa fa-thumbs-o-up ico-block"></i></p>
                                                              </div>';
                                                    break;
                                                    case "update":
                                                        echo '<div class="alert alert-success square " data-close="true">
                                                               <p>Record updated Successfully! <i class="fa fa-thumbs-o-up ico-block"></i></p>
                                                              </div>';
                                                    break;
                                                    case "deleted":
                                                        echo '<div class="alert alert-success square " data-close="true">
                                                               <p>Selected record have been deleted successfully! <i class="fa fa-thumbs-o-up ico-block"></i></p>
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
                                                    <a id="add__blog" href="<?php echo base_url() ?>add-current-affairs" type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add</a>
                                                    <a id="reload__blogs" href="<?php echo base_url() ?>view-current-affairs" type="button" class="btn btn-warning">
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
                                                            <th width="10%">Thumbnail</th>
                                                            <th width="10%">Title</th>
                                                            <th width="30%">Description</th>
                                                            <th width="15%">URL Slug</th>
                                                            <th width="20%">Date</th>
                                                            <th width="15%">Created_at</th>
                                                            <th width="5%" colspan="3" style="text-align:center">Action</th>
                                                        </tr>
                                                         
                                                    </thead>
                                                    <tbody>
                                                          <tbody>
                                                        <?php
                                                        $sn = 0;
                                                        if (!empty($currentaffairs)): foreach ($currentaffairs as $currentaffair):
                                                                $description = word_limiter($currentaffair->ca_description, 20, '&#8230;');
                                                                $sn++;
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $sn; ?></td>
                                                            <td>
                                                                <?php 
                                                                    if($currentaffair->ca_image){ ?>
                                                                        <img src ="<?php echo base_url().substr($currentaffair->ca_image, 2); ?>" height="50" width="50"/>
                                                                   <?php }else{ ?>
                                                                        <img src ="<?php echo base_url()?>/assets/uploads/no-image.png" height="50" width="50"/>
                                                                  <?php  }
                                                            
                                                            ?>
                                                                </td>
                                                            <td><?php echo $currentaffair->ca_title; ?></td>
                                                            <td><?php echo $description; ?></td>
                                                            <td><?php echo $currentaffair->url_slug ?></td>
                                                            
                                                            <td><?php 
                                                                $date = $currentaffair->ca_date;
                                                                        $date = date("F j, Y", strtotime($date));
                                                                 echo $date; 
                                                                ?>
                                                            </td>
                                                            <td><?php 
                                                                $created_at = $currentaffair->ca_created_at;
                                                                        $posted_on = date("F j, Y", strtotime($created_at));
                                                                 echo $posted_on; 
                                                                ?>
                                                            </td>
                                                            <td><button id ="preview__blog" onclick="preview_CurrentAffairs(<?php echo $currentaffair->ca_id; ?>)" type="button" class="btn btn-success btn-sm"  title="Click here to preview content"><i class="fa fa-eye"></i></button></td>
                                                            <td><button id="edit__blog" type="button" onclick="edit_CurrentAffairs(<?php echo $currentaffair->ca_id; ?>)" class="btn btn-warning btn-sm"  title="Click here to edit content"><i class="fa fa-pencil-square-o"></i></button></td>
                                                            <td><button  id="delete__blog" onclick="del_CurrentAffairs(<?php echo $currentaffair->ca_id; ?>)" type="button" class="btn btn-danger btn-sm"  title="Click here to delete content"><i class="fa fa-times"></i></button></td>
                                                           
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
              function del_CurrentAffairs(id){
                  if(confirm("Are you want to delete?")){
                       window.location.href = "<?php echo base_url().'CurrentAffairs/delCurrentAffairs/'?>"+id;
                   }
                }
             function preview_CurrentAffairs(id){
              window.location.href = "<?php echo base_url().'CurrentAffairs/currentAffairsDetails/'?>"+id;
             }
             function edit_CurrentAffairs(id){
                 window.location.href = "<?php echo base_url().'CurrentAffairs/editCurrentAffairs/'?>"+id;
             }
        </script>

    </body>
</html>
