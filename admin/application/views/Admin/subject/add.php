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
          <form method="post" action="<?php echo base_url() . "index.php/admin/subject/add"?>">

            <div class="col-md-6 form-group">
             <label> Course Name</label>
             <?php $attributes = 'id="course" class="form-control" ';
             echo form_dropdown('course', $course, set_value('course'), $attributes); ?>
           </div>


           <div class="col-md-6 form-group">
            <label>Semester *</label>
            <?php $attributes = 'id="semester" class="form-control"';
            echo form_dropdown('data[semester_id]', $semester, set_value('semester'), $attributes); ?>
          </div>

          <div class="col-md-6 form-group">
            <label>Subject Name</label>
            <input type="text" name="data[subjects_name]" class="form-control" placeholder="Enter name of Subject" required="required">
          </div>

          <div class="col-md-6 form-group">
            <label>Criteria Marks</label>
            <input type="text" name="data[criteria_marks]" class="form-control" placeholder="Enter Criteria Mark's for Subject " required="required">
          </div>

          <div class="col-md-4 form-group">
            <label for="semname">Is Practical *</label>
            <select class="form-control" name="data[is_practical]" required="required">
              <option value="1" selected> True </option>
              <option value="0"> False </option>
            </select>
          </div>

          <div class="col-md-6 form-group">
            <label for="couname"> Stream Name</label>
            <select class=" form-control" name="data[academic_id]" id="couname">
             <option value="Null"> Please Select Academic Year </option>
             <?php for($i=0; $i<count($academic); $i++) { ?>
             <option value="<?php echo $academic[$i]['id']; ?>" "><?php echo $academic[$i]['from_date']; ?> | <?php echo $academic[$i]['to_date']; ?></option>
             <?php } ?>
           </select>
         </div>

         <div class="col-md-12 form-group">
          <button type="type" class="btn btn-primary pull-right" name="submit" value="Submit">SUBMIT</button>
        </div>
      </form>
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
  $('#course').change(function(){
    var course_id = $(this).val();
        // alert(course_id);
        $("#semester > option").remove();
        $.ajax({
          type: "POST",
          url: "<?php echo site_url('admin/subject/add_semester'); ?>",
          data: {id: course_id},
          dataType: 'json',
          success:function(data){
            $.each(data,function(k, v){
              var opt = $('<option />');
              opt.val(k);
              opt.text(v);
              $('#semester').append(opt);
            });
          }
        });
      });

    </script>

    </html>