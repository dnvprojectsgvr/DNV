<?php
if($_POST)
{
$uid=$_POST['userid'];
$uidl=strtolower($uid);
$secq=$_POST['secr'];
$secql=strtolower($secq);
$seca=$_POST['seca'];
$secal=strtolower($seca);
$pass=$_POST['pwd'];
$ustype=$_POST['utype'];
include('db_conn.php');
if($ustype=="student")
{
$result = mysql_query("SELECT userid,security_ques,security_ans FROM std_reg WHERE userid  = '$uidl'")or die("error in query");
$row=mysql_fetch_array($result);
if(($row[0]==$uidl) && ($row[1]==$secql) && ($row[2]==$secal))
{
  $respass = mysql_query("update std_reg set password='$pass' where userid='$uidl'")or die("error in password query");
  echo "Changed Password";
  header("Location:index.php");
}
else
{
  echo "Wrong Details";
}
}
if($ustype=="faculty")
{
$result = mysql_query("SELECT facultyid,security_ques,security_ans FROM faculty_reg WHERE facultyid  = '$uidl'")or die("error in query");
$row=mysql_fetch_array($result);
if(($row[0]==$uidl) && ($row[1]==$secql) && ($row[2]==$secal))
{
  $respass = mysql_query("update faculty_reg set password='$pass' where facultyid='$uidl'")or die("error in password query");
  echo "Changed Password";
}
else
{
  echo "Wrong Details";
} 
}
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>DNV International Education Academy</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/edua-icons.css">
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/cubeportfolio.min.css">
<link rel="stylesheet" type="text/css" href="css/settings.css">
<link rel="stylesheet" type="text/css" href="css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/loader.css">


<link rel="icon" href="images/logo.png">

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
<!--Loader-->
<div class="loader">
  <div class="bouncybox">
      <div class="bouncy"></div>
    </div>
</div>
<div class="topbar"  id="responsive">
  <div class="container">
     <div class="row">
      <div class="col-md-12">
        <div class="pull-left">
        <span class="info"><a href="#."> Have any question?</a></span>
        <span class="info"><i class="icon-phone2"></i>02836 257334</span>
        <span class="info"><i class="icon-mail"></i><a href="mailto:dnvacademy@gmail.com"> dnvacademy@gmail.com</a></span>
        </div>
        <ul class="social_top pull-right" >
          <li><a href="http://fb.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="http://twitter.com" target="_blank"><i class="icon-twitter4"></i></a></li>
          <li><a href="http://plus.google.com" target="_blank"><i class="icon-google"></i></a></li>
       </ul>
      </div>
    </div>
  </div>
</div>


<!--Header-->
<header>
  <nav class="navbar navbar-default navbar-sticky bootsnav">
    <div class="container"> 
     <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="index.php">
        <img src="images/logo.png" class="logo logo-scrolled" alt="">
        </a>
      </div>
  <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOut">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About DNV</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >courses</a>
            <ul class="dropdown-menu">
              <li><a href="course_detail_mscit.php">Masters</a></li>
              <li><a href="courses.php">Graduate</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >events</a>
            <ul class="dropdown-menu">
              <li><a href="event.php">events</a></li>
              <li><a href="event_detail.php">Events Detail</a></li>
            </ul>
          </li>
          
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Faculties</a>
            <ul class="dropdown-menu">
              <li><a href="teachers_mscit.php">Msc.IT</a></li>
              <li><a href="teachers_bca.php">BCA</a></li>
              <li><a href="teachers_bba.php">BBA</a></li>
            </ul>
          </li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="testinomial.php">Alumni</a></li>
          <li><a href="contact.php">Contact Us</a></li>          
        </ul>
      </div>
    </div>   
  </nav>
</header>

<!--ABout US-->
<section id="about" class="padding">
  <div class="container aboutus">
    <div class="row">
      <div class="col-md-7 wow fadeInLeft" data-wow-delay="300ms">
       <h2 class="heading heading_space">Remeber Something That You Forgot... <span class="divider-left"></span></h2>
       <p class="bottom25"> 
        <form class="form-inline findus" id="contact-form" method="post" name="p" class="form-inline findus">
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="form-group">
                <label for="userid">USERID</label>
                <input type="text" class="form-control" name="userid" onBlur="logu()" onKeyPress="return event.charCode > 64  && event.charCode < 91 || event.charCode > 96 && event.charCode < 123 || event.charCode >= 48 && event.charCode <= 57 || event.charCode == 8" required>
                <span id="uierr" style="color: red;"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="form-group">
                <label for="secr">Security Question&nbsp;</label>
                <select name="secr" onBlur="sec()">
                  <option selected="" value="Default">Select Security Question</option>
                  <option value="favourite teacher">What Is Your Favourite Teacher Name&#63;</option>
                  <option value="mother name">What Is Your Mother Name&#63;</option>
                  <option value="childhood friend">What Is Your Childhood Friend Name&#63;</option>
                  <option value="favourite food">What Is Your Favourite Food&#63;</option>
                </select>
                <span id="secerr" style="color: red;"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="form-group">
                <label for="seca">Security Answer</label>
                <input type="text" name="seca" placeholder="eg:-ram" onKeyPress="return event.charCode > 64  && event.charCode < 91 || event.charCode > 96 && event.charCode < 123 || event.charCode == 8" onBlur="secan()" required>
                <span id="secaerr" style="color: red;"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="form-group">
                <label for="pwd">Password&nbsp;</label>
                <input type="password" name="pwd" placeholder="eg:-ram@47863" onBlur="pass()" class="form-control" required>
                <span id="pwderr" style="color: red;"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="form-group">
                <label for="pwde">Cofirm Password&nbsp;</label>
                <input type="password" name="pwde" placeholder="eg:-ram@47863" onBlur="pass()" class="form-control" required>
                <span id="pwdeerr" style="color: red;"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="form-group">
                User Type&nbsp;
                <select name="utype">
                  <option selected value="student">Student</option>
                  <option value="faculty">Faculty</option>
                </select>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-primary">
              </div>
            </div>
          </div>
        </form>
       </p>
      </div>
      <div class="col-md-5 wow fadeInRight" data-wow-delay="300ms">
        <div class="image">
         <img src="#" alt="Empty">
        </div>
      </div>
    </div>
  </div>
</section>
<!--ABout US-->

<!--FOOTER-->
<div class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>Copyright &copy; 2017 <a href="dnvac.in.">DNV College</a>. all rights reserved.</p>
      </div>
    </div>
  </div>
</div>
<!--FOOTER ends-->




<script src="js/jquery-2.2.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery-countTo.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/forget_password.js"></script>
<script src="js/functions.js"></script>

</body>
</html>