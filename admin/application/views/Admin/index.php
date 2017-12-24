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
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css'); ?>">
    <link rel="icon" href="<?php echo base_url('assets/dist/img/favicon.ico'); ?>" type="image/x-icon"> 
</head>
  
  <?php $this->load->view('Admin/left_aside'); ?>

<section class="content">

  <div class="col-md-9">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Weekly Dues</h3>
      </div>

      <div class="box-body">
        <div class="table-responsive">
          <table class="table no-margin">
            <thead>
              <tr>
                <th>Member No.</th>
                <th>Member Name</th>
                <th>Mobile No.</th>
                <th>Fees Type</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tbody>
            <?php for($i = 0; $i < count($weekly_dues); $i++) { ?>
              <tr>
                <td><?php echo $weekly_dues[$i]['member_no']; ?></td>
                <td><?php echo $weekly_dues[$i]['member_name']; ?></td>
                <td><?php echo $weekly_dues[$i]['mobile']; ?></td>
                <td><?php echo $weekly_dues[$i]['fees_type']; ?></td>
                <td><?php echo $weekly_dues[$i]['amount']; ?></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="col-lg-12 col-xs-12">
      <div class="small-box bg-blue">
        <div class="inner">
          <h3><?php echo $members; ?></h3>
          <p>Members</p>
        </div>
        <div class="icon">
          <a href="<?php echo site_url('members/add'); ?>"><i class="ion ion-person-add"></i></a>
        </div>
        <a href="<?php echo site_url('members'); ?>" class="small-box-footer">
          Members List <i class="fa fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>

    <div class="col-md-12">
      <div class="box box-warning">
        <div class="box-header">
          <h3 class="box-title">Outstanding Fees</h3>
        </div>
        <div class="box-body" id="outstanding_fees">
          The body of the box
        </div>
        <div class="overlay">
          <i class="fa fa-refresh fa-spin"></i>
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
<script src="<?php echo base_url('assets/dist/js/pages/dashboard2.js'); ?>"></script>
<script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>
<script>
  $(function() {
    var saveData = $.ajax({
    type: 'POST',
    url: "<?php echo site_url('admin/recurring_fees_generate'); ?>",
    dataType: "text",
      success: function(resultData) {
        ajaxsuccess();
      }
    });
  });
</script>
<script>
function ajaxsuccess()
{
  var saveData = $.ajax({
  type: 'POST',
  url: "<?php echo site_url('admin/outstanding_fees'); ?>",
  dataType: "text",
    success: function(resultData) {
      $('.overlay').remove();
      $('#outstanding_fees').html(resultData);
    }
  });
}
</script>
</body>
</html>
