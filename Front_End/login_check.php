<?php
session_start();
include "db_conn.php";

$uname = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$useridl=strtolower($uname); 

if ($uname != "" && $password != "")
{
/*
    $sql_query = "select count(*) as cntUser from users_details where user_id='".$uname."' and password='".$password."'";
   
    $result = mysql_query($sql_query);
    $row = mysql_fetch_row($result);

    $count = $row['cntUser'];

    if($count > 0)
    {
        $_SESSION['uname'] = $uname;

        echo 1;
    }
    else
    {
        echo 0;
    }
*/

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
      	echo 1;
    	//header('Location: ../../Student_Panel/index.php');
    }
  /*else
  {
    header('location:login.php');
  }*/
    }
    elseif($row[4]=="student" && $row[5]=="deactive")
    {
    	echo 3;
        //$print = "Admin Permission Is Denied";
    }
    elseif($row[4]=="faculty" && $row[5]=="active")
    {
    $_SESSION['facultyid']=$row[0];
    if(isset($_SESSION['facultyid']))
    {
    	echo 2;
      //header('Location: ../../Faculty_panel/index.php');
    }
  /*else
  {
    header('location:login.php');
  }*/
    }
    elseif($row[4]=="faculty" && $row[5]=="deactive")
    {
    	echo 3;
      // $print = "Admin Permission Is Denied"; 
    }
  }
  else
    {
    	echo 0;
      // $print = "Wrong Userid or Password";
  }
}
?>