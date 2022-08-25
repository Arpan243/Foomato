<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION[user_id];
}else{
    $user_id = '';
}

if(isset($_POST['submit'])){

  $email = $_POST['email'];
  $email = filter_var($email, FILTER_SANITIZE_STRING);
 
  $pass = $_POST['pass'];
  $pass = filter_var($pass, FILTER_SANITIZE_STRING);


  $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? OR password = ?");
  $select_user->execute([$email, $pass]);
  $row = $select_user->fetch(PDO::FETCH_ASSOC);

  if($select_user->rowCount() > 0){
    $_SESSION['user_id'] = $row['id'];
    header('location:home.php');
  }else{
     if($pass != $cpass){
        $message[] = 'Incorrect password or user';
     }
  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>

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

    <section class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <input type="email" name="email" required placeholder="enter your email" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="pass" required placeholder="enter your password" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="login now" name="submit" class="btn">
      <p>don't have an account? <a href="register.php">register now</a></p>
   </form>

</section>




    <!-- footer Section Starts -->
    <?php include 'components/footer.php' ?>
    <!-- footer Section ends -->


<!-- javascript -->
<script src="js/script.js"></script>
    <!-- swiper script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>
      var swiper = new Swiper(".hero-slide", {
        loop : true,
        effect: "flip",
        grabCursor: true,
        
        
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        
      });
    </script>
</body>
</html>