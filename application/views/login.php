<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>User Login</title>
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
                                <h1>&nbsp;</h1>
                            </div>
                        </div>

                    </div>
                    <div class="breadcrumbs" id="breadcrumbs">
                        <div class="container">
                            <a href="<?php echo base_url() ?>">Home</a><i class="fa fa-long-arrow-right main-color"></i> <span>Login</span>
                        </div>
                    </div>
                </div>
                <!-- Courses Row First start -->
                <div class="parallax md-padding" id="HomePageRow1" data-stellar-background-ratio="0.6"
                     data-overlay="rgba(0,0,0,.1)">

                    <div class="wid-30 tbl mt-48">

                        <div class="clearfix over-hidden">
                            <!-- Logo start -->
                            <div class="logo light f-right">
                                <!--<a href="index.html"><img height="50" width="150" alt="Vibrant Education Logo" src="<?php echo base_url() ?>assets/images/vibrant.png" /></a>-->
                            </div>
                            <!-- Logo end -->

                            <h3 class="login-head f-left font-40">Login</h3>
                        </div>

                        <div class="gry-bg p-a-3 login-box main-border">
                            <?php
                            $attributes = array('role' => 'form', 'id' => 'login-form');
                            echo form_open('Login/validation', $attributes);
                            ?>

                            <div class="modal-body">
                                <h2><small>Login to your account</small></h2>
                                <hr class="colorgraph">
                                <?php
                              
                                if($this->session->flashdata('loginMsg')) {
                                    ?>
                                    <div class="form-msg alert with-icon alert-warning">
                                        <span class="error_msg"><i class="fa fa-info-circle"></i> <?php echo $this->session->flashdata('loginMsg'); ?></span>
                                    </div>
                                    <?php } else { ?>
                                    <div class="form-msg alert with-icon alert-warning">
                                        <i class="fa fa-info-circle"></i><span id="text-login-msg">Enter your username and password.</span>
                                    </div>
                                <?php }
                                ?>


                                <div class="form-group">
                                <?php echo form_input(['class' => 'form-control', 'name' => 'username', 'id' => 'login_username', 'type' => 'text', 'placeholder' => 'Email', 'value' => set_value('username')]); ?>

                                    <div class="login-validation-msg"><?php echo form_error('username') ?></div>

                                </div>

                                <div class="form-group">
                                    <?php echo form_password(['class' => 'form-control', 'name' => 'password', 'id' => 'login_password', 'type' => 'password', 'placeholder' => 'Password', 'value' => set_value('password')]); ?>
                                    <div class="login-validation-msg"><?php echo form_error('password') ?></div>

                                </div>
                                <hr class="colorgraph">
                                <div class="modal-footer p-a-0">
                                    <div>
                                        <?php echo form_submit(['type' => 'submit', 'class' => 'btn btn-round main-bg', 'value' => 'Login', 'id' => 'loginBtn']) ?>
                                        <?php echo form_reset(['type' => 'reset', 'class' => 'btn btn-round btn-danger', 'value' => 'Reset', 'id' => 'loginBtn']) ?>
                                    </div>
                                    <div class="p-t-2">
                                        <button type="button" class="btn btn-link no-padding"><i class="fa fa-key"></i>Lost Password?</button>
                                        <a href="<?php echo base_url() ?>register" class="btn btn-link no-padding"><i class="fa fa-user"></i>Register</a>
                                    </div>
                                </div>
                            </div>
                           
                        </div>

                        <p>&nbsp;</p>
                        <p>&nbsp;</p>

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
