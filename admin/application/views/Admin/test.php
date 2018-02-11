<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/fonts/font-awesome/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/fonts/ionicons/css/ionicons.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datepicker/datepicker3.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/selectpicker/select.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/skin-blue.css'); ?>">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php $this->load->view('Admin/left_aside'); ?>
      <div class="content-wrapper">
        <section class="content-header">
          <h1><?php echo $title; ?></h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> <?php echo $title; ?></li>
          </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="box">

                        <div class="box-body">
                         
                          
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Member No.</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php for($i=0; $i<5; $i++)
                                {
                                ?>
                                    <tr>
                                        <td>43243243</td>

                                        <td>fsdfdsf</td>

                                    
                                        
                                    </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                           
                          </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
        <div class="clearfix"></div>
      </div>
      <?php $this->load->view('Admin/footer'); ?>
    </div>
    <script src="<?php echo base_url('assets/plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/fastclick/fastclick.js'); ?>"></script>
    <script src="<?php echo base_url('assets/dist/js/app.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/sparkline/jquery.sparkline.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
   
    <script src="<?php echo base_url('assets/plugins/datepicker/bootstrap-datepicker.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/dist/js/pages/dashboard2.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>
    <script>
      $(".table").DataTable({
        "pageLength": 6,
        "ordering":false
      });

      $('#dd-0').addClass('active');
    </script>
  </body>
</html>
