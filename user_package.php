<?php
include('user_header.php');
include('database.php');

$sql = "select * from package";
$result = mysqli_query($db,$sql);

?>
 <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/inner-banner.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">Tour Packages</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <!-- packages html start -->
            <div class="package-section">
               <div class="container">
                  <div class="package-inner">
                     <div class="row">
                        <?php
                        while($p = mysqli_fetch_array($result))
                        {
                           $name=$p['place_id'];
                           $sql="select *from place where place_id = '$name' ";
                           $a=mysqli_query($db,$sql);
                           $PlaceName=mysqli_fetch_array($a);



                           ?>
                        <div class="col-lg-4 col-md-6">
                           <div class="package-wrap">
                              <figure class="feature-image">
                                 <a href="user_package_detail.php?packs=<?php echo $p['pkg_id'];?>">
                                    <img src="packageimg/<?php echo $p['package_img'];?>"  width="100%" height="100%" alt="">
                                 </a>
                              </figure>
                              <div class="package-price">
                                 <h6>
                                    <span><?php echo $p['rate'];?></span> / per person
                                 </h6>
                              </div>
                              <div class="package-content-wrap">
                                 <div class="package-meta text-center">
                                    <ul>
                                       <li>
                                          <i class="far fa-clock"></i>
                                          <?php echo $p['days'];?>
                                       </li>
                                       <li>
                                          <i class="fas fa-user-friends"></i>
                                          People: 5
                                       </li>
                                       <li>
                                          <i class="fas fa-map-marker-alt"></i>
                                          <?php echo $PlaceName['place_name']?>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="package-content">
                                    <h3>
                                       <?php echo $p['note'];?>
                                    </h3>
                                    <div class="review-area">
                                       <span class="review-text">(25 reviews)</span>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 60%"></span>
                                       </div>
                                    </div>
                                    <p><?php echo $p['pkg_dec']?></p>
                                    <div class="btn-wrap">
                                       <a href="user_package_detail.php?packs=<?php echo $p['pkg_id'];?>" class="button-text width-6">Book Now<i class="fas fa-arrow-right"></i></a>
                                       <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php
                        }
                        ?>
                        
                     </div>
            <!-- activity html end -->
         </main>
<?php
include('user_footer.php');
?>