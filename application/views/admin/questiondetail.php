<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/images/vibrantfevicon.png" " />
        <title>View Question</title>
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
                        Question
                        <small> Detail</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url() ?>admin-panel"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?php echo base_url() ?>daily-questions"><i class="fa fa-pencil-square-o"></i> Questions</a></li>
                        <li class="active">Add Question</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="pull-right">
                        <div class="pull-right box-tools">
                            <a id="go__back" href="<?php echo base_url() ?>daily-questions" type="button" class="btn btn-success"><i class="fa fa-backward"></i> Back</a>
                        </div>
                    </div> 
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="box box-success">
                                <?php if ($question->image) { ?>
                                    <img class=""  width="100%" src="<?php echo base_url() . substr($question->image, 2); ?>"/>
                                <?php } ?>


                                <div class="bdp-content">
                                    <p><?php
                                        if ($question->description) {
                                            $description = $this->typography->auto_typography($question->description);
                                            echo $description;
                                        }
                                        ?>
                                    </p>  
                                    
                                        <?php
                                        if ($question->answer) { ?>
                                            
                                    <b> Ans : <?php echo $question->answer; ?> </b>;
                                       <?php }
                                        ?>
                                    <h2>Explanation</h2>
                                    <p>
                                        <?php
                                        
                                        if ($question->explanation) {
                                            $explanation = $this->typography->auto_typography($question->explanation);
                                            echo $explanation;
                                        }else{
                                            echo 'Available soon..';
                                        }
                                        ?>
                                    </p>
                                </div>
                                    <div class="box-footer">

                                        <div class="box-tools pull-right">
                                              
                                            <b><?php 
                                                $q_date = $question->date;
                                                $date = date("d-m-Y", strtotime($q_date));

                                                $created_at = $question->created_at;
                                                $posted_on = date("d-m-Y", strtotime($created_at));

                                                echo "Posted by:"." ".$question->author." "."|"." "."Date:"." ".$date; ?></b>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>



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
