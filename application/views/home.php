<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<div class="top-on-black">
    <div class="container for-bottom">
        <div class="row">
            <div class="col-md-4">
                <div class="email-admin">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    admin@demo.com
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="sosial-media">
                        <div class="col-md-2 col-md-offset-1">
                            <div class="sosmed-icon">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="sosmed-icon">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="sosmed-icon">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="sosmed-icon">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="sosmed-icon">
                                <i class="fa fa-youtube" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="telp">
                    <i class="fa fa-phone" aria-hidden="true"></i> 0812 3456 7890
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="main-menu">
        <div class="row">
            <div class="col-md-4">
                <div class="logo-here">
                    Logo Here
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-text">
                    <div class="row">
                        <div class="col-md-2">
                            Home
                        </div>
                        <div class="col-md-2">
                            Home
                        </div>
                        <div class="col-md-2">
                            Home
                        </div>
                        <div class="col-md-2">
                            Home
                        </div>
                        <div class="col-md-2">
                            Home
                        </div>
                        <div class="col-md-2">
                            Home
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-kiri">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="cari">
                            <i class="fa fa-search" aria-hidden="true"></i> Cari
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cart">
                            <a href="<?php echo base_url('index.php/home/index_shopping_cart') ?>">    
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Keranjang
                                <?php
                                error_reporting(0);
                                foreach ($count_cart as $row) {

                                    $total[] = $row['rowid'];
                                }
                                echo "".count($total)."";
                                ?> 
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>