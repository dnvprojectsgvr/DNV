<?php
session_start();
require_once 'class.user.php';
$user_login = new USER();

if($user_login->is_logged_in()!="")
{
	$user_login->redirect('home.php');
}

if(isset($_POST['btn-login']))
{
	$email = trim($_POST['txtemail']);
	$upass = trim($_POST['txtupass']);
	
	if($user_login->login($email,$upass))
	{
		$user_login->redirect('home.php');
	}
}
?>

<html>
  <head>
    <title>Login | Code</title>
  </head>
  <center>
  <body>
    	<?php 
		if(isset($_GET['inactive']))
		{
			?>
            <div >
				<button '>&times;</button>
				<strong>Sorry!</strong> This Account is not Activated Go to your Inbox and Activate it. 
			</div>
            <?php
		}
		?>
        <form class="form-signin" method="post">
        <?php
        if(isset($_GET['error']))
		{
			?>
    			<button class='close' data-dismiss='alert'>&times;</button>
				<strong>Wrong Details!</strong> 
	        <?php
		}
		?>
        <h2>Sign In.</h2><hr />
        <input type="email"  placeholder="Email address" name="txtemail" required /><br><br>
        <input type="password"  placeholder="Password" name="txtupass" required /><br><br>
     	<hr />
        <button  type="submit" name="btn-login">Sign in</button><br><br>
       <button type="button"> <a href="signup.php"  >Sign Up</a></button><hr />
        <button type="button"><a href="fpass.php">Lost your Password ? </button></a>
      </form>
</center>
     </body>
</html>