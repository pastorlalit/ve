<!--<button class="pulse3-button" id="fixedbutton" data-toggle="modal" data-target=".modal-register" title="Let's Talk.."><i class="fa fa-1x fa-envelope" style="color:white"></i></button>-->

<header class="top-head minimal no-border" data-sticky="false" id="topHead">
    <div class="container">
        <!-- Logo start -->
        <div class="logo">
            <a href="<?php echo base_url() ?>">
                <img alt="Vibrant Education Logo" src="<?php echo base_url() ?>assets/images/vibrant.png" />
            </a>
        </div>
        <!-- Logo end -->
          <div class="responsive-nav">
            <!-- top navigation menu start -->
            <nav class="top-nav" id="topNav">
                <ul style="overflow-y: auto; top:4px">
                    <li class="<?php if ($this->uri->uri_string() == ''|| $this->uri->uri_string() == 'best-bank-coaching-in-bhopal' ) { echo 'selected';} ?>">
                        <a href="<?php echo base_url() ?>best-bank-coaching-in-bhopal"><span>Home</span></a>
                    </li>
                     <li class="<?php if ($this->uri->uri_string() == 'about-us') { echo 'selected';} ?>"><a href="<?php echo base_url() ?>about-us"><span>About Us</span></a></li>
                     
                    <!--Courses Offered start -->
                     <li class="mega-menu <?php
                    if ($this->uri->uri_string() == 'courses-offered' ||
                            $this->uri->uri_string() == 'courses/bank-entrance-exams' ||
                            $this->uri->uri_string() == 'courses/ssc-entrance-exams' ||
                            $this->uri->uri_string() == 'courses/railways-entrance-exams' ||
                            $this->uri->uri_string() == 'courses/insurance-entrance-exams' ||
                            $this->uri->uri_string() == 'courses/english-for-all-competitive-exams' ||
                            $this->uri->uri_string() == 'courses/descriptive-english-for-competitive-exams' ||
                            $this->uri->uri_string() == 'courses/personal-interviews-and-group-discussion' ||
                            $this->uri->uri_string() == 'courses/spoken-english-classes-for-all') {
                        echo 'selected';
                    }
                    ?>"><a href="<?php echo base_url() ?>courses-offered"><span>Courses Offered</span></a>
                        <ul style="padding: 0 4px;margin: 0 10px;">
                            <li>
                                <div class="mega-content">
                                    <div class="row">
                                        <ul style="background:#007dca; height: 250px; overflow-y: auto">
                                            <li class="col-md-6">
                                                <ul>
                                                    <li><a href="<?php echo base_url() ?>courses/bank-entrance-exams"><i class="fa fa-book"></i>Bank Entrance Exams</a></li>
                                                    <li><a href="<?php echo base_url() ?>courses/ssc-entrance-exams"><i class="fa fa-book"></i>SSC Entrance Exams</a></li>
                                                    <li><a href="<?php echo base_url() ?>courses/railways-entrance-exams"><i class="fa fa-book"></i>Railways Entrance Exams</a></li>
                                                    <li><a href="<?php echo base_url() ?>courses/insurance-entrance-exams"><i class="fa fa-book"></i>Insurance Entrance Exams</a></li>
                                                 </ul>
                                            </li>
                                            <li class="col-md-6">
                                                <ul>
                                                    <li><a href="<?php echo base_url() ?>courses/english-for-all-competitive-exams"><i class="fa fa-book"></i>English for All Competitive/ Entrance Exams</a></li>
                                                   <li><a href="<?php echo base_url() ?>courses/descriptive-english-for-competitive-exams"><i class="fa fa-book"></i>Descriptive English for All Competitive/ Entrance Exams</a></li>
                                                   <li><a href="<?php echo base_url() ?>courses/personal-interviews-and-group-discussion"><i class="fa fa-book"></i>Personal  Interviews, Group Discussion and Group Activities </a></li>
                                                   <li><a href="<?php echo base_url() ?>courses/spoken-english-classes-for-all"><i class="fa fa-book"></i>All Levels of Spoken English</a></li>	
                                                </ul>
                                            </li>
                                         </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Courses Offered end -->
                    <!--About courses Start-->
                    
                     <!--About Courses End-->
                     
                    <li class="<?php if ($this->uri->uri_string() == 'entrance-exams/online-testseries') { echo 'selected';} ?>"><a href="<?php echo base_url() ?>entrance-exams/online-testseries"><span>Test Series</span></a></li>
                    <li class="<?php if ($this->uri->uri_string() == 'entrance-exams/download-previous-years-papers') { echo 'selected';} ?>"><a href="<?php echo base_url() ?>entrance-exams/download-previous-years-papers"><span>Prev. Papers</span></a></li>
                    <li class="<?php if ($this->uri->uri_string() == 'contact-us') { echo 'selected';} ?>"><a href="<?php echo base_url() ?>contact-us"><span>Contact Us</span></a></li>
                    
                </ul>
            </nav>
            <!-- top navigation menu end -->
            <div class="f-right" id="login-signup">
             
              
            </div>
        </div>
    </div>
    <!-- Login Modal Testing -->
 </header>
