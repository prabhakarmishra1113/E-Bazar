<?php
 include "../db_con.php";
 session_start();

//Code For SignUp Data
 if(isset($_REQUEST['submit']))
 {
    if(($_REQUEST['username']=="")||($_REQUEST['useremail']=="")||($_REQUEST['userphone']=="")||($_REQUEST['userpassword']=="")||($_REQUEST['userconfirmpassword']==""))
    {
       header("location:../../index.php");
       $_SESSION['signmsg']="Fill All The Details";
    }
    else
    {
        $username=$_REQUEST['username'];
        $useremail=$_REQUEST['useremail'];
        $userphone=$_REQUEST['userphone'];
        $userpassword=$_REQUEST['userpassword'];

        $query="SELECT * FROM users WHERE user_email='$useremail' or user_phone='$userphone' ";
        $result=$con->prepare($query);
        $result->execute();
        $num=$result->rowCount();
        if($num>0)
        {
          header("location: ../../index.php");
          $_SESSION['signmsg']="Account Already Exist";
        }
        else
        {
          $query="INSERT INTO users(user_name,user_phone,user_email,user_pass) VALUES(?,?,?,?)";
          $result=$con->prepare($query);
          $result->execute(array($username,$userphone,$useremail,$userpassword));

          if($result)
          {
            $query="SELECT user_id FROM users WHERE user_email='$useremail'";
            $result=$con->prepare($query);
            $result->execute();
            $row=$result->fetch(PDO::FETCH_ASSOC);
             $_SESSION['user_id']=$row['user_id'];
             $_SESSION['user_name']=$username;
             $_SESSION['user_email']=$email;
             header("location: ../../index.php");
          }
          else
          {
             echo "Wrong data";
          }
        }

    }
 }

 //code For Login DATA

if(isset($_REQUEST['login']))
{
    if(($_REQUEST['userlogin']=="")||($_REQUEST['userpassword']==""))
    {
       header("location:../../index.php");
       $_SESSION['loginmsg']="Fill All The Details";
    }
    else{
    $userlogin=$_REQUEST['userlogin'];
    $userpassword=$_REQUEST['userpassword'];

    $query="SELECT * FROM users WHERE (user_email='$userlogin' OR user_phone='$userlogin') AND user_pass='$userpassword'";
    $result=$con->prepare($query);
    $result->execute();
    $row=$result->fetch(PDO::FETCH_ASSOC);
    if($row)
    {
       
       
       if($row>0)
       {
         $_SESSION['user_name']=$row['user_name'];
         $_SESSION['user_id']=$row['user_id'];
         $_SESSION['user_email']=$row['user_email'];
         header("location: ../../index.php");
       }
    }
    else
    {
        header("location:../../index.php");
        $_SESSION['loginmsg']="Invalid Login Details";
    }
 }

}
?>
