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
                <ul>
                    <li class="<?php if ($this->uri->uri_string() == '') { echo 'selected';} ?>">
                        <a href="<?php echo base_url() ?>"><span>Home</span></a>
                    </li>
                    
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
                        <ul>
                            <li>
                                <div class="mega-content">
                                    <div class="row">
                                        <ul>
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
    <!-- Modal Testing -->
    <div class="modal fade modal-register t-left" tabindex="-1" role="dialog" aria-labelledby="modal-register" style="display: none;">
        <div class="modal-dialog">
             <div class="modal-content">
                   <div class="modal-header t-center">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close-popup-btn"><span aria-hidden="true">×</span></button>
                                <div class="logo-sm">
                                    <!--<img alt="Vibrant Education" src="<?php echo base_url() ?>assets/images/vibrant.png" height="70" width="">-->
                                </div>
                   </div>
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
    </div>
</header>
