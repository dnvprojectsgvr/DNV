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
  
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/plugins/selectpicker/select.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fileUploads/fileUpload.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/datepicker/datepicker3.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/skin-blue.css'); ?>">

</head>
  
  <?php $this->load->view('Admin/left_aside'); ?>

    <section class="content">
      <div class="row">
      <div class="col-md-3">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <div style="text-align: center; display:inline-block;position:relative;">
                <h4>Employee Picture</h4>
               <a href="<?php echo site_url('Employee/deleteprofileimg/'.$employee[0]['id']); ?>" class="btn btn-danger btn-xs pull-right" style="position:absolute;bottom:0;right:0;"><i class="fa fa-close"></i></a>
               
                <a href="<?php echo base_url('assets/images/employees/picture'.$employee[0]['id'].'.jpg'); ?>" ><img class="img-responsive img-thumbnail" src="<?php echo base_url('assets/images/employees/picture'.$employee[0]['id'].'.jpg'); ?>" alt="Image not found"></a>
              </div>

              <div style="text-align: center; display:inline-block;position:relative;">
                <h4>Employee ID Proof</h4>
               <a href="<?php echo site_url('Employee/deleteprofileimg/'.$employee[0]['id']); ?>" class="btn btn-danger btn-xs pull-right" style="position:absolute;bottom:0;right:0;"><i class="fa fa-close"></i></a>
               
                <a href="<?php echo base_url('assets/images/employees/id_proff'.$employee[0]['id'].'.jpg'); ?>" ><img class="img-responsive img-thumbnail" src="<?php echo base_url('assets/images/employees/id_proff'.$employee[0]['id'].'.jpg'); ?>" alt="Image not found"></a>
              </div>
             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>


        
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#detail" data-toggle="tab">Detail</a></li>
              <li><a href="#edit" data-toggle="tab">Edit</a></li>
            </ul>
            <div class="tab-content">

              <div class="active tab-pane" id="detail">
                <?php $this->load->view('Admin/Employee/emp_profile'); ?>
              </div>

              <div class="tab-pane" id="edit">
                <?php $this->load->view('Admin/Employee/emp_edit'); ?>
              </div>

              
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
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
<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/fileUploads/fileUpload.js'); ?>"></script>
<script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/selectpicker/select.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/dist/js/jquery.form.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.date.extensions.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.extensions.js'); ?>"></script>
<script type="text/javascript">
    $("[data-mask]").inputmask();
</script>

<script type="text/javascript">
  $(document).ready(function() {
            $('#edit_employee').ajaxForm( {
                beforeSubmit : function(arr, $form, options){
                    $('.overlay').show();
                },
                success: function(result)
                {
                    $('.overlay').hide();
                    if(result == 'success')
                    {
                      var url = '<?php echo site_url("Employee/view_employee"); ?>';
                      location.reload();
                    }
                    else
                    {
                      alert(result);
                    }
                }
            });
  });
</script>

</body>
</html>