<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <link rel="shortcut icon" type="x-icon" href="img/Logo-PNG.png">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pandayan - about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="img/cover.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>At Pandayan Bookshop, we are passionate about providing high-quality school products to students and educators alike. Our online shop is designed to make it easy for you to find the products you need, from textbooks and workbooks to school supplies and stationery</p>
         <p>Our team of experienced educators carefully curates our product selection to ensure that everything we offer meets our high standards for quality and value.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="img/andrei.jpg" alt="">
         <p>This e-commerce school product website is a game-changer! Their courses are top-quality and the instructors are experts in their field</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John Andrei Sera</h3>
      </div>

      <div class="box">
         <img src="img/chester.jpg" alt="">
         <p>I highly recommend this e-commerce school product website - their courses are comprehensive and easy to follow, and I've already seen an improvement in my online sales..</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Chester Ang</h3>
      </div>

      <div class="box">
         <img src="img/jerome.jpg" alt="">
         <p>I've been searching for a reliable e-commerce school product website for a while now, and I'm so glad I found this one!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jerome Velasco</h3>
      </div>

      <div class="box">
         <img src="img/jhudel.jpg" alt="">
         <p>I recently stumbled upon Pandayan Bookshop's online shop school product and I am blown away by the quality of their offerings!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jhudielle Barbiran</h3>
      </div>

      <div class="box">
         <img src="img/layca.jpg" alt="">
         <p>I recently purchased a product from Pandayan Bookshop's online store and I was blown away by the quality of their products and the efficiency of their shipping.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Layca Aviles</h3>
      </div>

      <div class="box">
         <img src="img/brian.jpg" alt="">
         <p>What I love most about Pandayan Bookshop's online shop school product is that it's so affordable!.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Brian Abad</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">great authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="img/Austine.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Austine Geoffrey Baltazar</h3>
         <h3>Backend Developer</h3>
      </div>

      <div class="box">
         <img src="img/rendel.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Rendel Manaois Doria</h3>
         <h3>Frontend Developer</h3>
      </div>

      <div class="box">
         <img src="img/Desrrie.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Deserrie Tenollar De Vera</h3>
         <h3>Tester</h3>
      </div>

      <div class="box">
         <img src="img/mario.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Mario Castro Tantay Jr</h3>
         <h3>Researcher</h3>
      </div>

      <div class="box">
         <img src="img/tanto.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Karl Arby Lomibao Mejia</h3>
         <h3>Researcher</h3>
      </div>

     

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>