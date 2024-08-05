<?php
include('database.php');


if(isset($_REQUEST['insert']))
{
   $fname = $_REQUEST['first_name'];
   $lname = $_REQUEST['last_name'];
   $eml=$_REQUEST['email'];
   $ceml=$_REQUEST['confirm_email'];
   $fon=$_REQUEST['phone'];
   $uname=$_REQUEST['username'];
   $pass=$_REQUEST['password'];

   $sql= "insert into  register (first_name,last_name,email,confirm_email,phone,username,password) values ('$fname','$lname','$eml','$ceml','$fon','$uname','$pass')";
   mysqli_query($db,$sql);
   
   echo '<script>alert("register success");
   window.location.href ="user_login.php";</script>';
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="rform.css">

</head>
<body style="background-image:url('bg.jpg');">
<main id="content" class="site-main">
   <div class="icontent" >
      <h1 class="inner-title">Registration Form</h1>
   </div>

                     <div class="booking-form-wrap" >
                        <div class="booking-content">
                           <form action="" method="post" >
                              
                              <div class="row"  style="background-color:white;">
                              <h1><span>User</span> Register</h1>
                                 <div class="col-sm-6" >
                                    <div class="form-group">
                                       <input type="text" class="validate" Required placeholder="First name*" name="first_name">
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                      
                                       <input type="text" class="validate" Required placeholder="Last name*" name="last_name">
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       
                                       <input type="email" class="validate" Required placeholder="Email*" name="email">
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       
                                       <input type="email" class="validate" Required placeholder="Confirm Email*" name="confirm_email">
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                      
                                       <input type="text" class="validate" Required placeholder="Phone*" name="phone">
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       
                                       <input type="text" class="validate" Required placeholder="Username*"  name="username">
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                      
                                       <input type="text" class="validate" Required placeholder="Password*" name="password">
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       
                                       <input type="Submit" class="bttn" name="insert">
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
</main>
</body>
</html>
