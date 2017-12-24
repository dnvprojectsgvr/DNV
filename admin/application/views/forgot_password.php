<?
	include("includes/db_config.php");	// Including database connection
	
	mysql_select_db($database);	//selecting database
        
        function decryptIt($data, $key) {
    $key = md5($key);
    $data = base64_decode($data);
    $decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_256,
        $key, $data, MCRYPT_MODE_CBC, md5($key));
    $decrypted = rtrim($decrypted, "\0");
    return $decrypted;
}
	
	
	if(isset($_POST['forgot'])=='forgot')
	{
		 extract($_POST);
		 
		 $user_email = mysql_query("select * from devise_user_details where user_email = '".$email."'");
		 $row= mysql_num_rows($user_email);
		 
		 if($row>0)	// if email exists
		 {
					
                        

			$result= mysql_fetch_array($user_email);	
			$DecPassword = decryptIt($result['user_password'],$result['user_name']);
			$sendTo = $email;
			$subject = "Password Information";
			$message = "\nDear " . $result['user_name'];
			$message .= "\nYour account information is:";
			$message .= "\nUsername: " . $result['user_name'];
			$message .= "\nPassword: " . $DecPassword;
			$message .= "\n\n\n This is an auto generated mail. Don't reply to this mail.";
			$from = "info@kaveriforwarders.com";
			$headers = "From:". $from;
			$verify_mail=mail($sendTo,$subject,$message,$headers);		// sends password to the specified mail id		
			
			if($verify_mail)
				@header('Location:forgot_password.php?action=success');
				
		 }
		else	
		{
			@header('Location:forgot_password.php?action=failure');
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Form :: ADJ Overseas Logistics </title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
        <script type="text/javascript" src="includes/js/jquery.js"></script>
        <script type="text/javascript" src="includes/js/jquery.validate.js"></script> 
        <script src="includes/js/bootstrap-alert.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function(){
                $("#forgot_password").validate({
                        rules: { 
                          email: "required"
                        }
                }); 
            });
        </script>
     
        
    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <center> <img src="assets/ico/logo.png" class="img-responsive"> </center>
                        </div>
                    </div>
                    <div class="container">
                       <div class="row">
                          <div class="col-sm-8 col-sm-offset-2 text">
<?
           if($_GET['action']=='success')
           {?>
                 <div class="alert alert-success" style="width:300px;">
                    <a class="close" data-dismiss="alert" href="#">&times;</a>
                  <b>Password has been sent to your mail</b>
                </div>
         <?  } 
        
           if($_GET['action']=='failure')
           {?>
                <div class="alert alert-error" style="width:315px;">
                    <a class="close" data-dismiss="alert" href="#">&times;</a>
                   <b>Please give correct email address</b>
                </div>
         <?  } ?>
                          </div>
                       </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        		<h3>Forgot Password?</h3>
                            		<p>Enter your email address:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
    
                             <form action="forgot_password.php" id="forgot_password" method="post">
                                <input type="hidden" name="forgot" id="forgot" value="forgot" />
			        <div class="form-group">
			          <label class="sr-only" for="form-username">Email : </label>
                                  <input id="email" name="email" type="text" placeholder="Enter your Email" class="form-username form-control" />
                                 </div>
                                 <div class="form-group">
                                   <button type="submit" class="btn" value="Submit" > Submit </button>
                                 </div>
                             </form>       
                           </div>
		        </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>