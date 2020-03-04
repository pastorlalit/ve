<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/images/vibrantfevicon.png" " />
        <title>Enquiries</title>
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
                        Enquiries
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url() ?>admin-panel"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Enquiries</li>
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
                                            $delEqMsg = $this->session->flashdata('delEqMsg');
                                            switch ($delEqMsg) {
                                                case "success":
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
                                            <!-- Display the status message -->
                                            <?php if (!empty($statusMsg)) { ?>
                                                <div class="alert alert-success"><?php echo $statusMsg; ?></div>
                                            <?php } ?>
                                           
                                               
                                                 
                                            
                                             
                                            <div class="pull-right">
                                                <div class="pull-right box-tools">
                                                    <a id="add__blog" href="<?php echo base_url() ?>add-enquiries" type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add</a>
                                                    <a id="reload__blogs" href="<?php echo base_url() ?>enquiries" type="button" class="btn btn-warning">
                                                        <i class="fa fa-repeat"></i> Reload
                                                    </a>
                                                </div>
                                            </div>
                                        </div><!-- /.box-header -->

                                        <div class="box-body">

                                            <div class="table-responsive">
                                               
                                              <form name="bulk_action_form" action="" method="post" onSubmit="return delete_confirm();"/>
                                                <table id="admn-datatables" class="table table-bordered table-hover ">
                                                    <thead>
                                                        <tr>
                                                            <th width="5%">S.N.</th>
                                                            <th width="10%">Date</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Contact</th>
                                                            <th>city</th>
                                                            <th>Subject</th>
                                                            <th>Message</th>
                                                            <th><input style ="float:left; margin-right:5px; height:15px; width:18px;" type="checkbox" id="select_all" class="checkbox" value=""/></span>  Select All</th> 
                                                            <th  style="text-align:center">Action</th>
                                                        </tr>

                                                    </thead>
                                                    <tbody>



                                                        <?php
                                                        $sn = 0;
                                                        foreach ($enquiries as $enquiry) {
                                                            ?>
                                                            <tr>
                                                                <td width="5%"><?php echo ++$sn; ?></td>
                                                                <td><?php 
                                                                        $created_at = $enquiry->createdtime;
                                                                        $posted_on = date("d-m-Y", strtotime($created_at));
                                                                        echo $posted_on;
                                                                        ?>
                                                                </td>
                                                                <td><?php echo $enquiry->contactname; ?></td>
                                                                <td><?php echo $enquiry->contactemail; ?></td>
                                                                <td><?php echo $enquiry->contactnumber; ?></td>
                                                                <td><?php echo $enquiry->contactcity; ?></td>
                                                                <td><?php echo $enquiry->contactsubject; ?></td>
                                                                <td><?php echo $enquiry->contactmessage; ?></td>
                                                                <td style="text-align:center">
                                                                    <label class="enq__checkbox">
                                                                        <input type="checkbox"  name="checked_id[]" class="checkbox" value="<?php echo $enquiry->contactid; ?>">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </td>
                                                                
                                                                <td style="text-align:center"><button type="button" class="btn btn-danger btn-sm" onclick="delEnquiry(<?php echo $enquiry->contactid; ?>)"><i class="fa fa-times"></i></button></td>
                                                            </tr>
                                                        <?php } ?>

                                                    </tbody>
                                                    <tfoot>
                                                            
                                                    </tfoot>
                                                </table>
                                                
                                                         
                                            </div>         

                                        </div>
                                        <div class="box-footer">
                                            <input type="submit" class="btn btn-danger" name="bulk_delete_submit" value="Delete Selected Records"/>
                                            </form> 
                                            <div class="box-tools pull-right">
                                                
                                                <?php echo $this->pagination->create_links(); ?> 
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
            function delEnquiry(id) {
                if (confirm("Are you want to delete?")) {
                    window.location.href = "<?php echo base_url() . 'Enquiries/deleteEnquiry/' ?>" + id;
                }
            }
            

        </script>
        <script>
            function delete_confirm() {
                if ($('.checkbox:checked').length > 0) {
                    var result = confirm("Are you sure to delete selected users?");
                    if (result) {
                        return true;
                    } else {
                        return false;
                    }
                } else {
                    alert('Select at least 1 record to delete.');
                    return false;
                }
            }

            $(document).ready(function () {
                $('#select_all').on('click', function () {
                    if (this.checked) {
                        $('.checkbox').each(function () {
                            this.checked = true;
                        });
                    } else {
                        $('.checkbox').each(function () {
                            this.checked = false;
                        });
                    }
                });

                $('.checkbox').on('click', function () {
                    if ($('.checkbox:checked').length === $('.checkbox').length) {
                        $('#select_all').prop('checked', true);
                    } else {
                        $('#select_all').prop('checked', false);
                    }
                });
            });
        </script>
    </body>
</html>
