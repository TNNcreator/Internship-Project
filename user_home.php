<?php
include('user_header.php');
include('database.php');

$sql = "select * from slider" ;
$getImage = mysqli_query($db,$sql);

?>

<main id="content" class="site-main">
            <!-- Home slider html start -->
            <section class="home-slider-section">
              
               <div class="home-slider">
               <?php
               while($r=mysqli_fetch_array($getImage))
               {
               ?>
                  <div class="home-banner-items">
                     <div class="banner-inner-wrap" ><img src="sliderphoto/<?php echo $r['slider_img'];?>" alt="" width="100%"></div>
                        <div class="banner-content-wrap">
                           <div class="container">
                              <div class="banner-content text-center">
                                 <h2 class="banner-title">Dream Destination</h2>
                                 <p>Taciti quasi, sagittis excepteur hymenaeos, id temporibus hic proident ullam, eaque donec delectus tempor consectetur nunc, purus congue? Rem volutpat sodales! Mollit. Minus exercitationem wisi.</p>
                                 
                              </div>
                           </div>
                        </div>
                     <div class="overlay"></div>
                  </div>
               <?php
               }
               ?>
               </div>
            </section>
            <!-- search search field html end -->
            <section class="destination-section">
               <div class="container">
                  <div class="section-heading">
                     <div class="row align-items-end">
                        <div class="col-lg-7">
                           <h5 class="dash-style">POPULAR DESTINATION</h5>
                           <h2>TOP NOTCH DESTINATION</h2>
                        </div>
                        <div class="col-lg-5">
                           <div class="section-disc">
                               Aperiam sociosqu urna praesent, tristique, corrupti condimentum asperiores platea ipsum ad arcu. Nostrud. Aut nostrum, ornare quas provident laoreet nesciunt.
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="destination-inner destination-three-column">
                     <div class="row">
                        <div class="col-lg-7">
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="desti-item overlay-desti-item">
                                    <figure class="desti-image">
                                       <img src="galleryimg/taj-mahal.jpg" alt="">
                                    </figure>
                                    <div class="meta-cat bg-meta-cat">
                                       <a href="#">Aagra</a>
                                    </div>
                                    <div class="desti-content">
                                       <h3>
                                          <a href="#">Taj Mahal</a>
                                       </h3>
                                       <div class="rating-start" title="Rated 5 out of 4">
                                          <span style="width: 53%"></span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="desti-item overlay-desti-item">
                                    <figure class="desti-image">
                                       <img src="galleryimg/rajathan-chitorgad.jpg" alt="">
                                    </figure>
                                    <div class="meta-cat bg-meta-cat">
                                       <a href="#">Rajathan</a>
                                    </div>
                                    <div class="desti-content">
                                       <h3>
                                          <a href="#">Chitorgad</a>
                                       </h3>
                                       <div class="rating-start" title="Rated 5 out of 4">
                                          <span style="width: 53%"></span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="desti-item overlay-desti-item">
                                    <figure class="desti-image">
                                       <img src="galleryimg/ladakhslider.jpg" alt="">
                                    </figure>
                                    <div class="meta-cat bg-meta-cat">
                                       <a href="#">Jammu & Kashmir</a>
                                    </div>
                                    <div class="desti-content">
                                       <h3>
                                          <a href="#">Jammu Fort</a>
                                       </h3>
                                       <div class="rating-start" title="Rated 5 out of 4">
                                          <span style="width: 53%"></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="desti-item overlay-desti-item">
                                    <figure class="desti-image">
                                       <img src="galleryimg/statue-of-unity.jpg" alt="">
                                    </figure>
                                    <div class="meta-cat bg-meta-cat">
                                       <a href="#">Gujrat</a>
                                    </div>
                                    <div class="desti-content">
                                       <h3>
                                          <a href="#">Statue Of Unity</a>
                                       </h3>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 100%"></span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="desti-item overlay-desti-item">
                                    <figure class="desti-image">
                                       <img src="galleryimg/India-Get-gallery.jpg" alt="">
                                    </figure>
                                    <div class="meta-cat bg-meta-cat">
                                       <a href="#">Mumbai</a>
                                    </div>
                                    <div class="desti-content">
                                       <h3>
                                          <a href="#">GT</a>
                                       </h3>
                                       <div class="rating-start" title="Rated 5 out of 4">
                                          <span style="width: 53%"></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-5">
                           <div class="row">
                              <div class="col-md-6 col-xl-12">
                                 <div class="desti-item overlay-desti-item">
                                    <figure class="desti-image">
                                       <img src="galleryimg/uttar-pradesh.jpg" alt="">
                                    </figure>
                                    <div class="meta-cat bg-meta-cat">
                                       <a href="#">Uttar Pradesh</a>
                                    </div>
                                    <div class="desti-content">
                                       <h3>
                                          <a href="#">The Lake</a>
                                       </h3>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 100%"></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 col-xl-12">
                                 <div class="desti-item overlay-desti-item">
                                    <figure class="desti-image">
                                       <img src="placeimg/ajanta gufa Sambhajinagar.jpg" alt="">
                                    </figure>
                                    <div class="meta-cat bg-meta-cat">
                                       <a href="#">Sambhajinagar</a>
                                    </div>
                                    <div class="desti-content">
                                       <h3>
                                          <a href="#">Ajanta Gufa</a>
                                       </h3>
                                       <div class="rating-start" title="Rated 5 out of 4">
                                          <span style="width: 60%"></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="btn-wrap text-center">
                        <a href="#" class="button-primary">MORE DESTINATION</a>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Home packages section html start -->
            <section class="package-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5 class="dash-style">EXPLORE GREAT PLACES</h5>
                           <h2>POPULAR PACKAGES</h2>
                           <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum magnis maxime curae placeat.</p>
                        </div>
                     </div>
                  </div>
                  <div class="package-inner">
                     <div class="row">
                        <div class="col-lg-4 col-md-6">
                           <div class="package-wrap">
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="sliderphoto/goaslider.jpg" alt="" hight=50>
                                 </a>
                              </figure>
                              <div class="package-price">
                                 <h6>
                                    <span>2,900 </span> / per person
                                 </h6>
                              </div>
                              <div class="package-content-wrap">
                                 <div class="package-meta text-center">
                                    <ul>
                                       <li>
                                          <i class="far fa-clock"></i>
                                          7D/6N
                                       </li>
                                       <li>
                                          <i class="fas fa-user-friends"></i>
                                          People: 5
                                       </li>
                                       <li>
                                          <i class="fas fa-map-marker-alt"></i>
                                          Goa
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="package-content">
                                    <h3>
                                       <a href="#">Goa Beach beautyin there place</a>
                                    </h3>
                                    <div class="review-area">
                                       <span class="review-text">(25 reviews)</span>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 60%"></span>
                                       </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam. Ut elit tellus, luctus nec ullam elit tellpus.</p>
                                    <div class="btn-wrap">
                                       <a href="" class="button-text width-6">Book Now<i class="fas fa-arrow-right"></i></a>
                                       <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="package-wrap">
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="sliderphoto/himachalmpradesh.jpeg" alt="">
                                 </a>
                              </figure>
                              <div class="package-price">
                                 <h6>
                                    <span>1,230 </span> / per person
                                 </h6>
                              </div>
                              <div class="package-content-wrap">
                                 <div class="package-meta text-center">
                                    <ul>
                                       <li>
                                          <i class="far fa-clock"></i>
                                          5D/4N
                                       </li>
                                       <li>
                                          <i class="fas fa-user-friends"></i>
                                          People: 8
                                       </li>
                                       <li>
                                          <i class="fas fa-map-marker-alt"></i>
                                          himachal
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="package-content">
                                    <h3>
                                       <a href="#">This place most beautifulplace in our country </a>
                                    </h3>
                                    <div class="review-area">
                                       <span class="review-text">(17 reviews)</span>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 100%"></span>
                                       </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam. Ut elit tellus, luctus nec ullam elit tellpus.</p>
                                    <div class="btn-wrap">
                                       <a href="#" class="button-text width-6">Book Now<i class="fas fa-arrow-right"></i></a>
                                       <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="package-wrap">
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="sliderphoto/kerala slider.webp" alt="">
                                 </a>
                              </figure>
                              <div class="package-price">
                                 <h6>
                                    <span>2,000 </span> / per person
                                 </h6>
                              </div>
                              <div class="package-content-wrap">
                                 <div class="package-meta text-center">
                                    <ul>
                                       <li>
                                          <i class="far fa-clock"></i>
                                          6D/5N
                                       </li>
                                       <li>
                                          <i class="fas fa-user-friends"></i>
                                          People: 6
                                       </li>
                                       <li>
                                          <i class="fas fa-map-marker-alt"></i>
                                          Kerla
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="package-content">
                                    <h3>
                                       <a href="#">Kerla is very popular to tarvel and toure in India</a>
                                    </h3>
                                    <div class="review-area">
                                       <span class="review-text">(22 reviews)</span>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 80%"></span>
                                       </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam. Ut elit tellus, luctus nec ullam elit tellpus.</p>
                                    <div class="btn-wrap">
                                       <a href="#" class="button-text width-6">Book Now<i class="fas fa-arrow-right"></i></a>
                                       <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="btn-wrap text-center">
                        <a href="user_package.php" class="button-primary">VIEW ALL PACKAGES</a>
                     </div>
                  </div>
               </div>
            </section>
            <!-- packages html end -->
            <!-- Home callback section html start -->
            <section class="callback-section">
               <div class="container">
                  <div class="row no-gutters align-items-center">
                     <div class="col-lg-5">
                        <div class="callback-img" style="background-image: url('packageimg/The_Chitrakote_Falls jagdalpur Chhattisgarh.jpg');">
                           <div class="video-button">
                              <a id="video-container" data-video-id="35npVaFGHMY">
                                 <i class="fas fa-play"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-7">
                        <div class="callback-inner">
                           <div class="section-heading section-heading-white">
                              <h5 class="dash-style">CALLBACK FOR MORE</h5>
                              <h2>GO TRAVEL. DISCOVER. REMEMBER US!!</h2>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Eaque adipiscing, luctus eleifend.</p>
                           </div>
                           <div class="callback-counter-wrap">
                              <div class="counter-item">
                                 <div class="counter-icon">
                                   <img src="assets/images/icon1.png" alt="">
                                 </div>
                                 <div class="counter-content">
                                    <span class="counter-no">
                                       <span class="counter">500</span>K+
                                    </span>
                                    <span class="counter-text">
                                       Satisfied Clients
                                    </span>
                                 </div>
                              </div>
                              <div class="counter-item">
                                 <div class="counter-icon">
                                   <img src="assets/images/icon2.png" alt="">
                                 </div>
                                 <div class="counter-content">
                                    <span class="counter-no">
                                       <span class="counter">250</span>K+
                                    </span>
                                    <span class="counter-text">
                                       Satisfied Clients
                                    </span>
                                 </div>
                              </div>
                              <div class="counter-item">
                                 <div class="counter-icon">
                                   <img src="assets/images/icon3.png" alt="">
                                 </div>
                                 <div class="counter-content">
                                    <span class="counter-no">
                                       <span class="counter">15</span>K+
                                    </span>
                                    <span class="counter-text">
                                       Satisfied Clients
                                    </span>
                                 </div>
                              </div>
                              <div class="counter-item">
                                 <div class="counter-icon">
                                   <img src="assets/images/icon4.png" alt="">
                                 </div>
                                 <div class="counter-content">
                                    <span class="counter-no">
                                       <span class="counter">10</span>K+
                                    </span>
                                    <span class="counter-text">
                                       Satisfied Clients
                                    </span>
                                 </div>
                              </div>
                           </div>
                           <div class="support-area">
                              <div class="support-icon">
                                 <img src="assets/images/icon5.png" alt="">
                              </div>
                              <div class="support-content">
                                 <h4>Our 24/7 Emergency Phone Services</h4>
                                 <h3>
                                    <a href="#">Call:97-12-11-04-54</a>
                                 </h3>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- callback html end -->
            <!-- Home activity section html start -->
            <section class="activity-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5 class="dash-style">TRAVEL BY ACTIVITY</h5>
                           <h2>ADVENTURE & ACTIVITY</h2>
                           <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum magnis maxime curae placeat.</p>
                        </div>
                     </div>
                  </div>
                  <div class="activity-inner row">
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon6.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Adventure</a>
                              </h4>
                              <p>15 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon10.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Trekking</a>
                              </h4>
                              <p>12 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon9.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Camp Fire</a>
                              </h4>
                              <p>7 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon8.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Off Road</a>
                              </h4>
                              <p>15 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon7.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Camping</a>
                              </h4>
                              <p>13 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon11.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Exploring</a>
                              </h4>
                              <p>25 Destination</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- activity html end -->
            <!-- Home special section html start -->
            <section class="special-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5 class="dash-style">TRAVEL OFFER & DISCOUNT</h5>
                           <h2>SPECIAL TRAVEL OFFER</h2>
                           <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum magnis maxime curae placeat.</p>
                        </div>
                     </div>
                  </div>
                  <div class="special-inner">
                     <div class="row">
                        <div class="col-md-6 col-lg-4">
                           <div class="special-item">
                              <figure class="special-img">
                                 <img src="packageimg/natural1.jpg" alt="" height="100%">
                              </figure>
                              <div class="badge-dis">
                                 <span>
                                    <strong>20%</strong>
                                    off
                                 </span>
                              </div>
                              <div class="special-content">
                                 <div class="meta-cat">
                                    <a href="#">Himachal Pradesh</a>
                                 </div>
                                 <h3>
                                    <a href="#">Experience the natural beauty of Himachal Pradesh</a>
                                 </h3>
                                 <div class="package-price">
                                    Price:
                                    <del>1500</del>
                                    <ins>1200</ins>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-4" style="width:100%; ">
                           <div class="special-item">
                              <figure class="special-img">
                                 <img src="packageimg/kas.jpg" alt="" height=100%>
                              </figure>
                              <div class="badge-dis">
                                 <span>
                                    <strong>15%</strong>
                                    off
                                 </span>
                              </div>
                              <div class="special-content">
                                 <div class="meta-cat">
                                    <a href="#">Kashmir</a>
                                 </div>
                                 <h3>
                                    <a href="#">Trekking to the mountain camp site</a>
                                 </h3>
                                 <div class="package-price">
                                    Price:
                                    <del>1800</del>
                                    <ins>1505</ins>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                           <div class="special-item">
                              <figure class="special-img">
                                 <img src="packageimg/natural3.jpeg" alt="">
                              </figure>
                              <div class="badge-dis">
                                 <span>
                                    <strong>15%</strong>
                                    off
                                 </span>
                              </div>
                              <div class="special-content">
                                 <div class="meta-cat">
                                    <a href="#">Kerla</a>
                                 </div>
                                 <h3>
                                    <a href="#">The whater Falle beauty in Kerla</a>
                                 </h3>
                                 <div class="package-price">
                                    Price:
                                    <del>1800</del>
                                    <ins>1476</ins>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- special html end -->
            <!-- Home special section html start -->
            <section class="best-section">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-5">
                        <div class="section-heading">
                           <h5 class="dash-style">OUR TOUR GALLERY</h5>
                           <h2>BEST TRAVELER'S SHARED PHOTOS</h2>
                           <p>Aperiam sociosqu urna praesent, tristique, corrupti condimentum asperiores platea ipsum ad arcu. Nostrud. Esse? Aut nostrum, ornare quas provident laoreet nesciunt odio voluptates etiam, omnis.</p>
                        </div>
                        <figure class="gallery-img">
                           <img src="galleryimg/taj-mahal.jpg" alt="">
                        </figure>
                     </div>
                     <div class="col-lg-7">
                        <div class="row">
                           <div class="col-sm-6">
                              <figure class="gallery-img">
                                 <img src="galleryimg/ladakhslider.jpg" alt="">
                              </figure>
                           </div>
                           <div class="col-sm-6">
                              <figure class="gallery-img">
                                 <img src="galleryimg/uttar-pradesh.jpg" alt="">
                              </figure>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12">
                              <figure class="gallery-img">
                                 <img src="placeimg/Auli hill station Uttarakhand.jpg" alt="">
                              </figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- best html end -->
            <!-- Home client section html start -->
         
            <!-- client html end -->
            <!-- Home subscribe section html start -->
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
            <!-- Home blog section html start -->
            <section class="blog-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5 class="dash-style">FROM OUR BLOG</h5>
                           <h2>OUR RECENT POSTS</h2>
                           <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum magnis maxime curae placeat.</p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-lg-4">
                        <article class="post">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="packageimg/tour7.webp" alt="">
                              </a>
                           </figure>
                           <div class="entry-content">
                              <h3>
                                 <a href="#">Life is a beautiful journey not a destination</a>
                              </h3>
                              <div class="entry-meta">
                                 <span class="byline">
                                    <a href="#">Demoteam</a>
                                 </span>
                                 <span class="posted-on">
                                    <a href="#">August 7, 2024</a>
                                 </span>
                                 <span class="comments-link">
                                    <a href="#">No Comments</a>
                                 </span>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <article class="post">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="packageimg/tour4.webp" alt="">
                              </a>
                           </figure>
                           <div class="entry-content">
                              <h3>
                                 <a href="#">Take only memories, leave only footprints</a>
                              </h3>
                              <div class="entry-meta">
                                 <span class="byline">
                                    <a href="#">Demoteam</a>
                                 </span>
                                 <span class="posted-on">
                                    <a href="#">August 7, 2024</a>
                                 </span>
                                 <span class="comments-link">
                                    <a href="#">No Comments</a>
                                 </span>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <article class="post">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="packageimg/tour5.jpg" alt="">
                              </a>
                           </figure>
                           <div class="entry-content">
                              <h3>
                                 <a href="#">Journeys are best measured in new friends</a>
                              </h3>
                              <div class="entry-meta">
                                 <span class="byline">
                                    <a href="#">Demoteam</a>
                                 </span>
                                 <span class="posted-on">
                                    <a href="#">August 7, 2024</a>
                                 </span>
                                 <span class="comments-link">
                                    <a href="#">No Comments</a>
                                 </span>
                              </div>
                           </div>
                        </article>
                     </div>
                  </div>
               </div>
            </section>
             <!-- blog html end -->
             <!-- Home testimonial section html start -->
            <div class="testimonial-section" style="background-image: url(assets/images/img23.jpg);">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-10 offset-lg-1">
                        <div class="testimonial-inner testimonial-slider">
                           <div class="testimonial-item text-center">
                              <figure class="testimonial-img">
                                 <img src="assets/images/img20.jpg" alt="">
                              </figure>
                              <div class="testimonial-content">
                                 <p>" Dolorum aenean dolorem minima! Voluptatum? Corporis condimentum ac primis fusce, atque! Vivamus. Non cupiditate natus excepturi, quod quo, aute facere? Deserunt aliquip, egestas ipsum, eu.Dolorum aenean dolorem minima!? Corporis condi mentum acpri! "</p>
                                 <cite>
                                    Johny English
                                    <span class="company">Travel Agent</span>
                                 </cite>
                              </div>
                           </div>
                           <div class="testimonial-item text-center">
                              <figure class="testimonial-img">
                                 <img src="assets/images/img21.jpg" alt="">
                              </figure>
                              <div class="testimonial-content">
                                 <p>" Dolorum aenean dolorem minima! Voluptatum? Corporis condimentum ac primis fusce, atque! Vivamus. Non cupiditate natus excepturi, quod quo, aute facere? Deserunt aliquip, egestas ipsum, eu.Dolorum aenean dolorem minima!? Corporis condi mentum acpri! "</p>
                                 <cite>
                                    William Housten
                                    <span class="company">Travel Agent</span>
                                 </cite>
                              </div>
                           </div>
                           <div class="testimonial-item text-center">
                              <figure class="testimonial-img">
                                 <img src="assets/images/img22.jpg" alt="">
                              </figure>
                              <div class="testimonial-content">
                                 <p>" Dolorum aenean dolorem minima! Voluptatum? Corporis condimentum ac primis fusce, atque! Vivamus. Non cupiditate natus excepturi, quod quo, aute facere? Deserunt aliquip, egestas ipsum, eu.Dolorum aenean dolorem minima!? Corporis condi mentum acpri! "</p>
                                 <cite>
                                    Alison Wright
                                    <span class="company">Travel Guide</span>
                                 </cite>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- testimonial html end -->
            <!-- Home contact details section html start -->
            <section class="contact-section">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="contact-img" style="background-image: url(assets/images/img24.jpg);">
                        </div>
                     </div>
                     <div class="col-lg-8">
                        <div class="contact-details-wrap">
                           <div class="row">
                              <div class="col-sm-4">
                                 <div class="contact-details">
                                    <div class="contact-icon">
                                       <img src="assets/images/icon12.png" alt="">
                                    </div>
                                    <ul>
                                       <li>
                                          <a href="#"><span class="__cf_email__" data-cfemail="40333530302f323400272d21292c6e232f2d">[email&#160;protected]</span></a>
                                       </li>
                                       <li>
                                          <a href="#"><span class="__cf_email__" data-cfemail="9ff6f1f9f0dffbf0f2fef6f1b1fcf0f2">[email&#160;protected]</span></a>
                                       </li>
                                       <li>
                                          <a href="#"><span class="__cf_email__" data-cfemail="ef818e828aaf8c80829f8e8196c18c8082">[email&#160;protected]</span></a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="contact-details">
                                    <div class="contact-icon">
                                       <img src="assets/images/icon13.png" alt="">
                                    </div>
                                    <ul>
                                       <li>
                                          <a href="#">+132 (599) 254 669</a>
                                       </li>
                                       <li>
                                          <a href="#">+123 (669) 255 587</a>
                                       </li>
                                       <li>
                                          <a href="#">+01 (977) 2599 12</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="contact-details">
                                    <div class="contact-icon">
                                       <img src="assets/images/icon14.png" alt="">
                                    </div>
                                    <ul>
                                       <li>
                                          3146 Koontz, California
                                       </li>
                                       <li>
                                          Quze.24 Second floor
                                       </li>
                                       <li>
                                          36 Street, Melbourne
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="contact-btn-wrap">
                           <h3>LET'S JOIN US FOR MORE UPDATE !!</h3>
                           <a href="#" class="button-primary">LEARN MORE</a>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!--  contact details html end -->
         </main>
<?php
include('user_footer.php');
?>