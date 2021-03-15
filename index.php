<?php require('./PN.php') ; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>MOCY SAY HI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand" href="index.html"><span>MOCY SAY HI</span></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
   </button>

   <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>

         <li class="nav-item"><a href="cars.html" class="nav-link">Cars</a></li>

         <li class="nav-item"><a href="payment.html" class="nav-link">Payment</a></li>

         <li class="nav-item"><a href="cart.html" class="nav-link">Cart</a></li>
     </ul>
 </div>
</div>
</nav>
<!-- END nav -->

<div class="hero-wrap js-fullheight" style="background-image: url('https://f.tpkcdn.com/review-source/e9801517-c0e1-424c-6cfe-57316cac5564.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate">
        <span class="subheading">WELCOME</span>
        <h1 class="mb-4">"MOCY SAY HI"</h1>
        <p class="caps">ร้านเช่ามอไซต์ที่ดีที่สุดในเชียงใหม่</p>
    </div>
</div>
</div>
</div>

<section class="ftco-section ftco-no-pb ftco-no-pt">
   <div class="container">
      <div class="row">
         <div class="col-md-7"></div>
         <div class="col-md-5 order-md-last">
          <div class="login-wrap p-4 p-md-5">
              <h3 class="mb-4">Register Now</h3>
              <form action="#" class="signup-form">
                 <div class="form-group">
                    <label class="label" for="name">Full Name</label>
                    <input type="text" class="form-control" placeholder="Write your name">
                </div>
                <div class="form-group">
                    <label class="label" for="email">Email Address</label>
                    <input type="text" class="form-control" placeholder="marktuan@gmail.com">
                </div>
                <div class="form-group">
                 <label class="label" for="password">Password</label>
                 <input id="password-field" type="password" class="form-control" placeholder="Password">
             </div>
             <div class="form-group">
                 <label class="label" for="password">Confirm Password</label>
                 <input id="password-field" type="password" class="form-control" placeholder="Confirm Password">
             </div>
             <div class="form-group d-flex justify-content-end mt-4">
                 <button type="submit" class="btn btn-primary submit"><span class="fa fa-paper-plane"></span></button>
             </div>
         </form>
         <p class="text-center">Already have an account? <a href="  ">Sign In</a></p>
     </div>
 </div>
</div>
</div>
</section>

<section class="ftco-section">
   <div class="container">
      <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">

            <h2 class="mb-4">OUR CARS</h2>
        </div>
    </div>
    <div class="row justify-content-center">
     <div class="col-md-3 col-lg-2">
        <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-11.jpg);">
           <div class="text w-100 text-center">
              <h3>HONDA</h3>

          </div>
      </a>
  </div>
  <div class="col-md-3 col-lg-2">
    <a href="" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-22.jpg);">
       <div class="text w-100 text-center">
          <h3>YAMAHA</h3>

      </div>
  </a>
</div>
<div class="col-md-3 col-lg-2">
    <a href="" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-33.jpg);">
       <div class="text w-100 text-center">
          <h3>SUZUKI</h3>

      </div>
  </a>
</div>
<div class="col-md-3 col-lg-2">
    <a href="" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-44.jpg);">
       <div class="text w-100 text-center">
          <h3>GPX</h3>

      </div>
  </a>
</div>


</div>
</div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
       <div class="row justify-content-center pb-4">
           <div class="col-md-12 heading-section text-center ftco-animate">

             <h2 class="mb-4">Pick Your Bike</h2>
         </div>
     </div>
     <div class="row">

     <?php

     $sql = 'SELECT * FROM `bike` ORDER BY `bike`.`brand` ASC' ;
     $gen = gen_array($sql) ;

     foreach ($gen as $key => $value) {
       $img = $value['image'] ;
       ?>

     <div class="col-md-4 ftco-animate">

           <div class="project-wrap">
              <!-- <a href="#" class="img" style="background-image: url(http://www.phithan.co.th/imagesphitan/images/imagesProducts/9/vyiivigt.png);"> -->
              <a href="#" class="img" style="background-image: url(<?=  $img?>);">
              

                 <span class="price"> <?= $value['brand'] ?> </span>

             </a>

             <div class="text p-4">
                 <h3 i class="bi bi-cart4"></i>
                   <input class="btn btn-primary" type="submit" value="Submit">
                   <a href=""> <?= $value['name'] ?></a></h3>

                 <ul class="d-flex justify-content-between">
                    <li class="price btn-primary" href="#" role="button">Link</a>> Rent Price  <?= $value['price'] ?> THB </li>

                </ul>
            </div>
        </div>
    </div>

    <?php } ?>


 </div>
 </div>
 </div>
 </div>
 </section>


<footer class="ftco-footer ftco-no-pt">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md pt-5">
        <div class="ftco-footer-widget pt-md-5 mb-4">
          <h2 class="ftco-heading-2">About</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
        </ul>
    </div>
</div>
<div class="col-md pt-5">
    <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
      <h2 class="ftco-heading-2">Help Desk</h2>
      <ul class="list-unstyled">
        <li><a href="#" class="py-2 d-block">Customer Care</a></li>
        <li><a href="#" class="py-2 d-block">Legal Help</a></li>
        <li><a href="#" class="py-2 d-block">Services</a></li>
        <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
        <li><a href="#" class="py-2 d-block">Refund Policy</a></li>
        <li><a href="#" class="py-2 d-block">Call Us</a></li>
    </ul>
</div>
</div>
<div class="col-md pt-5">
   <div class="ftco-footer-widget pt-md-5 mb-4">
      <h2 class="ftco-heading-2">Recent Courses</h2>
      <ul class="list-unstyled">
        <li><a href="#" class="py-2 d-block">Computer Engineering</a></li>
        <li><a href="#" class="py-2 d-block">Web Design</a></li>
        <li><a href="#" class="py-2 d-block">Business Studies</a></li>
        <li><a href="#" class="py-2 d-block">Civil Engineering</a></li>
        <li><a href="#" class="py-2 d-block">Computer Technician</a></li>
        <li><a href="#" class="py-2 d-block">Web Developer</a></li>
    </ul>
</div>
</div>
<div class="col-md pt-5">
    <div class="ftco-footer-widget pt-md-5 mb-4">
       <h2 class="ftco-heading-2">Have a Questions?</h2>
       <div class="block-23 mb-3">
         <ul>
           <li><span class="icon fa fa-map-marker"></span><span class="text">MaejoCity 50290</span></li>
           <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+856942356</span></a></li>
           <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">mocysayhi@gmail.com</span></a></li>
       </ul>
   </div>
</div>
</div>
</div>
<div class="row">
  <div class="col-md-12 text-center">

    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">mocysayhi</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
  </div>
</div>
</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>
