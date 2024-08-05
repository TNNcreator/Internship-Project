
<?php
include('database.php');

if(isset($_REQUEST['insert']))
{
    $pass = $_REQUEST['password'];

    $sql="update register set password='$pass'where r_id='$pass'";
    mysqli_query($db,$sql);
    header("location:user_login.php");
}

?>
<!doctype html>
<html lang="en">
   
<!-- Mirrored from demo.bosathemes.com/html/travele/admin/forgot.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jul 2024 05:35:14 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- favicon -->
      <link rel="icon" type="image/png" href="../assets/images/favicon.png">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="all">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&amp;family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="lstyle.css">
      <title>Travele | Travel & Tour HTML5 template </title>
      <style>
        .form-group label{
            color:#red;

        }
      </style>
</head>
<body>
    <div class="login-page" style="background-image: url();">
        <div class="login-from-wrap">
            <form class="login-from">
                <h1><span>Dream</span>Destination</h1>
                <div class="form-group" >
                    <label for="first_name1" style="color:blue;">Enter New Password</label>
                    <input type="text" name="password" requird class="validate">
                </div>
                
                <div class="login-group">
                    <input type="submit" name="insert" value="Submit" class="btn">
                </div>
                
                
            </form>
        </div>
    </div>

    <!-- *Scripts* -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="../../../../cdn.jsdelivr.net/npm/popper.js%401.16.0/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/canvasjs.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/dashboard-custom.js"></script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'8a501883ce01a02a',t:'MTcyMTI4MDc5NC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/bbfecc7f1c71/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8a501883ce01a02a","version":"2024.7.0","r":1,"serverTiming":{"name":{"cfL4":true}},"token":"2aaac9563824454ba89abdea91540009","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from demo.bosathemes.com/html/travele/admin/forgot.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jul 2024 05:35:14 GMT -->
</html>