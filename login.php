<?php
if($_POST)
{
    session_start();
    include('db_conn.php');
    $userid=$_POST['userid'];
    $password=$_POST['password'];
    $useridl=strtolower($userid); 
    $query="select * from users_details where user_id='$useridl' and password='$password'";
    $result=mysql_query($query) or mysql_error("error in query");
    $row=mysql_fetch_row($result);
  if($row[0]==$useridl && $row[1]==$password)
    {
    if($row[4]=="student" && $row[5]=="active")
    {
    $_SESSION['studentid']=$row[0];
    if(isset($_SESSION['studentid']))
    {
      header('Location: ../dnv/Student/dashboard.php');
    }
  else
  {
    header('location:login.php');
  }
    }
    elseif($row[4]=="student" && $row[5]=="deactive")
    {
      $print = "Admin Permission Is Denied";
    }
    elseif($row[4]=="faculty" && $row[5]=="active")
    {
    $_SESSION['facultyid']=$row[0];
    if(isset($_SESSION['facultyid']))
    {
      header('Location: ../dnv/Faculty/dashboard.php');
    }
  else
  {
    header('location:login.php');
  }
    }
    elseif($row[4]=="faculty" && $row[5]=="deactive")
    {
      $print = "Admin Permission Is Denied"; 
    }
  }
  else
    {
      $print = "Wrong Userid or Password";
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


          <li class="divider-vertical"  ></li>
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
        <img src="images/logo_black.png" class="logo logo-scrolled" alt="">
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
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blogs</a>
            <ul class="dropdown-menu">
              <li><a href="http://resfybca.blogspot.in">Fy BCA</a></li>
              <li><a href="http://ressybca.blogspot.in">Sy BCA</a></li>
              <li><a href="http://restybca.blogspot.in">Ty BCA</a></li>
              <li><a href="http://dnvbba.blogspot.in">BBA</a></li>
              <li><a href="#">Msc-IT</a></li>
            </ul>
          </li>
          <li><a href="testinomial.php">Alumni</a></li>
          <li><a href="contact.php">Contact Us</a></li>          
        </ul>
      </div>
    </div>   
  </nav>
</header>

<!--login-->
<section id="about" class="padding">
<div class="container aboutus">
    <div class="row">
      <div class="col-md-7 wow fadeInLeft" data-wow-delay="300ms">
       <h2 class="heading heading_space">Login To Your Corner <span class="divider-left"></span></h2>
       <p class="bottom25"> 
        <form class="form-inline findus" id="contact-form" method="post" name="p">
          <div class="row">
            <div class="col-md-12">
              <div id="result"></div>
            </div>
          </div>
          <div class="row">

            <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label for="userid">USERID</label>
                <input type="text" id="usid1" name="userid" onBlur="logu()" onkeypress="return IsAlphaNumeric(event);" ondrop="return false;" onpaste="return false;" class="form-control" placeholder="User ID" title="Enter User ID" required>
                <span id="uierr" style="color: red"></span>
                <span id="error" style="color: Red; display: none">* Special Characters not allowed</span>
              </div>
            </div>
            </div>
             <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="form-group">
              PASSWORD
               <input type="password" name="password" onBlur="logp()" ondrop="return false;" onpaste="return false;" class="form-control" placeholder="Password" title="Enter Password" required>
               <span id="paerr" style="color: red"></span>
            </div>
            </div>
            </div>
             <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="form-group">
               <input type="submit" value="Login" class="btn btn-primary">
               <span id="paerr"></span>
            </div>
            </div>
            </div>
        </form>
       <br>
       <h3 style="color: red;"> 
    <?php
    if (isset($print)) 
    {
      echo $print;
    }
    
    ?>
    </h3>  
    <br>
    <h3 class="link">
      <a href=""> Forgot Password ? &nbsp;</a>
      <a href="student_reg.php"> Student Registration</a>
      <br><br>
      Any Login Issue ?<a href=""> Click Here </a>
    </h3>
    </p>
      </div>      
     <div class="col-md-5 wow fadeInRight" data-wow-delay="300ms">
       <h2 class="heading heading_space">Login FAQ <span class="divider-left"></span></h2>
        <p class="bottom25">
          <ul>
            <li><h4 style="color: red;">Admin Permission Denied. </h4></li>
            <br><p>Your Account is not activated by DNV administration.<br>
            Please <b><a href="">click here </a></b> if you want to contact to administration online.</p>
            <li><h4 style="color: red;">Wrong Userid or Password. </h4></li>
            <br><p>Your User ID or Password is worng.
            <br> Please click on forgot password to reset your password.</p>
            <li><h4 style="color: red;">If your User ID is alredy registered. </h4></li>
            <br><p>If you are a proud student of DNV and facing this issue while registering your student account.In this case we suggest you to contact administration of DNV immediately.Using offline or online method. For online method please <b><a href="">click here</a></b>.</p>
          </ul>
        </p>
      </div>
    </div>
  </div>
</section>
<!--Login-->

<!--FOOTER-->
<div class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-left">
        <p>Copyright &copy; 2017 <a href="dnvac.in.">DNV College</a>. all rights reserved.</p>
      </div>
      </div>
      </div>
      <div class="container">
      <div class="row">
      <div class="col-md-12 text-right">
      <p>Design & Devloped By </p>
      </div>
      </div>
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
<script src="login.js"></script>
<script src="js/functions.js"></script>

</body>
</html>