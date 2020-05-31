<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Question of the day</title>
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
                                <h1>Question of the Day</h1>
                            </div>
                        </div>

                    </div>
                    <div class="breadcrumbs" id="breadcrumbs">
                        <div class="container">
                            <a href="<?php echo base_url() ?>best-bank-coaching-in-bhopal">Home</a>
                            <i class="fa fa-long-arrow-right main-color"></i><span>Questions</span>
                        </div>
                    </div>
                </div>
                <!-- Courses Row First start -->
                <div class="container">
                    <div class="row row-eq-height">
                        <div class="col-md-9 md-padding main-content blog-detail-box" >
                            <div class="blog-posts small-image">
                                <?php
                                if (!empty($questions)): foreach ($questions as $question):
                                        ?> 
                                        <div class="post-item">
                                            <article class="post-content">

                                                <div class="post-item">
                                                    <div class="post-info-container">
                                                        <div class="post-info">
                                                           <?php if ($question->image) { ?>
                                                                    <img class=""  width="100%" src="<?php echo base_url() . substr($question->image, 2); ?>"/>
                                                                <?php
                                                                } else {
                                                                    $description = $this->typography->auto_typography($question->description);
                                                                    echo $description;
                                                                }
                                                                ?>
                                                        
                                                            <ul class="post-meta">
                                                                <li class="main-bg"><i class="fa fa-book"></i></li>
                                                                <li class="meta-user"><i class="fa fa-user"></i>By: <b>Vibrant Career</b></li>
                                                                <li class="meta_date"><i class="fa fa-clock-o"></i><b>
                                                                        <?php
                                                                        $date = $question->date;
                                                                        $date = date("F j, Y", strtotime($date));
                                                                        echo $date;
                                                                        ?></b>
                                                                </li>

                                                            </ul>
                                                            <div style="" class=" col-md-12  " data-animate="" data-animation-delay="300">
                                                                <div class="st-inner "> 

                                                                    <div id="<?php echo $question->question_id . 'acc_0b' ?>" class="accordion shadowed p-a-2 gry-bg">

                                                                        <div class="panel">
                                                                            <h5 class="acc-head">
                                                                                <a style="font-size:18px;letter-spacing:1px;"href="<?php echo '#' . $question->question_id . '760' ?>" data-toggle="collapse" data-parent="<?php echo '#'.$question->question_id . 'acc_0b' ?>" class="" aria-expanded="false">
                                                                                    <i class="fa  fa-arrows "></i> 
                                                                                    Explanation </a>
                                                                            </h5>
                                                                            <div class="acc-body collapse" id="<?php echo $question->question_id . '760' ?>" style="" aria-expanded="true">
                                                                                <div class="acc-content">
                                                                                    <p style="font-size:16px;">
                                                                                        <?php
                                                                                        if ($question->explanation) {
                                                                                            $explanation = $this->typography->auto_typography($question->explanation);
                                                                                            echo $explanation;
                                                                                        } else {
                                                                                            echo 'Available soon..';
                                                                                        }
                                                                                        ?>
                                                                                    </p>

                                                                                </div>
                                                                            </div>
                                                                        </div>



                                                                        <div class="panel">
                                                                            <h5 class="acc-head">
                                                                                <a style="font-size:18px;letter-spacing:1px;" href="<?php echo '#' . $question->question_id . '761' ?>" data-toggle="collapse" data-parent="#acc_0b" class="collapsed" aria-expanded="false">
                                                                                    <i class="fa  fa-arrows "></i> 
                                                                                    Answer 
                                                                                </a>
                                                                            </h5>
                                                                            <div class="acc-body collapse" id="<?php echo $question->question_id . '761' ?>" aria-expanded="false" style="height: 0px;">
                                                                                <div class="acc-content">
                                                                                    <p style="font-size:16px;"><?php if ($question->answer) { ?>
                                                                                            <b> 
                                                                                                <?php echo $question->answer; ?> 
                                                                                            </b>

                                                                                        <?php } ?>
                                                                                    </p>				</div>
                                                                            </div>
                                                                        </div>







                                                                    </div>   </div></div>
                                                        </div>

                                                    </div>


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
                                <?php echo $this->pagination->create_links(); ?> 
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
