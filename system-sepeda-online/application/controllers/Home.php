<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('connect');
		$this->load->helper(array('form', 'url'));

	}

	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('template/footer');
	}
	public function new_produk()
	{
		$data['category'] = $this->connect->category();
		$data['title'] = 'INPUT PRODUK';
		$this->load->view('template/head');
		$this->load->view('template/navbar');
		$this->load->view('produk/upload_product',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/footer');
	}
	public function add_product(){
		$this->connect->add_product();
	}
	public function daftar_product(){
		$data['title'] = 'DAFTAR PRODUCT';
		$data['url_multi'] = 'http://localhost/sepeda-online/';
		$data['daftar_product'] = $this->connect->daftar_product();
		$this->load->view('template/head');
		$this->load->view('template/navbar');
		$this->load->view('produk/daftar_product',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/footer');
	}
	public function daftar_product_edit(){
		$data['category'] = $this->connect->category();
		$data['title'] = 'EDIT PRODUK';
		$data['daftar_product_edit'] = $this->connect->daftar_product_edit();
		$data['url_multi'] = 'http://localhost/sepeda-online/';
		$this->load->view('template/head');
		$this->load->view('template/navbar');
		$this->load->view('produk/edit',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/footer');
	}
	public function daftar_product_update(){
		$this->connect->daftar_product_update();
	}
	public function daftar_product_delete(){
		$this->connect->daftar_product_delete();
	}
	public function upload_img(){
		$data['url_multi'] = 'http://localhost/sepeda-online/';
		$this->load->view('produk/upload_img',$data);
	}
	public function daftar_pemesanan(){
		$data['category'] = $this->connect->category();
		$data['title'] = 'DAFTAR PEMESANAN';
		$data['url_multi'] = 'http://localhost/sepeda-online/';
		$data['daftar_pemesanan'] = $this->connect->daftar_pemesanan();
		$this->load->view('template/head');
		$this->load->view('template/navbar');
		$this->load->view('order/daftar_pemesanan',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/footer');
	}
	public function daftar_pemesanan_update(){
		$this->connect->daftar_pemesanan_update();
	}

}