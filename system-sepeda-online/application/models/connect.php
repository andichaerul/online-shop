<?php 
 
class Connect extends CI_Model{
	function new_product(){
		$data = $this->db->query("SELECT * from product");
		return $data->result();
	}
	function category(){
		$data = $this->db->query("SELECT * from kategori");
		return $data->result();
	}
	function add_product(){
		$namaproduk = $this->input->post('namaproduk');
		$ImageHTML = $this->input->post('foto');
		$fotojson = json_encode($ImageHTML);
		$linkfoto = str_replace(' ', '%20', $fotojson);
		$kategori = $this->input->post('kategori');
		$berat = $this->input->post('berat');
		$harga = $this->input->post('harga');
		$Stock = $this->input->post('Stock');
		$description = $this->input->post('description');
        $data = array(
        'ProductName' => $namaproduk,
        'Description' => $description,
        'Stock' => $Stock,
        'weight' => $berat,
        'Price' => $harga,
        'ImageHTML' => $linkfoto,
        'DateUpload' => date("Y-m-d"),
        'Category' => $kategori
		);
		$this->db->insert('product', $data);

	}
	function daftar_product(){
		$this->db->select('*');
		$this->db->from('product');
		$this->db->join('kategori', 'kategori.CategoryID = product.Category');
		$data = $this->db->get();
		return $data->result();
	}
	function daftar_product_edit(){
		$id = $this->input->get('id');
		$data['url_multi'] = 'http://localhost/sepeda-online/';
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('ProductID',$id);
		$this->db->join('kategori', 'kategori.CategoryID = product.Category');
		$data = $this->db->get();
		return $data->result();
	}
	function daftar_product_update(){
		$id = $this->input->post('id');
		$namaproduk = $this->input->post('namaproduk');
		$ImageHTML = $this->input->post('foto');
		$fotojson = json_encode($ImageHTML);
		$linkfoto = str_replace(' ', '%20', $fotojson);
		$kategori = $this->input->post('kategori');
		$berat = $this->input->post('berat');
		$harga = $this->input->post('harga');
		$Stock = $this->input->post('Stock');
		$description = $this->input->post('description');
		$data = array(
        'ProductName' => $namaproduk,
        'Description' => $description,
        'Stock' => $Stock,
        'weight' => $berat,
        'Price' => $harga,
        'ImageHTML' => $linkfoto,
        'Category' => $kategori
		);
		$this->db->where('ProductID', $id);
		$this->db->update('product', $data);
	}
	function daftar_product_delete(){
		$id = $this->input->get('id');
		$this->db->where('ProductID', $id);
		$this->db->delete('product');
	}
	function daftar_pemesanan(){
		$this->db->select('*');
		$this->db->from('order');
		$this->db->join('product', 'product.ProductID = order.ProductID');
		$this->db->group_by('Order_number','desc'); 
		$data = $this->db->get();
		return $data->result();
	}
	function daftar_pemesanan_update(){
		$Order_number = $this->input->get('order_number');
		$Status = $this->input->get('status');
		$data = array(
        'Status' => $Status,
		);
		$this->db->where('Order_number', $Order_number);
		$this->db->update('order', $data);
	}

}








