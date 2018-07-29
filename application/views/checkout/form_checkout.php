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
                        <h2 class="checkout-title">INFORMASI PEMESANAN</h2>
                        <div class="billing-details" id="form-input">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" placeholder="Name" id="name-form">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" placeholder="E-mail" id="email-form">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="tel" placeholder="Phone" id="phone-form">
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
                                    <textarea name="address" placeholder="Masukkan Alamat Lengkap"></textarea>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea name="notes" placeholder="Catatan untuk pembeli"></textarea>
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
                            <?php foreach ($item_cart as $row) {
                              $rowid = $row['rowid'];
                            }?>
                            <?php
                             $id = $_POST['id'];
                             $qty = $_POST['qty'];
                             $count = count($id);
                             foreach ($list_belanja as $row) {
                             $ProductName[] = $row->ProductName;
                             $ProductID[] = $row->ProductID;
                             $Price[] = $row->Price;
                             $weight[] = $row->weight;
                             $stock[] = $row->Stock;
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
                          <form action="payment" method="post">
                            <?php
                            for ($x = 0; $x < $count; $x++) {
                              $sisastock[$x] = $stock[$x] - $qty[$x];
                              echo "
                              <input type='' name='ProductName[]' value='".$ProductName[$x]."'><br>
                              <input type='' name='ProductID[]' value='".$ProductID[$x]."'><br>
                              <input type='' name='qty[]' value='".$qty[$x]."'><br>
                              <input type='' name='Sisa[]' value='".$sisastock[$x]."'><br>
                              <input type='' name='rowid[]' value='".$row['rowid'][$x]."'><br>
                              <input type='' name='PriceAmount[]' value='".$Price[$x] * $qty[$x]."'><br>

                              

                              ";
                            }
                            ?>
                            <input type='' id='name-form-hidden' value=''><br>
                            <input type='' id='email-form-hidden' value=''><br>
                            <input type='' id='phone-form-hidden' value=''><br>
                            <input type='' id='province-form-hidden' value=''><br>
                            <input type='' id='cityselect-form-hidden' value=''><br>

                            <input type='' id='kurir' value=''><br>
                            <input type='' id='layanan' value=''><br>
                            <input type='' id='pengiriman_value' value=''><br>
                            <input type='' id='total_value' value=''><br>
                            <button type="submit">Bayar</button>
                          </form>
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
      $('#total_value').val(pricebeforeongkir);

    $("#province").change(function(){
      var city = $( "#province" ).val();
      console.log(city); 
      $("#city").load("request_city?city=" + city + "");
    });
    $("#form-input").change(function(){
      var nameform = $( "#name-form" ).val();
      var emailform = $( "#email-form" ).val();
      var phoneform = $( "#phone-form" ).val();
      var provinceform = $( "#province option:selected" ).text();
      var cityform = $( "#cityselect option:selected" ).text();
      $('#name-form-hidden').val(nameform);
      $('#email-form-hidden').val(emailform);
      $('#phone-form-hidden').val(phoneform);
      $('#province-form-hidden').val(provinceform);
      $('#cityselect-form-hidden').val(cityform);
    })
    $("#courier").change(function(){
      var destination = $( "#cityselect" ).val();
      console.log(destination);
      var origin = '151';
      var weight = $( "#weight-total" ).val();;
      var courier = $("#courier").val(); 
      console.log(city);
      $("#results-service-courier").delay("slow").fadeIn(); 
      $("#results-service-courier").load("cost_ongkir?origin=" + origin + "&destination=" + destination + "&weight=" + weight + "&courier=" + courier + "");
    });
});
</script>