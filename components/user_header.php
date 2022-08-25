<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<style>
  .message {
  position: sticky;
  top: 0;
  max-width: 1200px;
  margin: 0 auto;
  padding: 2rem;
  display: flex;
  align-items: center;
  gap: 1rem;
  justify-content: space-between;
  background-color: var(--yellow);
}

.message span {
  font-size: 2rem;
  color: var(--black);
}

.message i {
  font-size: 2.5rem;
  color: var(--red);
  cursor: pointer;
}

.message i:hover {
  color: var(--black);
}

:root {
  --yellow: #fed330;
  --red: #e74c3c;
  --white: #fff;
  --black: #222;
  --light-color: #777;
  --border: 0.2rem solid var(--black);
  --swiper-pagination-color: var(--yellow);
  --swiper-theme-color: var(--yellow);
}

* {
  font-family: "Rubik", sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  border: none;
  outline: none;
  text-decoration: none;
}

*::selection {
  background-color: var(--yellow);
  color: var(--black);
}

::-webkit-scrollbar {
  height: 0.5rem;
  width: 1rem;
}

::-webkit-scrollbar-track {
  background-color: transparent;
}

::-webkit-scrollbar-thumb {
  background-color: var(--yellow);
}

html {
  font-size: 62.5%;
  overflow-x: hidden;
  scroll-behavior: smooth;
  stop-opacity: 7rem;
}

section {
  margin: 0 auto;
  max-width: 1200px;
  padding: 2rem;
}

.title {
  text-align: center;
  margin-bottom: 2.5rem;
  font-size: 4rem;
  color: var(--black);
  text-transform: uppercase;
  text-decoration: underline;
  text-underline-offset: 1rem;
  text-decoration: underline;
  text-underline-offset: 1rem;
}

.heading {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 1rem;
  flex-flow: column;
  background-color: var(--black);
  min-height: 20rem;
}

.heading h3 {
  font-size: 5rem;
  color: var(--white);
  text-transform: capitalize;
}

.heading p {
  font-size: 2.3rem;
  color: var(--light-color);
}

.heading p a {
  color: var(--white);
}

.heading p a:hover {
  text-decoration: underline;
  color: var(--yellow);
}

.btn,
.delete-btn {
  margin-top: 1rem;
  display: inline-block;
  font-size: 2rem;
  padding: 1rem 3rem;
  cursor: pointer;
  text-transform: capitalize;
  transition: 0.2s linear;
}

.btn {
  background-color: var(--yellow);
  color: var(--black);
}

.delete-btn {
  background-color: var(--red);
  color: var(--white);
}

.btn:hover,
.delete-btn:hover {
  letter-spacing: 0.2rem;
}

.header {
  position: sticky;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000;
  background-color: var(--white);
  border-bottom: var(--border);
}

.header .flex {
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: relative;
}

.header .flex .logo {
  font-size: 2.5rem;
  color: var(--black);
}

.header .flex .navbar a {
  font-size: 2rem;
  color: var(--black);
  margin: 0 1rem;
}

.header .flex .navbar a:hover {
  color: var(--yellow);
  text-decoration: underline;
}

.header .flex .icon > * {
  margin-left: 1.5rem;
  font-size: 2.5rem;
  color: var(--black);
  cursor: pointer;
}

.header .flex .icon > *:hover {
  color: var(--yellow);
}

.header .flex .icon span {
  font-size: 2rem;
}

#menu-btn {
  display: none;
}

.header .flex .profile {
  background-color: var(--white);
  border: var(--border);
  padding: 1.5rem;
  text-align: center;
  position: absolute;
  top: 120%;
  right: 2rem;
  width: 30rem;
  display: none;
  animation: fadeIn 0.2s linear;
}

.header .flex .profile.active {
  display: inline-block;
}

@keyframes fadeIn {
  0% {
    transform: translateY(1rem);
  }
}

.header .flex .profile .name {
  font-size: 2rem;
  color: var(--black);
  margin-bottom: 1rem;
}

.header .flex .profile .account {
  margin-top: 2rem;
  font-size: 2rem;
  color: var(--light-color);
}

.header .flex .profile .account a {
  color: var(--black);
}

.header .flex .profile .account a:hover {
  color: var(--yellow);
  text-decoration: underline;
}

</style>

<header class="header">
      <section class="flex">
        <a href="home.php" class="logo"> Foomato</a>

        <nav class="navbar">
          <a href="home.php">Home</a>
          <a href="about.php">About</a>
          <a href="menu.php">Menu</a>
          <a href="orders.php">Order</a>
          <a href="contact.php">Contact</a>
        </nav>

        <div class="icon">
            <?php
                $count_user_cart_itmes = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
                $count_user_cart_itmes->execute([$user_id]);
                $total_user_cart_items = $count_user_cart_itmes->rowCount();
            ?>
          <a href="search.php"><i class="fas fa-search"></i></a>
          <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?=$total_user_cart_items; ?>)</span></a>
          <div id="user-btn" class="fas fa-user"></div>
          <div id="menu-btn" class="fas fa-bars"></div>
        </div>

        <div class="profile">
            <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
                $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
            ?>
          <p class="name"><?=$fetch_profile['name'];?></p>
          <div class="flex">
            <a href="profile.php" class="btn">profile</a>
            <a href="components/user_logout.php" onclick="return confirm('Want to Log Out?')" class="delete-btn">logOut</a>
            
          </div>
          <p class="account">
            <a href="login.php">login</a> or
            <a href="register.php">register</a>
         </p> 
          <?php
            }
          else{
            ?>
                <p class="name">please login first</p>
                <a href="login.php" class="btn">Log in</a>
            <?php
          }
        ?>
          

          <!-- <p class="account">
            <a href="login.php">login</a> or
            <a href="register.php">register</a>
          </p> -->
        </div>
      </section>
    </header>

