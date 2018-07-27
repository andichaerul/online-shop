<?php 
error_reporting(0);
?>
<?php
foreach ($item_cart_sql as $row) {
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
 foreach ($item_cart as $row) {
    $rowid[] = $row['rowid'];
    $id[] = $row['id'];

 }
 $totaldata = count($rowid);


?>


<!-- checkout-area-start -->
    <div class="cart-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="cart-table table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="cart-img-title">PRODUK</th>
                                    <th class="cart-pro-name">NAMA</th>
                                    <th class="cart-pro-price">HARGA</th>
                                    <th class="cart-pro-quantity">QTY</th>
                                    <th class="cart-pro-total-price">SUBTOTAL</th>
                                    <th class="cart-pro-remove">HAPUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                echo "<input type='hidden' value='".$totaldata."' id='for-falidate'>";
                                if ($totaldata < 1 ) {
                                    echo "<tr><td colspan='6'>Belum ada produk di troli belanja anda</td></tr>";
                                } else {
                                   for ($x = 0; $x < $totaldata; $x++) {
                                        echo "
                                <tr class='table-row".$ProductID[$x]."'>
                                    <td class='cart_product_image_value'>
                                        <div class='pro-photo-checkout'>
                                            <img src='".base_url('img/product/'.$var[$x]['0'].'')."' alt='' />
                                        </div>
                                    </td>
                                    <td class='cart_product_name_value'>
                                        <p class='cart_product_name'>
                                            <a href='".base_url('home/more_detail?id='.$id[$x].'')."'>".$ProductName[$x]."</a>
                                        </p>
                                    </td>
                                    <td class='cart_product_price_value'>
                                        <span class='product_price' style='display:none';>".$Price[$x]."</span>
                                        <span class='product_price1'>IDR ".number_format($Price[$x],0,',','.')."</span>
                                    </td>
                                    <td class='cart_product_quantity_value'>
                                        <div class='product-quantity-t'>
                                            <select id='tested".$id[$x]."'>
                                                <option value='1'>1</option>
                                                <option value='2'>2</option>
                                                <option value='3'>3</option>
                                                <option value='4'>4</option>
                                                <option value='5'>5</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td class='cart_product_total_value'>
                                        <span class='product_price harga' id='price".$id[$x]."' style=display:none;>".$Price[$x]."</span>
                                        <span class='product_price1 harga1' id='idrp".$id[$x]."'>IDR ".number_format($Price[$x],0,',','.')."</span>
                                    </td>
                                    <td class='cart_product_remove'>
                                        <a href='".base_url('home/shopping_cart_delete?rowid='.$rowid[$x].'')."'><i class='fa fa-trash-o'></i></a>
                                    </td>
                                </tr>

                                        "

                                        ;
                                } 
                                }  
                                
                                ?>  
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--DISINI YG HIDDEN ----->
                <!--<div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="shipping-tax">
                        <div class="row">
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="shipping-tax-left">
                                    <h2 class="cart-page-title">ESTIMATE SHIPPING AND TAX</h2>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <select>
                                                <option value="country">Country</option>
                                                <option value="usa">USA</option>
                                                <option value="spain">Spain</option>
                                                <option value="china">China</option>
                                                <option value="india">India</option>
                                            </select>
                                            <select>
                                                <option value="state">State/Province</option>
                                                <option value="state">State/Province</option>
                                                <option value="state">State/Province</option>
                                                <option value="state">State/Province</option>
                                                <option value="state">State/Province</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <select>
                                                <option value="city">City</option>
                                                <option value="newyork">New York</option>
                                                <option value="newyork">New York</option>
                                                <option value="newyork">New York</option>
                                                <option value="newyork">New York</option>
                                            </select>
                                            <select>
                                                <option value="zip/postal">Zip/Postal Code</option>
                                                <option value="zip/postal">Zip/Postal Code</option>
                                                <option value="zip/postal">Zip/Postal Code</option>
                                                <option value="zip/postal">Zip/Postal Code</option>
                                                <option value="zip/postal">Zip/Postal Code</option>
                                            </select>
                                            <button>Get a Quote</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="shipping-tax-right">
                                    <h2 class="cart-page-title">COUPON DISCOUNT</h2>
                                    <span>Enter Your Coupon Code  Here</span>
                                    <input type="text">
                                    <button>Get a Quote</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <div class="col-md-4 col-md-offset-8 col-sm-5 col-xs-12">
                    <div class="cart-total">
                        <h2 class="cart-page-title">CART TOTAL</h2>
                        <h4 class="subtotal">Subtotal <span id="total1"></span><span>IDR </span></h4>
                        <h4 class="shipping">Pengiriman <span>Belum dihitung</span></h4>
                        <h4 class="grandtotal">Grand Total <span id="total">0</span><span>IDR </span></h4>
                        <form action="<?php echo base_url('home/checkout') ?>" method="post">
                        <?php
                        for ($row = 0; $row < $totaldata; $row++) {
                        echo "<input type='hidden' name='id[]' value='".$ProductID[$row]."'>
                            <input type='hidden' name='qty[]' id='qty".$id[$row]."' value='1'>
                         ";
                        }
                        ?>
                        <button id="next" type="submit" style="margin-left: 12px">Bayar sekarang</button>
                        </form>
                        <a href="<?php echo base_url('home/shop_grid') ?>">Lanjutkan Belanja</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout-area-end -->
<?php 
for ($y = 0; $y < $totaldata; $y++) {
    echo "<script>
$(document).ready(function(){
        var sum = 0;
        $('.harga').each(function(){
        sum += +$(this).text();
        });
        $('#total').text(sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,'));
        $('#total1').text(sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,'));
        });
    $('#tested".$id[$y]."').change(function(){
        var number".$id[$y]." = $( '#tested".$id[$y]."' ).val();
        var value".$id[$y]." = '".$Price[$y]."';
        console.log(number".$id[$y].");
        console.log(value".$id[$y].");
         $('#qty".$id[$y]."' ).val( number".$id[$y]." );
        $('#price".$id[$y]."').load('http://localhost/sepeda-online/index.php/home/cart_calculate?qty=' + number".$id[$y]." + '&price=' + value".$id[$y]." + ' #norp');
        $('#idrp".$id[$y]."').load('http://localhost/sepeda-online/index.php/home/cart_calculate?qty=' + number".$id[$y]." + '&price=' + value".$id[$y]." + ' #norp1');
        });
        
        
        $('#price".$id[$y]."').bind('DOMSubtreeModified', function() {
        var sum = 0;
        $('.harga').each(function(){
        sum += +$(this).text();
        });
        $('#total').text(sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,'));
        $('#total1').text(sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,'));
        });     
</script>";
} 
?>
<script>
    $(document).ready(function(){
    var confirm = $("#for-falidate").val();    
    $("#next").click(function(){
    if (confirm == "0") {
        alert("Anda belum memilih produk");
        return false;
    } 
    else {

    }    
    });
});    
</script>
