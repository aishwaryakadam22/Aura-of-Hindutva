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
    <title>Home</title>

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
    <section class="home" id="home">

        <div class="row">

            <div class="content">
                <h3>Aura of Hindutva</h3>
                <p>"Welcome to Aura of Hindutva Online Bookstore, your source for a wide range of authentic Hindu dharmik books. Explore spiritual wisdom in audio, ebook, and hard copy formats."</p>
                <a href="shop.php" class="btn">Shop Now</a>
            </div>

            <div class="swiper books-list">

                <div class="swiper-wrapper">
                    <a href="" class="swiper-slide"><img src="./image/book-1.png" alt=""></a>
                    <a href="" class="swiper-slide"><img src="./image/book-2.png" alt=""></a>
                    <a href="" class="swiper-slide"><img src="./image/book-3.png" alt=""></a>
                    <a href="" class="swiper-slide"><img src="./image/book-4.png" alt=""></a>
                    <a href="" class="swiper-slide"><img src="./image/book-5.png" alt=""></a>
                    <a href="" class="swiper-slide"><img src="./image/book-6.png" alt=""></a>
                </div>

                <img src="./image/stand.png" class="stand" alt="">

            </div>


        </div>

    </section>
    <!-------- home section ends  ----------->

    <!-------- featured section start  ----------->
    

    <section class="featured" id="featured">

        <div class="heading"><span> Categories </span></div>

        <div class="swiper featured-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <!-- <div class="icons">
                        <a href="" class="fas fa-search"></a>
                        <a href="" class="fas fa-heart"></a>
                        <a href="" class="fas fa-eye"></a>
                    </div> -->

                    <div class="image">
                        <img src="./image/book-1.png" alt="">
                    </div>

                    <div class="content">
                        <div class="price"> ₹ 300<span> ₹ 900</span></div>
                        <h3>Bhagavad-Gita</h3>
                        <!-- <div class="price"> ₹ 1115<span> ₹ 2000</span></div> -->
                        <a href="Bhagavad_Gita.php" class="btn">VIEW MORE</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <!-- <div class="icons">
                        <a href="" class="fas fa-search"></a>
                        <a href="" class="fas fa-heart"></a>
                        <a href="" class="fas fa-eye"></a>
                    </div> -->

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
                    <!-- <div class="icons">
                        <a href="" class="fas fa-search"></a>
                        <a href="" class="fas fa-heart"></a>
                        <a href="" class="fas fa-eye"></a>
                    </div> -->

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
                    <!-- <div class="icons">
                        <a href="" class="fas fa-search"></a>
                        <a href="" class="fas fa-heart"></a>
                        <a href="" class="fas fa-eye"></a>
                    </div> -->

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
                    <!-- <div class="icons">
                        <a href="" class="fas fa-search"></a>
                        <a href="" class="fas fa-heart"></a>
                        <a href="" class="fas fa-eye"></a>
                    </div> -->

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
                    <!-- <div class="icons">
                        <a href="" class="fas fa-search"></a>
                        <a href="" class="fas fa-heart"></a>
                        <a href="" class="fas fa-eye"></a>
                    </div> -->

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
                    <!-- <div class="icons">
                        <a href="" class="fas fa-search"></a>
                        <a href="" class="fas fa-heart"></a>
                        <a href="" class="fas fa-eye"></a>
                    </div> -->

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
                    <!-- <div class="icons">
                        <a href="" class="fas fa-search"></a>
                        <a href="" class="fas fa-heart"></a>
                        <a href="" class="fas fa-eye"></a>
                    </div> -->

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


    <section class="products">

        <!-- <h1 class="title">latest products</h1> -->

        <div class="box-container">

            <?php
            $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
            if (mysqli_num_rows($select_products) > 0) {
                while ($fetch_products = mysqli_fetch_assoc($select_products)) {
            ?>
                    <form action="" method="post" class="box">
                        <img class="image" src="image/<?php echo $fetch_products['image']; ?>" alt="">
                        <div class="name"><?php echo $fetch_products['name']; ?></div>
                        <div class="price">₹<?php echo $fetch_products['price']; ?>/-</div>
                        <input type="number" min="1" name="product_quantity" value="1" class="qty">
                        <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
                        <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
                        <input type="submit" value="add to cart" name="add_to_cart" class="btn">

                        <?php
                        if ($fetch_products['audiobook']) {
                            echo '<a href="uploads/audiobooks/' . $fetch_products['audiobook'] . '" class="option-btn">Audiobook</a>';
                        }
                        if ($fetch_products['ebook']) {
                            echo '<a href="uploads/ebooks/' . $fetch_products['ebook'] . '" class="option-btn">eBook</a>';
                        }
                        ?>
                    </form>
            <?php
                }
            } else {
                echo '<p class="empty">no products added yet!</p>';
            }
            ?>
        </div>

        <div class="load-more" style="margin-top: 2rem; text-align:center">
            <a href="shop.php" class="option-btn">Load more</a>
        </div>

    </section>

    <section class="about">

        <div class="flex">

            <div class="image">
                <img src="./image/letter-bg.png" alt="">
            </div>

            <div class="content">
                <h3>About us</h3>
                <p>We are a one-stop shop for all your Hindu Dharmic book needs. We offer a wide selection of books in Hindi, including audiobooks and ebooks. Our books cover a wide range of topics, including philosophy, scriptures, and more. We are committed to providing our customers with the highest quality books and services.</p>
                <a href="about.php" class="btn">read more</a>
            </div>

        </div>

    </section>

    <section class="home-contact">

        <div class="content">
            <h3>have any questions?</h3>
            <p>Looking for Hindu religious books, audiobooks, and ebooks? We have a wide selection to choose from, so you can find the perfect title for your needs.</p>
            <a href="contact.php" class="white-btn">contact us</a>
        </div>

    </section>


    <!-------- review section start  ----------->

    <section class="reviews" id="reviews">

        <h1 class="heading"><span>Reviews</span></h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="./image/pic-1.png" alt="">
                    <h3>Rohit Deshmukh</h3>
                    <p>
                        A digital haven for Hindu literature. Quality audio, ebooks, and print editions, Impressive collection!
                    </p>

                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="./image/pic-2.png" alt="">
                    <h3>Nikita Kulkarni</h3>
                    <p>
                        Journey through scriptures simplified. A modern path to ancient enlightenment.
                    </p>

                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="./image/pic-3.png" alt="">
                    <h3>Disha Sharma</h3>
                    <p>
                        Soul-stirring collection! Ebooks offer quick understanding, while hard copies feel authentic.
                    </p>

                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="./image/pic-4.png" alt="">
                    <h3>Yash Joshi</h3>
                    <p>
                        Incredible range of books. Easy access to profound teachings. A treasure for knowledge enthusiasts.
                    </p>

                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="./image/pic-5.png" alt="">
                    <h3>Aaditya kadam </h3>
                    <p>
                        Immersive audio, convenient ebooks. Aura of Hindutva brings ancient wisdom to modern readers.
                    </p>

                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="./image/pic-6.png" alt="">
                    <h3>Jija wadekar</h3>
                    <p>
                        Immersive audio experience, insightful ebooks. A one-stop for dharmik literature. Impressed with the variety.
                    </p>

                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------- review section ends  ----------->



    <?php include 'footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>