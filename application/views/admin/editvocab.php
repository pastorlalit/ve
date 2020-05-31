<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/images/vibrantfevicon.png" " />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>Edit Vocab</title>
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
                        Vocabulary
                        <small>Edit vocab</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url() ?>admin-panel"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?php echo base_url() ?>vocabulary"><i class="fa fa-pencil-square-o"></i> Vocabulary</a></li>
                        <li class="active">Edit Vocab</li>
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
                                                               <p>Vocab Created Successfully! <i class="fa fa-thumbs-o-up ico-block"></i></p>
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
                                            <a id="go__back" href="<?php echo base_url() ?>vocabulary" type="button" class="btn btn-success"><i class="fa fa-backward"></i> Back</a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $attributes = array('name' => 'add-blog', 'role' => 'form', 'enctype' => 'multipart/form-data', 'accept-charset' => 'utf-8');
                                echo form_open('Vocabulary/editVocab/'. $vocab->word_id, $attributes);
                                ?>
                                 <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="word-title">Word Title</label>
                                                <?php echo form_input(['class' => 'form-control', 'name' => 'word_titile', 'id' => 'word_titile', 'type' => 'text', 'placeholder' => 'Enter word', 'value' => set_value('word', $vocab->word_titile)]); ?>

                                            </div>
                                            <div class="validation-msg"><?php echo form_error('word') ?></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="word-title">Word Meaning </label>
                                                <?php echo form_input(['class' => 'form-control', 'name' => 'word_meaning', 'id' => 'word_meaning', 'type' => 'text', 'placeholder' => 'Enter word meaning', 'value' => set_value('word_meaning', $vocab->word_meaning)]); ?>

                                            </div>
                                            <div class="validation-msg"><?php echo form_error('word_meaning') ?></div>
                                        </div> 
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="word-title">Description</label>
                                                <?php echo form_input(['class' => 'form-control', 'name' => 'description', 'id' => 'description', 'type' => 'text', 'placeholder' => 'Enter Remark', 'value' => set_value('description', $vocab->description)]); ?>

                                            </div>
                                            <div class="validation-msg"><?php echo form_error('description') ?></div>   

                                        </div>

                                    </div>




                                    <div class="row">
                                        <div class="col-xs-12 col-md-3">
                                            <div class="form-group">
                                                <label for="date">Date</label>
                                                <?php echo form_input(['class' => 'form-control', 'name' => 'date', 'id' => 'date', 'type' => 'date', 'placeholder' => '', 'value' => set_value('date',$vocab->date)]); ?>

                                            </div>
                                            <div class="validation-msg"><?php echo form_error('date') ?></div>    
                                        </div>


                                    </div>

                                    <!-- /.box-body -->
                                   



                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="<?php echo base_url('vocabulary') ?>" class="btn btn-danger">Cancel</a>
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
            //bootstrap WYSIHTML5 - text editor
//      $('.textarea').wysihtml5();
        });
    </script>
</html>
