<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/images/vibrantfevicon.png" " />
  <title>View Vocab</title>
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
         Vocabulary
        <small>Detail</small>
      </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>admin-panel"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url() ?>vocabulary"><i class="fa fa-pencil-square-o"></i> Vocabulary</a></li>
            <li class="active">View Vocab</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="pull-right">
            <div class="pull-right box-tools">
                <a id="go__back" href="<?php echo base_url() ?>vocabulary" type="button" class="btn btn-success"><i class="fa fa-backward"></i> Back</a>
            </div>
        </div> 
        <div class="clearfix"></div>
        
      <div class="row">
          <div class="col-md-2"></div>
            <div class="col-md-8">
                  <div class="box box-success">
                      <div class="box-header">
                          <h1 class="box-title blp-list-title text-uppercase" id="vocab-title">Vocabulary</h1>
                          <small>
                              <b><?php
                                  $vdate = $vocab->date;
                                  $date = date("d-m-Y", strtotime($vdate));
                                  echo " " . $date;
                                  ?>
                              </b>
                          </small>
                      </div>
                     
                     
                      <div class="vdp-content">
                      <?php 
                         $description = $this->typography->auto_typography($vocab->description);
                         echo $description ?>
                      </div>
                    <div class="box-footer">

                        
                    </div>  
                  </div>
              </div>
          <div class="col-md-2"></div>
        
        
    
      </div>
     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'includes/footer.php';?>

  <!-- Control Sidebar -->
  

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

<?php include 'includes/jslinks.php'; ?>
</body>
</html>
