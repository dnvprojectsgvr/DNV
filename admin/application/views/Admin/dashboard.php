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
</head>

<?php $this->load->view('Admin/left_aside'); ?>
<section class="content">
  <div class="row">


    <div class="col-md-12">
      <div class="row">   

        <div class="col-md-3">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php // echo $tyre; ?></h3>
              <p>Students</p>
            </div>
            <div class="icon">
              <a href="<?php // echo site_url('members/amenity_members'); ?>">
                <i class="fa fa-bandcamp" style="color: #00a3cb;"></i>
              </a>
            </div>
            <a href="<?php // echo site_url('Admin/check_km'); ?>" class="small-box-footer">
              View Students <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div> 

        <div class="col-md-3">
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php // echo $loan_today[0]['emit']; ?></h3>
              <p><?php // echo $this->general_m->YMDtoDMY($next_installment[0]['emi_date']); ?></p>
            </div>
            <div class="icon">
              <a href="<?php // echo site_url('vehicle/add'); ?>">
                <i class="ion ion-stats-bars" style="color: #008d4d;"></i>
              </a>
            </div>
            <a href="<?php // echo site_url('vehicle/ckeck_loan'); ?>" class="small-box-footer">
             Check Fees <i class="fa fa-arrow-circle-right"></i>
           </a>
         </div>
       </div>

       <div class="col-md-3">
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3><?php //echo $vehicle; ?></h3>
            <p>Faculty's</p>
          </div>
          <div class="icon">
            <a href="<?php //echo site_url('vehicle/add'); ?>">
              <i class="fa fa-user" style="color:rgb(218, 140, 16)"></i>
            </a>
          </div>
          <a class="small-box-footer"  href="<?php //echo site_url('vehicle'); ?>">
            Faculty List <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div> 

      <div class="col-md-3">
        <div class="small-box bg-red">
          <div class="inner">
            <h3><?php //echo $driver; ?></h3>
            <p>Events</p>
          </div>
          <div class="icon">
            <a href="<?php //echo site_url('driver/add'); ?>"><i class="ion ion-bank" style="color: #c64333;"></i></a>
          </div>
          <a href="<?php// echo site_url('driver/amenity_members'); ?>" class="small-box-footer">
           View Events <i class="fa fa-arrow-circle-right"></i>
         </a>

       </div>
     </div>
   </div>

   <div class="clearfix visible-sm-block"></div>

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

<script src="<?php echo base_url('assets/plugins/timepicker/bootstrap-timepicker.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/numtoword/numtoword.js'); ?>"></script>
<script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/selectpicker/select.min.js'); ?>"></script>


<script type="text/javascript">
  function myFunction(refralno) {

    var veid = $('#vid option:selected').val();


    $('#receipt').html('');
    var data = {refralno : refralno,vid : veid};
    var saveData = $.ajax({
     type: 'POST',
     url: "<?php echo site_url('ajax/check_km'); ?>",
     data: data,
     dataType: "text",
     success: function(resultData) {

      alert(resultData);
      var valData= resultData;

      var valNew=valData.split('!');
      document.getElementById("km").value = valData.split('!', 1);
      document.getElementById("pos").value = valData.split('!', 2).pop();
      document.getElementById("km1").value = valData.split('!', 3).pop();
      document.getElementById("pos1").value = valData.split('!', 4).pop();

    }
  });



  }
</script>

<script>
  var a = ['', 'ONE ', 'TWO ', 'THREE ', 'FOUR ', 'FIVE ', 'SIX ', 'SEVEN ', 'EIGHT ', 'NINE ', 'TEN ', 'ELEVEN ', 'TWELVE ', 'THIRTEEN ', 'FOURTEEN ', 'FIFTEEN ', 'SIXTEEN ', 'SEVENTEEN ', 'EIGHTEEN ', 'NINETEEN '];
  var b = ['', '', 'TWENTY', 'THIRTY', 'FORTY', 'FIFTY', 'SIXTY', 'SEVENTY', 'EIGHTY', 'NINETY'];
  function inWords(num) {
    if ((num = num.toString()).length > 9) return 'overflow';
    n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
    if (!n) return;
    var str = '';
    str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'CRORE ' : '';
    str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'LAKH ' : '';
    str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'THOUSAND ' : '';
    str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'HUNDRED ' : '';
    str += (n[5] != 0) ? ((str != '') ? 'AND ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'ONLY ' : '';
    $('#amountinwords').val(str)
  }
</script>


<script>
  function payment_mode(payment_mode)
  {
    if(payment_mode == 'Cheque')
    {
      $('#bank_mode').show();
    }
    else
    {
      $('#bank_mode').hide();
    }
  }
</script>
</body>
</html>
