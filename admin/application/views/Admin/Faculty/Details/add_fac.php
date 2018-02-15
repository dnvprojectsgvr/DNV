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
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/skin-blue.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/plugins/selectpicker/select.min.css'); ?>">


</head>
  
  <?php $this->load->view('Admin/left_aside'); ?>
 
<!-- Main content -->
    <section class="content">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="box box-primary">
                        <div class="box-body" ng-app>
                            <form id="add_employee" action="<?php echo site_url('Employee/addemp'); ?>" method="post" enctype="multipart/form-data">

                                <div class="col-md-4 form-group">
                                  <label>Employee Name *</label>
                                  <input type="text" class="form-control" name="employee[name]"  placeholder="Enter Employee Name..." maxlength="128" >
                                </div>

                                <div class="col-md-4 form-group">
                                  <label>Designation *</label>
                                  <input type="text" class="form-control" name="employee[designation]"  placeholder="Enter Employee Designation..." maxlength="128" >
                                </div>

                                 <div class="col-md-4 form-group">
                                    <label>Date of Birth *</label>
                                    <div class="input-group">
                                      <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                      <input type="text" class="form-control datepicker" name="employee[dob]" placeholder="Enter Employee Date of Birth" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
                                    </div>
                                  </div>

                                <div class="col-md-4 form-group">
                                  <label>Address*</label>
                                  <input type="text" class="form-control" name="employee[address]"  placeholder="Enter Employee Address..." maxlength="128"  >
                                </div>
                              
                                <div class="col-md-4 form-group">
                                    <label>City *</label>
                                    <input type="text" class="form-control" name="employee[city]"  maxlength="128" placeholder="Enter Employee City..." >
                                </div>

                                <div class="col-md-4 form-group">
                                   <label>State *</label>
                                    <input type="text" class="form-control" name="employee[state]" placeholder="Enter Employee State..." >
                                </div>


                                <div class="col-md-4 form-group">
                                    <label>Pincode</label>
                                    <input type="text" class="form-control" name="employee[pincode]"  maxlength="128" placeholder="Enter Employee Pincode">
                                </div>

                                  <div class="col-md-4 form-group">
                                    <label>Mobile 1 *</label>
                                    <input type="text" class="form-control" name="employee[mobile1]"  maxlength="128" placeholder="Enter Employee Mobile 1" >
                                </div>

                                <div class="col-md-4 form-group">
                                    <label>Mobile 2</label>
                                    <input type="text" class="form-control" name="employee[mobile2]"  maxlength="128" placeholder="Enter Employee Mobile 2">
                                </div>

                                 <div class="col-md-4 form-group">
                                    <label>Mobile 3</label>
                                    <input type="text" class="form-control" name="employee[mobile3]"  maxlength="128" placeholder="Enter Employee Mobile 3">
                                </div>

                                 <div class="col-md-4 form-group">
                                    <label>Email 1 *</label>
                                    <input type="text" class="form-control" name="employee[email1]"  maxlength="128" placeholder="Enter Employee E-Mail 1" >
                                </div>

                                 <div class="col-md-4 form-group">
                                    <label>Email 2</label>
                                    <input type="text" class="form-control" name="employee[email2]"  maxlength="128" placeholder="Enter Employee E-Mail 2">
                                </div>

                                <div class="col-md-4 form-group">
                                    <label>Picture</label>
                                    <input type="file" class="form-control" name="picture" accept="image/*" placeholder="Enter Employee Picture...">
                                </div>

                                <div class="col-md-4 form-group">
                                    <label>Employee ID Proof</label>
                                    <input type="file" class="form-control" name="id_proff" accept="image/*" placeholder="Enter Employee ID...">
                                </div>

                                

                                 <div class="col-md-4 form-group">
                                    <label>Username *</label>
                                    <input type="text" class="form-control" name="employee[username]"  maxlength="128" placeholder="Enter Employee Username" >
                                </div>

                                 <div class="col-md-4 form-group">
                                    <label>Password *</label>
                                    <input type="password" class="form-control" name="employee[password]"  maxlength="128" placeholder="Enter Employee Password" >
                                </div>

                                <div class="col-md-4 form-group">
                  <label>Confirm Password *</label>
                  <input type="password" class="form-control" name="con_password"  maxlength="128" placeholder="Please Confirm Employee Password">
                </div>

                <div class="col-md-4 form-group">
                  <label>Neighbor Name *</label>
                  <input type="text" class="form-control" name="employee[neighbor]"  maxlength="128" placeholder="Enter Employee Neighbor Name">
                </div>

                <div class="col-md-4 form-group">
                  <label>Neighbor Number *</label>
                  <input type="text" class="form-control" name="employee[neighbor_no]"  maxlength="128" placeholder="Enter Employee Neighbor Contact No">
                </div>

                <div class="col-md-4 form-group">
                  <label>PAN No *</label>
                  <input type="text" class="form-control" name="employee[pan_no]"  maxlength="128" placeholder="Enter Employee PAN No">
                </div>

              

                 <div class="col-md-4 form-group">
                                    <label>Blood Group </label>
                                    <select class="form-control" name="employee[blood_group]" >
                                        <option value="None">None</option>
                                        <option>A+</option>
                                        <option>A-</option>
                                        <option>B+</option>
                                        <option>B-</option>
                                        <option>AB+</option>
                                        <option>AB-</option>
                                        <option>O+</option>
                                        <option>O-</option>
                                    </select>
                                </div>

                <div class="col-md-4 form-group">
                  <label>Reference at Joining Time  *</label>
                  <input type="text" class="form-control" name="employee[reference]"  maxlength="128" placeholder="Enter Employee Reference at Joining Time">
                </div>

                <div class="col-md-4 form-group">
                <label>Date of Joining *</label>
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                    <input type="text" class="form-control datepicker" name="employee[emp_doj]" placeholder="Enter Employee Date of Joining" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
                  </div>
                </div>

                <div class="col-md-4 form-group">
                  <label>Department *</label>
                  <input type="text" class="form-control" name="employee[department]"  maxlength="128" placeholder="Enter Employee Department">
                </div>

                <div class="col-md-4 form-group">
                  <label>Past Working Company 1 *</label>
                  <input type="text" class="form-control" name="employee[past_work_company1]"  maxlength="128" placeholder="Enter Employee Past Working Experince">
                </div>

                <div class="col-md-4 form-group">
                  <label>Past Working Company 2 *</label>
                  <input type="text" class="form-control" name="employee[past_work_company2]"  maxlength="128" placeholder="Enter Employee Past Working Experince">
                </div>

                <div class="col-md-12 form-group">
                                    <label>Remarks </label>
                                    <textarea class="form-control" name="employee[remarks]" maxlength="1024" placeholder="Enter Remarks, if any (Maximum 1024 characters allowed.)" style="resize:none;"></textarea>
                                </div>

                               

                               <div class="col-md-12 form-group">
                                  <button type="type" class="btn btn-primary pull-right" name="submit" value="Submit">SUBMIT</button>
                                </div>

                            </form>
                                
                               
                              
                            
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
<script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>
<script src="<?php echo base_url('assets/dist/js/angular.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/selectpicker/select.min.js'); ?>"></script>
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
            $('#add_employee').ajaxForm( {
                beforeSubmit : function(arr, $form, options){
                    $('.overlay').show();
                },
                success: function(result)
                {
                    $('.overlay').hide();
                    if(result == 'success')
                    {
                      var url = '<?php echo site_url("Employee/view_employee"); ?>';
                      $(location).attr('href',url);
                    }
                    else
                    {
                      alert(result);
                    }
                }
            });
  });
</script>



<script>
  function check_status(membership_type)
  {
   
   var j = membership_type
  
   if(j == 'assigned'){
      document.getElementById("svcombo").style.display= "block";
      document.getElementById("stkm").style.display= "block";
      document.getElementById("adate").style.display= "block";
      document.getElementById("aposition").style.display= "block";
    }
    if(j == 'In Stock'){
      document.getElementById("svcombo").style.display= "none";
      document.getElementById("stkm").style.display= "none";
      document.getElementById("adate").style.display= "none";
      document.getElementById("aposition").style.display= "none";
    }
    if(j == 'scrp'){
      document.getElementById("svcombo").style.display= "none";
      document.getElementById("stkm").style.display= "none";
      document.getElementById("adate").style.display= "none";
      document.getElementById("aposition").style.display= "none";
    }
    

  }
</script>
<script>
  function fetchmembers(membership_type)
  {
    $('#receipt').html('');
     var data = {membership_type : membership_type};
     var saveData = $.ajax({
     type: 'POST',
     url: "<?php echo site_url('ajax/fetch_free_tyre'); ?>",
     data: data,
     dataType: "text",
      success: function(resultData) {
        //alert(resultData);
        $('#members').html('<option selected disabled>--SELECT Tyre Position--</option>');
       // alert(resultData);
        $('#members').append(resultData);
        $('.selectpicker').selectpicker('refresh');
      }
     });
  }
</script>


</body>
</html>