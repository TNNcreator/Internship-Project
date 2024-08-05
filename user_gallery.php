<?php
include('user_header.php');
include('database.php');

$sql = "select * from gallery ";
$galleryimg = mysqli_query($db,$sql);

?>
<main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/inner-banner.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">Gallery</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <!-- gallery section html start -->
            <div class="gallery-section">
               <div class="container">
                  <div class="gallery-outer-wrap">
                     <div class="gallery-inner-wrap gallery-container grid">
                        <?php
                        while($img = mysqli_fetch_array($galleryimg))
                        {
                           ?>
                        
                        <div class="single-gallery grid-item">
                           <figure class="gallery-img">
                              <img src="galleryimg/<?php echo $img['gallery_img'];?>" alt="">
                              <div class="gallery-title">
                                 <h3>
                                    <a href="assets/images/gallery-1.jpg" data-lightbox="lightbox-set">
                                       <?php echo $img['gallery_name'];?>
                                    </a>
                                 </h3>
                              </div>
                           </figure>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="single-gallery grid-item">
       
                  </div>
               </div>
            </div>
            <!-- gallery section html end -->
            <div class="bg-color-callback">
               <div class="container">
                  <div class="row align-items-center justify-content-between">
                     <div class="col-lg-9 col-md-8">
                        <div class="callback-content">
                           <h2>LET'S JOIN US FOR MORE UPDATE & INFO !!</h2>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. orem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4">
                        <div class="button-wrap">
                           <a href="#" class="button-primary">LEARN MORE</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
<?php
include('user_footer.php');
?>