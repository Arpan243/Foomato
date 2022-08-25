<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = '';
    header('location:home.php');
}






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

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

    


   <section class="user-details">

   <?php
         
      ?>

      <div class="user">
         <img src="images/user-icon.png" alt="">
         <p><i class="fas fa-user"></i> <span><?= $fetch_profile['name']; ?></span></p>
         <p><i class="fas fa-phone"></i> <span><?= $fetch_profile['number']; ?></span></p>
         <p><i class="fas fa-envelope"></i> <span><?= $fetch_profile['email']; ?></span></p>
         <a href="update_profile.php" class="btn">update profile</a>
         <p class="address"><i class="fas fa-map-marker-alt"></i> <span><?php if($fetch_profile['address'] == ''){echo 'please enter your address';}else{echo $fetch_profile['address'];} ?></span></p>
         <a href="update_address.php" class="btn">update address</a>
      </div>
   
   </section>



    <!-- footer Section Starts -->
    <?php include 'components/footer.php' ?>
    <!-- footer Section ends -->


<!-- javascript -->
<script src="js/script.js"></script>
    <!-- swiper script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    
</body>
</html>