<?php

include("includes/db_config.php");	// Including database connection
include("config.php");

            mysql_select_db($database);
      
           function encryptIt($data, $key) {
    $key = md5($key);
    $encrypted = mcrypt_encrypt(MCRYPT_RIJNDAEL_256,
        $key, $data, MCRYPT_MODE_CBC, md5($key));
    $encrypted = base64_encode($encrypted);
    return $encrypted;
}
            
            
		
			// insert a record	
			if(isset($_POST['reg_form'])=='reg_form')
			{	
			// print_r($_POST);exit;
			
				extract($_POST);
                                $encrypted = encryptIt($password,$username);
				
				$ip = $_SERVER['REMOTE_ADDR'];
				
				// if the email already exists in the database , it returns failure else inserts the record.
				$verify_email= mysql_query("select * from devise_user_details where user_email = '".$email."'");
				$email_rows= mysql_num_rows($verify_email);
				
				if($email_rows>0)
				{
					@header('Location:user_registration.php?action=failure');
				}
								 				 
				else	
				{
						
						// inserting the user details into database.
						
						$sql_2="insert into devise_user_details(user_fullname,user_companyname,user_name,user_email,user_password,user_ipaddress)
					values('$firstname','$lastname','$username','$email','$encrypted','$ip')";
echo $sql_2;
					
						mysql_query($sql_2);

							$sendTo = $email;
							$subject = "Registration Confirmation";
							$message = "\nDear " . $firstname;
							$message .= "\nThank you for registering. Your log in information is as follows:";
							$message .= "\nUsername: " . $username;
							$message .= "\nPassword: " . $password;
							$message .= "\nYou can directly access your account by http://kaveriforwarders.com/portal after verification of your account by admin";

							$message .= "\n\n\n This is an auto generated mail. Don't reply to this mail.";
							$from = "info@kaveriforwarders.com";
							$headers = "From:". $from;
							$bool=mail($sendTo,$subject,$message,$headers);
							if($bool)
							{
								 @header('Location:user_registration.php?action=success');
							}
							else
							{
								@header('Location:user_registration.php');
							}
						
						@header('Location:user_registration.php?action=success');
										
					
					
				}
				
				
		}
			
		
?>