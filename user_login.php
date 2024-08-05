<?php
include('database.php');
session_start();

if(isset($_REQUEST['insert']))
{
    $eml = $_REQUEST['email'];
    $pass=$_REQUEST['password'];

    $sql="select * from register WHERE email='$eml' and password='$pass'";
    $result=mysqli_query($db,$sql);
    
    if(mysqli_num_rows($result))
    {
        $_SESSION['logins']= $eml;
        header("location:user_home.php");
    }
    
    else
    {
        echo '<script>alert("User Not Register");
   window.location.href ="user_login.php";</script>';
    }
}


?>
<!doctype html>
<html lang="en">
   
<!-- Mirrored from demo.bosathemes.com/html/travele/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jul 2024 05:35:13 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- favicon -->
      <link rel="icon" type="image/png" href="">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="" media="all">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&amp;family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="lstyle.css">
      <title>Travele | Travel & Tour HTML5 template </title>
</head>

<body style="background-image:url('bg.jpg');">
    <div class="login-page" style="width:100%; ">
        <div class="login-from-wrap">
            <form class="login-from" method="post" style="background-color:white;"> 
                    <h1><span>Dream</span>Destination</h1>
                <div class="form-group">
                    <input type="email" class="validate" Required placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <input type="password" class="validate" Required placeholder="Password" name="password">
                </div>
                <div style="text-align: center;" >
                    <input type="submit" name="insert" value="Login" class="btn">
                </div>
                <div class="form-group" style="font-size:20px;">
                    <button class="bbtn" style="background-color: rgb(247, 159, 228); border:none; border-radius: 10px;"><a href="user_register.php">Register</a></button>

                    <button class="bbtn" style="background-color: rgb(247, 159, 228); border:none; border-radius: 10px;"><a href="user_forget.php">   Forgot Password?</a></button>
                <div>
            </form>
            
        </div>
    </div>

    <!-- *Scripts* -->
    
</body>

<!-- Mirrored from demo.bosathemes.com/html/travele/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jul 2024 05:35:14 GMT -->
</html>