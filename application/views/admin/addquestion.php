<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/images/vibrantfevicon.png" " />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>Add Question</title>
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
                        Daily Questions
                        <small>Add Questions</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url() ?>admin-panel"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?php echo base_url() ?>daily-questions"><i class="fa fa-pencil-square-o"></i> Questions</a></li>
                        <li class="active">Add Question</li>
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
                                    $resultMsg = $this->session->flashdata('resultMsg');
                                    switch ($resultMsg) {
                                        case "success":
                                            echo '<div class="alert alert-success square " data-close="true">
                                                               <p>Question Inserted Successfully! <i class="fa fa-thumbs-o-up ico-block"></i></p>
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
                                    <div class="pull-right">
                                        <div class="pull-right box-tools">
                                            <a id="go__back" href="<?php echo base_url() ?>daily-questions" type="button" class="btn btn-success"><i class="fa fa-backward"></i> Back</a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $attributes = array('name' => 'add-question', 'role' => 'form', 'enctype' => 'multipart/form-data', 'accept-charset' => 'utf-8');
                                echo form_open('Question_of_the_day/InsertQuestion', $attributes);
                                ?>
                                <div class="box-body">
                                    
                                    <div class="form-group">
                                        <label for="description">Question</label>
                                        <?php echo form_textarea(['class' => 'form-control', 'rows' => '10', 'name' => 'description', 'id' => 'editor1', 'type' => 'text', 'placeholder' => 'Enter description', 'value' => set_value('description')]); ?>
                                    </div>
                                    <div class="validation-msg"><?php echo form_error('description') ?></div>
                                    <div class="form-group">
                                        <label for="explanation">Explanation</label>
                                        <?php echo form_textarea(['class' => 'form-control', 'rows' => '10', 'name' => 'explanation', 'id' => 'editor2', 'type' => 'text', 'placeholder' => 'Enter explanation', 'value' => set_value('explanation')]); ?>
                                    </div>
                                    
                                    <div class="validation-msg"><?php echo form_error('explanation') ?></div>
                                    <div class="form-group">
                                        <label for="answer">Answer</label>
                                        <?php echo form_input(['class' => 'form-control', 'name' => 'answer', 'id' => 'answer', 'type' => 'text', 'placeholder' => 'Enter Answer', 'value' => set_value('answer')]); ?>

                                    </div>
                                    <div class="validation-msg"><?php echo form_error('answer') ?></div>
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <?php echo form_input(['class' => 'form-control', 'name' => 'question_image', 'id' => 'question_image', 'type' => 'file', 'value' => set_value('question_image')]); ?>
                                        <p class="help-block">Please choose the image with extention jpg or png only.</p>
                                    </div>
                                    <div class="validation-msg"><?php echo form_error('question_image') ?></div>
                                    <div class="form-group">
                                        <label for="author">Author</label>
                                        <?php echo form_input(['class' => 'form-control', 'name' => 'author', 'id' => 'author', 'type' => 'text', 'placeholder' => 'Enter author name', 'value' => set_value('author')]); ?>
                                    </div>
                                    <div class="validation-msg"><?php echo form_error('author') ?></div>  
                                      <div class="form-group col-xs-12 col-md-2">
                                        <label for="date">Date</label>
                                        <?php echo form_input(['class' => 'form-control', 'name' => 'date', 'id' => 'date', 'type' => 'date', 'placeholder' => '', 'value' => set_value('date')]); ?>
                                    </div>
                                    <div class="validation-msg"><?php echo form_error('date') ?></div>  
                               
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="<?php echo base_url('Question_of_the_day/viewQuestions') ?>" class="btn btn-danger">Cancel</a>
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
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1');
            CKEDITOR.replace('editor2');
            //bootstrap WYSIHTML5 - text editor
//      $('.textarea').wysihtml5();
        });
        $('#datepicker').datepicker();
    </script>
</html>
