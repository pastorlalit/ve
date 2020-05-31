<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/images/vibrantfevicon.png" " />
        <title>Question of the day</title>
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
                        <small>of the day</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url() ?>admin-panel"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Questions</li>
                    </ol>
                </section>
                <p>&nbsp;</p>
                <!-- Main content -->
                <section class="content">
                    <!-- Small boxes (Stat box) -->
                    
                    <div class="row">
                        <section class="col-lg-12 connectedSortable">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <?php 
                                                   $questionUpdateMsg = $this->session->flashdata('questionUpdateMsg');
                                                    switch ($questionUpdateMsg) {
                                                    case "success":
                                                        echo '<div class="alert alert-success square " data-close="true">
                                                               <p>Question Updated Successfully! <i class="fa fa-thumbs-o-up ico-block"></i></p>
                                                              </div>';
                                                    break;
                                                    case "error":
                                                    echo '<div class="alert alert-danger square " data-close="true">
                                                                <p><i class="fa fa-info-circle"></i> Something went wrong!</p>
                                                         </div>';
                                                    break;
                                                   
                                                    default:
                                                    
                                                   
                                                    }
                                                    ?>
                                            <div class="pull-right">
                                                <div class="pull-right box-tools">
                                                    <a id="add__blog" href="<?php echo base_url() ?>add-question" type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add</a>
                                                    <a id="reload__blogs" href="<?php echo base_url() ?>daily-questions" type="button" class="btn btn-warning">
                                                        <i class="fa fa-repeat"></i> Reload
                                                    </a>
                                                    

                                                </div>
                                            </div>
                                        </div><!-- /.box-header -->

                                         <div class="box-body">
                                             
                                            <div class="table-responsive"> 
                                                <table id="admn-datatables" class="table table-bordered table-hover ">
                                                    <thead>
                                                        <tr>
                                                            <th width="5%">S.N.</th>
                                                            <th width="10%">Image</th>
                                                            <th width="20%">Description</th>
                                                            <th width="15%">Explanation</th>
                                                            <th width="10%">Answer</th>
                                                            <th width="10%">Author</th>
                                                            <th width="10%">Date</th>
                                                            <th width="10%">created_at</th>
                                                            <th width="5%" colspan="3" style="text-align:center">Action</th>
                                                        </tr>
                                                         
                                                    </thead>
                                                    <tbody>
                                                          <tbody>
                                                        <?php
                                                        $sn = 0;
                                                        if (!empty($questions)): foreach ($questions as $question):
                                                                $description = word_limiter($question->description, 20, '&#8230;');
                                                                $sn++;
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $sn; ?></td>
                                                            <td><?php 
                                                                    if($question->image){ ?>
                                                                        <img src ="<?php echo base_url().substr($question->image, 2); ?>" height="50" width="50"/>
                                                                   <?php }else{ ?>
                                                                        <img src ="<?php echo base_url()?>/assets/uploads/no-image.png" height="50" width="50"/>
                                                                  <?php  }
                                                                            
                                                            ?>
                                                                </td>
                                                            <td><?php echo $question->description; ?></td>
                                                            <td><?php echo $question->explanation; ?></td>
                                                            <td><?php echo $question->answer ?></td>
                                                            <td><?php echo $question->author?></td>
                                                            <td><?php 
                                                                $q_date = $question->date;
                                                                        $date = date("d-m-Y", strtotime($q_date));
                                                                 echo $date; 
                                                                ?></td>
                                                            <td><?php 
                                                                $created_at = $question->created_at;
                                                                        $posted_on = date("d-m-Y", strtotime($created_at));
                                                                 echo $posted_on; 
                                                                ?>
                                                            </td>
                                                            <td><button id ="preview__blog" onclick="previewQuestion(<?php echo $question->question_id; ?>)" type="button" class="btn btn-success btn-sm"  title="Click here to preview question"><i class="fa fa-eye"></i></button></td>
                                                            <td><button id="edit__blog" type="button" onclick="editQuestion(<?php echo $question->question_id; ?>)" class="btn btn-warning btn-sm"  title="Click here to edit question"><i class="fa fa-pencil-square-o"></i></button></td>
                                                            <td><button  id="delete__blog" onclick="delQuestion(<?php echo $question->question_id; ?>)" type="button" class="btn btn-danger btn-sm"  title="Click here to delete question"><i class="fa fa-times"></i></button></td>
                                                           
                                                        </tr>
                                                            <?php
                                                            endforeach;
                                                        else:
                                                            ?>
                                                        <tr>
                                                            <td colspan="8">
                                                                <p class="text-red"><b>No data found..</b></p>
                                                            </td>
                                                        </tr>
                                                          
                                                        <?php endif; ?>  
                                                    </tbody>
                                                   
                                                    <tfoot>

                                                    </tfoot>
                                                </table>
                                            </div>         

                                        </div>
                                        <div class="box-footer">
                                            
                                            <div class="box-tools pull-right">
                                                <?php  echo $this->pagination->create_links();   ?> 
                                            </div>
                                        </div> <!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div><!-- /.col -->
                            </div>
                        </section>
                        
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
        <script type="text/javascript">
              function delQuestion(id){
                  if(confirm("Are you want to delete?")){
                       window.location.href = "<?php echo base_url().'Question_of_the_day/delQuestion/'?>"+id;
                   }
                }
             function previewQuestion(id){
              window.location.href = "<?php echo base_url().'Question_of_the_day/questionDetails/'?>"+id;
             }
             function editQuestion(id){
                 window.location.href = "<?php echo base_url().'Question_of_the_day/editQuestion/'?>"+id;
             }
        </script>

    </body>
</html>
