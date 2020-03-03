<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Blogs | Vibrant Education Services</title>
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
                                <h1 class="uppercase bolder">Blog</h1>
                            </div>
                        </div>

                    </div>
                    <div class="breadcrumbs" id="breadcrumbs">
                        <div class="container">
                            <a href="<?php echo base_url() ?>best-bank-coaching-in-bhopal">Home</a><i class="fa fa-long-arrow-right main-color"></i><span> Posts</span>
                        </div>
                    </div>
                </div>
                <!-- Courses Row First start -->
                <div class="parallax sm-padding" id="CoursePageRow1" data-stellar-background-ratio="0.6"
                     data-overlay="rgba(0,0,0,.1)">
                    <div class="container">
                        <div class="row">
                            <?php
                            if (!empty($posts)): foreach ($posts as $post):
                                    $description = word_limiter($post['description'], 40, '&#8230;');
                                    $created_at= $post['created_at'];
                                    $posted_on = date("d-m-Y", strtotime($created_at));
                                    ?>
                                    <div class="col-md-4">
                                        <div class="post-item blog-box">
                                            <div class="post-image main-border bot-4-border">
                                                <a href="<?php echo base_url('resources/post/' . $post['url_slug']); ?>">
                                                    <img height="215" width="100%" src="<?php echo base_url() . substr($post['blog_image'], 2); ?>" alt="<?php echo $post['title']; ?>">
                                                </a>
                                            </div>
                                            <article class="post-content">
                                                <div class="post-info blog-content">
                                                    <h4 class="m-b-1"><a href="<?php echo base_url('resources/post/' . $post['url_slug']); ?>"><?php echo $post['title']; ?></a></h4>
                                                    <ul class="post-meta">
                                                        <li class="meta-date"><i class="fa fa-clock-o"></i><?php echo $posted_on; ?></li>
                                                        <li class="meta-category"><i class="fa fa-tag"></i>Posted by : <?php echo $post['author']; ?></li>
                                                    </ul>
                                                    <p><?php echo $description ?></p>
                                                    <a class="blog-detail-link main-color" id="6" href="<?php echo base_url('resources/post/'.$post['url_slug']); ?>">Read more</a>
                                                </div>

                                            </article>
                                        </div>
                                    </div>

                                <?php endforeach;
                            else:
                                ?>
                                <p>Post(s) not available.</p>
                               <?php endif; ?>  
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