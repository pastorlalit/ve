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
                                <h1>Contact Us</h1>
                            </div>
                        </div>

                    </div>
                    <div class="breadcrumbs" id="breadcrumbs">
                        <div class="container">
                            <a href="<?php echo base_url()?>">Home</a><i class="fa fa-long-arrow-right main-color"></i> <span>Contact Us</span>
                        </div>
                    </div>
                </div>
                <div class="md-padding">
					<div class="container">
						<div class="row row-eq-height">
							<div class="col-md-6">
								<div class="heading style3">
									<h3 class="uppercase">Our<span class="main-color"> Office</span></h3>
								</div>
								<div>
									<div class="row m-b-2 over-hidden">
										<div class="col-md-6">
											<ul class="details" id="contact-dt">
                                                                                            <li class=""><i class="fa fa-map-marker main-color"></i><span>164, I & II floor, Samanvay Nagar, <br>Awadhpuri, Bhopal (M.P.)</span></li>
												<li><i class="fa fa-phone main-color"></i><span><strong>Phone:</strong> 98-262-262-99</span></li>
												<li><i class="fa fa-envelope main-color"></i><span><strong>Email:</strong> contactus@vibrantcareer.com</span></li>
											</ul>
										</div>
										<div class="col-md-6">
											
										</div>
									</div>
								</div>
								<div id="ROADMAP" class="gmap full m-b-3" style="height: 320px; position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-err-container"><div class="gm-err-content"><div class="gm-err-icon"><img src="https://maps.gstatic.com/mapfiles/api-3/images/icon_error.png" draggable="false" style="user-select: none;"></div><div class="gm-err-title">Oops! Something went wrong.</div><div class="gm-err-message">This page didn't load Google Maps correctly. See the JavaScript console for technical details.</div></div></div></div></div>
								
							</div>
							<div class="col-md-1">
								<div class="vertical-sep"></div>
							</div>
							<div class="col-md-5">
								<div class="heading style3">
									<h3 class="uppercase"><span class="main-color">Get In </span> Touch</h3>
								</div>
								
								<form id="contact-form" class="ajax-form" name="contact" action="assets/php/sendemail.php" method="post" novalidate="novalidate"><grammarly-extension class="_1KJtL" style="position: absolute; top: 0px; left: 0px; pointer-events: none;"><div data-grammarly-part="highlights" class="u_fNK" style="position: absolute; top: 0px; left: 0px;"><div style="box-sizing: content-box; top: 199px; left: 2px; width: 453.5px; height: 140.8px; position: relative; pointer-events: none; overflow: hidden; border: 0px; border-radius: 0px; padding: 0px; margin: 0px;"><div style="position: absolute; top: 0px; left: 0px;"><div style="height: 964px; width: 1989px;"></div><div style="position: absolute; top: 0px; left: 0px; height: 964px; width: 1989px;"></div></div></div></div><div data-grammarly-part="button" class="u_fNK" style="position: absolute; top: 0px; left: 0px;"><div style="box-sizing: content-box; top: 199px; left: 2px; width: 453.5px; height: 140.8px; position: relative; pointer-events: none; overflow: hidden; border: 0px; border-radius: 0px; padding: 0px; margin: 0px;"><div style="position: absolute; transform: translate(-100%, -100%); top: 130.8px; left: 441.5px; width: auto; height: auto; pointer-events: all;"><div style="display: flex; flex-direction: row;"><div style="position: relative;"></div><div><div class="_5WizN _1QzSN"><div class="_3YmQx"><div title="Protected by Grammarly" class="_3QdKe">&nbsp;</div></div></div></div></div></div></div></div></grammarly-extension>

									<div class="contact-msg">
										<div class="alert alert-success">
											<img alt="" src="assets/images/ajax-loader.gif" class="contact-loader">
											<div class="success-msg">
												<i class="fa fa-thumbs-o-up ico-block"></i>
												<p>Thanks for getting in touch with us, We'll check your message and get back to you shortly!</p>
											</div>
										</div>
									</div>

									<div class="row form-group over-hidden">
										
										<div class="col-md-6">
											<label for="contact-name">Name <small>*</small></label>
											<input type="text" id="contact-name" name="contact-name" placeholder="Enter Your Name" class="form-control required">
										</div>

										<div class="col-md-6">
											<label for="contact-email">Email <small>*</small></label>
											<input type="email" id="contact-email" name="contact-email" placeholder="Enter Your Email" class="form-control required">
										</div>


									</div>

									<div class="row form-group over-hidden">

										<div class="col-md-12">
											<label for="contact-subject">Subject <small>*</small></label>
											<input type="text" id="contact-subject" placeholder="Type Subject" name="contact-subject" class="form-control required">
										</div>

									</div>

									<div class="form-group over-hidden">
										<label for="contact-message">Message <small>*</small></label>
										<textarea id="contact-message" placeholder="Type Your Message" name="contact-message" rows="6" cols="30" class="form-control required" spellcheck="false"></textarea>
									</div>
                                                                        <div class="form-group m-t-2">
										<button class="btn main-bg btn-lg border3px" type="submit" id="contact-submit" name="contact-submit" value="submit"><i class="fa fa-send"></i>Send Message</button>
									</div>

								</form>

								<div class="socials-cont m-t-2">
									<div class="tbl social-list f-right">
										<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook ic-facebook" data-hover=""></i></a>
										<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter ic-twitter" data-hover=""></i></a>
										<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Linkedin"><i class="fa fa-linkedin ic-linkedin" data-hover=""></i></a>
										<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Google Plus"><i class="fa fa-google-plus ic-gplus" data-hover=""></i></a>
										<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Skype"><i class="fa fa-skype ic-skype" data-hover=""></i></a>
									</div>
									<div class="clearfix"></div>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
            
            </div>
            <?php include 'includes/footer.php'; ?>

            <!-- Footer End-->

        </div>


    </div>

    <!-- Back to top Link -->
    <a id="to-top" href="#"><span class="fa fa fa-angle-up"></span></a>

    <?php include 'includes/jslinks.php'; ?>
    
</body>

</html>
