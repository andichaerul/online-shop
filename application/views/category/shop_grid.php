<?php 
error_reporting(0);
?>
<?php
foreach ($new_product as $row) {
    $ProductID[] = $row->ProductID;
    $ProductName[] = $row->ProductName; 
    $ProductType[] = $row->ProductType;
    $Description[] = $row->Description;
    $Stock[] = $row->Stock;
    $Price[] = $row->Price;
    $ImageSource[] = $row->ImageSource;
    $DateUpload[] = $row->DateUpload;
    $View[] = $row->View;
    $var[] = json_decode($row->ImageHTML);
 }
 $totaldata = count($ProductID);
?>

<!-- shop-grid-area-start -->
    <div class="shop-grid-area">
        <div class="container">
            <!--<div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="toolbox">
                        <div class="row">
                            <div class="col-md-3 col-sm-2 col-xs-12">
                                <div class="view-as">
                                    <ul class="shop-tab">
                                        <li class="active"><a data-toggle="tab" href="#grid"><i class="fa fa-th"></i></a></li>
                                        <li><a data-toggle="tab" href="#list"><i class="fa fa-list"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="short-show">
                                    <span>Sort by:</span>
                                    <select>
                                        <option value="position">Position</option>
                                        <option value="position">Backward</option>
                                        <option value="position">Forward</option>
                                        <option value="position">Upwork</option>
                                    </select>
                                    <span>Show:</span>
                                    <select>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-12">
                                <div class="shop-pagination">
                                    <span>Page:</span>
                                    <ul>
                                        <li><a href="#">1</a></li>
                                        <li class="active"><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="shop-tab-content">
                        <div class="row">
                            <div class="tab-content">
                                <div id="grid" class="tab-pane fade in active">
                                <?php  
                                for ($x = 0; $x < $totaldata; $x++) {
                                echo "
                                    <!-- single-product-start -->
                                    <div class='col-md-3 col-sm-6 col-xs-12'>
                                        <div class='single-product nm-md'>
                                            <div class='product-img'>
                                                <a href='".base_url('home/more_detail?id='.$ProductID[$x].'')."'><img src='".base_url('img/product/'.$var[$x]['0'].'')."' alt=''></a>
                                                <div class='pro-img-content'>
                                                    
                                                </div>
                                            </div>
                                            <div class='product-content'>
                                                <a class='product-name' href='".base_url('home/more_detail?id='.$ProductID[$x].'')."'>".$ProductName[$x]."</a>
                                                <span class='product-price'>".$Price[$x]."</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-end -->
                                    ";
                                    }
                                ?>    



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop-grid-area-end -->
   