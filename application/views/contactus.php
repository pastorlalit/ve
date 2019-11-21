<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Vibrant Education Services</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Devices Meta -->
        <?php include 'includes/csslinks.php'; ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
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
                            <a href="<?php echo base_url() ?>">Home</a><i class="fa fa-long-arrow-right main-color"></i> <span>Contact Us</span>
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
                                        <div class="col-md-8">
                                            <ul class="details" id="contact-dt">
                                                <li><span id="contactAdd">164, I & II floor, Samanvay Nagar, Awadhpuri, Bhopal (M.P.)</span></li>
                                                <li><span span id="contactAdd"><strong>Phone:</strong> 98-262-262-99</span></li>
                                                <li><span span id="contactAdd"><strong>Email:</strong> contactus@vibrantcareer.com</span></li>
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
                                <?php 
                               $attributes = array('name'=>'contact','role' => 'form',);
                               echo form_open('Contactus/contactForm', $attributes); ?>
                                <!--<form id="contact-form" class="ajax-form" name="contact" action="" method="post" novalidate="novalidate">-->
                                     <?php 
                                                   $resultMsg = $this->session->flashdata('resultMsg');
                                                    switch ($resultMsg) {
                                                    case "success":
                                                        echo '<div class="alert alert-success square " data-close="true">
                                                               <p>Thanks for getting in touch with us, We will check your message and get back to you shortly! <i class="fa fa-thumbs-o-up ico-block"></i></p>
                                                              </div>';
                                                    break;
                                                    case "error":
                                                    echo '<div class="alert alert-danger square " data-close="true">
                                                                <p><i class="fa fa-info-circle"></i>  Something went wrong!</p>
                                                         </div>';
                                                    break;
                                                   
                                                    default:
                                                    echo'<div class="form-msg" id="login-txt-box">
                                                            <span class="text-login-msg"><b>Please enter complete details.</b></span>;
                                                       </div>';
                                                   
                                                    }
                                                    ?>

                                    <div class="row form-group over-hidden">

                                        <div class="col-md-6">
                                            <label for="contact-name">Name <small>*</small></label>
                                            <?php echo form_input(['class' => 'form-control', 'name' => 'contactname', 'id' => 'contact-name', 'type' => 'text', 'placeholder' => 'Enter Your Name','value' => set_value('contactname')]); ?>
                                            <!--<input type="text" id="contact-name" name="contactname" placeholder="Enter Your Name" class="form-control required">-->
                                            <div class="contact-validation-msg"><?php echo form_error('contactname') ?></div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="contact-email">Email <small>*</small></label>
                                            <?php echo form_input(['class' => 'form-control', 'name' => 'contactemail', 'id' => 'contact-email', 'type' => 'email', 'placeholder' => 'Enter Your Email','value' => set_value('contactemail')]); ?>
                                            <!--<input type="email" id="contact-email" name="contactemail" placeholder="Enter Your Email" class="form-control required">-->
                                            <div class="contact-validation-msg"><?php echo form_error('contactemail') ?></div>
                                        </div>
                                    </div>
                                     <div class="row form-group over-hidden">

                                        <div class="col-md-6">
                                            <label for="contact-number">Contact Number <small>*</small></label>
                                            <?php echo form_input(['class' => 'form-control', 'name' => 'contactnumber', 'id' => 'contact-number', 'type' => 'text', 'placeholder' => 'Enter Your Number','value' => set_value('contactnumber')]); ?>
                                            <!--<input type="text" id="contact-name" name="contactname" placeholder="Enter Your Name" class="form-control required">-->
                                            <div class="contact-validation-msg">
                                                <?php echo form_error('contactnumber') ?>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="contact-city">City <small>*</small></label>
                                            <?php echo form_input(['class' => 'form-control', 'name' => 'contactcity', 'id' => 'contact-city', 'type' => 'text', 'placeholder' => 'Enter Your City','value' => set_value('contactcity')]); ?>
                                            <!--<input type="email" id="contact-email" name="contactemail" placeholder="Enter Your Email" class="form-control required">-->
                                            <div class="contact-validation-msg"><?php echo form_error('contactcity') ?></div>
                                        </div>
                                    </div>
                                    <div class="row form-group over-hidden">

                                        <div class="col-md-12">
                                            <label for="contact-subject">Subject <small>*</small></label>
                                            <?php echo form_input(['class' => 'form-control', 'name' => 'contactsubject', 'id' => 'contact-subject', 'type' => 'text', 'placeholder' => 'Enter Subject','value' => set_value('contactsubject')]); ?>
                                            <!--<input type="text" id="contact-subject" placeholder="Enter Subject" name="contactsubject" class="form-control required">-->
                                            <div class="contact-validation-msg"><?php echo form_error('contactsubject') ?></div>
                                        </div>

                                    </div>

                                    <div class="form-group over-hidden">
                                        <label for="contact-message">Message <small>*</small></label>
                                        <?php echo form_textarea(['class' => 'form-control', 'name' => 'contactmessage', 'id' => 'contact-message','rows'=>'6', 'cols'=>'30' ,'type' => 'text', 'placeholder' => 'Enter Your Message','value' => set_value('contactmessage')]); ?>
                                        <!--<textarea id="contact-message" placeholder="Type Your Message" name="contactmessage" rows="6" cols="30" class="form-control required" spellcheck="false"></textarea>-->
                                    <div class="contact-validation-msg"><?php echo form_error('contactmessage') ?></div>
                                    </div>
                                    <div class="form-group m-t-2">
                                        <button class="btn main-bg btn-lg border3px btn-submit" type="submit" id="contact-submit" name="contact-submit" value="submit"><i class="fa fa-send"></i>Send Message</button>
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
