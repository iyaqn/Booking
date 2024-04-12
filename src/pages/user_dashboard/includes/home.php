
<div class="about-section">
  <div class="text-column">
    <h2>Welcome to your home away from home!</h2>
    <p class="text">Looking for a place to relax? 
Villa Delos Reyes is the perfect place to take a break and breathe. <br>
Aside from hosting big events, our place also offers a relaxing environment where you and your loved ones can have wonderful memories together.</p>
    <br>
    <a href="../user_dashboard/about.php" class="button">Learn More</a>
    <?php
                    if (isset($_SESSION['email'])) {
                        echo ' <a href="BookNow.php" id="button" class="button">Book Now</a>';
                    } else {
                        echo '
                        <a href="../../index.php" id="button" class="button">Book Now</a>';
                    }
                    ?>
  </div>

  <div class="image-column">
            <div class="slideshow-container">

<div class="mySlides fade">
  <img src="../../../pool2.jpg" class="big-image" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="../../../pool.jpg" class="big-image" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="../../../nightpool.jpg" class="big-image" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="../../../topview.jpg" class="big-image" style="width:100%">
</div>

</div>
        </div>
</div>
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 1000); // Change image every 2 seconds
}
</script>

