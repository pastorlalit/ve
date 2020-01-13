<!--<button class="pulse3-button" id="fixedbutton" data-toggle="modal" data-target=".modal-register" title="Let's Talk.."><i class="fa fa-1x fa-envelope" style="color:white"></i></button>-->

<header class="top-head minimal no-border" data-sticky="false" id="topHead">
    <div class="container">
        <!-- Logo start -->
        <div class="logo">
            <a href="<?php echo base_url() ?>">
                <!--<img alt="Vibrant Logo" src="<?php echo base_url() ?>assets/images/vibrant.png" />-->
            </a>
        </div>
        <!-- Logo end -->
          <div class="responsive-nav">
            <!-- top navigation menu start -->
            <nav class="top-nav" id="topNav">
                <ul style="overflow-y: auto; top:4px">
                    <li class="<?php if ($this->uri->uri_string() == '') { echo 'selected';} ?>">
                        <a href="<?php echo base_url() ?>"><span>Home</span></a>
                    </li>
                    <!--Mega Menu Start-->
                    <li class="mega-menu <?php
                    if ($this->uri->uri_string() == 'courses' ||
                            $this->uri->uri_string() == 'courses/sbi_po' ||
                            $this->uri->uri_string() == 'courses/sbi_clerk' ||
                            $this->uri->uri_string() == 'courses/sbi_so' ||
                            $this->uri->uri_string() == 'courses/ibps_po' ||
                            $this->uri->uri_string() == 'courses/ibps_so' ||
                            $this->uri->uri_string() == 'courses/ibps_clerk' ||
                            $this->uri->uri_string() == 'courses/rrb_po' ||
                            $this->uri->uri_string() == 'courses/rrb_so' ||
                            $this->uri->uri_string() == 'courses/lic_assistant' ||
                            $this->uri->uri_string() == 'courses/lic_aao' ||
                            $this->uri->uri_string() == 'courses/gic_aao' ||
                            $this->uri->uri_string() == 'courses/gic_assistant' ||
                            $this->uri->uri_string() == 'courses/ssc_cgl' ||
                            $this->uri->uri_string() == 'courses/ssc_chsl' ||
                            $this->uri->uri_string() == 'courses/ssc_mts' ||
                            $this->uri->uri_string() == 'courses/fci_officer' ||
                            $this->uri->uri_string() == 'courses/fci_clerk' ||
                            $this->uri->uri_string() == 'courses/mppeb_vyapam') {
                        echo 'selected';
                    }
                    ?>"><a href="<?php echo base_url() ?>courses"><span>All Courses</span></a>
                        <ul style="padding: 0 4px;margin: 0 10px;">
                            <li>
                                <div class="mega-content">
                                    <div class="row">
                                        <ul style="background:#007dca; height: 250px; overflow-y: auto">
                                            <li class="col-md-3">
                                                <ul>
                                                    <li><a href="<?php echo base_url() ?>courses/ibps_po"><i class="fa fa-book"></i>IBPS PO</a></li>
                                                    <li><a href="<?php echo base_url() ?>courses/ibps_clerk"><i class="fa fa-book"></i>IBPS Clerk</a></li>
                                                    <li><a href="<?php echo base_url() ?>courses/ibps_so"><i class="fa fa-book"></i>IBPS SO</a></li>
                                                    <li><a href="<?php echo base_url() ?>courses/sbi_po"><i class="fa fa-book"></i>SBI PO</a></li>
                                                    <li><a href="<?php echo base_url() ?>courses/sbi_clerk"><i class="fa fa-book"></i>SBI Clerk</a></li>
                                                </ul>
                                            </li>

                                            <li class="col-md-3">
                                                <ul>
                                                    <li><a href="<?php echo base_url() ?>courses/sbi_so"><i class="fa fa-book"></i>SBI SO</a></li>
                                                    <li><a href="<?php echo base_url() ?>courses/rrb_po"><i class="fa fa-book"></i>RRB PO</a></li>
                                                    <li><a href="<?php echo base_url() ?>courses/rrb_clerk"><i class="fa fa-book"></i>RRB Clerk</a></li>
                                                    <li><a href="<?php echo base_url() ?>courses/rrb_so"><i class="fa fa-book"></i>RRB SO</a></li>
                                                    <li><a href="<?php echo base_url() ?>courses/lic_assistant"><i class="fa fa-book"></i>LIC ASTT.</a></li>
                                                </ul>
                                            </li>

                                            <li class="col-md-3">
                                                <ul>
                                                    <li><a href="<?php echo base_url() ?>courses/lic_aao"><i class="fa fa-book"></i>LIC AAO</a></li>
                                                    <li><a href="<?php echo base_url() ?>courses/gic_aao"><i class="fa fa-book"></i>GIC AAO</a></li>
                                                    <li><a href="<?php echo base_url() ?>courses/gic_assistant"><i class="fa fa-book"></i>GIC ASTT.</a></li>
                                                    <li><a href="<?php echo base_url() ?>courses/ssc_cgl"><i class="fa fa-book"></i>SSC CGL</a></li>
                                                    <li><a href="<?php echo base_url() ?>courses/ssc_chsl"><i class="fa fa-book"></i>SSC CHSL</a></li>
                                                </ul>
                                            </li>

                                            <li class="col-md-3">
                                                <ul>
                                                    <li><a href="<?php echo base_url() ?>courses/ssc_mts"><i class="fa fa-book"></i>SSC MTS</a></li>
                                                    <li><a href="<?php echo base_url() ?>courses/fci_officer"><i class="fa fa-book"></i>FCI Officer level</a></li>
                                                    <li><a href="<?php echo base_url() ?>courses/fci_clerk"><i class="fa fa-book"></i>FCI Clerk</a></li>
                                                    <li><a href="<?php echo base_url() ?>courses/"><i class="fa fa-book"></i>RRB</a></li>
                                                    <li><a href="<?php echo base_url() ?>courses/mppeb_vyapam"><i class="fa fa-book"></i>MPPEB (Vyapam)</a>
                                                    </li>
                                                </ul>

                
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                     <!--Mega Menu End-->
                
                    <li class="<?php if ($this->uri->uri_string() == 'Testseries') { echo 'selected';} ?>"><a href="<?php echo base_url() ?>Testseries"><span>Test Series</span></a></li>
                    <li class="<?php if ($this->uri->uri_string() == 'Previouspapers') { echo 'selected';} ?>"><a href="<?php echo base_url() ?>Previouspapers"><span>Prev. Papers</span></a></li>
                    <li class="<?php if ($this->uri->uri_string() == 'Contactus') { echo 'selected';} ?>"><a href="<?php echo base_url() ?>Contactus"><span>Contact Us</span></a></li>
                    <?php 
                       
                       if($this->session->userdata('userid')){ ?>
                             <li class=""><a href="<?php echo base_url() ?>User/logout"><span>Logout</span></a></li>
                    <?php }else{ ?>
                    <li class="<?php if ($this->uri->uri_string() == 'User/login') {echo 'selected';} ?>"><a href="<?php echo base_url() ?>User/login"><span><i class="fa fa-key"></i> Login</span></a></li>
                    <li><a href="" data-toggle="modal" data-target=".modal-register"><span><i class="fa fa-user"></i> Sign Up</span></a></li>
                   <?php }?>
                </ul>
            </nav>
            <!-- top navigation menu end -->
            <div class="f-right" id="login-signup">
             
              
            </div>
        </div>
    </div>
    <!-- Login Modal Testing -->
   
    <!-- Register Modal Testing -->
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
                                <input type="checkbox" class="labelauty" id="labelauty-195140" style="display: none;">
                                  <label for="labelauty-195140"><span class="labelauty-unchecked-image"></span><span class="labelauty-checked-image"></span><span class="labelauty-checked">I Agree</span></label>
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
</header>
