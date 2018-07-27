<?php
$qty = $_GET["qty"]; 
$price = $_GET["price"];
$Rp = $qty * $price;
echo "<div id='norp'>".$qty * $price."</div>";
echo "<div id='norp1'>IDR.".number_format($Rp,0,',','.')."</div>";
?>