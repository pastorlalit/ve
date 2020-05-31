
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Vocabulary</title>
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
                                <h1>Let's improve our vocabulary...</h1>
                            </div>
                        </div>

                    </div>
                    <div class="breadcrumbs" id="breadcrumbs">
                        <div class="container">
                            <a href="<?php echo base_url() ?>best-bank-coaching-in-bhopal">Home</a>
                            <i class="fa fa-long-arrow-right main-color"></i><span>Vocabulary</span>
                        </div>
                    </div>
                </div>
                <!-- Courses Row First start -->
                <div class="container">
                    <div class="row row-eq-height">
                        <div class="col-md-9 md-padding main-content blog-detail-box" >


                            <div class="blog-posts small-image">


                                <article class="post-content">

                                    <div class="post-item">
                                        <div class="post-info-container">
                                            <div class="post-info">
                                                <h1 class="main-color bold">Important words to be remembered</h1>
                                                <hr class="divider dev-style3">
                                                <ul class="post-meta">
                                                                    <li class="main-bg"><i class="fa fa-book"></i></li>
                                                                    <li class="meta-user"><i class="fa fa-user"></i>By: <b>Vibrant Career</b></li>
                                                                   

                                                                </ul>
                                                <div class="vocab-wrap">
                                                   

                                                            <div class="list-group" id="list-style-vocab">
                                                                 <?php
                                                                if (!empty($vocabs)): foreach ($vocabs as $vocab):
                                                                        ?> 
                                                                <a href="#" class="list-group-item">

                                                                    <h3 class="list-group-item-heading"><span style="font-weight:bold"><?php echo $vocab->word_titile; ?>  </span>- <span id="word-meaning-txt"><?php echo $vocab->word_meaning; ?></span></h3>
                                                                    <p class="list-group-item-text"> 
                                                                        <?php
                                                                        if ($vocab->description) {
                                                                            $description = $this->typography->auto_typography($vocab->description);
                                                                            echo $description;
                                                                        } else {
                                                                            echo '';
                                                                        }
                                                                        ?>
                                                                    </p>
                                                                </a>

                                                                
                                                                  <?php
                                                        endforeach;
                                                    else:
                                                        ?>


                                                        <p class="text-red"><b>No data found..</b></p>


                                                    <?php endif; ?>  
                                                            </div>
                                                           
                                                </div>
                                               <hr class="divider dev-style3">



                                            </div>

                                        </div>
                                       

                                    </div>
                                   
                                        <div class="pager">
                                            <?php echo $this->pagination->create_links(); ?> 
                                        </div>
                                </article>


                                <div class="xs-padding">
                                    <hr class="divider dev-style3">
                                </div>

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
