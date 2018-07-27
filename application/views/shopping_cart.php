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
 	$ImageHTML[] = $row->ImageHTML;
 	$DateUpload[] = $row->DateUpload;
 	$View[] = $row->View;
 }
 foreach ($item_cart as $row) {
 	$rowid[] = $row['rowid'];
 	$id[] = $row['id'];

 }
 $totaldata = count($rowid);

?>
<!--
<pre>
 <?php print_r($item_cart_sql); ?>
 </pre>
 <pre>
 <?php print_r($item_cart); ?>
 </pre> --->

<div class="container">
  <h2></h2>
  <p></p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>PRODUCT</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Qty</th>
        <th>Total</th>
        <th>Hapus</th>
      </tr>
    </thead>
    <tbody>
		<?php 
		for ($x = 0; $x < $totaldata; $x++) {
		    echo "
		    <tr class='cart-tr'>
		        <td><img class='image-cart' src='".base_url("/img/banner/".$ImageSource[$x]."")."'></td>
		        <td>".$ProductName[$x]."</td>
		        <td>Rp.".number_format($Price[$x],0,',','.').",-</td>
		        <td>
			        <select id='tested".$id[$x]."'>
			        	<option value='1'>1</option>
			        	<option value='2'>2</option>
			        	<option value='3'>3</option>
			        	<option value='4'>4</option>
			        	<option value='5'>5</option>
			        </select>
		        </td>
		        <td><div id='idrp".$id[$x]."'>Rp.".number_format($Price[$x],0,',','.').",-</div><div id='price".$id[$x]."' class='harga none'>".$Price[$x]."</div></td>
		        <td><a href='shopping_cart_delete?rowid=".$rowid[$x]."'><i class='fa fa-trash-o'></i></a></td>
		      </tr>
		    ";
		}

		?>
	</tbody>
  	</table>
  	<div class="row">
  		<div class="col-md-7"></div>
  		<div class="col-md-5">
  			<div class="col-md-12">
  				<div class="cart-total-head">
  					TOTAL BELANJA
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="cart-total-parap">
  					Total harga
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="cart-total-parap">
  					<div id="total">
  	</div>
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="cart-total-parap">
  					Pengiriman
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="cart-total-parap">
  					Belum dihitung
  				</div>
  			</div>
  			<div class="col-md-12">
  				<div class="line-cart">
  					
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="cart-total-parap">
  					Total
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="cart-total-parap">
  					<div id="total1">
  	</div>
  				</div>
  			</div>
  			<div class="col-md-12">
  				<form method="post" action="form_pembelian">
			  		<?php
					for ($row = 0; $row < $totaldata; $row++) {
			  		echo "<input type='hidden' name='id[]' value='".$ProductID[$row]."'>
			  			<input type='hidden' name='qty[]' id='qty".$id[$row]."' value='1'>
			  			 ";
					}
					?>
					<button type="submit" class="btn-lanjutkan">Lanjutkan</button>  
  				</form>
  			</div>
  		</div>
  	</div>
</div>
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
	
</script>  