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
                    <div class="box">

                        <div class="box-body">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                            
                          </div>
                          
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-responsive">
                            
                            <div class="col-md-12 form-group">
                                  <label>Select Vehicle *</label>
                                  <select class="form-control selectpicker" data-live-search="true" name="old_vehicle_id" id="vid">
                                    <option selected disabled>--SELECT Vehicle--</option>
                                    <?php for($i=0; $i < count($vehicles); $i++)
                                    {
                                        
                                      echo"<option value='".$vehicles[$i]['id']."'>".$vehicles[$i]['vehicle_no']."(".$vehicles[$i]['make'].")"."</option>"; 
                                    }
                                    ?>
                                  </select>
                            </div>

                            <div class="col-md-12 form-group">
                                    <label>Current KM. *</label>
                                    <input type="text" class="form-control" name="assign_tyre_km" required="required" maxlength="128" placeholder="Vehicle Current KM" id="ckm" onblur="myFunction(this.value)">
                            </div>

                            <!-- <table class="table table-bordered table-hover">
                              <thead>
                                <tr>
                                  <th>Sr No.</th>
                                  <th>Driver Name</th>
                                  <th>Vehicle Name</th>
                                  <th>Joining Date</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php for($i=0; $i<count($assign_driver); $i++)
                              {
                                ?>
                                <tr>
                                  <td><?php echo $i + 1; ?></td>
                                  <td><?php echo $this->general_m->get_one_value('drivers', 'name', array('driver_id' => $assign_driver[$i]['driver_id'])); ?><?php echo "(" ?><?php echo $this->general_m->get_one_value('drivers', 'driver_no', array('driver_id' => $assign_driver[$i]['driver_id'])); ?><?php echo ")" ?></td>

                                  <td><?php echo $this->general_m->get_one_value('vehicle_details', 'model', array('id' => $assign_driver[$i]['vehcle_id'])); ?><?php echo "(" ?><?php echo $this->general_m->get_one_value('vehicle_details', 'vehicle_no', array('id' => $assign_driver[$i]['vehcle_id'])); ?><?php echo ")" ?></td>

                                  <td><?php echo $assign_driver[$i]['assign_date'] ?></td>
                                  
                                </tr>
                                <?php
                                }
                              ?>
                              </tbody>
                            </table> -->
                              
                          </div>
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
<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/selectpicker/select.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>
<script>
  $(function () {
    $(".table").DataTable({
      "pageLength": 100
    });
  });
</script>
</body>
</html>
