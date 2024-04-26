<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700" rel="stylesheet">

    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="/aos.css">
    
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
  <link rel="stylesheet" href="../../user_dashboard/style.css" media="screen">
    
    <!--TAB TITLE-->
    <link rel="icon" type="image/x-icon" href="../../../vdrlogo.ico">
    <!--TAB ICON-->
    <link rel="icon" type="image/jpg" href="../../../assets/img/favicon.png" />

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

    <!--CSS / JS-->
    <script src="https://kit.fontawesome.com/ff8e777e2d.js" crossorigin="anonymous"></script>
    <!--ICON RESOURCES-->

    <link rel="stylesheet" href="../../../nicepage.css" media="screen">


    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
        <style>
        body {
          background-image: url("../../../VDRphoto.jpg");
  font-family: "Mukta Mahee", arial, sans-serif;
  font-weight: 200;
  font-size: 16px;
  line-height: 1.8;
  color: #6c757d;
}

.white {
  background-color: #fff;
  font-family: "Mukta Mahee", arial, sans-serif;
  font-weight: 200;
  font-size: 16px;
  line-height: 1.8;
  color: #6c757d;
}
::-moz-selection {
  color: #fff;
  background: #e61c5d;
}

::selection {
  color: #fff;
  background: #e61c5d;
}

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  text-decoration: none;
}

a:hover {
  text-decoration: none;
}

h1, h2, h3, h4, h5 {
  color: #000;
  font-family: "Playfair+Display", times, serif;
}

.container-fluid {
  max-width: 1600px;
}

.btn {
  padding-left: 30px;
  padding-right: 30px;
  padding-top: 10px;
  padding-bottom: 10px;
  border-radius: 50px;
}

.btn.uppercase {
  text-transform: uppercase;
  font-size: 14px;
  letter-spacing: .2em;
}

.btn, .form-control {
  outline: none;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
}

.btn:focus, .btn:active, .form-control:focus, .form-control:active {
  outline: none;
}

.form-control {
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
  height: 50px;
  border-width: 2px;
}

textarea.form-control {
  height: inherit;
}

.site-header {
  position: absolute;
  top: 0;
  width: 100%;
  padding: 60px 0;
  z-index: 2;
}

.menu-open .site-header {
  position: fixed;
}

.site-logo a {
  font-size: 30px;
  color: #fff;
  font-weight: bold;
  line-height: 1;
  font-family: "Playfair+Display", times, serif;
}

.site-navbar {
  position: fixed;
  display: none;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #fff;
  min-height: 300px;
  overflow-y: scroll;
}

.site-navbar nav {
  text-align: left;
}

.site-navbar nav .menu {
  font-family: "Playfair+Display", times, serif;
}

.site-navbar nav .menu li a {
  color: #000;
  font-size: 40px;
  padding: 5px 10px;
  position: relative;
}

.site-navbar nav .menu li a:before {
  content: "";
  position: absolute;
  bottom: 0;
  height: 50%;
  width: 0%;
  z-index: -1;
  background: #e61c5d;
  -webkit-transition: .3s all ease-in-out;
  -o-transition: .3s all ease-in-out;
  transition: .3s all ease-in-out;
}

.site-navbar nav .menu li a:hover:before {
  width: 100%;
}

.site-navbar nav .menu li.active a:before {
  width: 100%;
}

.site-navbar .extra-info a {
  color: #000;
}

.site-navbar .extra-info ul li a {
  color: #000;
}

.site-navbar .extra-info h3 {
  font-family: "Mukta Mahee", arial, sans-serif;
  text-transform: uppercase;
  font-size: 13px;
  letter-spacing: .2em;
  color: #adb5bd;
  margin-bottom: 30px;
}

.site-navbar .extra-info p {
  color: #212529;
}

.full-height {
  height: 100vh;
  min-height: 700px;
}

.site-hero {
  background-size: cover;
  height: 100vh;
  min-height: 700px;
  width: 100%;
}

.site-hero .scroll-down {
  position: absolute;
  bottom: 20px;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  color: #fff;
}

.site-hero.overlay:before {
  background: rgba(0, 0, 0, 0.45);
  content: "";
  position: absolute;
  height: 100vh;
  min-height: 700px;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

.site-hero-inner {
  height: 100vh;
  min-height: 700px;
}

.site-hero-inner .heading {
  font-size: 80px;
  font-family: "Playfair+Display", times, serif;
  color: #fff;
  line-height: 1;
  font-weight: bold;
}

@media (max-width: 991.98px) {
  .site-hero-inner .heading {
    font-size: 40px;
  }
}

.site-hero-inner .sub-heading {
  font-size: 30px;
  font-weight: 200;
  color: #fff;
  line-height: 1.5;
}

@media (max-width: 991.98px) {
  .site-hero-inner .sub-heading {
    font-size: 18px;
  }
}

.page-inside .site-hero-inner, .page-inside {
  height: 70vh;
  min-height: 500px;
}

.page-inside.overlay:before {
  height: 70vh;
  min-height: 500px;
}

.menu-open .site-menu-toggle span {
  background: #000;
}

.site-menu-toggle {
  float: right;
  width: 40px;
  height: 45px;
  position: relative;
  margin: 0px auto;
  z-index: 200;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: .5s ease-in-out;
  -moz-transition: .5s ease-in-out;
  -o-transition: .5s ease-in-out;
  transition: .5s ease-in-out;
  cursor: pointer;
}

.site-menu-toggle span {
  display: block;
  position: absolute;
  height: 2px;
  width: 100%;
  background: #fff;
  border-radius: 9px;
  opacity: 1;
  left: 0;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: .25s ease-in-out;
  -moz-transition: .25s ease-in-out;
  -o-transition: .25s ease-in-out;
  transition: .25s ease-in-out;
}

.site-menu-toggle span:nth-child(1) {
  top: 0px;
}

.site-menu-toggle span:nth-child(2) {
  top: 10px;
}

.site-menu-toggle span:nth-child(3) {
  top: 20px;
}

.site-menu-toggle.open span:nth-child(1) {
  top: 13px;
  -webkit-transform: rotate(135deg);
  -moz-transform: rotate(135deg);
  -o-transform: rotate(135deg);
  -ms-transform: rotate(135deg);
  transform: rotate(135deg);
}

.site-menu-toggle.open span:nth-child(2) {
  opacity: 0;
  left: -60px;
}

.site-menu-toggle.open span:nth-child(3) {
  top: 13px;
  -webkit-transform: rotate(-135deg);
  -moz-transform: rotate(-135deg);
  -o-transform: rotate(-135deg);
  -ms-transform: rotate(-135deg);
  transform: rotate(-135deg);
}

.section {
  padding: 7em 0;
}

@media (max-width: 991.98px) {
  .section {
    padding: 3em 0;
  }
}

@media (max-width: 991.98px) {
  .lead {
    font-size: 16px;
  }
}

.visit-section .heading {
  font-size: 15px;
  text-transform: uppercase;
  font-family: "Mukta Mahee", arial, sans-serif;
  color: #b3b3b3;
  letter-spacing: .2em;
  margin-bottom: 30px;
}

.visit-section .visit a {
  color: #000;
}

.visit-section .visit a:hover {
  color: #e61c5d;
}

.visit-section .visit img {
  -webkit-box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.2);
  box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.2);
  margin-bottom: 15px;
}

.visit-section .visit h3 {
  font-size: 20px;
  margin-bottom: 0;
}

.visit-section .reviews-star span {
  font-size: 18px;
  color: #e61c5d;
}

.visit-section .reviews-count {
  color: #adb5bd;
  font-style: italic;
}

.heading-serif, .testimonial-section .heading, .slider-section .heading, .blog-post-entry .heading {
  font-size: 80px;
  font-family: "Playfair+Display", times, serif;
}

@media (max-width: 991.98px) {
  .heading-serif, .testimonial-section .heading, .slider-section .heading, .blog-post-entry .heading {
    font-size: 40px;
  }
}

.bg-pattern {
  background: #e9ecef url("../img/round.png");
}

.slider-section {
  position: relative;
}

.blog-post-entry {
  position: relative;
  margin-top: -500px;
  padding-top: 500px;
}

@media (max-width: 991.98px) {
  .blog-post-entry {
    margin-top: -300px;
    padding-top: 300px;
  }
}

.half .image, .half .text {
  width: 50%;
}

@media (max-width: 991.98px) {
  .half .image, .half .text {
    width: 100%;
  }
}

.half .image {
  background-size: cover;
  background-position: center center;
}

@media (max-width: 991.98px) {
  .half .image {
    height: 300px;
  }
}

.half .text {
  padding: 100px 7%;
}

@media (max-width: 991.98px) {
  .half .text {
    padding-top: 50px;
    padding-bottom: 50px;
  }
}

.half .text h2 {
  font-size: 70px;
}

@media (max-width: 991.98px) {
  .half .text h2 {
    font-size: 40px;
  }
}

.testimonial blockquote {
  padding: 0;
}

.testimonial blockquote p {
  line-height: 1.5;
  font-family: "Playfair+Display", times, serif;
  font-size: 20px;
  color: #000;
  font-style: italic;
}

.testimonial .author-image img {
  width: 70px;
}

.post .media-custom {
  background: #fff;
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  -webkit-box-shadow: 0 2px 5px -2px rgba(0, 0, 0, 0.1);
  box-shadow: 0 2px 5px -2px rgba(0, 0, 0, 0.1);
}

.post .media-custom:hover, .post .media-custom:focus {
  -webkit-box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.1);
  box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.1);
}

.post .media-custom a {
  color: #000;
}

.post .media-custom a:hover {
  color: #e61c5d;
}

.post .media-custom .media-body {
  padding: 10px 30px;
}

.post .media-custom h2 {
  font-size: 26px;
}

.media-custom .meta-post {
  color: #ced4da;
  text-transform: uppercase;
  letter-spacing: .1em;
}

.owl-carousel .owl-item {
  opacity: .4;
}

.owl-carousel .owl-item.active {
  opacity: 1;
}

.owl-carousel .owl-nav {
  position: absolute;
  top: 50%;
  width: 100%;
}

.owl-carousel .owl-nav .owl-prev,
.owl-carousel .owl-nav .owl-next {
  position: absolute;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  margin-top: -10px;
}

.owl-carousel .owl-nav .owl-prev:hover, .owl-carousel .owl-nav .owl-prev:focus, .owl-carousel .owl-nav .owl-prev:active,
.owl-carousel .owl-nav .owl-next:hover,
.owl-carousel .owl-nav .owl-next:focus,
.owl-carousel .owl-nav .owl-next:active {
  outline: none;
}

.owl-carousel .owl-nav .owl-prev span:before,
.owl-carousel .owl-nav .owl-next span:before {
  font-size: 40px;
}

.owl-carousel .owl-nav .owl-prev {
  left: 30px !important;
}

.owl-carousel .owl-nav .owl-next {
  right: 30px !important;
}

.owl-carousel .owl-dots {
  text-align: center;
}

.owl-carousel .owl-dots .owl-dot {
  border-width: 2px !important;
  width: 10px;
  height: 10px;
  margin: 5px;
  border-radius: 50%;
}

.owl-carousel.home-slider {
  z-index: 1;
  position: relative;
}

.owl-carousel.home-slider .owl-nav {
  opacity: 0;
  visibility: hidden;
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
}

.owl-carousel.home-slider .owl-nav button {
  color: #fff;
}

.owl-carousel.home-slider:focus .owl-nav, .owl-carousel.home-slider:hover .owl-nav {
  opacity: 1;
  visibility: visible;
}

.owl-carousel.home-slider .slider-item {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  height: calc(100vh - 117px);
  min-height: 700px;
  position: relative;
}

.owl-carousel.home-slider .slider-item .slider-text {
  color: #fff;
  height: calc(100vh - 117px);
  min-height: 700px;
}

.owl-carousel.home-slider .slider-item .slider-text h1 {
  font-size: 40px;
  color: #fff;
  line-height: 1.2;
  font-weight: 800 !important;
  text-transform: uppercase;
}

@media (max-width: 991.98px) {
  .owl-carousel.home-slider .slider-item .slider-text h1 {
    font-size: 40px;
  }
}

.owl-carousel.home-slider .slider-item .slider-text p {
  font-size: 20px;
  line-height: 1.5;
  font-weight: 300;
  color: white;
}

.owl-carousel.home-slider .slider-item.dark .child-name {
  color: #000;
}

.owl-carousel.home-slider .slider-item.dark h1 {
  color: #000;
}

.owl-carousel.home-slider .slider-item.dark p {
  color: #000;
}

.owl-carousel.home-slider .owl-dots {
  position: absolute;
  bottom: 100px;
  width: 100%;
}

.owl-carousel.home-slider .owl-dots .owl-dot {
  width: 10px;
  height: 10px;
  margin: 5px;
  border-radius: 50%;
  border: 2px solid transparent;
  outline: none !important;
  position: relative;
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  background: #fff;
}

.owl-carousel.home-slider .owl-dots .owl-dot.active {
  border: 2px solid white;
  background: none;
}

.owl-carousel.major-caousel {
  -webkit-box-shadow: 0 10px 70px -10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 10px 70px -10px rgba(0, 0, 0, 0.2);
}

.owl-carousel.major-caousel .owl-stage-outer {
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}

.owl-carousel.major-caousel .owl-stage-outer {
  padding-top: 30px;
  padding-bottom: 30px;
}

.owl-carousel.major-caousel .slider-item {
  height: inherit;
  min-height: inherit;
}

.owl-carousel.major-caousel .slider-item img {
  margin-bottom: 0;
}

.owl-carousel.major-caousel .owl-nav {
  opacity: 1;
  visibility: visible;
}

.owl-carousel.major-caousel .owl-nav .owl-prev, .owl-carousel.major-caousel .owl-nav .owl-next {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  color: #495057;
}

.owl-carousel.major-caousel .owl-nav .owl-prev:hover, .owl-carousel.major-caousel .owl-nav .owl-prev:focus, .owl-carousel.major-caousel .owl-nav .owl-next:hover, .owl-carousel.major-caousel .owl-nav .owl-next:focus {
  color: #6c757d;
  outline: none;
}

.owl-carousel.major-caousel .owl-nav .owl-prev.disabled, .owl-carousel.major-caousel .owl-nav .owl-next.disabled {
  color: #dee2e6;
}

.owl-carousel.major-caousel .owl-nav .owl-prev {
  left: -60px !important;
}

.owl-carousel.major-caousel .owl-nav .owl-next {
  right: -60px !important;
}

.owl-carousel.major-caousel .owl-dots {
  bottom: 50px !important;
}

@media (max-width: 991.98px) {
  .owl-carousel.major-caousel .owl-dots {
    bottom: 10px !important;
  }
}

.owl-custom-nav {
  float: right;
  position: relative;
  z-index: 10;
}

.owl-custom-nav .owl-custom-prev,
.owl-custom-nav .owl-custom-next {
  padding: 10px;
  font-size: 30px;
  background: #ccc;
  line-height: 0;
  width: 60px;
  text-align: center;
  display: inline-block;
}

.footer-section {
  background: #1a1a1a;
  color: #fff;
}

.footer-section a {
  color: rgba(255, 255, 255, 0.7);
}

.footer-section a:hover {
  color: #fff;
}

.footer-section p {
  color: rgba(255, 255, 255, 0.5);
}

.footer-section .bordertop {
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  padding-top: 20px;
}

.footer-section .contact-info span.d-block {
  font-style: italic;
  color: #fff;
}

.footer-section .social a {
  font-size: 18px;
  padding: 10px;
}

.footer-section .link li {
  margin-bottom: 10px;
}

.footer-newsletter .form-group {
  position: relative;
}

.footer-newsletter .form-control {
  background: none;
  border: none;
  border-bottom: 1px solid rgba(255, 255, 255, 0.2);
  border-radius: 0;
  color: #fff;
}

.footer-newsletter .form-control::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  color: rgba(255, 255, 255, 0.2);
  font-style: italic;
}

.footer-newsletter .form-control::-moz-placeholder {
  /* Firefox 19+ */
  color: rgba(255, 255, 255, 0.2);
  font-style: italic;
}

.footer-newsletter .form-control:-ms-input-placeholder {
  /* IE 10+ */
  color: rgba(255, 255, 255, 0.2);
  font-style: italic;
}

.footer-newsletter .form-control:-moz-placeholder {
  /* Firefox 18- */
  color: rgba(255, 255, 255, 0.2);
  font-style: italic;
}

.footer-newsletter .form-control:active, .footer-newsletter .form-control:focus {
  border-bottom: 1px solid white;
}

.footer-newsletter button[type="submit"] {
  background: none;
  color: #fff;
  position: absolute;
  top: 0;
  right: 0;
}

.side-box, .sidebar-search {
  padding: 30px;
  background: #fff;
  -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
  margin-bottom: 30px;
}

.side-box .heading, .sidebar-search .heading {
  font-size: 18px;
  margin-bottom: 30px;
  font-family: "Mukta Mahee", arial, sans-serif;
}

.post-list li {
  margin-bottom: 20px;
}

.post-list li a > div {
  margin-top: -10px;
}

.post-list li a .meta {
  font-size: 13px;
  color: #adb5bd;
}

.post-list li a .image {
  width: 150px;
}

.post-list li a h3 {
  font-size: 16px;
}

.post-list li:last-child {
  margin-bottom: 0;
}

.sidebar-search .form-group {
  position: relative;
  margin-bottom: 0;
}

.sidebar-search .icon-search {
  position: absolute;
  top: 50%;
  left: 15px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.sidebar-search .search-input {
  border-color: #dee2e6;
  padding-left: 40px;
  border-radius: 0px;
}

.sidebar-search .search-input:focus, .sidebar-search .search-input:active {
  border-color: #343a40;
}

.contact-section .contact-info p {
  color: white;
  font-family: "Playfair+Display", times, serif;
  font-size: 30px;
  margin-bottom: 30px;
}

.contact-section .contact-info p .d-block {
  font-size: 14px;
  letter-spacing: .2em;
  font-family: "Mukta Mahee", arial, sans-serif;
  text-transform: uppercase;
  color: rgba(255, 255, 255, 0.5);
}

.post-categories li {
  display: block;
}

.post-categories li a {
  display: block;
  position: relative;
  padding-bottom: 10px;
  margin-bottom: 10px;
  border-bottom: 1px solid #e9ecef;
}

.post-categories li a .count {
  position: absolute;
  top: 0;
  right: 0;
  color: #6c757d;
}

.custom-pagination .page-item .page-link {
  text-align: center;
  border: none;
  background: none;
  border-radius: 50% !important;
  width: 50px;
  height: 50px;
  padding: 0;
  line-height: 50px;
  margin-right: 10px;
  margin-bottom: 10px;
}

.custom-pagination .page-item.active .page-link {
  background: #dc3545;
  -webkit-box-shadow: 0 2px 7px 0 rgba(0, 0, 0, 0.2);
  box-shadow: 0 2px 7px 0 rgba(0, 0, 0, 0.2);
}



        </style>
</head>

<body >