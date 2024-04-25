<?php
include '../../includes/autoloader.php';

include '../../includes/conn.php';

$conn = new conn();
$session = new session();
include 'includes/header.php';
include 'includes/navbar.php';


?>
<title>Gallery</title>
<style>
    .gallery {
  display: flex;
  flex-wrap: wrap;
  margin: -10px;
  margin-top: 60px;
}

.gallery-item {
  width: calc(33.33% - 20px);
  margin: 10px;
  overflow: hidden;
}

.gallery-item img {
  width: 100%;
  height: 100%;
  height: auto;
  filter: grayscale(100%);
  transition: filter 0.3s;
  cursor: pointer;
  transition: transform 0.3s;
}

.gallery-item img:hover {
  filter: grayscale(0%);
  transform: scale(1.1);
}

/* CSS for the lightbox overlay */
.lightbox {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.8);
  display: none;
  justify-content: center;
  align-items: center;
}

.gallery1 {
  background-size: cover;
  background-image: url("pool.jpg");
}

.lightbox img {
  max-width: 80%;
  max-height: 80%;
}

.lightbox.show {
  display: flex;
}
</style>
<div style="background-image: url('../../../topview.jpg'); background-size: cover;">
<section class="gallery1" style="min-height: calc(100vh - 358px);">

    <div class="gallery">
        <div class="gallery-item">
            <img src="../../../entrance.jpg" alt="Image 1" style="height: 100%; width: 100%;">
        </div>
        <div class="gallery-item">
            <img src="../../../fresco.jpg" alt="Image 2" style="height: 100%; width: 100%;">
        </div>
        <div class="gallery-item">
            <img src="../../../up.jpg" alt="Image 3" style="height: 100%; width: 100%;">
        </div>
        <br>
        <div class="gallery-item">
            <img src="../../../VDRphoto.jpg" alt="Image 3" style="height: 100%; width: 100%;">
        </div>
        <div class="gallery-item">
            <img src="../../../room.jpg" alt="Image 3"style="height: 100%; width: 100%;">
        </div>
        <div class="gallery-item">
            <img src="../../../sala.jpg" alt="Image 3"style="height: 100%; width: 100%;">
        </div>
        <br>
        <div class="gallery-item">
            <img src="../../../pool side.jpg" alt="Image 3"style="height: 100%; width: 100%;">
        </div>
        <div class="gallery-item">
            <img src="../../../up.jpg" alt="Image 3"style="height: 100%; width: 100%;">
        </div>
        <div class="gallery-item">
            <img src="../../../pool.jpg" alt="Image 3"style="height: 100%; width: 100%;">
        </div>

        <div class="gallery-item">
            <img src="../../../outside.jpg" alt="Image 3"style="height: 100%; width: 100%;">
        </div>
        <div class="gallery-item">
            <img src="../../../topview.jpg" alt="Image 3"style="height: 100%; width: 100%;">
        </div>
        <div class="gallery-item">
            <img src="../../../topview2.jpg" alt="Image 3"style="height: 100%; width: 100%;">
        </div>
        <div class="gallery-item">
            <img src="../../../sala2.jpg" alt="Image 3"style="height: 100%; width: 100%;">
        </div>
        <div class="gallery-item">
            <img src="../../../sala3.jpg" alt="Image 3">
        </div>
        <div class="gallery-item">
            <img src="../../../sala4.jpg" alt="Image 3">
        </div>
        <div class="gallery-item">
            <img src="../../../bedroom1.jpg" alt="Image 3">
        </div>
        <div class="gallery-item">
            <img src="../../../bedroom2.jpg" alt="Image 3">
        </div>
        <div class="gallery-item">
            <img src="../../../pool2.jpg" alt="Image 3">
        </div>
        <div class="gallery-item">
            <img src="../../../billiards.jpg" alt="Image 3">
        </div>
        <div class="gallery-item">
            <img src="../../../bball.jpg" alt="Image 3">
        </div>
        <div class="gallery-item">
            <img src="../../../nightpool.jpg" alt="Image 3">
        </div>
        <div class="gallery-item">
            <img src="../../../nightpoolside.jpg" alt="Image 3">
        </div>

    </div>

    <div class="lightbox">
        <img src="" alt="Enlarged Image">
    </div>
</section>
</div>
<?php 
include 'includes/footer.php';
?>
</body>

</html>