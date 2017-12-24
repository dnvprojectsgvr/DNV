
<?php
/*
if($_POST)
{
    session_start();

    include('db_conn.php');
    $userid=$_POST['userid'];
    $password=$_POST['password'];
    $useridl=strtolower($userid); 
    
    $query="select * from users_details where user_id='$useridl' and password='$password'";
    $result=mysql_query($query) or mysql_error("error in query");

    $row=mysql_fetch_array($result);

    if($row[0]==$useridl && $row[1]==$password)
    {
      $_SESSION['userid']=$row[0];
      $_SESSION['usertype'] = $row['user_type'];
      
      if(isset($_SESSION['userid']))
      {

        
        if($_SESSION['usertype'] == "student")
          {
            header('Location: ../dnv/Student/dasboard.php');
          }
          else
          {
            header('Location: ../dnv/Faculty/dasboard.php');

          }
      }
      else
      {
        header('location:login.php');
      }
    }
    else
    {
      echo "<script>alert('wrong pass');</script>";
      header( "refresh:0.5;url=login.php" );
    }
}*/
?>



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
      header('Location: ../dnv/Student/dasboard.php');
    }
  else
  {
    header('location:login.php');
  }
    }
    elseif($row[4]=="student" && $row[5]=="deactive")
    {
      echo "Admin Permission Is Denied";
    }
    elseif($row[4]=="faculty" && $row[5]=="active")
    {
    $_SESSION['facultyid']=$row[0];
    if(isset($_SESSION['facultyid']))
    {
      header('Location: ../dnv/Faculty/dasboard.php');
    }
  else
  {
    header('location:login.php');
  }
    }
    elseif($row[4]=="faculty" && $row[5]=="deactive")
    {
      echo "Admin Permission Is Denied"; 
    }
  }
  else
    {
      echo "Wrong Userid And Password";
  }
}
?>