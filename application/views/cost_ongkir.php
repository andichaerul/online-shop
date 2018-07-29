<?php
$origin = $_GET['origin'];
$destination = $_GET['destination'];
$weight = $_GET['weight'];
$courier = $_GET['courier'];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "origin=".$origin."&destination=".$destination."&weight=".$weight."&courier=".$courier."",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded",
    "key: fd812998c5997a45df5853f3341d20c8"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
?>

<div id="kurir-change">
<?php 
 $data = json_decode($response,true);
 foreach ($data as $row) {
 	$count = 0;
 	$count+= count($row['results']['0']['costs']);
 }

 for ($x = 0; $x < $count; $x++) {
    echo "
    <div class='col-md-4 paket-kolom'>
    <label class='big'>
    <div class='col-md-12'>
    	<div>
    	<input type='radio' name='pack-courier' value='{ \"layanan\":\"".$row['results']['0']['costs'][$x]['service']."\",\"description\":\"".$row['results']['0']['costs'][$x]['description']."\",\"estimasi\":\"".$row['results']['0']['costs'][$x]['cost']['0']['etd']."\",\"harga\":\"".$row['results']['0']['costs'][$x]['cost']['0']['value']."\"}'>
    	</div>
    	<div class='service-paket'>".$row['results']['0']['costs'][$x]['service']."</div>
    </div>
    <div class='col-md-12'>
    	<div class='description-paket'>".$row['results']['0']['costs'][$x]['description']."</div>
    </div>
    <div class='col-md-12'>
    	<div class='etd-paket'>Estimasi pengiriman ".$row['results']['0']['costs'][$x]['cost']['0']['etd']." Hari</div>
    </div>
    <div class='col-md-12'>
    	<div class='cost-paket'>Rp.".number_format($row['results']['0']['costs'][$x]['cost']['0']['value'],0,',','.').",-</div>
    </div>
    </label>
    </div>";
} ?>
</div>
<script>

	$('#kurir-change').on('change', function() {
		var xxx = $('input[name=pack-courier]:checked').val();
		var obj = jQuery.parseJSON(xxx);	
  	 $('#pengiriman').text(obj.harga);
     $('#pengiriman_value').val(obj.harga);
     $('#layanan').val(obj.layanan);
     var kurir = $( "#courier" ).val();
      $('#kurir').val(kurir); 
  	 var sum = 0;
    	$('.checkout-total').each(function(){
        sum += +$(this).text();
    	});
    	$('#total').text(sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,'));
      $('#total_value').val(sum);  
});
</script>