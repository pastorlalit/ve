<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/images/vibrantfevicon.png" " />
  <title>View Blog</title>
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
         Blogs
        <small>Blog Detail</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>admin-panel"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url() ?>view-blogs"> Blogs</a></li>
        <li class="active">Blog Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="pull-right">
            <div class="pull-right box-tools">
                <a id="go__back" href="<?php echo base_url() ?>view-blogs" type="button" class="btn btn-success"><i class="fa fa-backward"></i> Back</a>
            </div>
        </div> 
      <div class="row">
          <div class="col-md-1"></div>
            <div class="col-md-10">
                  <div class="box box-success">
                      <img class=""  width="100%" src="<?php echo base_url().substr($blog->blog_image,2); ?>"/>
                      <h3 class="box-title blp-list-title"><?php echo $blog->title; ?></h3>
                      <div class="bdp-content">
                      <?php 
                      $description = $this->typography->auto_typography($blog->description);
                      echo $description ?>
                      </div>
                      
                  </div>
              </div>
          <div class="col-md-1"></div>
        
        
    
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
