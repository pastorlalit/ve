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
                                <h1>Admin Dashboard</h1>
                            </div>
                        </div>

                    </div>
                    <div class="breadcrumbs" id="breadcrumbs">
                        <div class="container">
                            <a href="<?php echo base_url()?>">Home</a><i class="fa fa-long-arrow-right main-color"></i><span>Admin</span>
                        </div>
                    </div>
                </div>
                <!-- Courses Row First start -->
                  <div class="parallax md-padding" id="HomePageRow1" data-stellar-background-ratio="0.6"
                     data-overlay="rgba(0,0,0,.1)">
                    
                        <div class="container">
                            <p>&nbsp;</p>
                            <div class="row">
							<div class="col-md-6">
								<h3>Login Popup Window</h3>
								
								<p>In this modal popup you can add the login form and then perform your login functionality code within this modal content.</p>

								<!-- Small modal -->
								<button type="button" class="btn main-bg btn-lg btn-block" data-toggle="modal" data-target=".modal-login">Open Modal</button>
								
								<div class="modal fade modal-login t-left" tabindex="-1" role="dialog" aria-labelledby="modal-login">
								  <div class="modal-dialog">
								    <div class="modal-content">
										
										<div class="modal-header t-center">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
											<div class="logo-sm gry-bg circle">
								    			<img alt="" src="assets/images/logo-sm.png">
								    		</div>
										</div>
										
										<!-- Begin # Login Form -->
					                    <form id="login-form" role="form" method="post" action="">
							                <div class="modal-body">
									    		<h2>Login <small>to your account.</small></h2>
												<hr class="colorgraph">
									    		<div class="form-msg alert with-icon alert-warning">
					                                <i class="fa fa-info-circle"></i><span id="text-login-msg">Type your username and password.</span>
					                            </div>
									    		<div class="form-group">
										    		<input id="login_username" class="form-control" type="text" placeholder="Username" required="">
										    		<input id="login_password" class="form-control" type="password" placeholder="Password" required="">
									    		</div>
					                            <div class="form-group">
					                                <input type="checkbox" class="labelauty" id="labelauty-538977" style="display: none;"><label for="labelauty-538977"><span class="labelauty-unchecked-image"></span><span class="labelauty-unchecked">Remember me</span><span class="labelauty-checked-image"></span><span class="labelauty-checked">Remember me</span></label>
					                            </div>
					                            <hr class="colorgraph">
					                            <div class="modal-footer">
					                            	<div>
						                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
						                            </div>
										    	    <div class="p-t-2">
						                                <button type="button" class="btn btn-link no-padding"><i class="fa fa-key"></i>Lost Password?</button>
						                                <button type="button" class="btn btn-link no-padding" data-dismiss="modal" data-toggle="modal" data-target=".modal-register"><i class="fa fa-user"></i>Register</button>
						                            </div>
										        </div>
					        		    	</div>
					                    </form>
					                    <!-- End # Login Form -->
								        
								    </div>
								  </div>
								</div>
							</div>
							<div class="col-md-6">
								<h3>Register Popup Window</h3>
								
								<p>In this modal popup you can add the register form and then perform your register functionality code within this modal content.</p>

								<!-- Small modal -->
								<button type="button" class="btn main-bg btn-lg btn-block" data-toggle="modal" data-target=".modal-register">Open Modal</button>
								
								<div class="modal fade modal-register t-left" tabindex="-1" role="dialog" aria-labelledby="modal-register">
									<div class="modal-dialog">
										<div class="modal-content">
											
											<div class="modal-header t-center">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
												<div class="logo-sm gry-bg circle">
													<img alt="" src="assets/images/logo-sm.png">
												</div>
											</div>
											
											<!-- Begin # Login Form -->
										    <form id="register-form" role="form" method="post" action="">
												<div class="modal-body">
													<h2>Please Sign Up <small>It's free and always will be.</small></h2>
													<hr class="colorgraph">
													<div class="row">
														<div class="col-xs-12 col-sm-6 col-md-6">
															<div class="form-group">
										                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" required="">
															</div>
														</div>
														<div class="col-xs-12 col-sm-6 col-md-6">
															<div class="form-group">
																<input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" required="">
															</div>
														</div>
													</div>
													<div class="form-group">
														<input type="text" name="display_name" id="display_name" class="form-control" placeholder="Display Name" required="">
													</div>
													<div class="form-group">
														<input type="email" name="email" id="email" class="form-control" placeholder="Email Address" required="">
													</div>
													<div class="row">
														<div class="col-xs-12 col-sm-6 col-md-6">
															<div class="form-group">
																<input type="password" name="password" id="password" class="form-control" placeholder="Password" required="">
															</div>
														</div>
														<div class="col-xs-12 col-sm-6 col-md-6">
															<div class="form-group">
																<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password" required="">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-xs-4 col-sm-3 col-md-3">
															<span class="button-checkbox">
																<input type="checkbox" class="labelauty" id="labelauty-714094" style="display: none;"><label for="labelauty-714094"><span class="labelauty-unchecked-image"></span><span class="labelauty-unchecked">I Agree</span><span class="labelauty-checked-image"></span><span class="labelauty-checked">I Agree</span></label>
															</span>
														</div>
														<div class="col-xs-8 col-sm-9 col-md-9">
															 By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
														</div>
													</div>
													
													<hr class="colorgraph">
													<div class="row">
														<div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
														<div class="col-xs-12 col-md-6"><a href="#" class="btn btn-success btn-block btn-lg" data-dismiss="modal" data-toggle="modal" data-target=".modal-login">Sign In</a></div>
													</div>
												</div>
										    </form>
										    <!-- End # Login Form -->
										    
										</div>
									</div>
								</div>
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

