<?php
session_start();
if(!$_SESSION['logins'])
{
    header('location:user_login.php');
}
?>

<html>
   
<!-- Mirrored from demo.bosathemes.com/html/travele/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jul 2024 05:32:58 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

      <!-- favicon -->
      <link rel="icon" type="image/png" href="assets/images/favicon.png">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" media="all">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/fontawesome/css/all.min.css">
      <!-- jquery-ui css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/jquery-ui/jquery-ui.min.css">
      <!-- modal video css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/modal-video/modal-video.min.css">
      <!-- light box css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/lightbox/dist/css/lightbox.min.css">
      <!-- slick slider css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick.css">
      <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick-theme.css">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&amp;family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="assets/style.css">
      <title>Dream Destination| Travel & Tour Website </title>
   </head>
   <body class="home">
    
      <div id="page" class="full-page">
         <header id="masthead" class="site-header header-primary">
            <!-- header html start -->
            <div class="top-header">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8 d-none d-lg-block">
                        <div class="header-contact-info">
                           <ul>
                              <li>
                                 <a href="#"><i class="fas fa-phone-alt"></i> +97 1211 04 54</a>
                              </li>
                              <li>
                                 <a href="https://demo.bosathemes.com/cdn-cgi/l/email-protection#3e575058517e6a4c5f485b52105d5153"><i class="fas fa-envelope"></i> <?php echo $_SESSION['logins'];?></span></a>
                              </li>
                              <li>
                                 <i class="fas fa-map-marker-alt"></i> 21,22, panini It Academy 
                              </li>
                              <li>
                                 <a href="user_mybokdata.php">My Bookdata</a> 
                              </li>
                        
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-4 d-flex justify-content-lg-end justify-content-between">
                        <div class="header-social social-links">
                           <ul>
                              <li><a target="blank"href="https://www.facebook.com"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                              <li><a target="blank"href="https://www.twitter.com"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a target="blank"href="https://www.instagram.com"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                              <li><a target="blank"href="https://www.linkedin.com"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                        <div class="header-search-icon">
                           <button class="search-icon">
                              <i class="fas fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="bottom-header">
               <div class="container d-flex justify-content-between align-items-center">
                  <div class="site-identity">
                     <h1 class="site-title">
                        <a href="index.html">
                           <img class="white-logo" src="assets/images/travele-logo.png" alt="logo">
                           
                        </a>
                     </h1>
                  </div>
                  <div class="main-navigation d-none d-lg-block">
                     <nav id="navigation" class="navigation">
                        <ul>
                           <li class="menu-item-has-children">
                              <a href="user_home.php">Home</a>
                           </li>
                           <li class="menu-item-has-children">
                              <a href="user_package.php">Packages</a>
                           </li>
                           <li class="menu-item-has-children">
                              <a href="#">Pages</a>
                              <ul>
                                 <li>
                                    <a href="user_about.php">About</a>
                                 </li>
                                 <li>
                                    <a href="user_gallery.php">Gallery</a>
                                 </li>
                                 <li>
                                    <a href="user_contact.php">Contact</a>
                                 </li>
                                 <li>
                                    <a href="user_login.php">Login</a>
                                 </li>
                                 <li>
                                    <a href="user_forget.php">Forget Password</a>
                                 </li>
                              </ul>
                           </li>
                           <li class="menu-item-has-children">
                           <a href="user_gallery.php">Gallery</a>
                              
                           </li>
                           <li class="menu-item-has-children">
                           <a href="user_about.php">About</a>
                           </li>
                           <li class="menu-item-has-children">
                           <a href="user_contact.php">Contact</a>
                              
                     
                           </li>
                        </ul>
                     </nav>
                  </div>
                  <div class="header-btn">
                     <a href="user_login.php" class="button-primary" style="text-align:center;"><i class='bx bx-log-out' style=" font-size: 20px; font-weight: 800;" ></i></a>
                  </div>
               </div>
            </div>
            <div class="mobile-menu-container"></div>
         </header>
</div>