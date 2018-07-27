    <!-- featured-product-area-start -->
    <div class="featured-product-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-heading">
                        <h2 class="section-title">Produk Pilihan</h2>
                        <p class="section-text">Produk pilihan dari kami</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="featured-pro-carousel">
                    <!-- single-product-start -->
                   <?php 
                                       $x=0;
                                       foreach ($Featured_product as $row) {
                                        $var[] = json_decode($row->ImageHTML);
                                    echo "
                                    <div class='col-md-12'>
                                        <div class='single-product'>
                                            <div class='product-img'>
                                                <a href='".base_url('home/more_detail?id='.$row->ProductID.'')."'><img src='".base_url('img/product/'.$var[$x]['0'].'')."' alt=''></a>
                                                <div class='pro-img-content'>
                                                    <ul>
                                                        <li style='visibility: hidden;'><a href='index.php/home/shopping_cart_add?id=".$row->ProductID."'><i class='fa fa-shopping-cart'></i></a></li>
                                                        <li style='visibility: hidden;'><a href='#'><i class='fa fa-heart'></i></a></li>
                                                        <li style='visibility: hidden;'><a href='#'><i class='fa fa-retweet'></i></a></li>
                                                        <li style='visibility: hidden;'><a href='#' data-toggle='modal' data-target='#myModal".$row->ProductID."'><i class='fa fa-eye'></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class='product-content'>
                                                <a class='product-name' href='#'>".$row->ProductName."</a>
                                                <span class='product-price'>IDR ".number_format($row->Price,0,',','.')."</span>
                                            </div>
                                        </div>
                                    </div>
                                        ";
                                        $x++;
                                    } ?> 
                    <!-- single-product-end -->
                </div>
            </div>
        </div>
    </div>
    <!-- featured-product-area-end -->
    <!-- modal-start -->
<?php foreach ($new_product as $row1) {
    echo "
    <div class='modal fade' id='myModal".$row1->ProductID."' role='dialog'>
        <div class='modal-dialog'>
            <!-- Modal content-->
            <div class='modal-content'>
                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                <div class='row'>
                    <div class='col-md-4 col-sm-6 col-xs-12'>
                        <div class='picture-tab'>
                            <!-- single-product-start -->
                            <div class='single-product'>
                                <div class='single-product-img'>
                                    <a href='#'>
                                        <img src='".base_url('img/product/'.$row1->ImageSource.'')."' alt='' />
                                    </a>
                                </div>
                            </div>
                            <!-- single-product-end -->
                        </div>
                    </div>
                    <div class='col-md-8 col-sm-6 col-xs-12'>
                        <div class='product-details-info'>
                            <h2 class='prodet-title'>".$row1->ProductName."</h2>
                            
                            <h3 class='prodet-price'>".$row1->Price."</h3>
                            <p>".$row1->Description."</p>
                            <!--<div class='prodet-qty'>
                                <h4>Qty</h4>
                                <p class='quantity cart-plus-minus'>
                                    <input type='text' value='1' />
                                </p>
                            </div>-->
                            <div class='prodet-add'>
                                <button>Tambah ke Troli</button>
                                <button><a href='".base_url('home/more_detail?id='.$row1->ProductID.'')."'>Tampilkan lebih Detail</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal-end -->
    ";
}
?>