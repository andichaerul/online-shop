<!-- product-details-area-start -->
<?php foreach ($detail_product as $row) {
    $id = $row->ProductID;
    $ProductName = $row->ProductName;
    $Description = $row->Description;
    $Price = $row->Price;
    $ImageHTML = $row->ImageHTML;
} ?>
<?php 
    $ImageJson = json_decode($ImageHTML);
    $count = count($ImageJson);
?>

    <div class="product-details-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="picture-tab">
                        <div class="tab-content">
                            <div id="pic0" class="tab-pane fade in active">
                                <!-- single-product-start -->
                                <div class="single-product">
                                    <div class="single-product-img">
                                        <a href="#">
                                            <img src="<?php echo base_url('img/product/'.$ImageJson[0].'') ?>" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <!-- single-product-end -->
                            </div>
                            <?php 
                            for ($x = 1; $x < $count; $x++) {
                                echo "
                                <div id='pic".$x."' class='tab-pane fade'>
                                <!-- single-product-start -->
                                <div class='single-product'>
                                    <div class='single-product-img'>
                                        <a href='#'>
                                             <img src='".base_url('img/product/'.$ImageJson[$x].'')."' alt='' />
                                        </a>
                                    </div>
                                </div>
                                <!-- single-product-end -->
                            </div>
                                ";
                            } 
                            ?>
                            
                        </div>
                        <ul class="pic-tabs clearfix">
                            <?php 
                            for ($x = 0; $x < $count; $x++) {
                                echo "
                                <li>
                                <a data-toggle='tab' href='#pic".$x."'> <img src='".base_url('img/product/'.$ImageJson[$x].'')."' alt='' /></a>
                                </li>
                                ";
                            } 
                            ?>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="product-details-info">
                        <h2 class="prodet-title"><?php echo "".$ProductName."" ?></h2>
                        <!--<div class="rating prodet-rating clearfix">
                            <div class="star star-on"></div>
                            <div class="star star-on"></div>
                            <div class="star star-on"></div>
                            <div class="star star-on"></div>
                            <div class="star star-half"></div>
                        </div>-->
                        <h3 class="prodet-price"><?php echo "IDR ".number_format($row->Price,0,',','.')."" ?></h3>
                        <p><?php echo "".$Description."" ?></p>
                        <!--<div class="size-widget prodet-size">
                            <h4>Size</h4>
                            <ul class="size">
                                <li>
                                    <a href="#"><i class="fa fa-angle-left"></i></a>
                                </li>
                                <li><a href="#">L</a></li>
                                <li><a href="#">M</a></li>
                                <li><a href="#">S</a></li>
                                <li><a href="#">XL</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="color-widget prodet-color">
                            <h4>Color</h4>
                            <ul class="color">
                                <li class="blue">
                                    <a href="#"></a>
                                </li>
                                <li class="pink">
                                    <a href="#"></a>
                                </li>
                                <li class="green">
                                    <a href="#"></a>
                                </li>
                                <li class="orange">
                                    <a href="#"></a>
                                </li>
                                <li class="violet">
                                    <a href="#"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="prodet-qty">
                            <h4>Qty</h4>
                            <p class="quantity cart-plus-minus">
                                <input type="text" value="1" />
                            </p>
                        </div>-->
                        <div class="prodet-add">
                            <a href="<?php echo base_url('home/shopping_cart_beli?id='.$id.'') ?>">Tambah Ke Keranjang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product-details-area-end -->