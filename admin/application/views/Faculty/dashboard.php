<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $this->session->portal_config['short_name']; ?> | <?php echo $title; ?></title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/fonts/font-awesome/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/fonts/ionicons/css/ionicons.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css'); ?>">
  
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/timepicker/bootstrap-timepicker.min.css'); ?>">
     <link rel="stylesheet" href="<?php echo base_url('assets/plugins/selectpicker/select.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/datepicker/datepicker3.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css'); ?>">
  <link rel="icon" href="<?php echo base_url('assets/dist/img/favicon.ico'); ?>" type="image/x-icon"> 
</head>

<?php $this->load->view('Faculty/left_aside'); ?>
<section class="content">
  <div class="row">

     <div class="col-md-12">
      <div class="row">   

        <div class="col-md-3">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php  echo $lecture_report ; ?></h3>
              <p>Lecture Report</p>
            </div>
            <div class="icon">
              <a href="<?php // echo site_url('members/amenity_members'); ?>">
                <i class="fa fa-bandcamp" style="color: #00a3cb;"></i>
              </a>
            </div>
            <a href="<?php  echo site_url('faculty/lecturereport'); ?>" class="small-box-footer">
              View Reposrts <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div> 

        <div class="col-md-3">
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php  echo $assignment; ?></h3>
              <p>Assignments </p>
            </div>
            <div class="icon">
              <a href="<?php // echo site_url('vehicle/add'); ?>">
                <i class="ion ion-stats-bars" style="color: #008d4d;"></i>
              </a>
            </div>
            <a href="<?php  echo site_url('faculty/assignment'); ?>" class="small-box-footer">
             Check Assinments <i class="fa fa-arrow-circle-right"></i>
           </a>
         </div>
       </div>

       <div class="col-md-3">
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3><?php  echo $faculty_leaves; ?></h3>
            <p>Leaves</p>
          </div>
          <div class="icon">
            <a href="<?php // echo site_url('admin'); ?>">
              <i class="fa fa-user" style="color:rgb(218, 140, 16)"></i>
            </a>
          </div>
          <a class="small-box-footer"  href="<?php echo site_url('faculty/leaves'); ?>">
            Faculty Leave List <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div> 

      <div class="col-md-3">
        <div class="small-box bg-red">
          <div class="inner">
            <h3><?php //echo $driver; ?></h3>
            <p>To-Do</p>
          </div>
          <div class="icon">
            <a href="<?php //echo site_url('driver/add'); ?>"><i class="ion ion-bank" style="color: #c64333;"></i></a>
          </div>
          <a href="<?php// echo site_url('driver/amenity_members'); ?>" class="small-box-footer">
           View To-Do <i class="fa fa-arrow-circle-right"></i>
         </a>

       </div>
     </div>


  </div>
</section>
</div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Developed by</b><a href="<?php echo $this->session->portal_config['developer_web']; ?>"> <?php echo $this->session->portal_config['developer_name']; ?></a>
    </div>
    <strong>Copyright &copy; <?php echo date('Y'); ?>
            <a href="<?php echo $this->session->portal_config['url']; ?>"><?php echo $this->session->portal_config['club_name']; ?></a>.
    </strong> All rights
    reserved.
  </footer>

  <div class="control-sidebar-bg"></div>

</div>

<script src="<?php echo base_url('assets/plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/fastclick/fastclick.js'); ?>"></script>
<script src="<?php echo base_url('assets/dist/js/app.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/sparkline/jquery.sparkline.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datepicker/bootstrap-datepicker.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>
</body>
</html>
