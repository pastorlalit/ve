<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Registration</title>
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

            <?php include 'includes/header.php'; ?>

            <div class="pageContent">
                <div class="parallax pageContent">
                    <div class="page-title" id="pageTitle">
                        <div class="container">
                            <div class="col-md-12">
                                <h1>&nbsp;</h1>
                            </div>
                        </div>

                    </div>
                    <div class="breadcrumbs" id="breadcrumbs">
                        <div class="container">
                            <a href="<?php echo base_url() ?>">Home</a><i class="fa fa-long-arrow-right main-color"></i> <span>Registration</span>
                        </div>
                    </div>
                </div>

                <div class="parallax" id="HomePageRow1" data-stellar-background-ratio="0.6"
                     data-overlay="rgba(0,0,0,.1)">
                    <div class="wid-30 tbl mt-48">

                        <div class="clearfix over-hidden">
                            <!-- Logo start -->
                            <div class="logo light f-right">
                                <!--<a href="index.html"><img height="50" width="150" alt="Vibrant Education Logo" src="<?php echo base_url() ?>assets/images/vibrant.png" /></a>-->
                            </div>
                            <!-- Logo end -->

                            <h3 class="login-head f-left font-35">Register</h3>
                        </div>

                        <div class="gry-bg p-a-3 login-box main-border">
                             <?php
                            $attributes = array('role' => 'form', 'id' => 'register-form', 'method'=>'post');
                            echo form_open('Register/validation', $attributes);
                            ?>
                            
                            <div class="modal-body">
                                    <h2><small>Create new account</small></h2>
                                    <hr class="colorgraph">
                                    <?php 
                                                   $resultMsg = $this->session->flashdata('regmsg');
                                                    switch ($resultMsg) {
                                                    case "success":
                                                        echo '<div class="alert alert-success square " data-close="true">
                                                               <p>Your account has been created successfully. Please check in your email for verification link. <i class="fa fa-thumbs-o-up ico-block"></i></p>
                                                              </div>';
                                                    break;
                                                    case "error":
                                                    echo '<div class="alert alert-danger square " data-close="true">
                                                                <p><i class="fa fa-info-circle"></i>  Something went wrong!</p>
                                                         </div>';
                                                    break;
                                                   
                                                    default:
                                                    echo'<div class="form-msg" id="login-txt-box">
                                                            <span class="text-login-msg"><b>Please enter complete details.</b></span>
                                                       </div>';
                                                   
                                                    }
                                                    ?>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <?php echo form_input(['class' => 'form-control', 'name' => 'full_name', 'id' => 'full_name', 'type' => 'text', 'placeholder' => 'Full Name', 'value' => set_value('full_name')]); ?>
                                               <div class="login-validation-msg"><?php echo form_error('full_name') ?></div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="form-group">
                                        <?php echo form_input(['class' => 'form-control', 'name' => 'email', 'id' => 'email', 'type' => 'email', 'placeholder' => 'Email Address', 'value' => set_value('email')]); ?>
                                       <div class="login-validation-msg"><?php echo form_error('email') ?></div>
                                    </div>
                                    
                                       
                                    <div class="form-group">
                                        <?php echo form_password(['class' => 'form-control', 'name' => 'password', 'id' => 'login_password', 'type' => 'password', 'placeholder' => 'Password', 'value' => set_value('password')]); ?>
                                        <div class="login-validation-msg"><?php echo form_error('password') ?></div>

                                    </div>
                                       
                                        
                                   
                                    <div class="form-group">
                                        <?php echo form_input(['class' => 'form-control', 'name' => 'contact_no', 'id' => 'contact_no', 'type' => 'text', 'placeholder' => 'Contact Number', 'value' => set_value('contact_no')]); ?>
                                       <div class="login-validation-msg"><?php echo form_error('contact_no') ?></div>
                                    </div>

                                    <hr class="colorgraph">
                                    <div class="row">
                                        <div class="pull-right">
                                            <?php echo form_submit(['type' => 'submit', 'class' => 'btn btn-round main-bg', 'value' => 'Register', 'id' => 'loginBtn']) ?>
                                            <?php echo form_reset(['type' => 'reset', 'class' => 'btn btn-round btn-danger', 'value' => 'Reset', 'id' => 'loginBtn']) ?>
                                         <div class="p-t-2">
                                        <a href="<?php echo base_url() ?>login" class="btn btn-link no-padding pull-right"><i class="fa fa-user"></i>Login</a>
                                       </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            
                        </div>

                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
             
                    </div>

                </div>

            </div>

            <?php include 'includes/footer.php'; ?>


        </div>


    </div>

    <!-- Back to top Link -->
    <a id="to-top" href="#"><span class="fa fa fa-angle-up"></span></a>

    <?php include 'includes/jslinks.php'; ?>

</body>

</html>
