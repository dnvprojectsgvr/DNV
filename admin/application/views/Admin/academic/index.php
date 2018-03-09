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
          <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form action="" method="post">
                <div class="col-md-4">
                  <label>academic Name</label>
                  <input type="text" class="form-control" name="academic_name" required="required" value="<?php // echo $academic_name; ?>">
                </div>

                <div class="col-md-2 form-group">
                  <label> &nbsp;</label>
                  <button type="submit" name="submit" value="submit" class="btn btn-primary pull-right form-control">
                    Filter Data
                  </button>
                </div>
            </form>
          </div> -->
          <div class="col-md-12 table-responsive">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>ID </span></a></th>
                <th>academic Start Date </span></a></th>
                <th>academic End Date </span></a></th>
                <th>Action</th>     
              </tr>
            </thead>
            <tbody>
            <?php for($i=0; $i<count($academic); $i++) { ?>
              <tr>
                <td><?php echo $academic[$i]['id']; ?></td>
                <td><?php echo $academic[$i]['from_date']; ?></td>
                <td><?php echo $academic[$i]['to_date']; ?></td>
                <td align="center">
                  <a href="<?php echo site_url('admin/academic/edit/'.$academic[$i]['id']); ?>" title="Edit" class="btn btn-primary btn-xs">
                    <i class="fa fa-pencil-square-o"></i>
                  </a> 
                  <a href="<?php echo site_url('admin/academic/delete/'.$academic[$i]['id']); ?>" title="Delete" class="btn btn-danger btn-xs" onclick="return confirm('are you sure you want to delete?'); ">
                    <i class="fa fa-trash-o"></i>
                  </a> 
                </td>
              </tr>
            <?php } ?>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="3">Showing <?php echo $from_result; ?> to <?php echo $to_result; ?> of <?php echo $num_rows; ?> entries</td>
                <td colspan="4">
                  <?php echo $this->pagination->create_links(); ?>
                </td>
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
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.date.extensions.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.extensions.js'); ?>"></script>
<script type="text/javascript">
    $("[data-mask]").inputmask();
</script>
</body>
</html>
