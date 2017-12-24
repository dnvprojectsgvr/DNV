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
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/datepicker/datepicker3.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/skin-blue.css'); ?>">
  <link rel="icon" href="<?php echo base_url('assets/dist/img/favicon.ico'); ?>" type="image/x-icon"> 
</head>
  
  <?php $this->load->view('Admin/left_aside'); ?>

<!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="box box-primary">
                    <div class="box-body">
                        <?php echo form_open(); ?>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
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
                              <lable><b>Current Password</b></lable>
                              <input type="text" name="currentPassword" class="form-control">
                          </div>
                          <div class="form-group">
                                <lable><b>New Password</b></lable>
                                <input type="text" name="newPassword" id="newPassword" class="form-control">
                          </div>
                          <div class="form-group">
                                <lable><b>Re-Type New Password</b></lable>
                                <input type="text" name="confirmPassword" id="confirmPassword" class="form-control">
                          </div>    

                          <input type="submit" class="btn btn-success pull-right" name="submit" value="Update Profile" disabled>

                        </div> 
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

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
