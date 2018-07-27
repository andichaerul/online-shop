<?php
$city = $_GET["city"];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rajaongkir.com/starter/city?id=&province=".$city."",
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

?>

<?php
 $city = json_decode($response,true);
 foreach ($city as $row) {
   $count = 0;
   $count+= count($row['results']);
 }
?>
<select class="input-form-pembelian" id="cityselect">
  <option>Pilih Kota</option>
<?php
  for ($x = 0; $x < $count; $x++) {
    echo "<option value='".$row['results'][$x]['city_id']."'>".$row['results'][$x]['city_name']."</option>";
} 
?>
</select>