<title>Home</title>
<section class="site-hero overlay" style="background-image: url(VDRphoto.jpg)">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center">
            <h1 class="heading" >Welcome to <em>Villa Delos Reyes</em> </h1>
            <p class="sub-heading mb-5" >PRIVATE RESORT &amp; EVENTS PLACE</p>
            <p >
              <?php
                    if (isset($_SESSION['email'])) {
                        echo ' <a href="BookNow.php" id="button" class="btn uppercase btn-primary mr-md-2 mr-0 mb-3 d-sm-inline d-block">Book Now</a>';
                    } else {
                        echo '
                        <a href="../../index.php" id="button" class="btn uppercase btn-primary mr-md-2 mr-0 mb-3 d-sm-inline d-block">Book Now</a>';
                    }
                    ?>
            <?php
                    if (isset($_SESSION['email'])) {
                        echo ' ';
                    } else {
                        echo '
                        <a href="../../index.php" id="button" class="btn uppercase btn-outline-light d-sm-inline d-block">Sign Up</a>';
                    }
                    ?>
          </p>
          </div>
        </div>
        <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
      </div>
    </section>
    <!-- END section -->

    <section class="section visit-section white">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading" data-aos="fade-right">You Can Visit</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-right">
            <img src="../../../fresco.jpg" class="img-fluid">
            <h3>Al Fresco Dining</h3>
          </div>
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-right" data-aos-delay="100">
            <img src="../../../pool side.jpg" class="img-fluid"> 
            <h3>Pool</h3>

          </div>
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-right" data-aos-delay="200">
            <img src="../../../bedroom2.jpg" class="img-fluid"> 
            <h3>Rooms</h3>
  

          </div>
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-right" data-aos-delay="300">
            <img src="../../../sala.jpg" class="img-fluid"> 
            <h3>Entertainment</h3>
  

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="section slider-section bg-pattern">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">A cozy and relaxing place with a great view of sunset and green fields.</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Enjoy relaxing sceneries here at Villa Delos Reyes Private Resort and Events Place where you can have a breathe of fresh air, unwind, and create new and lasting memories. </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
              <div class="slider-item">
                <img src="../../../entrance.jpg" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="../../../sala2.jpg" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="../../../topview.jpg" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="../../../topview2.jpg" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="../../../up.jpg" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="../../../nightpool.jpg" class="img-fluid">
              </div>
            </div>
            <!-- END slider -->
          </div>

          <div class="col-md-12 text-center"><a href="gallery.php" class="">View More Photos</a></div>
        
        </div>
      </div>
    </section>
    <!-- END section -->
    
    
   