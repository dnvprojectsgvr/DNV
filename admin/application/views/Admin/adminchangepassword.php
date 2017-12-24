<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Change Password | <?php echo $_SESSION['portal'][0]['company_name']; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/select2/select2.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/AdminLTE.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/skins/_all-skins.min.css'); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

   <?php include'pages/admin_header.php'; ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Change Password
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $_SESSION['portal'][0]['url']; ?>/portal/panel"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Change Password</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="invoice">
      <!-- info row -->
     <form action="<?php echo site_url('admin/adminchangepassword'); ?>" method="post">

      <div class="row">
        
        <div class="col-lg-6">
          <?php
              if(isset($alert))
                {
                   if($alert==1)
                   {
                         echo"<div class='alert alert-success'>";
                         echo"<strong>Success!</strong> Your password has been changed.";
                         echo"</div>";
                   }
                   else if($alert==2)
                   {
                         echo"<div class='alert alert-danger'>";
                         echo"<strong>Failure!</strong> New Password and Confirm Password should must be same.";
                         echo"</div>";
                   }
                   else
                   {
                         echo"<div class='alert alert-danger'>";
                         echo"<strong>Failure!</strong> Your current password typed incorrectly.";
                         echo"</div>";
                   }
                }
          ?>
          <div class="form-group">
                <lable>Current Password</lable>
                <input type="text" name="currentPassword" class="form-control">
          </div>
          <div class="form-group">
                <lable>New Password</lable>
                <input type="text" name="newPassword" id="newPassword" class="form-control">
          </div>
          <div class="form-group">
                <lable>Re-Type New Password</lable>
                <input type="text" name="confirmPassword" id="confirmPassword" class="form-control">
          </div>
            
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <input type="submit" class="btn btn-success pull-right" value="Update Profile" disabled>
          </form>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->

   <?php include'pages/footer.php'; ?>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url('plugins/select2/select2.full.min.js'); ?>"></script>
<!-- InputMask -->
<script src="<?php echo base_url('plugins/input-mask/jquery.inputmask.js'); ?>"></script>
<script src="<?php echo base_url('plugins/input-mask/jquery.inputmask.date.extensions.js'); ?>"></script>
<script src="<?php echo base_url('plugins/input-mask/jquery.inputmask.extensions.js'); ?>"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('plugins/daterangepicker/daterangepicker.js'); ?>"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url('plugins/datepicker/bootstrap-datepicker.js'); ?>"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url('plugins/colorpicker/bootstrap-colorpicker.min.js'); ?>"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url('plugins/timepicker/bootstrap-timepicker.min.js'); ?>"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url('plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url('plugins/iCheck/icheck.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('plugins/fastclick/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('dist/js/app.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('dist/js/demo.js'); ?>"></script>
<!-- Page script -->
<script>
$("#newPassword").keyup(function(){
     if($('#confirmPassword').val()==$('#newPassword').val())
       {
    $('input[type="submit"]').prop('disabled', false);
       }
      else
       {
    $('input[type="submit"]').prop('disabled', true);
       }
});
$("#confirmPassword").keyup(function(){
     if($('#confirmPassword').val()==$('#newPassword').val())
       {
    $('input[type="submit"]').prop('disabled', false);
       }
      else
       {
    $('input[type="submit"]').prop('disabled', true);
       }
});
</script>
<?php 
function addd($val)
{
 return $val*2;
}
?>
</body>
</html>
