    <!-- new-product-area-start -->
    <div class="new-product-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-heading">
                        <h2 class="section-title">Produk Terbaru</h2>
                        <p class="section-text">Dapatkan produk terbaru dari kami, Transaksi mudah, aman dan terpercaya.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- tab-navigator -->
                    <!--<ul class="new-pro-tab">
                        <li class="active"><a data-toggle="tab" href="#women">Women</a></li>
                    </ul>-->
                    <!-- tab-content -->
                    <div class="tab-content">
                        <div id="women" class="tab-pane fade in active">
                            <div class="row">
                                <div class="new-pro-carousel">
                                    <!-- single-product-start -->
                                       <?php 
                                       $x=0;
                                       foreach ($new_product as $row) {
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- new-product-area-end -->

    