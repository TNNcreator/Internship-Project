<?php
error_reporting(0);
include('user_header.php');
session_start();
if(!$_SESSION['login'])
{
    header('location:user_login.php');
}
include('database.php'); 


if(isset($_REQUEST['submit']))
{
   $fullname = $_REQUEST['full_name'];
   $emal = $_REQUEST['email'];
   $phone = $_REQUEST['number'];
   $da =date('Y-m-d',strtotime($_REQUEST['date']));
   $pkgg_id = $_REQUEST ['pkg_id'];
   
   $sql = "insert into boking (full_name,email,number,date,pkg_id) values ('$fullname','$emal','$phone','$da','$pkgg_id')";
   mysqli_query($db,$sql);

}

if(isset($_REQUEST['packs']))
{
    $packid = $_REQUEST['packs'];
    $sql = "SELECT * FROM package WHERE pkg_id = '$packid'  ";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result);

    $name=$row['place_id'];
    $sql="select *from place where place_id = '$name' ";
    $a=mysqli_query($db,$sql);
    $PlaceName=mysqli_fetch_array($a);
}


?>

<main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/inner-banner.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">Package Detail</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <div class="single-tour-section">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8">
                        <div class="single-tour-inner">
                           <h2><?php echo $PlaceName['place_name']?></h2>
                           <figure class="feature-image">
                              <img src="packageimg/<?php echo $row['package_img'];?>" width="100%" height="100%" alt="">
                              <div class="package-meta text-center">
                                 <ul>
                                    <li>
                                       <i class="far fa-clock"></i>
                                       <?php echo $row['days'];?>
                                    </li>
                                    <li>
                                       <i class="fas fa-user-friends"></i>
                                       People: 4
                                    </li>
                                    <li>
                                       <i class="fas fa-map-marked-alt"></i>
                                       <?php echo $PlaceName['place_name']?>
                                    </li>
                                 </ul>
                              </div>
                           </figure>
                           <div class="tab-container">
                              <ul class="nav nav-tabs" id="myTab" role="tablist">
                                 <li class="nav-item">
                                    <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">DESCRIPTION</a>
                                 </li>
                                 
                                 <li class="nav-item">
                                    <a class="nav-link" id="map-tab" data-toggle="tab" href="#map" role="tab" aria-controls="map" aria-selected="false">Map</a>
                                 </li>
                              </ul>
                              <div class="tab-content" id="myTabContent">
                                 <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                    <div class="overview-content">
                                     <p>
                                       <?php echo $row['pkg_dec'];?>
                                     </p>
                                    </div>
                                 </div>
                                 
                                 <div class="tab-pane" id="review" role="tabpanel" aria-labelledby="review-tab">
                                    <div class="summary-review">
                                       <div class="review-score">
                                          <span>4.9</span>
                                       </div>
                                       <div class="review-score-content">
                                          <h3>
                                             Excellent
                                             <span>( Based on 24 reviews )</span>
                                          </h3>
                                          <p>Tincidunt iaculis pede mus lobortis hendrerit eveniet impedit aenean mauris qui, pharetra rem doloremque laboris euismod deserunt non, cupiditate, vestibulum.</p>
                                       </div>
                                    </div>
                                    <!-- review comment html -->
                                    <div class="comment-area">
                                       <h3 class="comment-title">3 Reviews</h3>
                                       <div class="comment-area-inner">
                                          <ol>
                                             <li>
                                                <figure class="comment-thumb">
                                                   <img src="assets/images/img20.jpg" alt="">
                                                </figure>
                                                <div class="comment-content">
                                                   <div class="comment-header">
                                                      <h5 class="author-name">Tom Sawyer</h5>
                                                      <span class="post-on">Jana 10 2020</span>
                                                      <div class="rating-wrap">
                                                         <div class="rating-start" title="Rated 5 out of 5">
                                                            <span style="width: 90%;"></span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <p>Officia amet posuere voluptates, mollit montes eaque accusamus laboriosam quisque cupidatat dolor pariatur, pariatur auctor.</p>
                                                   <a href="#" class="reply"><i class="fas fa-reply"></i>Reply</a>
                                                </div>
                                             </li>
                                             <li>
                                                <ol>
                                                   <li>
                                                      <figure class="comment-thumb">
                                                         <img src="assets/images/img21.jpg" alt="">
                                                      </figure>
                                                      <div class="comment-content">
                                                         <div class="comment-header">
                                                            <h5 class="author-name">John Doe</h5>
                                                            <span class="post-on">Jana 10 2020</span>
                                                            <div class="rating-wrap">
                                                               <div class="rating-start" title="Rated 5 out of 5">
                                                                  <span style="width: 90%"></span>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <p>Officia amet posuere voluptates, mollit montes eaque accusamus laboriosam quisque cupidatat dolor pariatur, pariatur auctor.</p>
                                                         <a href="#" class="reply"><i class="fas fa-reply"></i>Reply</a>
                                                      </div>
                                                   </li>
                                                </ol>
                                             </li>
                                          </ol>
                                          <ol>
                                             <li>
                                                <figure class="comment-thumb">
                                                   <img src="assets/images/img22.jpg" alt="">
                                                </figure>
                                                <div class="comment-content">
                                                   <div class="comment-header">
                                                      <h5 class="author-name">Jaan Smith</h5>
                                                      <span class="post-on">Jana 10 2020</span>
                                                      <div class="rating-wrap">
                                                         <div class="rating-start" title="Rated 5 out of 5">
                                                            <span></span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <p>Officia amet posuere voluptates, mollit montes eaque accusamus laboriosam quisque cupidatat dolor pariatur, pariatur auctor.</p>
                                                   <a href="#" class="reply"><i class="fas fa-reply"></i>Reply</a>
                                                </div>
                                             </li>
                                          </ol>
                                       </div>
                                       <div class="comment-form-wrap">
                                          <h3 class="comment-title">Leave a Review</h3>
                                          <form class="comment-form">
                                             <div class="full-width rate-wrap">
                                                <label>Your rating</label>
                                                <div class="procduct-rate">
                                                   <span></span>
                                                </div>
                                             </div>
                                             <p>
                                                <input type="text" name="name" placeholder="Name">
                                             </p>
                                             <p>
                                                <input type="text" name="name" placeholder="Last name">
                                             </p>
                                             <p>
                                                <input type="email" name="email" placeholder="Email">
                                             </p>
                                             <p>
                                                <input type="text" name="subject" placeholder="Subject">
                                             </p>
                                             <p>
                                                <textarea rows="6" placeholder="Your review"></textarea>
                                             </p>
                                             <p>
                                                <input type="submit" name="submit" value="Submit">
                                             </p>
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="map" role="tabpanel" aria-labelledby="map-tab">
                                    <div class="map-area">
                                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60998820.06503915!2d95.3386452160086!3d-21.069765827214972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2b2bfd076787c5df%3A0x538267a1955b1352!2sAustralia!5e0!3m2!1sen!2snp!4v1579777829477!5m2!1sen!2snp" height="450" allowfullscreen=""></iframe>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           
                             
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="sidebar">
                           <div class="package-price">
                              <h5 class="price">
                                 <span><?php echo $row['rate'];?></span> / per person
                              </h5>
                              <div class="start-wrap">
                                 <div class="rating-start" title="Rated 5 out of 5">
                                    <span style="width: 60%"></span>
                                 </div>
                              </div>
                           </div>
                           <div class="widget-bg booking-form-wrap">
                              <h4 class="bg-title">Booking</h4>
                              <form class="booking-form" method="post">

                              <input type="hidden" name="pkg_id" value="<?php echo $_REQUEST['packs'];?>">
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <div class="form-group">
                                          <input name="full_name" type="text" required placeholder="Full Name">
                                       </div>
                                    </div>
                                    <div class="col-sm-12">
                                       <div class="form-group">
                                          <input type="text"  name="email" value="<?php echo $_SESSION['logins'];?>" readonly required placeholder="Email">
                                       </div>
                                    </div>
                                    <div class="col-sm-12">
                                       <div class="form-group">
                                          <input name="number" type="text" required placeholder="Number">
                                       </div>
                                    </div>
                                    <div class="col-sm-12">
                                       <div class="form-group">
                                          <input class="input-date-picker" type="text" name="date" required autocomplete="off" readonly="readonly" placeholder="Date">
                                       </div>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                       <div class="form-group submit-btn">
                                          <input type="submit" name="submit" value="Boook Now">

                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                           <div class="widget-bg information-content text-center">
                              <h5>TRAVEL TIPS</h5>
                              <h3>NEED TRAVEL RELATED TIPS & INFORMATION</h3>
                              <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. </p>
                              <a href="#" class="button-primary">GET A QUOTE</a>
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- subscribe section html start -->
            <section class="subscribe-section" style="background-image: url(assets/images/img16.jpg);">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-7">
                        <div class="section-heading section-heading-white">
                           <h5 class="dash-style">HOLIDAY PACKAGE OFFER</h5>
                           <h2>HOLIDAY SPECIAL 25% OFF !</h2>
                           <h4>Sign up now to recieve hot special offers and information about the best tour packages, updates and discounts !!</h4>
                           <div class="newsletter-form">
                              <form>
                                 <input type="email" name="s" placeholder="Your Email Address">
                                 <input type="submit" name="signup" value="SIGN UP NOW!">
                              </form>
                           </div>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Eaque adipiscing, luctus eleifend temporibus occaecat luctus eleifend tempo ribus.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- subscribe html end -->
         </main>
<?php
include('user_footer.php');
?>