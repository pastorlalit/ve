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
<body class="hold-transition skin-blue sidebar-mini">
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
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">View Blog</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
         
      <div class="row">
          <div class="col-md-2"></div>
            <div class="col-md-8">
                  <div class="box box-success">
                      <img class="" width="100%"src="<?php echo base_url().substr($blog->blog_image,2); ?>"/>
                      <h3 class="box-title blp-list-title"><?php echo $blog->title; ?></h3>
                      <div class="bdp-content">
                      <?php 
                      $description = $this->typography->auto_typography($blog->description);
                      echo $description ?>
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
