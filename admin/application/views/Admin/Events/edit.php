<?php $title = " Edit Event" ?>
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

          <form method="POST" action="<?php echo site_url('admin/events/edit_file_upload');?>" enctype='multipart/form-data'>

            <?php
            if(isset($edit_data) && is_array($edit_data) && count($edit_data)): $i=1;
              foreach ($edit_data as $key => $data) { 
                ?>

                <div class="col-md-8 form-group">
                  <label>Event Title</label>
                  <input type="text" name="name" value="<?php echo $data['name']; ?>" id="file" placeholder="name" class="form-control ">
                </div>



                <div class="col-md-12 form-group">
                  <label>Event Description</label>
                  <textarea name="class"  id="file" class="form-control " placeholder="Enter Event Description"> 
                    <?php echo $data['class']; ?>
                  </textarea>
                  <input type="hidden" name="user_id" value="<?php echo $data['u_id']; ?>" id="file" placeholder="class">
                </div>

                <div class="file-tab panel-body">
                  <label class="btn btn-default btn-file">
                   <span>Browse</span>
                   <input type="file" name="userfile[]" id="image_file" accept=".png,.jpg,.jpeg,.gif" class="form-control " multiple>
                 </label>
               </div>


               <?php } endif; ?>
               <?php
               if(isset($edit_data_image) && is_array($edit_data) && count($edit_data)): $i=1;
                foreach ($edit_data_image as $key => $data) { 
                  ?>
                  <tr class="imagelocation<?php echo $data['id'] ?>">
                    <td colspan="2" align="center">
                      <img src="<?php echo base_url(); ?>uploads/<?php echo $data['image']; ?>" style="vertical-align:middle;" width="80" height="80">
                      <span style="cursor:pointer;" class="btn btn-default" onclick="javascript:deleteimage(<?php echo $data['id'] ?>)">Remove</span>
                    </td>
                  </tr>
                  <?php }endif; ?>
                  <div class="col-md-12 form-group">
                    <input  type="submit" value="Submit" class="btn btn-primary pull-right">
                  </div>
                </form>

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
  <script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>
  <script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.js'); ?>"></script>
  <script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.date.extensions.js'); ?>"></script>
  <script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.extensions.js'); ?>"></script>
  <script type="text/javascript">
    $("[data-mask]").inputmask();
  </script>

  <script type="text/javascript">
    function deleteimage(image_id)
    {
      var answer = confirm ("Are you sure you want to delete from this post?");
      if (answer)
      {
        $.ajax({
          type: "POST",
          url: "<?php echo site_url('admin/events/deleteimage');?>",
          data: "image_id="+image_id,
          success: function (response) {
            if (response == 1) {
              $(".imagelocation"+image_id).remove(".imagelocation"+image_id);
            };

          }
        });
      }
    }
  </script>

</body>
</html>
