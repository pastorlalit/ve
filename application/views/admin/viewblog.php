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
        <small>View Blog</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">View Blog</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
         
      <div class="row">
        <?php $sn = 0;
          foreach ($blogs as $blog) { 
              $description = word_limiter($blog->description, 40, '&#8230;');
              ?>
              <div class="col-md-3">
                  <div class="box box-success blp-content-box">
                      <img class="blp-img"src="<?php echo base_url().substr($blog->blog_image, 2); ?>"/>
                      <h3 class="box-title blp-list-title"><?php echo $blog->title; ?></h3>
                      <p class="blp-content"><?php echo $description; ?></p>
                      <a class="blp-link" id="<?php echo $blog->blog_id; ?>" href="<?php echo base_url().'Blog/blogDetails/'.$blog->blog_id?>">Read more</a>
                  </div>
              </div>
          <?php } ?>  
        
        
    
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
