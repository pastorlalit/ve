<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/images/vibrantfevicon.png" " />
        <title>Blogs</title>
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
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url() ?>admin-panel"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Blogs</li>
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
                                                   $blogUpdateMsg = $this->session->flashdata('blogUpdateMsg');
                                                    switch ($blogUpdateMsg) {
                                                    case "success":
                                                        echo '<div class="alert alert-success square " data-close="true">
                                                               <p>Blog Updated Successfully! <i class="fa fa-thumbs-o-up ico-block"></i></p>
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
                                                    <a id="add__blog" href="<?php echo base_url() ?>add-blogs" type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add</a>
                                                    <a id="reload__blogs" href="<?php echo base_url() ?>view-blogs" type="button" class="btn btn-warning">
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
                                                            <th width="40%">Description</th>
                                                            <th width="15%">URL Slug</th>
                                                            <th width="5%">Author</th>
                                                            <th width="10%">Date</th>
                                                            <th width="5%" colspan="3" style="text-align:center">Action</th>
                                                        </tr>
                                                         
                                                    </thead>
                                                    <tbody>
                                                          <tbody>
                                                        <?php
                                                        $sn = 0;
                                                        if (!empty($blogs)): foreach ($blogs as $blog):
                                                                $description = word_limiter($blog->description, 20, '&#8230;');
                                                                $sn++;
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $sn; ?></td>
                                                            <td><img src ="<?php echo base_url().substr($blog->blog_image, 2); ?>" height="50" width="50"/></td>
                                                            <td><?php echo $blog->title; ?></td>
                                                            <td><?php echo $description; ?></td>
                                                            <td><?php echo $blog->url_slug ?></td>
                                                            <td><?php echo $blog->author?></td>
                                                            <td><?php 
                                                                $created_at = $blog->created_at;
                                                                        $posted_on = date("d-m-Y", strtotime($created_at));
                                                                 echo $posted_on; 
                                                                ?>
                                                            </td>
                                                            <td><button id ="preview__blog" onclick="previewBlog(<?php echo $blog->blog_id; ?>)" type="button" class="btn btn-success btn-sm"  title="Click here to preview blog"><i class="fa fa-eye"></i></button></td>
                                                            <td><button id="edit__blog" type="button" onclick="editBlog(<?php echo $blog->blog_id; ?>)" class="btn btn-warning btn-sm"  title="Click here to edit blog"><i class="fa fa-pencil-square-o"></i></button></td>
                                                            <td><button  id="delete__blog" onclick="delBlog(<?php echo $blog->blog_id; ?>)" type="button" class="btn btn-danger btn-sm"  title="Click here to delete blog"><i class="fa fa-times"></i></button></td>
                                                           
                                                        </tr>
                                                            <?php
                                                            endforeach;
                                                        else:
                                                            ?>
                                                        <p>no data found</p>
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
              function delBlog(id){
                  if(confirm("Are you want to delete?")){
                       window.location.href = "<?php echo base_url().'Blog/delBlog/'?>"+id;
                   }
                }
             function previewBlog(id){
              window.location.href = "<?php echo base_url().'Blog/blogDetails/'?>"+id;
             }
             function editBlog(id){
                 window.location.href = "<?php echo base_url().'Blog/editBlog/'?>"+id;
             }
        </script>

    </body>
</html>
