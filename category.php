<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = '';
}
include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>

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

    
    <section class="products">

    <h1 class="title">Food Category</h1>

    <div class="box-container">
        <?php
            $category = $_GET['category'];
            $select_products = $conn->prepare("SELECT * FROM `products` WHERE category = ?");
            $select_products->execute([$category]);
            if($select_products->rowCount() >0){
                while($fetch_products=$select_products->fetch(PDO::FETCH_ASSOC))
                {
        ?>
        <form action="" method="post" class="box">
          <input type="hidden" name="pid" value="<?= $fetch_products['id'];?>">
          <input type="hidden" name="pid" value="<?= $fetch_products['name'];?>">
          <input type="hidden" name="pid" value="<?= $fetch_products['price'];?>">
          <input type="hidden" name="pid" value="<?= $fetch_products['image'];?>">
          <a href="quick_view.php?pid=<?= $fetch_products['id']; ?>" class="fes fa-eye"></a>
          <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
          <img src="uploaded_img/<?=$fetch_products['image']; ?>" alt="" class="image">
         
          <div class="name"><?= $fetch_products['name']; ?></div>
          <div class="flex">
          <div class="price"><span>$</span><?= $fetch_products['price']; ?></div>
          <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
          </div>
        </form>
        <?php
                }
            }else{
              echo'<p class="empty">no products added yet</p>';
            }
        ?>

    

    </div>

    <div class="more-btn">
    <a href="menu.php" class="btn">view all</a>
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