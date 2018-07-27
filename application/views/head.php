<!DOCTYPE html>
<html lang="en">

<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo "".$title."" ?></title>
    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/meanmenu.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nivo-slider.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/typography.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css') ?>">
    <script src="<?php echo base_url('assets/js/jquery-1.12.4.min.js') ?>"></script>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
 <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <!--<div class="email">
                            <i class="fa fa-envelope"></i>
                            <span></span>
                        </div>-->
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="social-top">
                            <ul>
                                <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <!---<div class="lang-cur">
                            <div class="lang">
                                <a href="#" data-toggle="dropdown">English</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Español</a></li>
                                    <li><a href="#">عربى</a></li>
                                    <li><a href="#">中文</a></li>
                                    <li><a href="#">עִברִית</a></li>
                                    <li><a href="#">हिंदी</a></li>
                                    <li><a href="#">বাংলা</a></li>
                                </ul>
                            </div>
                            <div class="cur">
                                <a href="#" data-toggle="dropdown">USD</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">SAR</a></li>
                                    <li><a href="#">CNY</a></li>
                                    <li><a href="#">ILS</a></li>
                                    <li><a href="#">INR</a></li>
                                    <li><a href="#">BDT</a></li>
                                </ul>
                            </div>
                        </div>--->
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-area hidden-sm hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="menus">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="logo">
                                        <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('') ?>" alt="Logo Here"></a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="menu">
                                        <ul>
                                            <li><a href="<?php echo base_url() ?>">HOME</a>
                                                <ul class="dorp-menu">
                                                    <li><a href="<?php echo base_url('home/shop_grid') ?>">Telusuri</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="">KATEGORI</a>
                                                <div class="mega-menu">
                                                    <?php foreach ($category as $row) {
                                                        $MenuCategory[] = $row->CategoryName;
                                                        $CategoryID[] = $row->CategoryID;
                                                    }
                                                    ?>
                                                    <span>
                                                        <?php
                                                        error_reporting(0); 
                                                        for ($x = 0; $x < 5; $x++) {
                                                                echo "<a href='".base_url('home/category?id='.$CategoryID[$x].'')."'>".$MenuCategory[$x]."</a>";
                                                            } 
                                                            ?>
                                                    </span>
                                                    <span>
                                                        <?php 
                                                        for ($x = 5; $x < 10; $x++) {
                                                                echo "<a href='shop-grid-sidebar.html'>".$MenuCategory[$x]."</a>";
                                                            } 
                                                            ?>
                                                    </span>
                                                    <span>
                                                        <?php 
                                                        for ($x = 10; $x < 15; $x++) {
                                                                echo "<a href='shop-grid-sidebar.html'>".$MenuCategory[$x]."</a>";
                                                            } 
                                                            ?>
                                                    </span>
                                                    <span>
                                                        <?php 
                                                        for ($x = 15; $x < 20; $x++) {
                                                                echo "<a href='shop-grid-sidebar.html'>".$MenuCategory[$x]."</a>";
                                                            } 
                                                            ?>
                                                    </span>
                                                    <!--<span>
                                                        <a class="mega-picture" href="#"><img src="img/menu/mega-item1.jpg" alt=""></a>
                                                    </span>-->
                                                </div>
                                            </li>
                                            <li><a href="contact.html">HUBUNGI KAMI</a></li>
                                            <li><a href="#">PAGES</a>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="search-account-shop">
                                        <div class="search">
                                            <form action="<?php echo base_url('home/search') ?>" method="get">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                                <input type="text" name="search" placeholder="Ketik lalu tekan Enter">
                                            </form>
                                        </div>
                                        <!---<div class="account">
                                            <a href="#"><i class="fa fa-user"></i></a>
                                            <ul class="account-menu">
                                                <li><a href="#"><i class="fa fa-user"></i>Account</a></li>
                                                <li><a href="#"><i class="fa fa-heart"></i>Wishlist</a></li>
                                                <li><a href="#"><i class="fa fa-pencil-square-o"></i>Checkout</a></li>
                                                <li><a href="#"><i class="fa fa-unlock-alt"></i>Log In</a></li>
                                            </ul>
                                        </div>--->
                                        <div class="shopping-cart">
                                            <a href="<?php echo base_url('/home/index_shopping_cart') ?>">
                                                <i class="fa fa-shopping-bag"></i>
                                                <span class="cart-num">
                                                    <?php
                                                        error_reporting(0);   
                                                        foreach ($count_cart as $row) {

                                                        $count[] = $row['rowid'];
                                                        }
                                                        $total = count($count);
                                                        echo "0".$total."";
                                                        ?>
                                                </span>
                                            </a>
                                            <!---
                                            <ul class="cart">
                                                <li>
                                                    <div class="cart-img">
                                                        <a href="#"><img src="img/cart/cart1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="cart-info">
                                                        <h4><a href="#">Nunc facilisis</a></h4>
                                                        <span>x 1 - $100.00</span>
                                                    </div>
                                                    <div class="del-icon">
                                                        <i class="fa fa-times"></i>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cart-img">
                                                        <a href="#"><img src="img/cart/cart2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="cart-info">
                                                        <h4><a href="#">Accumsan elit</a></h4>
                                                        <span>x 1 - $99.00</span>
                                                    </div>
                                                    <div class="del-icon">
                                                        <i class="fa fa-times"></i>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="total-text">
                                                        Total :
                                                        <span>$99.00</span>
                                                    </div>
                                                    <div class="cart-view">
                                                        <a href="#">View Cart</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="checkout" href="#">
                                                        <i class="fa fa-sign-in"></i> Checkout
                                                    </a>
                                                </li>
                                            </ul>--->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    <!-- mobile-logo-start -->
    <div class="mobile-logo-area visible-sm visible-xs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="mobile-logo">
                        <a href="index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-logo-end -->
    <!-- mobile-menu-start -->
    <div class="mobile-menu-area visible-xs visible-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile_menu">
                        <nav id="mobile_menu_active">
                            <ul>
                                <li><a href="index.html">HOME</a>
                                    <ul>
                                        <li><a href="index.html">Home Version 1</a></li>
                                        <li><a href="index-2.html">Home Version 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-grid-sidebar.html">MEN</a>
                                    <ul>
                                        <li><a href="#">WOMEN'S APPAREL</a>
                                            <ul>
                                                <li><a href="shop-grid-sidebar.html">Sweaters</a></li>
                                                <li><a href="shop-grid-sidebar.html">Coats</a></li>
                                                <li><a href="shop-grid-sidebar.html">Jackets & Vests</a></li>
                                                <li><a href="shop-grid-sidebar.html">Pants & Shorts</a></li>
                                                <li><a href="shop-grid-sidebar.html">Suits & Separates</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-grid-sidebar.html">HANDBAGS</a>
                                            <ul>
                                                <li><a href="shop-grid-sidebar.html">Shop All</a></li>
                                                <li><a href="shop-grid-sidebar.html">New Arrivals</a></li>
                                                <li><a href="shop-grid-sidebar.html">Crossbody Bags</a></li>
                                                <li><a href="shop-grid-sidebar.html">Shoulder Bags</a></li>
                                                <li><a href="shop-grid-sidebar.html">Totes</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-grid-sidebar.html">Jewery & Accessories</a>
                                            <ul>
                                                <li><a href="shop-grid-sidebar.html">Sweaters</a></li>
                                                <li><a href="shop-grid-sidebar.html">Coats</a></li>
                                                <li><a href="shop-grid-sidebar.html">Jackets & Vests</a></li>
                                                <li><a href="shop-grid-sidebar.html">Pants & Shorts</a></li>
                                                <li><a href="shop-grid-sidebar.html">Suits & Separates</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="shop-grid-sidebar.html">WOMEN</a></li>
                                <li><a href="blog.html">BLOG</a></li>
                                <li><a href="contact.html">CONTACT US</a></li>
                                <li><a href="#">PAGES</a>
                                    <ul>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="cart-page.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="product-details.html">Product Details</a></li>
                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                        <li><a href="shop-grid-sidebar.html">Shop Grid Sidebar</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-end -->
 
