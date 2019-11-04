<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Vibrant Education Services</title>
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
                                <h1>User Login</h1>
                            </div>
                        </div>

                    </div>
                    <div class="breadcrumbs" id="breadcrumbs">
                        <div class="container">
                            <a href="<?php echo base_url()?>">Home</a><i class="fa fa-long-arrow-right main-color"></i> <span>Login</span>
                        </div>
                    </div>
                </div>
                <!-- Courses Row First start -->
                  <div class="parallax md-padding" id="HomePageRow1" data-stellar-background-ratio="0.6"
                     data-overlay="rgba(0,0,0,.1)">
                        <div class="container">
                           <div class="col-md-2"></div>
                            <div class="col-md-8">
                                 <div class="modal-content">
                                <!-- Begin # Login Form -->
                            <?php 
                               $attributes = array('role' => 'form', 'id' => 'login-form');
                               echo form_open('User/login', $attributes); ?>
                                 <div class="modal-body">
                                    <h2>Login <small>to your account.</small></h2>
                                    <hr class="colorgraph">
                                              <?php 
                                                   $error = $this->session->flashdata('login_failed');
                                                   if($error){ ?>
                                                        <div class="form-msg alert with-icon alert-warning">
                                                            <span class="error_msg"><i class="fa fa-info-circle"></i> <?php echo $error; ?></span>
                                                        </div>
                                                  <?php }else{ ?>
                                                        <div class="form-msg" id="login-txt-box">
                                                            <span class="text-login-msg"><?php echo 'Please enter complete details'; ?></span>;
                                                       </div>
                                                    <?php }
                                                   
                                               ?>
                                    <div class="form-group">
                                      <?php echo form_input(['class' => 'form-control', 'name' => 'username', 'id' => 'login_username', 'type' => 'text', 'placeholder' => 'Email','value' => set_value('username')]); ?>
                                        
                                        <div class="login-validation-msg"><?php echo form_error('username') ?></div>
                                        <p>&nbsp;</p>
                                      <?php echo form_password(['class' => 'form-control', 'name' => 'password', 'id' => 'login_password', 'type' => 'password', 'placeholder' => 'Password','value' => set_value('password')]); ?>
                                    <div class="login-validation-msg"><?php echo form_error('password') ?></div>
                                    </div>
                                    <div class="modal-footer">
                                        <div>
                                            <?php echo form_submit(['type'=>'submit','class'=>'btn btn-round main-bg','value'=>'Login','id'=>'loginBtn']) ?>
                                            <?php echo form_reset(['type'=>'reset','class'=>'btn btn-round btn-danger','value'=>'Reset','id'=>'loginBtn']) ?>
                                            
                                        </div>
                                        <div class="p-t-2">
                                            <button type="button" class="btn btn-link no-padding"><i class="fa fa-key"></i>Lost Password?</button>
                                            <button type="button" class="btn btn-link no-padding" data-dismiss="modal" data-toggle="modal" data-target=".modal-register"><i class="fa fa-user"></i>Register</button>
                                        </div>
                                    </div>
                                </div>
                                  <!-- End # Login Form -->
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                           
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
