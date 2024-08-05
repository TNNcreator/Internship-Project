<?php
include ('database.php');
session_start();


if(isset($_REQUEST['ins']))
{
    $user=$_REQUEST['username'];
    $pass=$_REQUEST['password'];

    $sql="select * from admin_login where username='$user' and password='$pass'";
    $r=mysqli_query($db,$sql);

    if(mysqli_num_rows($r))
    {
        $_SESSION['log']=$user;
        echo "login successfully";
        header('location:home.php');
    }
    else
    {
        echo '<script>alert("Login failed");
        window.location.href ="Login.php";</script>';
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="colour.css">
    
</head>
<body>
    
    <form action="" method="post">
     <div class="txt">
        <div class="hade">
            <h1>Admin Login </h1>
        </div>
        <div >
             <input type="text" name="username" placeholder="Username"  class="style">
        </div>
        <div>
            <input type="password" placeholder="Password" class="style" name="password">
        </div>
        <div>
            <input type="submit"  value="Login" class="btn" name="ins">
        </div>
    </div>

    </form>
    
</body>
</html>