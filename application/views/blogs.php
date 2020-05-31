<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Blogs</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Devices Meta -->
        <?php include 'includes/csslinks.php'; ?>

    </head>
    <body class="scrollbar" id="customizedScrollbar">

        <!-- site preloader start -->
        <div class="page-loader"></div>
        <!-- site preloader end -->

        <div class="pageWrapper">

            <!-- Header start -->
            <?php include 'includes/header.php'; ?>
            <!-- Header start -->

            <!-- Content start -->
            <div class="pageContent">
                <div class="parallax pageContent">
                    <div class="page-title" id="pageTitle">
                        <div class="container">
                            <div class="col-md-12">
                                <h1>Blogs</h1>
                            </div>
                        </div>

                    </div>
                    <div class="breadcrumbs" id="breadcrumbs">
                        <div class="container">
                            <a href="<?php echo base_url() ?>best-bank-coaching-in-bhopal">Home</a>
                            <i class="fa fa-long-arrow-right main-color"></i><span>Blogs</span>
                        </div>
                    </div>
                </div>
                <!-- Courses Row First start -->
                <div class="container">
                    <div class="row row-eq-height">
                       <div class="col-md-9 md-padding main-content blog-detail-box" >
                            <div class="blog-posts small-image">
                                <?php
                                if (!empty($blogs)): foreach ($blogs as $blog):
                                $description = word_limiter($blog->description, 20, '&#8230;');
                                ?> 
                                <div class="post-item">
                                    <article class="post-content">
                                        <div class="post-image main-border bot-4-border">
                                            <a href="<?php echo base_url('resources/blog/' . $blog->url_slug); ?>">
                                                <?php 
                                                    if($blog->blog_image){ ?>
                                                                        <img src ="<?php echo base_url().substr($blog->blog_image, 2); ?>" height="150" width="150"/>
                                                                   <?php }else{ ?>
                                                                        <img src ="<?php echo base_url()?>/assets/images/vibrant-sm.png" height="150" width="150"/>
                                                                  <?php  } ?>
                                                
                                            </a>
                                        </div>
                                        <div class="post-item-rit">
                                            <div class="post-info-container">
                                                <div class="post-info">
                                                    <h4><a href="<?php echo base_url('resources/blog/' . $blog->url_slug); ?>"><?php echo $blog->title; ?></a></h4>
                                                    <ul class="post-meta">
                                                        <li class="main-bg"><i class="fa fa-book"></i></li>
                                                        <li class="meta-user"><i class="fa fa-user"></i>By: <b>Vibrant Career</b></li>
                                                        <li class="meta_date"><i class="fa fa-clock-o"></i><b><?php $date = $blog->created_at;
                                                                        $date = date("F j, Y", strtotime($date));
                                                                 echo $date;  ?></b>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <p><?php echo $description; ?> <a class="more_btn main-color" href="<?php echo base_url('resources/blog/' . $blog->url_slug); ?>">Read More</a></p>
                                        </div>
                                    </article>
                                </div>
                                <div class="xs-padding">
                                            <hr class="divider dev-style3">
                                </div>
                               <?php
                                    endforeach;
                                else:
                                    ?>
                                   
                                      
                                            <p class="text-red"><b>No data found..</b></p>
                                        
                                 
                                <?php endif; ?>
                            </div>
                            <div class="pager">
                               <?php  echo $this->pagination->create_links();   ?> 
                            </div>



                        </div>
                         <div class="col-md-3 md-padding sidebar">
                                <div class="sidebar-widgets">
                                    <ul>
                                        <li class="widget w-recent-posts">
                                            <h4 class="widget-title"><span class="main-color">Recent </span>Posts</h4>
                                            <div class="widget-content">
                                                

                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                    </div>


                </div>

            </div>


            <!-- Student Notifications End-->
            <!-- Footer Start-->
<?php include 'includes/footer.php'; ?>

            <!-- Footer End-->

        </div>


    </div>

    <!-- Back to top Link -->
    <a id="to-top" href="#"><span class="fa fa fa-angle-up"></span></a>

<?php include 'includes/jslinks.php'; ?>

</body>

</html>
