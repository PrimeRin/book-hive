<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Hive - Biggest Library in World</title>
    <link rel="stylesheet" href="../../public/css/home.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="top-header">
            <div class="logo">
                <a href="index.php">
                    <img src="../../public/img/book-hive.png" alt="Book Hive">
                </a>
            </div>
            <div class="search-bar">
                <div class="category-dropdown">
                    <span>All Category</span>
                    <i class="fa fa-angle-down"></i>
                </div>
                <input type="text" placeholder="Search products...">
                <button class="search-btn"><i class="fa fa-search"></i></button>
            </div>
            <div class="header-right">
                <div class="wishlist">
                    <a href="login" class="cta-button">Log In <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <nav class="main-nav">
            <div class="departments-menu">
                <button class="dept-btn">
                    <i class="fa fa-bars"></i>
                    <span>ALL BOOKSTORE</span>
                </button>
            </div>
            <ul class="nav-links">
                <li><a href="#" class="active">Home</a></li>
                <li class="dropdown">
                    <a href="#">Shop <i class="fa fa-angle-down"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#">Blog <i class="fa fa-angle-down"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#">Pages <i class="fa fa-angle-down"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#">Vendor <i class="fa fa-angle-down"></i></a>
                </li>
            </ul>
            <div class="nav-right">
                <div class="notice">
                    <span class="notice-tag">NOTICE</span>
                    <span class="notice-text">Update: We are open all week 9-5</span>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1><span class="hero-title-dark">Biggest</span> <span class="hero-title-orange">library</span><br><span class="hero-title-dark">in World</span></h1>
            <p>We have over the 10,000+ books in library of all Genres.</p>
            <a href="#" class="cta-button">CONTACT US <i class="fa fa-arrow-right"></i></a>
        </div>
        <div class="hero-images">
            <img src="../../public/img/book1.jpg" alt="Book Cover" class="book-cover book1">
            <img src="../../public/img/book2.jpg" alt="Book Cover" class="book-cover book2">
            <img src="../../public/img/book3.jpeg" alt="Book Cover" class="book-cover book3">
        </div>
    </section>

    <!-- Featured Categories -->
    <section class="featured-categories">
        <div class="category-card red">
            <div class="category-content">
                <h3>New<br>Release.</h3>
                <a href="#" class="shop-now">Shop now</a>
            </div>
            <div class="category-image">
                <img src="../../public/img/book1.jpg" alt="New Release Book">
            </div>
        </div>
        <div class="category-card green">
            <div class="category-content">
                <h3>Pre Order<br>Now.</h3>
                <a href="#" class="shop-now">Shop now</a>
            </div>
            <div class="category-image">
                <img src="../../public/img/book1.jpg" alt="Pre Order Book">
            </div>
        </div>
        <div class="category-card blue">
            <div class="category-content">
                <h3>Top<br>Rated.</h3>
                <a href="#" class="shop-now">Shop now</a>
            </div>
            <div class="category-image">
                <img src="../../public/img/book1.jpg" alt="Top Rated Book">
            </div>
        </div>
    </section>

    <!-- Discount Banner -->
    <section class="discount-banner">
        <div class="banner-content">
            <p class="banner-subtitle">MORE THAN FOR YOUR BOOK</p>
            <h2 class="banner-title">20% Off Select Books</h2>
            <a href="#" class="shop-now-btn">Shop now</a>
        </div>
        <div class="banner-image">
            <img src="../../public/img/book1.jpg" alt="Student with Books">
        </div>
    </section>

    <!-- Trending Books -->
    <section class="trending-section">
        <div class="section-header">
            <h2>Trending on Book Hive</h2>
            <a href="#" class="view-all">View all <i class="fa fa-angle-right"></i></a>
        </div>
        <div class="book-grid">
            <?php
            // Sample book data
            $trendingBooks = [
                [
                    'image' => '../../public/img/book2.jpg',
                    'rating' => 4.5,
                    'reviews' => 10,
                    'title' => 'The Art of Fashion',
                    'author' => 'Bookio',
                    'price' => '$80.00',
                    'old_price' => '$200.00'
                ],
                [
                    'image' => '../../public/img/book2.jpg',
                    'rating' => 5,
                    'reviews' => 10,
                    'title' => '100 Selected Poems',
                    'author' => 'Bookio',
                    'price' => '$50.00',
                    'old_price' => '$150.00'
                ],
                [
                    'image' => '../../public/img/book2.jpg',
                    'rating' => 4,
                    'reviews' => 10,
                    'title' => 'Life is What You Make It',
                    'author' => 'Bookio',
                    'price' => '$100.00',
                    'old_price' => '$150.00'
                ],
                [
                    'image' => '../../public/img/book3.jpeg',
                    'rating' => 4,
                    'reviews' => 10,
                    'title' => 'Heartless Marissa Meyer',
                    'author' => 'Bookio',
                    'price' => '$121.22',
                    'old_price' => ''
                ],
                [
                    'image' => '../../public/img/book3.jpeg',
                    'rating' => 5,
                    'reviews' => 10,
                    'title' => 'The Untethered Soul',
                    'author' => 'Bookio',
                    'price' => '$121.22',
                    'old_price' => ''
                ],
                [
                    'image' => '../../public/img/book2.jpg',
                    'rating' => 5,
                    'reviews' => 10,
                    'title' => 'Africa Rising',
                    'author' => 'Bookio',
                    'price' => '$125.00',
                    'old_price' => '$150.00'
                ]
            ];

            foreach ($trendingBooks as $book) {
                echo '<div class="book-card">';
                echo '<div class="book-image">';
                echo '<img src="' . $book['image'] . '" alt="' . $book['title'] . '">';
                echo '<button class="wishlist-btn"><i class="fa fa-heart"></i></button>';
                echo '</div>';
                echo '<div class="book-rating">';
                for ($i = 1; $i <= 5; $i++) {
                    if ($i <= floor($book['rating'])) {
                        echo '<i class="fa fa-star filled"></i>';
                    } elseif ($i - 0.5 <= $book['rating']) {
                        echo '<i class="fa fa-star-half-alt filled"></i>';
                    } else {
                        echo '<i class="fa fa-star"></i>';
                    }
                }
                echo '<span class="review-count">(' . $book['reviews'] . ')</span>';
                echo '</div>';
                echo '<h3 class="book-title">' . $book['title'] . '</h3>';
                echo '<p class="book-author">' . $book['author'] . '</p>';
                echo '<div class="book-price">';
                echo '<span class="current-price">' . $book['price'] . '</span>';
                if (!empty($book['old_price'])) {
                    echo '<span class="old-price">' . $book['old_price'] . '</span>';
                }
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </section>

    <!-- Top Categories -->
    <section class="top-categories">
        <h2>Top Categories</h2>
        <!-- This section would contain category links -->
    </section>

    <!-- Footer would go here -->

    <script>
        // JavaScript functionality could be added here
    </script>
</body>
</html>