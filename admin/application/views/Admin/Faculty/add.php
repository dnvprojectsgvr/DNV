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
	
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/all.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/datepicker/datepicker3.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/skin-blue.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/selectpicker/select.min.css'); ?>">



	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/all.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/select2.min.css'); ?>">

	<link rel="icon" href="<?php echo base_url('assets/dist/img/favicon.ico'); ?>" type="image/x-icon"> 
</head>

<?php $this->load->view('Admin/left_aside'); ?>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="box box-primary">
				<div class="box-body">
					<?php echo form_open(); ?>

                    <div>
                        <label for="fnam">First Name&nbsp;</label>
                        <input type="text" name="fnam" id="fname" placeholder="First Name" maxlength="45" onBlur="fn()" onChange="genfullnam()" onKeyPress="return lettersOnly(event)" required>
                        <span id="fnerr"></span>
                    </div>
                    <div>
                        <label for="mnam">Middle Name&nbsp;</label>
                        <input type="text" name="mnam" id="mname" placeholder="Middle Name" maxlength="45" onBlur="mn()" onChange="genfullnam()" onKeyPress="return lettersOnly(event)">
                        <span id="mnerr"></span>
                    </div>
                    <div>
                        <label for="lnam">Last Name&nbsp;</label>
                        <input type="text" name="lnam" id="lname" placeholder="Last Name" maxlength="45" onBlur="ln()" onChange="genfullnam()" onKeyPress="return lettersOnly(event)" required>
                        <span id="lnerr"></span>
                    </div>
                    <div>
                        <label for="funam">Full Name&nbsp;</label>
                        <input type="text" name="funam" id="fullname" placeholder="Full Name" maxlength="100" onBlur="fu()" onKeyPress="return lettersOnly(event)" required>
                        <span id="fuerr"></span>
                    </div>
                    <div>
                        <label for="fanam">Father Name&nbsp;</label>
                        <input type="text" name="fanam" id="faname" placeholder="Father Name" maxlength="100" onBlur="fan()" onKeyPress="return lettersOnly(event)" required>
                        <span id="faerr"></span>
                    </div>
                    <div>
                        <label for="gen">Gender&nbsp;</label>
                        <input type="radio" name="gen" value="Male" onBlur="ge()" required>Male
                        <input type="radio" name="gen" value="Female" onBlur="ge()" required>Female
                        <input type="radio" name="gen" value="other" onBlur="ge()" required>Other
                        <span id="generr"></span>
                    </div>
                    <div><label for="dob">Date Of Birth&nbsp;</label><select name="birthday_day" id="day" title="Day" onblur="dt_check()">
                        <option value="0">Day</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5" selected="1">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>    
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    <select name="birthday_month" id="month" title="Month" onblur="dt_check()">
                        <option value="0">Month</option>
                        <option value="1">Jan</option>
                        <option value="2">Feb</option>
                        <option value="3">Mar</option>
                        <option value="4">Apr</option>
                        <option value="5">May</option>
                        <option value="6">Jun</option>
                        <option value="7" selected="1">Jul</option>
                        <option value="8">Aug</option>
                        <option value="9">Sept</option>
                        <option value="10">Oct</option>
                        <option value="11">Nov</option>
                        <option value="12">Dec</option>
                    </select>
                    <select name="birthday_year" id="year" title="Year" onblur="dt_check()">
                        <option value="0">Year</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999" selected="1">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                    </select><span id="birtherr"></span></div>
                    <div>
                        <label for="mo">Mobile no&nbsp;</label>
                        <input type="text" value="+91" size="1" name="modigit" disabled>
                        <input type="text" name="mo" id="moi" maxlength="10" placeholder="eg:-9587823867" onBlur="mob()" onkeypress="return isNumber(event)" onChange="genusi()" required>
                        <span id="moerr"></span>
                    </div>
                    <div>
                        <label for="em">Email id&nbsp;</label>
                        <input type="text" name="em" id="email" placeholder="Email id eg:abc@gmail.com" maxlength="255" onBlur="ema()" required>
                        <span id="emerr"></span>
                    </div>
                    <div>
                        <label for="userid">Faculty Id&nbsp;</label>
                        <input type="text" name="userid" id="userid" placeholder="Ram1234" maxlength="30" ondrop="return false;" oncopy="return false;" oncut="return false;" onpaste="return false;" onblur="genusi()" required><span id="status"></span>
                    </div>
                    <div>
                        <label for="pwd">Password&nbsp;</label>
                        <input type="password" name="pwd" id="pwd" placeholder="eg:-Ram@47863" maxlength="255" onBlur="pass()" required>
                        <span id="pwderr"></span>
                    </div>
                    <div>
                        <label for="pwde">Cofirm Password&nbsp;</label>
                        <input type="password" name="pwde" id="pwde" placeholder="eg:-Ram@47863" maxlength="255" onBlur="pass1()" required>
                        <span id="pwdeerr"></span>
                    </div>
                    <div>
                        <label for="secr">Security Question&nbsp;</label>
                        <select name="secr" id="secr" onBlur="sec()">
                            <option value="Default">Select Security Question</option>
                            <option selected="" value="favourite teacher">What Is Your Favourite Teacher Name&#63;</option>
                            <option value="mother name">What Is Your Mother Name&#63;</option>
                            <option value="childhood friend">What Is Your Childhood Friend Name&#63;</option>
                            <option value="favourite food">What Is Your Favourite Food&#63;</option>
                        </select>
                        <span id="secerr"></span>
                    </div>
                    <div>
                        <label for="seca">Security Answer</label>
                        <input type="text" name="seca" id="seca" placeholder="eg:-ram" maxlength="60" onKeyPress="return lettersOnly(event)" onBlur="secan()" required>
                        <span id="secaerr"></span>
                    </div>
                    <div>
                        <input type="submit" name="Submit" value="Submit">&nbsp;
                        <input type="reset" name="Reset" value="Reset">
                    </div>
			<!-- 		<div class="col-md-12 form-group">
						<button type="type" class="btn btn-primary pull-right" name="submit" value="Submit">SUBMIT</button>
					</div>
               -->
               <?php echo form_close(); ?>
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

<script src="<?php echo base_url('assets/dist/js/jquery.form.js'); ?>"></script>


<script src="<?php echo base_url('assets/plugins/select2/select2.full.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.date.extensions.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.extensions.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/fastclick/fastclick.js'); ?>"></script>
<script src="<?php echo base_url('assets/dist/js/app.min.js'); ?>"></script>


<script src="<?php echo base_url('assets/plugins/faculty/faculty_reg.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/faculty/userid_faculty.js') ?>"></script>



<script>
	$(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
    {
    	ranges: {
    		'Today': [moment(), moment()],
    		'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
    		'Last 7 Days': [moment().subtract(6, 'days'), moment()],
    		'Last 30 Days': [moment().subtract(29, 'days'), moment()],
    		'This Month': [moment().startOf('month'), moment().endOf('month')],
    		'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    	},
    	startDate: moment().subtract(29, 'days'),
    	endDate: moment()
    },
    function (start, end) {
    	$('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    );


    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
    	checkboxClass: 'icheckbox_minimal-blue',
    	radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
    	checkboxClass: 'icheckbox_minimal-red',
    	radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
    	checkboxClass: 'icheckbox_flat-green',
    	radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
    	showInputs: false
    });
});
</script>

</body>
</html>
