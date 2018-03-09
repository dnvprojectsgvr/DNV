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
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/custom.css'); ?>">

</head>

<?php $this->load->view('admin/left_aside'); ?>
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="box">
        <div class="box-body">
          <?php echo form_open(); ?>

          <div class="col-md-6 form-group">
            <label for="couname"> Stream Name</label>
           <select class=" form-control" name="data[course_id]" id="couname">
             <?php for($i=0; $i<count($course); $i++) { ?>
             <option value="<?php echo $course[$i]['id']; ?>" "><?php echo $course[$i]['course_name']; ?></option>
             <?php } ?>
           </select>
         </div>

         <!--  <div class="col-md-6 form-group">
            <label>Course Name</label>
            <input type="text" name="data[course_name]" class="form-control" placeholder="Enter name of Stream" required="required">
          </div> -->


          <div class="col-md-4 form-group">
            <label for="semname">Semester *</label>
            <select class="form-control" name="data[semester_name]" id="semname" required="required">
             <option value="0" <?php if($semester[0]['id']=='0') { echo"selected"; } ?>>Select Semester</option>
             <option selected="" value="Semester 1" <?php if($semester[0]['id']=='Semester 1') { echo"selected"; } ?>>Semester 1</option>
             <option value="Semester 2" <?php if($semester[0]['id']=='Semester 2') { echo"selected"; } ?>>Semester 2</option>
             <option value="Semester 3" <?php if($semester[0]['id']=='Semester 3') { echo"selected"; } ?>>Semester 3</option>
             <option value="Semester 4" <?php if($semester[0]['id']=='Semester 4') { echo"selected"; } ?>>Semester 4</option>
             <option value="Semester 5" <?php if($semester[0]['id']=='Semester 5') { echo"selected"; } ?>>Semester 5</option>
             <option value="Semester 6" <?php if($semester[0]['id']=='Semester 6') { echo"selected"; } ?>>Semester 6</option>
           </select>
         </div>


         <div class="col-md-12 form-group">
          <button type="type" class="btn btn-primary pull-right" name="submit" value="Submit">SUBMIT</button>
        </div>

        <?php echo form_close(); ?>
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
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.date.extensions.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.extensions.js'); ?>"></script>
<script type="text/javascript">
  $("[data-mask]").inputmask();
</script>

<script type="text/javascript">
$(document).ready(function()
{
$("#couname").change(function(e)
{ 
var couname = $("#couname").val();
var semname=$("#semname").val();
var msgbox = $("#counerr");
$.ajax({
    type: "POST",  
    url: "semester_check.php",  
    data: "couname="+couname+"&semname="+semname,
    success: function(msg){
   $("#counerr").ajaxComplete(function(event, request){
  if(msg == 'OK')
  {
      $("#couname").attr('style','border:1px solid #008000');
       msgbox.html('available');
  }  
  else  
  {  
     $("#couname").attr('style','border:1px solid #FF0000');
     msgbox.html(msg);
  }  
   });
   } 
  }); 
});
});
</script>

</body>
</html>
