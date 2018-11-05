<?php
session_start();
include("usersdb.php");

$username = @$_POST['username'];
$password = @$_POST['password'];
$email    = @$_POST['email'];
$submit   = @$_POST['submit'];
$submitlog   = @$_POST['submitlog'];
$encpassword = md5($password);

if($submit){

    if($username==true){

        if($password==true){

            if($email==true){

$insert= mysqli_query($db,"INSERT INTO users(`id`,`username`,`password`,`email`) VALUES (NULL,'$username','$encpassword','$email')");

             if($insert === false){
                    echo mysqli_error($db);
            }else{echo "<script type='text/javascript'> document.location = '../pages/success.php'; </script>";}
                
            }else
                echo "Email is not entered! ";
            
        }else
            echo "Password is not entered! ";

    }else
        echo "Username is not entered! ";
};


if($submitlog) {
  // username and password sent from form 

    $myusername = mysqli_real_escape_string($db,$_POST['userlog']);
  $mypassword = mysqli_real_escape_string($db,$_POST['passlog']);
  $encpassword = md5($mypassword);

  $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$encpassword'";
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $active = $row['active'];

  $count = mysqli_num_rows($result);

if($count == 1) {
     $_SESSION['userlog']=$myusername;
   echo "<script type='text/javascript'> document.location = '../pages/mainpage.php'; </script>";
}else {
     echo  "Your Login Name or Password is invalid";
  };

}
?>