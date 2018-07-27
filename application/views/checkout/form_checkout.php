<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "key: fd812998c5997a45df5853f3341d20c8"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
$arr =json_decode($response, true);
?>

<?php 
error_reporting(0);
?>
    <!-- checkout-area-start -->
    <div class="checkout-area">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="checkout-left">
                        <h2 class="checkout-title">BILLING DETAILS</h2>
                        <div class="billing-details">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" placeholder="E-mail">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="tel" placeholder="Phone">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <select id="province" class="input-form-pembelian">
              <option value="-">Pilih Provinsi</option>
              <?php 
               $count = 0;
                foreach ($arr as $row) {
                  $count+= count($row['results']);
                }
                for ($x = 0; $x < $count; $x++) {
                echo "<option value='".$row['results'][$x]['province_id']."'>".$row['results'][$x]['province']."</option>";
                }
              ?>
            </select>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12" id="city">
                                    <select class="input-form-pembelian" id="cityselect">
                                       <option>Pilih Kota</option>
                                    </select>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea placeholder="Order Notes Here"></textarea>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea placeholder="Order Notes Here"></textarea>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <select class="input-form-pembelian" id="courier">
                                    <option>Pilih Courier</option>
                                    <option value="jne">JNE</option>
                                    <option value="tiki">TIKI</option>
                                    <option value="pos">POS INDONESIA</option>
                                  </select>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12" id="results-service-courier">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="checkout-right">
                        <h2 class="checkout-title">YOUR ORDER</h2>
                        <div class="total-amount">
                            <h4 class="title">Product <span>Total</span></h4>
                            <?php
                             $id = $_POST['id'];
                             $qty = $_POST['qty'];
                             $count = count($id);
                             foreach ($list_belanja as $row) {
                             $ProductName[] = $row->ProductName;
                             $Price[] = $row->Price;
                             $weight[] = $row->weight;
                             }
                            
                            for ($x = 0; $x < $count; $x++) {
                              echo "
                              
                              <h4 class='product'>".$ProductName[$x]."<span class='item-price'>".$Price[$x] * $qty[$x]."</span></h4>
                              "

                              ;

                            }
                            ?>
                            <?php
                            for ($x = 0; $x < $count; $x++) {
                              echo "
                              
                              <input value='".$weight[$x] * $qty[$x]."' class='item-weight' type='hidden'>
                              "

                              ;

                            }
                            ?>
                            
                            <input type="hidden" name="" id="weight-total" value="">
                            <h4 class="subtotal">Ongkos Kirim <span id="pengiriman" class="checkout-total">0</span></h4>
                            <h4 class="">Subtotal <span id="total-item" class="checkout-total">0</span></h4>
                            <h4 class="subtotal">Total  <span id="total">$ 615.00</span></h4>
                        </div>
                        <div class="check-method">
                            <div class="method-1">
                                <input type="radio" name="gender" value="male" checked> <span>DIRECT BANK TRANSFER</span>
                            </div>
                            <div class="method-2">
                                <input type="radio" name="gender" value="female"> <span>CHEQUE PAYMENT</span>
                            </div>
                            <div class="method-3">
                                <input type="radio" name="gender" value="other"> <span>PAYPAL</span>
                            </div>
                            <?php
                            $words = sha1('75000x5c7d9d2i8w5000001');
                            print_r($words);
                             ?>
                            <FORM NAME="order" METHOD="Post" ACTION="https://apps.myshortcart.com/payment/request-payment/" >
                            <input type=hidden name="BASKET" value="Gold,70000.00,1,70000.00;Administration fee,5000.00,1,5000.00">
                            <input type=hidden name="STOREID" value="10772245">
                            <input type=hidden name="TRANSIDMERCHANT" value="000001">
                            <input type=hidden name="AMOUNT" value="75000">
                            <input type=hidden name="URL" value="http://birautama.com/">
                            <input type=hidden name="WORDS" value=<?php echo $words ?>>
                            <input type=hidden name="CNAME" value="Buayo Putra">
                            <input type=hidden name="CEMAIL" value="buayo@gmail.com">
                            <input type=hidden name="CWPHONE" value="0210000011">
                            <input type=hidden name="CHPHONE" value="0210980901">
                            <input type=hidden name="CMPHONE" value="081298098090">
                            <input type=hidden name="CADDRESS" value="Jl. Jendral Sudirman Plaza Asia Office Park Unit 3">
                            <input type=hidden name="CZIPCODE" value="12345">
                            <input type=hidden name="BIRTHDATE" value="1988-06-16">
                            <input type=hidden name="CADDRESS" value="Plaza Asia Office Park Unit 3 Kav 59" >
                            <input type=hidden name="CCITY" value="JAKARTA">
                            <input type=hidden name="CSTATE" value="DKI">
                            <input type=hidden name="CCOUNTRY" value="20">
                            <input type=hidden name="SADDRESS" value="Pengadegan Barat V no 17F">
                            <input type=hidden name="SZIPCODE" value="12217">
                            <input type=hidden name="SCITY" value="JAKARTA">
                            <input type=hidden name="SSTATE" value="DKI">
                            <input type=hidden name="SCOUNTRY" value="784">
                            <button type="submit">Bayar</button>
                            </FORM>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout-area-end -->
    <script>
$(document).ready(function(){
      var sum = 0;
      $('.item-price').each(function(){
        sum += +$(this).text();
      });
      $('#total-item').text(sum);
      var sumweight = 0;
      $('.item-weight').each(function(){
        sumweight += +$(this).val();
      });
      $('#weight-total').val(sumweight);
      var pricebeforeongkir = 0;
      $('.checkout-total').each(function(){
        pricebeforeongkir += +$(this).text();
      });
      $('#total').text(pricebeforeongkir);

    $("#province").change(function(){
      var city = $( "#province" ).val();
      console.log(city); 
      $("#city").load("request_city?city=" + city + "");
    });
    $("#courier").change(function(){
      var destination = $( "#cityselect" ).val();
      console.log(destination);
      var origin = '151';
      var weight = $( "#weight-total" ).val();;
      var courier = $("#courier").val(); 
      console.log(city); 
      $("#results-service-courier").load("cost_ongkir?origin=" + origin + "&destination=" + destination + "&weight=" + weight + "&courier=" + courier + "");
    });
});
</script>