<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/images/vibrantfevicon.png" " />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Add Enquiries</title>
        <!-- Tell the browser to be responsive to screen width -->
        <?php include 'includes/csslinks.php'; ?>

    </head>
    <body class="hold-transition sidebar-mini skin-green">
        <div class="wrapper">

            <?php include 'includes/header.php'; ?>

            <?php include 'includes/sidebar.php'; ?>
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Enquiries
                        <small>Add enquiry</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url() ?>admin-panel"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?php echo base_url() ?>enquiries"><i class="fa fa-pencil-square-o"></i> Enquiries</a></li>
                        <li class="active">Add Enquiry</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">

                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <?php
                                    $addEnqMsg = $this->session->flashdata('addEnqMsg');
                                    switch ($addEnqMsg) {
                                        case "success":
                                            echo '<div class="col-md-6 alert alert-success square " data-close="true">
                                                               <p>Enquiry submitted successfully! <i class="fa fa-thumbs-o-up ico-block"></i></p>
                                                              </div>';
                                            break;
                                        case "error":
                                            echo '<div class="col-md-6 alert alert-danger square " data-close="true">
                                                                <p><i class="fa fa-info-circle"></i>  Something went wrong!</p>
                                                         </div>';
                                            break;

                                        default:
                                            echo'<div class="col-md-6 form-msg" id="login-txt-box">
                                                            <span class="text-login-msg"><b>Please enter complete details.</b></span>
                                                         </div>';
                                    }
                                    ?>
                                    <div class="pull-right">
                                        <div class="pull-right box-tools">
                                            <a id="go__back" href="<?php echo base_url() ?>enquiries" type="button" class="btn btn-success"><i class="fa fa-backward"></i> Back</a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $attributes = array('name' => 'add-enquiry', 'role' => 'form', 'enctype' => 'multipart/form-data', 'accept-charset' => 'utf-8');
                                echo form_open('Enquiries/addEnquiries', $attributes);
                                ?>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="contact-name">Name <small>*</small></label>
                                        <?php echo form_input(['class' => 'form-control', 'name' => 'contactname', 'id' => 'contact-name', 'type' => 'text', 'placeholder' => 'Enter Your Name', 'value' => set_value('contactname')]); ?>

                                    </div>
                                    <div class="contact-validation-msg"><?php echo form_error('contactname') ?></div>
                                    <div class="form-group">
                                        <label for="contact-email">Email <small>*</small></label>
                                        <?php echo form_input(['class' => 'form-control', 'name' => 'contactemail', 'id' => 'contact-email', 'type' => 'email', 'placeholder' => 'Enter Your Email', 'value' => set_value('contactemail')]); ?>
                                    </div>
                                    <div class="contact-validation-msg"><?php echo form_error('contactemail') ?></div>


                                    <div class="form-group">
                                        <label for="contact-number">Contact Number <small>*</small></label>
                                        <?php echo form_input(['class' => 'form-control', 'name' => 'contactnumber', 'id' => 'contact-number', 'type' => 'text', 'placeholder' => 'Enter Your Number', 'value' => set_value('contactnumber')]); ?>

                                    </div>
                                    <div class="contact-validation-msg"><?php echo form_error('contactnumber') ?></div>
                                    <div class="form-group">
                                        <label for="contact-city">City <small>*</small></label>
                                        <?php echo form_input(['class' => 'form-control', 'name' => 'contactcity', 'id' => 'contact-city', 'type' => 'text', 'placeholder' => 'Enter Your City', 'value' => set_value('contactcity')]); ?>

                                    </div>
                                    <div class="contact-validation-msg"><?php echo form_error('contactcity') ?></div>
                                    <div class="form-group">
                                        <label for="contact-subject">Subject <small>*</small></label>
                                        <?php echo form_input(['class' => 'form-control', 'name' => 'contactsubject', 'id' => 'contact-subject', 'type' => 'text', 'placeholder' => 'Enter Subject', 'value' => set_value('contactsubject')]); ?>


                                    </div>
                                    <div class="contact-validation-msg"><?php echo form_error('contactsubject') ?></div>

                                    <div class="form-group">
                                        <label for="contact-message">Message <small>*</small></label>
                                        <?php echo form_textarea(['class' => 'form-control', 'name' => 'contactmessage', 'id' => 'contact-message', 'rows' => '6', 'cols' => '30', 'type' => 'text', 'placeholder' => 'Enter Your Message', 'value' => set_value('contactmessage')]); ?>


                                    </div>
                                    <div class="contact-validation-msg"><?php echo form_error('contactmessage') ?></div>    


                                </div>

                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="<?php echo base_url('enquiries') ?>" class="btn btn-danger">Cancel</a>
                                </div>



                            </div>


                        </div>


                    </div>

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <?php include 'includes/footer.php'; ?>

            <!-- Control Sidebar -->


            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 3 -->

        <?php include 'includes/jslinks.php'; ?>
    </body>

</html>
