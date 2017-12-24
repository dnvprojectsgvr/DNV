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
          <li class="dropdown" >
            <a class="dropdown-toggle" href="#" data-toggle="dropdown"> <i class="icon-login"></i></a>
            <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px; width: 240px;">
             <!-- <form name="p"> -->
              <frameset>
                    <input type="text" id="usid1" name="userid" placeholder="Username" style=" margin-top: 10px;" onBlur="logu()" ondrop="return false;" onpaste="return false;" oncopy="return false;" oncut="return false;" class="userid form-control" required>
                    <span id="uierr" style="color: red"></span>

                    <input type="password" type="password" name="password" id="pass" placeholder="Password" style=" margin-top: 10px;" onBlur="logp()" ondrop="return false;" onpaste="return false;" oncopy="return false;" oncut="return false;" class="pass form-control" required>
                    <span id="paerr" style="color: red"></span>
                    <div id="message" style="width: 100%; color: red;"></div>
                <input type="submit" name="submit" id="subm" value="Login" class="btn btn-primary" style=" margin-top: 10px; width: 100%">
                

              </frameset>
             <!-- </form> -->
             <br>
             <ul>
               <li><a href="" target="_blank" style="width: 100%; color: black;">&nbsp;&nbsp; Forgot Password ? &nbsp;&nbsp;</a></li>
               <li><a href="login.php" target="_blank" style="width: 150%; color: black;">&nbsp;&nbsp; FAQ &nbsp;&nbsp;</a></li>
             </ul> 
             <a href="student_reg.php" target="_blank" style="width: 100%; color: black; text-align:left; padding:5px 24px;"> Student Registration</a><br>

            </div>
          </li>

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
<!-- HEAER -->


<!--Page Header-->
<section class="page_header padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-content">
        <h1>Testimonials</h1>
        <p> </p>
        <div class="page_nav">
      <span>You are here:</span> <a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Testimonials</span>
      </div>
      </div>
    </div>
  </div>
</section>
<!--Page Header-->


<!--Testimonial-->
<section id="testinomila_page" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 wow fadeInDown">
        <h2 class="heading heading_space">What People Say ?<span class="divider-left"></span></h2>
      </div>
    </div>
    <div id="js-grid-masonry" class="cbp">
      <div class="cbp-item">
        <div class="cbp-caption-defaultWrap">
          <div class="testimonial_wrap">
            <div class="testimonial_text text-center">
              <img src="images/quote.png" alt="quote" class="quote">
              <p><b>DNV</b> spring up to be an oasis in the deserted life of every hopeless student imparting high quality education with affordable fee structure through prominent principal and its management.Your significant institution allowed a girl child and every student to own a prestigious signature of their own.</p>
            </div>
            <div class="testimonial_pic">
              <img src="images/testimonials/lynette.jpg" alt="testimonial" width="59">
              <span class="color">Lynette Gracious Frantz</span>
              <span class="post_img">BCA(2012-15) Melbourne, Victoria, Australia </span>
            </div>
          </div>
        </div>
      </div>
      <div class="cbp-item">
        <div class="cbp-caption-defaultWrap">
          <div class="testimonial_wrap">
            <div class="testimonial_text text-center">
              <img src="images/quote.png" alt="quote" class="quote">
              <p>We Enjoyed alot at DNV college ,where we did many things like Cultural Events, Sports Events, Gaming, Coding (All this things), and faculties,principal and Management all over there are very supportive, friendly natured, they are very helpful.
              </p>
            </div>
            <div class="testimonial_pic">
              <img src="images/testimonials/amit.jpg" alt="testimonial" width="59">
              <span class="color">Amit Maheshwari</span>
              <span class="post_img">BCA(2011-14) Network Engineer @ IIM, Ahmedabad.</span>
            </div>
          </div>
        </div>
      </div>
      <div class="cbp-item">
        <div class="cbp-caption-defaultWrap">
          <div class="testimonial_wrap">
            <div class="testimonial_text text-center">
              <img src="images/quote.png" alt="quote" class="quote">
              <p>Being a Programmer, Being a Initiator that's what i have learnt from the DNV college the most. It is the best part i remembered in DNV college , apart DNV college has enhanced my Management and Supporting Skills.</p>
            </div>
            <div class="testimonial_pic">
              <img src="images/testimonials/Sanel.jpg" alt="testimonial" width="59">
              <span class="color">Sanel Kurup</span>
              <span class="post_img">BCA(2011-14) Software Developer @ Synechrone , Pune.</span>
            </div>
          </div>
        </div>
      </div>
      <div class="cbp-item">
        <div class="cbp-caption-defaultWrap">
          <div class="testimonial_wrap">
            <div class="testimonial_text text-center">
              <img src="images/quote.png" alt="quote" class="quote">
              <p>Professors try their best to help out the students, especially if you personally ask them.DNV college comprses of best faculty inn kutch district which eventually helped me to achieve my goal and get a good job in IT field.</p>
            </div>
            <div class="testimonial_pic">
              <img src="images/testimonials/Rashi.jpg" alt="testimonial" width="59">
              <span class="color">Rashi Mehta</span>
              <span class="post_img">BCA(2010-13) Software Developer @ Syntel Inc., Pune.</span>
            </div>
          </div>
        </div>
      </div>
      <div class="cbp-item">
        <div class="cbp-caption-defaultWrap">
          <div class="testimonial_wrap">
            <div class="testimonial_text text-center">
              <img src="images/quote.png" alt="quote" class="quote">
              <p>For me, Life in DNV has been breath-taking and enriching. I'm carrying along with me beautiful memories of this place and will always cherish them. Thank you DNV for making this journey so pleasant.</p>
            </div>
            <div class="testimonial_pic">
              <img src="images/testimonials/Richa.jpg" alt="testimonial" width="59">
              <span class="color">Richa Gularajani</span>
              <span class="post_img">BCA(2011-14) Technical Support @ Eclinical Works ,Ahmedabad.</span>
            </div>
          </div>
        </div>
      </div>
      <div class="cbp-item">
        <div class="cbp-caption-defaultWrap">
          <div class="testimonial_wrap">
            <div class="testimonial_text text-center">
              <img src="images/quote.png" alt="quote" class="quote">
              <p>It's been a great journey when I was at DNV College & It can be a stepping stone to your further education or starting your working life.</p>
            </div>
            <div class="testimonial_pic">
              <img src="images/testimonials/Gaurav.jpg" alt="testimonial" width="59">
              <span class="color">Gaurav Jiandani</span>
              <span class="post_img">BCA(2013-16) MSC IT , DAIICT , Gandhinagar</span>
            </div>
          </div>
        </div>
      </div>
      <div class="cbp-item">
        <div class="cbp-caption-defaultWrap">
          <div class="testimonial_wrap">
            <div class="testimonial_text text-center">
              <img src="images/quote.png" alt="quote" class="quote">
              <p>DNV college not only develops the students intellectually but also makes them ready to face the world by developing their co-curricular activities.</p>
            </div>
            <div class="testimonial_pic">
              <img src="images/testimonials/Vamsi.jpg" alt="testimonial" width="59">
              <span class="color">Krishna Vamsi</span>
              <span class="post_img">BCA(2013-16) MSC IT , DAIICT , Gandhinagar</span>
            </div>
          </div>
        </div>
      </div>
      <div class="cbp-item">
        <div class="cbp-caption-defaultWrap testimonial_wrap">
          <div class="testimonial_text text-center">
            <img src="images/quote.png" alt="quote" class="quote">
            <p>The uniqueness of DNV College is the campus life. The sports facilities, academics, and faculty members are good.</p>
          </div>
          <div class="testimonial_pic">
            <img src="images/testimonials/Girish.jpg" alt="testimonial" width="59">
            <span class="color">Girish Bhatti</span>
            <span class="post_img">BCA(2013-16) MCA , LJIT , Ahmedabad</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Testimonial ends-->



<!--FOOTER-->
<footer class="padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25">About Us<span class="divider-left"></span></h3>
        <a href="index.php" class="footer_logo bottom25"><img src="#" alt="DNV"></a>
        <p>We offer the best education in the city, We beleive in making a good person.</p>
        <ul class="social_icon top25">
          <li><a href="#." class="facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#." class="twitter"><i class="icon-twitter4"></i></a></li>
          <li><a href="#." class="dribble"><i class="icon-dribbble5"></i></a></li>
          <li><a href="#." class="instagram"><i class="icon-instagram"></i></a></li>
          <li><a href="#." class="vimo"><i class="icon-vimeo4"></i></a></li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25">Quick Links<span class="divider-left"></span></h3>
        <ul class="links">
          <li><a href="index.php"><i class="icon-chevron-small-right"></i>Home</a></li>
          <li><a href="courses.php"><i class="icon-chevron-small-right"></i>Courses</a></li>
          <li><a href="teachers.php"><i class="icon-chevron-small-right"></i>Our Team</a></li>
          <li><a href="dnvac.blogspot.in"><i class="icon-chevron-small-right"></i>Blog</a></li>
          <li><a href="contact.php"><i class="icon-chevron-small-right"></i>Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25">Keep in Touch <span class="divider-left"></span></h3>
        <p class=" address"><i class="icon-map-pin"></i>Plot No 3 Ward 9/A GANDHIDHAM 370240 </p>
        <p class=" address"><i class="icon-phone"></i>02836 257334 , 8347494566 </p>
        <p class=" address"><i class="icon-mail"></i><a href="mailto:dnvacademy@gmail.com">dnvacademy@gmail.com</a></p>
        <img src="images/footer-map.png" alt="we are here" class="img-responsive">
      </div>
    </div>
  </div>
</footer>
<div class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-left">
        <p>Copyright &copy; 2017 <a href="dnvac.in.">DNV College</a>. all rights reserved.</p>
      </div>
      <div class="col-md-12 text-right">
        <p>Designed & Devloped By: <a href="https://facebook.com/viraj.sansari" target="_blank">Viraj Sansari</a>, <a href="https://www.facebook.com/profile.php?id=100012508354542" target="_blank">GSR</a></p>
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

<script src="js/functions.js"></script>

</body>
</html> 