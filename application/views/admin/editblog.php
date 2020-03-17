<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/images/vibrantfevicon.png" " />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>Edit Blog</title>
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
                        <small>Edit Blog</small>
                    </h1>
                    <ol class="breadcrumb" id="bread__pointer">
                        <li><a href="<?php echo base_url() ?>admin-panel"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?php echo base_url() ?>view-blogs">Blogs</a></li>
                        <li class="active">Edit Blog</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">

                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                  <?php
                                   $resultMsg = $this->session->flashdata('resultMsg');
                                    switch ($resultMsg) {
                                        case "success":
                                            echo '<div class="col-md-6 alert alert-success square " data-close="true">
                                                               <p>Blog Updated Successfully! <i class="fa fa-thumbs-o-up ico-block"></i></p>
                                                              </div>';
                                            break;
                                        case "error":
                                            echo '<div class="col-md-6 alert alert-danger square " data-close="true">
                                                                <p><i class="fa fa-info-circle"></i>  Something went wrong!</p>
                                                         </div>';
                                            break;

                                        default:
                                            echo'<div class="form-msg col-md-6" id="login-txt-box">
                                                            <span class="text-login-msg"><b>Please enter complete details.</b></span>
                                                         </div>';
                                    }
                                    ?>
                                    <div class="pull-right">
                                        <div class="pull-right box-tools">
                                            <a id="go__back" href="<?php echo base_url() ?>view-blogs" type="button" class="btn btn-success"><i class="fa fa-backward"></i> Back</a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $attributes = array('name' => 'add-blog', 'role' => 'form', 'enctype' => 'multipart/form-data', 'accept-charset' => 'utf-8');
                                echo form_open('Blog/editBlog/' . $blog->blog_id, $attributes);
                                ?>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <?php echo form_input(['class' => 'form-control', 'name' => 'title', 'id' => 'title', 'type' => 'text', 'placeholder' => 'Enter Title', 'value' => set_value('title', $blog->title)]); ?>

                                    </div>
                                    <div class="validation-msg"><?php echo form_error('title') ?></div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <?php echo form_textarea(['class' => 'form-control', 'rows' => '5', 'name' => 'description', 'id' => 'editor1', 'type' => 'text', 'placeholder' => 'Enter description', 'value' => set_value('description', $blog->description)]); ?>
                                    </div>
                                    <div class="validation-msg"><?php echo form_error('description') ?></div>
                                    <div class="form-group">
                                        <?php 
                                            if($blog->blog_image){ ?>
                                                <img src ="<?php echo base_url().substr($blog->blog_image, 2); ?>" height="100" width="100"/> 
                                           <?php } else { ?>
                                                <img src ="<?php echo base_url()?>/assets/uploads/no-image.png" height="100" width="100"/>
                                          <?php    }
                                        
                                        ?>
                                        <?php echo form_input(['class' => 'form-control', 'name' => 'old-blog-image', 'id' => 'old-blog-image', 'type' => 'hidden', 'value' => set_value('old-blog-image', $blog->blog_image)]); ?>
                                       
                                    </div>
                                   <div class="form-group">
                                        <label for="image">Change Image</label>
                                        <?php echo form_input(['class' => 'form-control', 'name' => 'blog-image', 'id' => 'blog-image', 'type' => 'file', 'value' => set_value('blog-image')]); ?>
                                        <p class="help-block">Please choose the image with extention jpg or png only.</p>
                                    </div>
                                    <div class="validation-msg"><?php echo form_error('blog-image') ?></div>
                                    
                                    

                                    <div class="form-group">
                                        <label for="author">Author</label>
                                        <?php echo form_input(['class' => 'form-control', 'name' => 'author', 'id' => 'author', 'type' => 'text', 'placeholder' => 'Enter author name', 'value' => set_value('author', $blog->author)]); ?>
                                    </div>
                                    <div class="validation-msg"><?php echo form_error('author') ?></div>  
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="<?php echo base_url('Blog/viewBlog') ?>" class="btn btn-danger">Cancel</a>
                                </div>



                            </div>


                        </div>


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
        <script>
            $(function () {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
                //bootstrap WYSIHTML5 - text editor
//      $('.textarea').wysihtml5();
            });
        </script>
    </body>
</html>
