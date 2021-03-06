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

<?php $this->load->view('Faculty/left_aside'); ?>
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="box">
        <div class="box-body">
          <form role="form" method="post" enctype="multipart/form-data">
            <div class="panel">
              <div class="panel-body">

                <div class="col-md-4 form-group">
                  <label>Start Date</label>
                  <input type="text" name="srt_date" class="form-control datepicker" placeholder="Enter Report Date" min="0" required="required" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
                </div>

                <div class="col-md-4 form-group">
                  <label>Last Date</label>
                  <input type="text" name="lst_date" class="form-control datepicker" placeholder="Enter Report Date" min="0" required="required" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
                </div>

                <div class="form-group col-md-4 ">
                  <label>Picture</label>
                  <input class="form-control" type="file" name="picture" />
                </div>
                <div class="form-group col-md-6">
                  <label>Name of Assignment</label>
                  <input class="form-control" type="text" name="name" />
                </div>
               <!--   <div class="form-group col-md-6">
                  <label>Subject of Assignment</label>
                  <input class="form-control" type="text" name="subject" />
                </div> -->

                <div class="col-md-6 form-group">
                  <label>Subject of Assignment</label>
                  <select class="form-control selectpicker" data-live-search="true" name="subject_id" id="sub_id">
                    <?php
                    $selected = ($subject_id == 'all')?'selected':'';
                    ?>
                    <option value="" <?php echo $selected; ?>></option>
                    <?php for($i=0; $i < count($subject); $i++)
                    {
                      $selected = ($subject_id == $subject[$i]['sd_id'])?'selected':'';
                      ?>
                      <option value="<?php echo $subject[$i]['sd_id']; ?>" <?php echo $selected; ?>>
                        <?php echo $subject[$i]['sd_name']; ?>
                      </option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Note</label>
                    <input class="form-control" type="text" name="note" />
                  </div>

                  

                  <div class="col-md-12 form-group">
                    <input type="submit" class="btn btn-primary pull-right " name="userSubmit" value="Add">
                  </div>
                </div>
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
