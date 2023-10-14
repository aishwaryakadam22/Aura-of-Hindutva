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
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About Us</h3>
   <p> <a href="home.php">Home</a> / About Us</p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="./image/letter-bg.png" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>In our sacred haven of Hindu Dharmik literature, we offer a harmonious blend of tradition and technology. Our meticulously curated collection features an extensive range of physical books, ebooks, and audiobooks, fostering spiritual growth and knowledge accessibility. Choose us to embark on a profound journey through the wisdom of Hinduism, enriched by convenience and choice.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="./image/pic-1.png" alt="">
         <p> A digital haven for Hindu literature. Quality audio, ebooks, and print editions, Impressive collection!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rohit Deshmukh</h3>
      </div>

      <div class="box">
         <img src="./image/pic-2.png" alt="">
         <p>Journey through scriptures simplified. A modern path to ancient enlightenment.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nikita Kulkarni</h3>
      </div>

      <div class="box">
         <img src="./image/pic-3.png" alt="">
         <p>Soul-stirring collection! Ebooks offer quick understanding, while hard copies feel authentic.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Disha Sharma</h3>
      </div>

      <div class="box">
         <img src="./image/pic-4.png" alt="">
         <p>Incredible range of books. Easy access to profound teachings. A treasure for knowledge enthusiasts.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Yash Joshi</h3>
      </div>

      <div class="box">
         <img src="./image/pic-5.png" alt="">
         <p>Immersive audio, convenient ebooks. Aura of Hindutva brings ancient wisdom to modern readers.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Aaditya kadam </h3>
      </div>

      <div class="box">
         <img src="./image/pic-6.png" alt="">
         <p>Immersive audio experience, insightful ebooks. A one-stop for dharmik literature. Impressed with the variety.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jija wadekar</h3>
      </div>

   </div>

</section>


</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>