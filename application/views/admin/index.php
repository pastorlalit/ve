<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/images/vibrantfevicon.png" " />
        <title>Vibrant Education</title>
        <!-- Tell the browser to be responsive to screen width -->
        <?php include 'includes/csslinks.php'; ?>
    </head>
    <body class="sidebar-mini skin-green" >
        <div class="wrapper">

            <?php include 'includes/header.php'; ?>

            <?php include 'includes/sidebar.php'; ?>
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-purple-active">
                                <div class="inner">
                                    <h3>15</h3>

                                    <p>Enquiries</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>10</h3>
                                    <p>Registration this month</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>30,000</h3>

                                    <p>Due Payments</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>98</h3>

                                    <p>Total Students</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                        <section class="col-lg-12 connectedSortable">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h3 class="box-title">Queries</h3>
                                            <div class="pull-right">
                                                <div class="pull-right box-tools">

                                                    <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>

                                                </div>
                                            </div>
                                        </div><!-- /.box-header -->

                                        <div class="box-body">
                                            <div class="table-responsive"> 
                                               <?php print_r($_SESSION['user_id']); echo $this->session->uname ?>   
                                              
                                                <table id="data" class="table table-bordered table-hover ">
                                                    <thead>
                                                        <tr>
                                                            <th width="5%">S.N.</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Contact</th>
                                                            <th>city</th>
                                                            <th>Subject</th>
                                                            <th>Message</th>

                                                            <th colspan="2" style="text-align:center">Action</th>
                                                        </tr>

                                                        <?php $sn = 0;
                                                        foreach ($enquiries as $enquiry) { ?>
                                                            <tr>
                                                                <td width="5%"><?php echo ++$sn; ?></td>
                                                                <td><?php echo $enquiry->contactname; ?></td>
                                                                <td><?php echo $enquiry->contactemail; ?></td>
                                                                <td><?php echo $enquiry->contactnumber; ?></td>
                                                                <td><?php echo $enquiry->contactcity; ?></td>
                                                                <td><?php echo $enquiry->contactsubject; ?></td>
                                                                <td><?php echo $enquiry->contactmessage; ?></td>
                                                                <td colspan="2" style="text-align:center">
                                                                    <button type="button" class="btn btn-success btn-sm" onclick="edit_query(<?php echo $enquiry->contactid; ?>)"><i class="fa fa-pencil"></i></button>
                                                                    <button type="button" class="btn btn-danger btn-sm" onclick="delete_query(<?php echo $enquiry->contactid; ?>)"><i class="fa fa-times"></i></button>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                    <tfoot>

                                                    </tfoot>
                                                </table>
                                            </div>         

                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div><!-- /.col -->
                            </div>
                        </section>


                        <section class="col-lg-5 connectedSortable">

                            <div class="box box-solid bg-purple">
                                <div class="box-header">
                                    <i class="fa fa-calendar"></i>

                                    <h3 class="box-title">Calendar</h3>
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <!-- button with a dropdown -->
                                        <!--                <div class="btn-group">
                                                          <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                                            <i class="fa fa-bars"></i></button>
                                                          <ul class="dropdown-menu pull-right" role="menu">
                                                            <li><a href="#">Add new event</a></li>
                                                            <li><a href="#">Clear events</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">View calendar</a></li>
                                                          </ul>
                                                        </div>-->
                                        <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                    <!-- /. tools -->
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <!--The calendar -->
                                    <div id="calendar" style="width: 100%"></div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer text-black">
                                    <div class="row">

                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                            </div>
                            <!-- /.box -->

                        </section>
                        <!-- right col -->
                    </div>
                    <!-- /.row (main row) -->




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


    </body>
</html>
