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
                          
                         <?php echo form_open('Admin/check_km'); ?>
                            
                            <div class="col-md-6 form-group">
                                  <label>Select Vehicle *</label>
                                  <select class="form-control selectpicker" data-live-search="true" name="vehicle_id" id="vid" onchange="fetchmembers(this.value)">
                                    <option selected disabled>--SELECT Vehicle--</option>
                                    <?php for($i=0; $i < count($vehicles); $i++)
                                    {?>
                                <option value="<?php echo $vehicles[$i]['id']; ?>" <?php if(isset($vid)){if($vehicles[$i]['id'] == $vid){ echo 'selected'; }} ?>><?php echo $vehicles[$i]['vehicle_no']."(".$vehicles[$i]['make'].")" ?></option>
                                      
                                      <?php  
                                    }
                                    ?>
                                  </select>
                            </div>

                            <div class="col-md-6 form-group">
                                    <label>Current KM. *</label>
                                    <input type="text" class="form-control" name="tyre_km" required="required" maxlength="128" placeholder="Vehicle Current KM" id="ckm" <?php if(isset($tyre_km)){ echo 'value='.$tyre_km; } ?> >
                            </div>
                          <div class="col-md-6 form-group">
                          <button type="submit" name="submit" value="submit" class="btn btn-primary">
                            Submit
                        </button>
                      </div>
                      <?php echo form_close(); ?>

                      <br>

                        <?php if(isset($tyred)){ ?>
                        <section class="content">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="box">
                <div class="box-body table-responsive">
                             <table class="table table-bordered table-hover">
                              <thead>
                                <tr>
                                  <th>Sr No.</th>
                                  <th>Tyre Brand</th>
                                  <th>Tyre Stencil No.</th>
                                  <th>Removed From</th>
                                  <th>Position</th>
                                  <th>Assign Date</th>
                                  <th>Assign KM</th>
                                  <th>Running KM</th>
                                  <th>Duration</th>
                                </tr>
                              </thead>
                              <tbody>
                                

                              <?php for($i=0; $i<count($tyred); $i++)
                              {
                                ?>
                                <tr>
                                  <td><?php echo $i + 1; ?></td>
                                  <td><?php echo $this->general_m->get_one_value('tyre_stock', 'brand', array('tyre_stock_id' => $tyred[$i]['tyre_id'])); ?></td>
                                  <td><?php echo $this->general_m->get_one_value('tyre_stock', 'model_no', array('tyre_stock_id' => $tyred[$i]['tyre_id'])); ?></td>
                                    
                                 

                                    <td><?php if(isset($rvehicle)){ for($b=0;$b<count($rvehicle);$b++){ echo $this->general_m->get_one_value('vehicle_details', 'vehicle_no', array('id' => $rvehicle[$b]['vehicle_id'])); } } ?></td>

                                  <td><?php echo $this->general_m->get_one_value('assign_tyre', 'position', array('assign_id' => $tyred[$i]['assign_id'])); ?></td>
                                  
                                  <td><?php echo $this->general_m->get_one_value('assign_tyre', 'assign_date', array('assign_id' => $tyred[$i]['assign_id'])); ?></td>
                                  
                                  <td><?php echo $this->general_m->get_one_value('assign_tyre', 'assign_tyre_km', array('assign_id' => $tyred[$i]['assign_id'])); ?></td>

                                  

                                  <td><?php echo $km[$i]; ?></td>
                                  <td><?php 
                                  $start = $this->general_m->get_one_value('assign_tyre', 'assign_date', array('assign_id' => $tyred[$i]['assign_id']));
                                        $endd = date('Y-m-d'); 
                                        $date1 = new DateTime($start);
                                        $date2 = new DateTime($endd);
                                        $diff = $date1->diff($date2);

                                        echo  $diff->y . " Years " . $diff->m." Months ".$diff->d." Days "?></td>
                                </tr>
                                <?php
                                }
                              ?>
                              </tbody>
                            </table> 

                            </div>
              </div>
            </div>
          </div>
        </section>
                              <?php } ?>
                        
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
  function fetchmembers(membership_type)
  {
    $('#receipt').html('');
     var data = {membership_type : membership_type};
     var saveData = $.ajax({
     type: 'POST',
     url: "<?php echo site_url('ajax/fetch_last_km'); ?>",
     data: data,
     dataType: "text",
      success: function(resultData) {
        //alert(resultData);
        document.getElementById("ckm").value = resultData;
      }
     });
  }
</script>


<script>
  $(function () {
    $(".table").DataTable({
      "pageLength": 100
    });
  });
</script>
</body>
</html>
