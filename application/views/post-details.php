<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Blog | Vibrant Education Services</title>
        <meta name="description" content="Vibrant is the Best Coaching for Bank Entrance Exams in Bhopal for aspirants of Bank PO, Bank Clerk, Bank SO, RRB, LIC, and SSC. Our courses are designed keeping in mind ease of understanding and enabling students to achieve success in the various entrance and competitive exams.">
        <meta name="keywords" content="Best Bank Coaching in Bhopal, Online Test Series, Railways Entrance ExamsSSC CGL  Exam, SSC CHSL Exam , SSC MTS Exam, SSC JE Exam, SSC Stenographer Exam, SSC GD Constable Exam, SSC SI Exam">
        <meta name="author" content="Vibrant Education Services">
        <meta name="format-detection" content="telephone=98-262-262-99"/>
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
                                <h1 class="uppercase bolder"><?php echo $post['title']; ?></h1>
                            </div>
                        </div>

                    </div>
                    <div class="breadcrumbs" id="breadcrumbs">
                        <div class="container">
                            <a href="<?php echo base_url() ?>best-bank-coaching-in-bhopal">Home</a><i class="fa fa-long-arrow-right main-color"></i><a href="<?php echo base_url() ?>resources/posts">Posts</a><i class="fa fa-long-arrow-right main-color"></i><span> <?php echo $post['title']; ?></span>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row row-eq-height">
                         <div class="col-md-9 md-padding main-content blog-detail-box">

                                <div class="blog-single">

                                    <div class="post-item">

                                        <div class="details-img">
                                            <img height="437" width="100%" src="<?php echo base_url() . substr($post['blog_image'], 2); ?>" alt="<?php echo $post['title']; ?>">
                                        </div>

                                        <article class="post-content">
                                             <div class="post-info-container">
                                                <div class="post-info">
                                                    <h2 class="main-color"><?php echo $post['title']; ?></h2>
                                                    <ul class="post-meta">
                                                        <li><i class="fa fa-book post-icon main-color"></i></li>
                                                        <li class="meta-user"><i class="fa fa-user"></i>By: <?php echo $post['author']; ?></li>
                                                        <li class="meta_date"><i class="fa fa-clock-o"></i>
                                                            <?php 
                                                             $created_at = $post['created_at'];
                                                             $posted_on = date("d-m-Y", strtotime($created_at));
                                                            echo $posted_on; ?>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>

                                            <p>
                                                <?php
                                                $description = $this->typography->auto_typography($post['description']);
                                                echo $description
                                                ?>
                                            </p>
                                        </article>
                                          

                                            </div>

                                  
                                    </div><!-- .post-item end -->

                                    

                                </div>
                            <div class="col-md-3 md-padding sidebar">
                                <div class="sidebar-widgets">
                                    <ul>
                                        

                                        <li class="widget w-recent-posts">
                                            <h4 class="widget-title"><span class="main-color">Recent </span>Posts</h4>
                                            <div class="widget-content">
                                                <ul id ="show_data">
                                                    <?php
                                                    if (!empty($posts)): foreach ($posts as $post):
                                                    $created_at = $post['created_at'];
                                                    $posted_on = date("d-m-Y", strtotime($created_at));
                                                    ?>
                                                    <li>
                                                        <div class="post-img">
                                                            <a href="<?php echo base_url('resources/post/' . $post['url_slug']); ?>"><img src="<?php echo base_url() . substr($post['blog_image'], 2); ?>" alt=""></a>
                                                        </div>
                                                        <div class="widget-post-info">
                                                            <h5><a class="blog-list-head" href="<?php echo base_url('resources/post/' . $post['url_slug']); ?>"><?php echo $post['title']; ?></a></h5>
                                                            <div class="meta">
                                                                <span><i class="fa fa-clock-o"></i><?php echo $posted_on; ?></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                     <?php
                                                        endforeach;
                                                    else:
                                                        ?>
                                                        <p>Post(s) not available.</p>
<?php endif; ?>  
                                                </ul>
                                                
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
                   

            </div>
        </div>



<?php include 'includes/cta.php'; ?>
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