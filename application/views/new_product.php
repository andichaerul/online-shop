<div class="container" ng-app="myApp">
	<div class="row">
		<div class="col-md-12">
			<div class="head-new-product">
				PRODUCT TERBARU KAMI
			</div>
			<div class="p-new-product">
				Rekomendasi product terbaru dari kami, bla bla bla bla bla bla bla
			</div>
		</div>
		<div class="row" ng-controller="myCtrl">
			
				<?php foreach ($new_product as $row) {
					echo "
					<div class='col-md-3' ng-repeat='x in records'>
					<div class='row kolom-product'>
					<div class='window-view'></div>
					<div class='col-md-6'>
						<div class='harga'>
							".$row->Price."
						</div>
					</div>
					<div class='col-md-6'>
						<div class='productname'>
							".$row->ProductName."
						</div>
					</div>
					<div class='col-md-12'>
						<div class='img-product'>
							<img width='100%' height='100%' src='".base_url("/img/banner/".$row->ImageSource."")."'>
						</div>
					</div>
					<div class='col-md-6'>
						<div class=''>
								<a href='index.php/home/shopping_cart_add?id=".$row->ProductID."' class='tambah-troli'><i class='fa fa-cart-plus' aria-hidden='true'></i> Tambah</a>
						</div>
					</div>
					<div class='col-md-6'>
						<div class='beli'>
						<i class='fa fa-eye' aria-hidden='true'></i> Beli	
						</div>
					</div>
				</div>
				</div>
					";
				}
				?>
				
			
		</div>
	</div>
</div>
