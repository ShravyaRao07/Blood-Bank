<?php include("conn/connect.php");
include("functions/function.php");
$cat =  display_cat();
?>
<?php
$products = get_product('category_id');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAKSHANIDHI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">

    <link rel="stylesheet" href="css/user/style.css">
</head>


<body>
    <!-- header middle starts -->
    <div class="home_black_version">
    <header class="header_area header_black">
            <div class="header_middel">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="dropdown">
                              <button class="login">LOGIN<i class="ion-chevron-down"></i></button>
                                <div id="myDropdown" class="dropdown-content">
                                  <a href="adminlogin.php">ADMIN</a>
                                  <a href="login.php">USER</a>
                                </div>
                            </div>
                            <div class="logout_box">
                              <div class="logout">
                                  <button class="logout"><a href="login.php" ><b>LOGOUT</b></button>
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-4">
                            <div class="logo">
                                <a href="index.html"><img src="images/logo/logo1.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-7 col-6">
                            <div class="middel_right">
                                <div class="search_btn">
                                    <a href="search.php"><i class="ion-ios-search-strong"></i></a>
                                    <div class="dropdown_search">
                                        <form action="" method="GET">
                                            <input type="text" name="search" placeholder="Search Product ....">
                                            <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                        </form>
                                       



                                    </div>
                                </div>

                                <div class="wishlist_btn">
                                    <a href="#"><i class="ion-heart"></i></a>
                                </div>
                                <div class="cart_link">
                                    <a href="cart.php"><i class="ion-android-cart"></i></a>
                                            
                                            <?php
                                            
                                           
                                            $select_rows = mysqli_query($conn, "SELECT * FROM `crt`") or die('query failed');
                                            $row_count = mysqli_num_rows($select_rows);
                                            
                                            ?>
                                                <!--<a href="crt.php" class="cart">cart <span><??></span> </a>-->

                                    <span class="cart_quantity"><?php echo $row_count; ?></span>

                                    <!-- mini cart -->
                                    <!--<div class="mini_cart">
                                        <div class="cart_close">
                                            <div class="cart_text">
                                                <h3>cart</h3>
                                            </div>
                                            <div class="mini_cart_close">
                                                <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_item">
                                            <div class="cart_img">
                                                <a href="#"><img src="images/nav-product/1.jpg" alt=""></a>
                                            </div>
                                            <div class="cart_info">
                                                <a href="#">Earings</a>
                                                <span class="quantity">Qty : 1</span>
                                                <span class="price_cart">Rs. 0000</span>
                                            </div>
                                            <div class="cart_remove">
                                                <a href="#"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_item">
                                            <div class="cart_img">
                                                <a href="#"><img src="images/nav-product/2.jpg" alt=""></a>
                                            </div>
                                            <div class="cart_info">
                                                <a href="#">Bracelet</a>
                                                <span class="quantity">Qty : 1</span>
                                                <span class="price_cart">Rs. 0000</span>
                                            </div>
                                            <div class="cart_remove">
                                                <a href="#"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_total">
                                            <span>Subtotal : </span>
                                            <span>Rs. 0000</span>
                                        </div>
                                        <div class="mini_cart_footer">
                                            <div class="cart_button view_cart">
                                                <a href="#">View Cart</a>
                                            </div>
                                            <div class="cart_button checkout">
                                                <a href="#" class="active">Checkout</a>
                                            </div>
                                        </div>
                                    </div>-->
                                    <!-- mini cart ends  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- header middle ends -->

            <!-- header bottom starts -->

            <div class="header_bottom sticky-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="main_menu_inner">
                                <div class="logo_sticky">
                                    <a href="#"><img src="images/logo/logo1.jpg" alt="logo"></a>
                                </div>
                                <div class="main_menu">
                                    <nav>
                                        <ul>
                                            <li class="active">
                                                <a href="#">Home </a>
                                            </li>
                                            <li>
                                                <a href="categories.php">Category <i class="ion-chevron-down"></i></a>
                                                <ul class="sub_menu">
                                                <?php
                                                    while($row = mysqli_fetch_assoc($cat))
                                                    {
                                                        ?>
                                                        <li><a href="prod.php?id=<?=$row['category_id'];?>">
                                                        <?php echo $row['category_name'] ?></a></li>
                                                        <?php 
                                                    }
                                                    ?>
                                                </ul>
                                            </li>
                                            
                                            <li><a href="#">About Us</a>
                                                
                                                </li>
                                            <li><a href="contactus/index.html">Contact us<i class="ion-chevron-down"></i></a>
                                                    <ul class="sub_menu">
                                                    </ul>
                                                    </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header bottom ends -->
        </header>

        <!-- slider section starts -->
        <div class="slider_area slider_black owl-carousel">
            <div class="single_slider" data-bgimg="images/slider/1.png">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="slider_content">
                                <p>exclusive offer -20% off this week</p>
                                <h1>Necklace</h1>
                                <span>Necklace for wedding</span>
                                <p class="slider_price">starting at <span>Rs.0000</span></p>
                                <a href="p.php" class="button">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="single_slider" data-bgimg="images/slider/2.jpg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="slider_content">
                                <p>exclusive offer -40% off this week</p>
                                <h1>Earings and Pendant</h1>
                                <span>Complete set with white pearls</span>
                                <p class="slider_price">starting at <span>Rs. 0000</span></p>
                                <a href="p.php" class="button">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="single_slider" data-bgimg="images/slider/3.jpg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="slider_content">
                                <p>exclusive offer -10% off this week</p>
                                <h1>Wedding Rings</h1>
                                <span>Wedding rings for couples.</span>
                                <p class="slider_price">starting at <span>Rs.0000</span></p>
                                <a href="p.php" class="button">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- slider section ends -->
        <!-- banner section starts -->
        <section class="banner_section banner_black">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="#"><img src="images/banner/4.jpg" alt="banner1"></a>
                                <div class="banner_content">
                                    <p>New Design</p>
                                    <h2>Small design Rings</h2>
                                    <span>Sale 20% </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="#"><img src="images/banner/5.jpg" alt="banner2"></a>
                                <div class="banner_content">
                                    <p>Bestselling Earrings</p>
                                    <h2>Gold Earrings</h2>
                                    <span>Sale 10% </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="#"><img src="images/banner/6.jpg" alt="banner3"></a>
                                <div class="banner_content">
                                    <p>Featured pendents</p>
                                    <h2>Silver plated</h2>
                                    <span>Sale 30% </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner section ends -->
        <!-- product section area starts  -->

        <section class="product_section p_section1 product_black_section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product_area">
                            <div class="product_tab_button">
                                <ul class="nav" role="tablist">
                                    <li>
                                        <a href="#featured" class="active" data-toggle="tab" role="tab"
                                            aria-controls="featured" aria-selected="true">Featured</a>
                                    </li>
                                    <li>
                                        <a href="#arrivals" data-toggle="tab" role="tab" aria-controls="arrivals"
                                            aria-selected="false">New Arrivals</a>
                                    </li>
                                    <li>
                                        <a href="#onsale" data-toggle="tab" role="tab" aria-controls="onsale"
                                            aria-selected="false">On-Sale</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="featured" role="tabpane1">
                                    <div class="product_container">
                                        <div class="custom-row product_column3">
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/1.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/2.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Necklace</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>.......................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="crt.php" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/3.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/4.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Earrings</a></h3>
                                                        <div class="price_box">

                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>.....................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/5.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/6.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Bracelet</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>.........................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/7.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/8.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Bangles</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>.......................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/9.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/10.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">necklace</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000/span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>........................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/11.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/12.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Wedding set</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>.........................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/13.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/14.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Nose Pin</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>................................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/15.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/16.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">chains</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>........................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/17.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/18.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Ring</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>..........................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/19.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/20.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Couple Ring</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>..........................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/21.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/22.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Bracelet</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>.......................................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/23.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/24.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Necklace Set</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>................................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="arrivals" role="tabpane1">
                                    <div class="product_container">
                                        <div class="custom-row product_column3">
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/25.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/26.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Necklace</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>.............................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/27.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/28.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Earrings</a></h3>
                                                        <div class="price_box">

                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>............................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/29.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/30.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Bracelet</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>...................................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/31.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/32.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Bangles</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>...........................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/33.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/34.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">rings</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>................................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/35.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/36.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Wedding set</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>................................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/37.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/38.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Nose Pin</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>...................................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/39.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/40.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Bangles</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>.....................................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/41.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/42.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Ring</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>......................................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/43.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/44.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Couple Ring</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>...................................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/45.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/46.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Bracelet</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>........................................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/47.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/48.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Necklace Set</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>......................................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="onsale" role="tabpane1">
                                    <div class="product_container">
                                        <div class="custom-row product_column3">
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/49.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/50.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Necklace</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>............................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/2.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/3.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Earrings</a></h3>
                                                        <div class="price_box">

                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>...........................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/4.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/5.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Bracelet</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>.................................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/6.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/7.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Bangles</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>.....................................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/8.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/9.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">pendents</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>................................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/10.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/11.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Wedding set</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>...............................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/12.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/13.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Nose Pin</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>...............................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/14.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/15.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">chains</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>...................................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/16.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/17.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Ring</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>...............................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/20.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/21.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Couple Ring</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>.....................................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/55.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/28.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Bracelet</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>.................................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="images/product/51.jpg"
                                                                alt="product1"></a>
                                                        <a href="#" class="secondary_img"><img
                                                                src="images/product/52.jpg" alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                data-placement="top"
                                                                data-original-title="quick view">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Ring, Necklace</a>
                                                            <a href="#">Earrings</a>
                                                        </div>
                                                        <h3><a href="#">Necklace Set</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 0000</span>
                                                            <span class="current_price">Rs. 0000</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="ion-ios-star-outline"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>.................................</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Add to Cart</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- product section area sends -->

        <!-- banner full width start -->
        <section class="banner_fullwidth black_fullwidth">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="banner_text">
                            <p>Sale Off 20% All Products</p>
                            <h2>New Trending Collection</h2>
                            <span>Best Design makes you more special.</span>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner full width end -->

        <!-- product section area starts  -->
        <section class="product_section p_section1 product_black_section bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title">
                            <h2>Bestselling Products</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="product-area">
                            <div class="product_container bottom">
                                <div class="custom-row product_row1">
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/51.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/52.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Quick
                                                        View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Ring, Necklace,</a>
                                                    <a href="#">Earrings</a>
                                                </div>
                                                <h3><a href="#">Necklace Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">Rs. 0000</span>
                                                    <span class="current_price">Rs. 0000</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>....................................</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Add
                                                                    to Cart</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/4.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/5.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Quick
                                                        View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Ring, Necklace,</a>
                                                    <a href="#">Earrings</a>
                                                </div>
                                                <h3><a href="#">Necklace Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">Rs. 0000</span>
                                                    <span class="current_price">Rs. 0000</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>....................................</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Add
                                                                    to Cart</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/10.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/11.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Quick
                                                        View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Ring, Necklace,</a>
                                                    <a href="#">Earrings</a>
                                                </div>
                                                <h3><a href="#">Necklace Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">Rs. 0000</span>
                                                    <span class="current_price">Rs. 0000</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>...............................</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Add
                                                                    to Cart</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/24.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/22.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Quick
                                                        View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Ring, Necklace,</a>
                                                    <a href="#">Earrings</a>
                                                </div>
                                                <h3><a href="#">Necklace Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">Rs. 0000</span>
                                                    <span class="current_price">Rs. 0000</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>......................................</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Add
                                                                    to Cart</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/26.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/27.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Quick
                                                        View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Ring, Necklace,</a>
                                                    <a href="#">Earrings</a>
                                                </div>
                                                <h3><a href="#">Necklace Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">Rs. 0000</span>
                                                    <span class="current_price">Rs. 0000</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>.......................................</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Add
                                                                    to Cart</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/28.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/29.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Quick
                                                        View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Ring, Necklace,</a>
                                                    <a href="#">Earrings</a>
                                                </div>
                                                <h3><a href="#">Necklace Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">Rs. 0000</span>
                                                    <span class="current_price">Rs. 0000</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>...................................</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Add
                                                                    to Cart</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/32.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/33.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Quick
                                                        View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Ring, Necklace,</a>
                                                    <a href="#">Earrings</a>
                                                </div>
                                                <h3><a href="#">Necklace Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">Rs. 0000</span>
                                                    <span class="current_price">Rs. 0000</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>This is a gold ring with diamond and Lorem ipsum
                                                            dolor sit amet.</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Add
                                                                    to Cart</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/34.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/35.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Quick
                                                        View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Ring, Necklace,</a>
                                                    <a href="#">Earrings</a>
                                                </div>
                                                <h3><a href="#">Necklace Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">Rs. 0000</span>
                                                    <span class="current_price">Rs. 0000</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>.....................................</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Add
                                                                    to Cart</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/38.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/39.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Quick
                                                        View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Ring, Necklace,</a>
                                                    <a href="#">Earrings</a>
                                                </div>
                                                <h3><a href="#">Necklace Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">Rs. 0000</span>
                                                    <span class="current_price">Rs. 0000</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>....................................</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Add
                                                                    to Cart</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/40.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/41.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Quick
                                                        View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Ring, Necklace,</a>
                                                    <a href="#">Earrings</a>
                                                </div>
                                                <h3><a href="#">Necklace Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">Rs. 0000</span>
                                                    <span class="current_price">Rs. 0000</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>...........................................</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Add
                                                                    to Cart</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/42.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/43.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Quick
                                                        View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <!-- make this corection in all products above -->
                                                    <a href="#">Ring, Necklace,</a>
                                                    <a href="#">Earrings</a>
                                                </div>
                                                <h3><a href="#">Necklace Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">Rs. 0000</span>
                                                    <span class="current_price">Rs. 0000</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>....................................</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Add
                                                                    to Cart</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- banner area starts  -->
        <section class="banner_section banner_section_five">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-12">
                        <div class="port-box">
                            <div class="text-overlay">
                                <h1>New Arrivals 2022</h1>
                                <p>Crown</p>
                            </div>
                            <img src="images/banner/1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="port-box">
                            <div class="text-overlay">
                                <h1>Featured Products 2022</h1>
                                <p>Pendant for Valentines day</p>
                            </div>
                            <img src="images/banner/2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner area ends -->

        <!-- footer section starts -->
        <footer class="footer_widgets footer_black">
            <div class="container">
                <div class="footer_top">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="widgets_container contact_us">
                                <h3>About Rakshanidhi</h3>
                                <div class="footer_contact">
                                    <p>Address : udupi</p>
                                    <p>Phone : <a href="tel:(+91)888888885555">(+91)888888885555</a></p>
                                    <p>Email : rakshanidhi@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-4 col-6">
                            <div class="widgets_container widget_menu">
                                <h3>Information</h3>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="#">About Us</a></li>                                       
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Collection</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-5 col-6">
                            <div class="widgets_container widget_menu">
                                <h3>My Account</h3>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">Wishlist</a></li>
                                        <li><a href="#">Checkout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-7">
                            <div class="widgets_container product_widget">
                                <h3>Top Rated Products</h3>
                                <div class="simple_product">
                                    <div class="simple_product_items">
                                        <div class="simple_product_thumb">
                                            <a href="#"><img src="images/product/14.jpg" alt=""></a>
                                        </div>
                                        <div class="simple_product_content">
                                            <div class="tag_cate">
                                                <a href="#">Women,</a>
                                                <a href="#">Earrings</a>
                                            </div>
                                            <div class="product_name">
                                                <h3><a href="#">Bracelet</a></h3>
                                            </div>
                                            <div class="product_price">
                                                <span class="old_price">Rs. 0000</span>
                                                <span class="current_price">Rs. 0000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simple_product_items">
                                        <div class="simple_product_thumb">
                                            <a href="#"><img src="images/product/28.jpg" alt=""></a>
                                        </div>
                                        <div class="simple_product_content">
                                            <div class="tag_cate">
                                                <a href="#">Women,</a>
                                                <a href="#">Earrings</a>
                                            </div>
                                            <div class="product_name">
                                                <h3><a href="#">Ring</a></h3>
                                            </div>
                                            <div class="product_price">
                                                <span class="old_price">Rs. 0000</span>
                                                <span class="current_price">Rs. 0000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bottom">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright_area">
                                <p>Copyright &copy; 2022 <a href="#">rakshanidhi</a> All rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </footer>
        <!-- footer section ends -->
    </div>

    <!-- modal section starts -->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="images/product/54.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="images/product/51.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="images/product/52.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="images/product/53.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li>
                                                <a href="#tab1" class="nav-link active" data-toggle="tab" role="tab"
                                                    aria-controls="tab1" aria-selected="false"><img
                                                        src="images/product/54.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a href="#tab2" class="nav-link" data-toggle="tab" role="tab"
                                                    aria-controls="tab2" aria-selected="false"><img
                                                        src="images/product/51.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a href="#tab3" class="nav-link button_three" data-toggle="tab"
                                                    role="tab" aria-controls="tab3" aria-selected="false"><img
                                                        src="images/product/52.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a href="#tab4" class="nav-link" data-toggle="tab" role="tab"
                                                    aria-controls="tab4" aria-selected="false"><img
                                                        src="images/product/53.jpg" alt=""></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Women's Necklace</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">Rs. 0000</span>
                                        <span class="old_price">Rs. 0000</span>
                                    </div>
                                    <div class="see_all">
                                        <a href="#">See All Features</a>
                                    </div>
                                    <div class="modal_add_to_cart mb-15">
                                        <form action="#">
                                            <input type="number" min="0" max="100" step="1">
                                            <button type="submit">Add To Cart</button>
                                        </form>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>.....................................................</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal section ends -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- JavaScript Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script src="script/main.js"></script>
</body>

</html>