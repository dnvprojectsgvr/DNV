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

<?php $this->load->view('Admin/left_aside'); ?>
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="box">
        <div class="box-body">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <!--  <form action="<?php echo site_url('student/index'); ?>" method="post">
                <div class="col-md-6 form-group">
                  <label>Brand</label>
                  <input type="text" class="form-control" name="brand" required="required" value="<?php echo $brand; ?>">
                </div>
                <div class="col-md-6 form-group">
                  <label>Stencil No.</label>
                  <input type="text" class="form-control" name="stencil_no" required="required" value="<?php echo $stencil_no; ?>">
                </div>
                <div class="col-md-12 form-group">
                  <button type="submit" name="submit" value="submit" class="btn btn-primary pull-right">
                    Filter Data
                  </button>
                </div>
            </form> -->
          </div>

             <!--  <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                Show
                <select class="input-sm" id="result_limit">
                  <option <?php if($result_per_page == 10) { echo 'selected'; } ?>>10</option>
                  <option <?php if($result_per_page == 25) { echo 'selected'; } ?>>25</option>
                  <option <?php if($result_per_page == 50) { echo 'selected'; } ?>>50</option>
                  <option <?php if($result_per_page == 100) { echo 'selected'; } ?>>100</option>
                </select>
                entries
              </div>     -->
          <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Sr.No.</th>
                  <th>Name</th>
                  <th>ID</th>
                  <th>Year</th>
                  <th>Course</th>
                  <th>Action</th> 
                </tr>
              </thead>
              <tbody>
              <?php for($i=0; $i<count($student_details); $i++) { ?>
              <tr>
                <td><?php echo $i+1; ?></td>
                <td><?php echo $student_details[$i]['full_name']; ?></td>
                <td><?php echo $student_details[$i]['student_id']; ?></td>
                <td><?php echo $student_details[$i]['admin_year']; ?></td>
                <td><?php echo $student_details[$i]['course']; ?></td>
                <td align="center">
                  <a href="<?php echo site_url('student/detail/'.$student_details[$i]['id']); ?>" title="View" class="btn btn-primary btn-xs" ><i class="fa fa-eye"></i></a> |
                  <a href="<?php echo site_url('student/edit/'.$student_details[$i]['id']); ?>" title="View" class="btn btn-warning btn-xs" target="_blank"><i class="fa fa-pencil"></i></a> | 
                  <a href="<?php echo site_url('student/delete/'.$student_details[$i]['id']); ?>" title="Delete" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" onclick="return confirm('Do you really want to delete all the data related with this Student?');"></i>
                  </a>          
                </td>
              </tr>
              <?php } ?>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="4">Showing <?php echo $from_result; ?> to <?php echo $to_result; ?> of <?php echo $num_rows; ?> entries</td>
                <td colspan="4"><?php echo $this->pagination->create_links(); ?></td>
              </tr>
            </tfoot>
          </table>
          </div>
        </div>
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
<script src="<?php echo base_url('assets/plugins/selectpicker/select.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>
<script type="text/javascript">
  $(document).on('change', '#result_limit', function(){
    var brand = '<?php echo $brand; ?>';
    var stencil_no = '<?php echo $stencil_no; ?>';
    var sort_column = '<?php echo $sort_column; ?>';
    var sort_order = '<?php echo $sort_order; ?>';
    window.location = "<?php echo site_url('student/view_student_details'); ?>/" + brand + '/' + stencil_no + '/' + $(this).val() + '/' + sort_column + '/' + sort_order + '/0'; 
  });
</script>
</body>
</html>
