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

<style type="text/css">
  .cartdetail.change {
    position: fixed;
    top: 10px;
    width: 25%;
    border-style: solid;
    border-width: 1px;
    border-color: #80808047;
}
</style>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="head-checkout">DATA PEMBELI</div>
        <div class="row">
          <div class="col-md-12"><input type="" name="" placeholder="Nama pemesan" class="input-form-pembelian"></div>
          <div class="col-md-6"><input type="" name="" placeholder="Email" class="input-form-pembelian"></div>
          <div class="col-md-6"><input type="" name="" placeholder="No Telepon" class="input-form-pembelian"></div>
          <div class="col-md-12">
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
          <div class="col-md-12">
            <div id="city">
              <select class="input-form-pembelian" id="cityselect">
                <option>Pilih Kota</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <textarea class="noteaddress" placeholder="Alamat lengkap anda"></textarea>
            <textarea class="catatan" placeholder="Catatan untuk pembeli"></textarea>
          </div>
          <div class="col-md-12">
            <select class="input-form-pembelian" id="courier">
              <option>Pilih Courier</option>
              <option value="jne">JNE</option>
              <option value="tiki">TIKI</option>
              <option value="pos">POS INDONESIA</option>
            </select>
          </div>
          <div class="col-md-12">
            <div id="results-service-courier"></div>
          </div>
        </div>
    </div>
    <div class="col-md-4">
      <div class="cartdetail">
      <div class="col-md-12">
        <div class="head-checkout">Pesanan Anda</div>
      </div>
          <div class="col-md-6">
            <div class="head-item">Produk</div>
          </div>
          <div class="col-md-6">
            <div class="head-item">Total</div>
          </div>
          <?php 
          $id = $_POST['id'];
          $qty = $_POST['qty'];
          foreach ($list_belanja as $row) {
           $ProductName[] = $row->ProductName;
           $Price[] = $row->Price;
           $weight[] = $row->weight;
          }
          $count = count($id);
          for ($x = 0; $x < $count; $x++) {
          echo " <input type='hidden' class='weight' value='".$weight[$x] * $qty[$x]."'>

                <div class='col-md-6'><div class='checkout-product'>".$ProductName[$x]."</div></div>
                <div class='col-md-6'><div class='checkout-total'>".$Price[$x] * $qty[$x]."</div></div>
                ";
            } 
          ?>
          <input type="hidden" name="" id="weight-total">
          <div class="col-md-12">
            <div class="line-checkout"></div>
          </div>
          <div class="col-md-6">
            Pengiriman
          </div>
          <div class="col-md-6">
            <div id="pengiriman" class="checkout-total single head-item">0</div>
          </div>
          <div class="col-md-6">
            Subtotal
          </div>
          <div class="col-md-6" id="total" class="head-item">
            
          </div>
    </div>
  </div>
  </div>
</div>

<script>
$(document).ready(function(){
      var sum = 0;
      $('.checkout-total').each(function(){
        sum += +$(this).text();
      });
      $('#total').text(sum);
      var sumweight = 0;
      $('.weight').each(function(){
        sum += +$(this).val();
      });
      $('#weight-total').val(sum);

    $("#province").change(function(){
      var city = $( "#province" ).val();
      console.log(city); 
      $("#city").load("request_city?city=" + city + "");
    });
    $("#courier").change(function(){
      var destination = $( "#cityselect" ).val();
      console.log(destination);
      var origin = '152';
      var weight = $( "#weight-total" ).val();;
      var courier = $("#courier").val(); 
      console.log(city); 
      $("#results-service-courier").load("cost_ongkir?origin=" + origin + "&destination=" + destination + "&weight=" + weight + "&courier=" + courier + "");
    });
});
</script>
<script>
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    //console.log(scroll);
    if (scroll >= 618.888916015625) {
        //console.log('a');
        $(".cartdetail").addClass("change");
    } else {
        //console.log('a');
        $(".cartdetail").removeClass("change");
    }
});
</script>