<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

if (isset($_POST['add_to_cart'])) {

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

    $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

    if (mysqli_num_rows($check_cart_numbers) > 0) {
        $message[] = 'already added to cart!';
    } else {
        mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
        $message[] = 'product added to cart!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/style.css">

    <!------- swipper cdn link ------------>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!---- swiper cdn link ---------->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

</head>

<body>

    <?php include 'header.php'; ?>
   

    <!-------- featured section start  ----------->
    

    <section class="featured" id="featured">

        <div class="heading"><span> Categories </span></div>

        <div class="swiper featured-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    
                    <div class="image">
                        <img src="./image/book-1.png" alt="">
                    </div>

                    <div class="content">
                        <div class="price"> ₹ 350<span> ₹ 900</span></div>
                        <h3>Bhagavad-Gita</h3>
                        <!-- <div class="price"> ₹ 1115<span> ₹ 2000</span></div> -->
                        <a href="Bhagavad_Gita.php" class="btn">VIEW MORE</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    
                    <div class="image">
                        <img src="./image/book-2.png" alt="">
                    </div>

                    <div class="content">
                        <div class="price">₹ 320 <span>₹ 780</span></div>
                        <h3>Upanishads</h3>
                        <!-- <div class="price">₹ 1599 <span>₹ 2099</span></div> -->
                        <a href="Upanishads.php" class="btn">VIEW MORE</a>
                    </div>
                </div>

                <div class="swiper-slide box">

                    <div class="image">
                        <img src="./image/book-3.png" alt="">
                    </div>

                    <div class="content">
                        <div class="price">₹ 290 <span>₹ 570</span></div>
                        <h3>Puranas</h3>
                        <!-- <div class="price">₹ 1599 <span>₹ 2099</span></div> -->
                        <a href="Puranas.php" class="btn">VIEW MORE</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    

                    <div class="image">
                        <img src="./image/book-4.png" alt="">
                    </div>

                    <div class="content">
                        <div class="price">₹ 320 <span>₹ 690</span></div>
                        <h3>Shastras</h3>
                        <!-- <div class="price">₹ 1599 <span>₹ 2099</span></div> -->
                        <a href="shastras.php" class="btn">VIEW MORE</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    
                    <div class="image">
                        <img src="./image/book-5.png" alt="">
                    </div>

                    <div class="content">
                        <div class="price">₹ 310 <span>₹ 790</span></div>
                        <h3>Vedas</h3>
                        <!-- <div class="price">₹ 1599 <span>₹ 2099</span></div> -->
                        <a href="Vedas.php" class="btn">VIEW MORE</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    
                    <div class="image">
                        <img src="./image/book-6.png" alt="">
                    </div>

                    <div class="content">
                        <div class="price">₹ 250 <span>₹ 570</span></div>
                        <h3>Spiritual Book</h3>
                        <!-- <div class="price">₹ 1599 <span>₹ 2099</span></div> -->
                        <a href="Spiritual.php" class="btn">VIEW MORE</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    
                    <div class="image">
                        <img src="./image/book-7.png" alt="">
                    </div>

                    <div class="content">
                        <div class="price">₹ 340 <span>₹ 850</span></div>
                        <h3>Ramayana</h3>
                        <!-- <div class="price">₹ 1599 <span>₹ 2099</span></div> -->
                        <a href="Ramayana.php" class="btn">VIEW MORE</a>
                    </div>
                </div>

                <div class="swiper-slide box">

                    <div class="image">
                        <img src="./image/book-8.png" alt="">
                    </div>

                    <div class="content">
                        <div class="price">₹ 290 <span>₹ 679</span></div>
                        <h3>Mahabharata</h3>
                        <!-- <div class="price">₹ 1599 <span>₹ 2099</span></div> -->
                        <a href="Mahabharata.php" class="btn">VIEW MORE</a>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    
    <?php include 'footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>