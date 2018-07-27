<?php 
	/**
	* 
	*/
	class Shopping_cart extends Frontend_Controller {
		public function index(){
		}
		public function add(){
				$data = array(
        'id'      => 'sku_123ABC',
        'qty'     => 1,
        'price'   => 39.95,
        'name'    => 'T-Shirt',
        'options' => array('Size' => 'L', 'Color' => 'Red')
		);
		$this->cart->insert($data);
		echo "berhasil disimpan";
		}
		
	}
