<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

     <!-- font Awsome CDN link -->
     <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- CSS link -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- swiper link -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />

</head>
<body>
    <!-- header Section Starts -->
    <?php include 'components/user_header.php' ?>
    <!-- header Section ends -->
    <div class="heading">
      <h3>about us</h3>
      <p><a href="home.php">home </a> <span> / about</span></p>
    </div>

    <section class="about">

<div class="row">

   <div class="image">
      <img src="images/about-img.svg" alt="">
   </div>

   <div class="content">
      <h3>why choose us?</h3>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, neque debitis incidunt qui ipsum sed doloremque a molestiae in veritatis ullam similique sunt aliquam dolores dolore? Quasi atque debitis nobis!</p>
      <a href="menu.php" class="btn">our menu</a>
   </div>

</div>

</section>


<!-- steps starts -->
<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>choose order</h3>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, dolorem.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>fast delivery</h3>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, dolorem.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy food</h3>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, dolorem.</p>
      </div>

   </div>

</section>

<!-- setps ends     -->
<section class="reviews">
      <h1 class="title">customer's reviews</h1>

      <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="" />
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo
              exercitationem ullam esse quia iusto in.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
          </div>

          <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="" />
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo
              exercitationem ullam esse quia iusto in.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
          </div>

          <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="" />
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo
              exercitationem ullam esse quia iusto in.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
          </div>

          <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="" />
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo
              exercitationem ullam esse quia iusto in.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
          </div>

          <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="" />
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo
              exercitationem ullam esse quia iusto in.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
          </div>

          <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="" />
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo
              exercitationem ullam esse quia iusto in.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
          </div>
        </div>

        <div class="swiper-pagination"></div>
      </div>
    </section>




    <!-- footer Section Starts -->
    <?php include 'components/footer.php' ?>
    <!-- footer Section ends -->


<!-- javascript -->
<script src="js/script.js"></script>
    <!-- swiper script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>
      var swiper = new Swiper(".reviews-slider", {
        loop: true,
        grabCursor: true,
        spaceBetween: 20,
        pagination: {
          el: ".swiper-pagination",
        },
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        breakpoints: {
          550: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          },
        },
      });
    </script>
</body>
</html>