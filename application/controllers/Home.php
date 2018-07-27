<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('connect');
		$this->load->library('cart');

	}

	public function index()
	{
		$data['title'] = 'HOME | Aksesoris Sepeda Murah ';
		$item['count_cart'] = $this->cart->contents();
		$data['new_product'] = $this->connect->new_product();
		$item['category'] = $this->connect->category();
		$item['Slider'] = $this->connect->Slider();
		$item['Featured_product'] = $this->connect->Featured_product();
		$data['tentang_kami'] = $this->connect->tentang_kami();
		$this->load->view('head',$item + $data);
		$this->load->view('index/slide');
		$this->load->view('index/new_product',$data);
		$this->load->view('index/produk_pilihan',$data);
		$this->load->view('index/penawaran');
		$this->load->view('index/brand');
		$this->load->view('index/berita');
		$this->load->view('index/service');
		$this->load->view('footer',$data);

	}

	public function more_detail(){
		$item['title'] = 'Detail Product';
		$data['tentang_kami'] = $this->connect->tentang_kami();
		$item['count_cart'] = $this->cart->contents();
		$item['category'] = $this->connect->category();
		$item['new_product'] = $this->connect->new_product();
		$item['Featured_product'] = $this->connect->Featured_product();
		$item['detail_product'] = $this->connect->detail_product();
		$this->load->view('head',$item);
		$this->load->view('more_detail/banner');
		$this->load->view('more_detail/product_detail');
		$this->load->view('index/produk_pilihan',$item);
		$this->load->view('footer',$data);
	}	

	public function shopping_cart_add(){
		$id = $this->input->get('id');
		$data = array(
        'id'      => $id,
        'qty'     => 1,
        'price'   => 0,
        'name'    => 0,
		);
		$this->cart->insert($data);
		redirect(base_url(''));
		echo "<script>alert('Berhasil menambahkan Ke Troli')</script>";
		}
	public function shopping_cart_beli(){
		$id = $this->input->get('id');
		$data = array(
        'id'      => $id,
        'qty'     => 1,
        'price'   => 0,
        'name'    => 0,
		);
		$this->cart->insert($data);
		redirect(base_url('home/index_shopping_cart'));
		}	
	public function shopping_cart_delete(){
		$rowid = $this->input->get('rowid');
		$data = array(
        'rowid' => $rowid,
        'qty'   => 0
		);
		$this->cart->update($data);
		redirect($_SERVER['HTTP_REFERER']);
	}	
	public function index_shopping_cart(){
		$item['title'] = 'Shopping Cart';
		$data['tentang_kami'] = $this->connect->tentang_kami();
		$item['category'] = $this->connect->category();
		$item['count_cart'] = $this->cart->contents();
		$item['item_cart'] = $this->cart->contents();
		$item['item_cart_sql'] = $this->connect->add_shopping_cart();
		$this->load->view('head',$item);
		$this->load->view('Cart/banner');
		$this->load->view('Cart/cart_list');
		$this->load->view('index/service');
		$this->load->view('footer',$data);
	}
	public function cart_calculate(){
		$this->load->view('cart_calculate');
	}
	public function request_city(){
		$this->load->view('request_city');
	}
	public function cost_ongkir(){
		$this->load->view('cost_ongkir');
	}
	public function checkout(){
		$item['category'] = $this->connect->category();
		$item['title'] = 'Pembayaran';
		$item['count_cart'] = $this->cart->contents();
		$item['list_belanja'] = $this->connect->load_form_pembelian();
		$this->load->view('head',$item);
		$this->load->view('checkout/banner');
		$this->load->view('checkout/form_checkout',$item);
	}
	public function shop_grid(){
		$item['category'] = $this->connect->category();
		$item['title'] = 'Daftar produk';
		$data['tentang_kami'] = $this->connect->tentang_kami();
		$item['count_cart'] = $this->cart->contents();
		$data['new_product'] = $this->connect->new_product();
		$this->load->view('head',$item);
		$this->load->view('shop_grid/banner');
		$this->load->view('shop_grid/shop_grid',$data);
		$this->load->view('index/service');
		$this->load->view('footer',$data);
	}
	public function category(){
		$item['title'] = 'Kategori';
		$data['tentang_kami'] = $this->connect->tentang_kami();
		$item['count_cart'] = $this->cart->contents();
		$data['new_product'] = $this->connect->category_item();
		$item['category'] = $this->connect->category();
		$this->load->view('head',$item);
		$this->load->view('category/banner');
		$this->load->view('category/shop_grid',$data);
		$this->load->view('index/service');
		$this->load->view('footer',$data);
	}
	public function search(){
		$item['title'] = 'Cari Product';
		$data['tentang_kami'] = $this->connect->tentang_kami();
		$item['count_cart'] = $this->cart->contents();
		$data['new_product'] = $this->connect->search();
		$item['category'] = $this->connect->category();
		$this->load->view('head',$item);
		$this->load->view('search/banner');
		$this->load->view('search/shop_grid',$data);
		$this->load->view('index/service');
		$this->load->view('footer',$data);
	}
	public function not_found(){
		$item['title'] = '404 | Not Found';
		$data['tentang_kami'] = $this->connect->tentang_kami();
		$item['count_cart'] = $this->cart->contents();
		$data['new_product'] = $this->connect->search();
		$item['category'] = $this->connect->category();
		$this->load->view('head',$item);
		$this->load->view('not_found');
		$this->load->view('index/service');
		$this->load->view('footer',$data);
	}
	public function about(){
		$item['title'] = 'Tentang kami';
		$data['tentang_kami'] = $this->connect->tentang_kami();
		$data['title'] = 'Tentang kami';
		$item['count_cart'] = $this->cart->contents();
		$data['new_product'] = $this->connect->search();
		$data['tentang_kami'] = $this->connect->tentang_kami();
		$item['category'] = $this->connect->category();
		$this->load->view('head',$item);
		$this->load->view('pages/banner',$data);
		$this->load->view('pages/about',$data);
		$this->load->view('index/service');
		$this->load->view('footer',$data);	
	}
	public function hubungi_kami(){
		$item['title'] = 'Hubungi kami';
		$data['tentang_kami'] = $this->connect->tentang_kami();
		$data['title'] = 'hubungi kami';
		$item['count_cart'] = $this->cart->contents();
		$data['new_product'] = $this->connect->search();
		$data['tentang_kami'] = $this->connect->tentang_kami();
		$item['category'] = $this->connect->category();
		$this->load->view('head',$item);
		$this->load->view('pages/banner',$data);
		$this->load->view('hubungi_kami/form_contact');
		$this->load->view('index/service');
		$this->load->view('footer',$data);	
	}
	public function retur_produk(){
		$item['title'] = 'Retur Product';
		$data['tentang_kami'] = $this->connect->tentang_kami();
		$data['title'] = 'RETUR PRODUK';
		$item['count_cart'] = $this->cart->contents();
		$data['new_product'] = $this->connect->search();
		$item['category'] = $this->connect->category();
		$this->load->view('head',$item);
		$this->load->view('pages/banner',$data);
		$this->load->view('pages/retur');
		$this->load->view('index/service');
		$this->load->view('footer',$data);	
	}
	public function insert_retur(){
		$this->connect->retur_produk();
	}
	public function syarat_dan_ketentuan(){
		$item['title'] = 'Syarat dan ketentuan';
		$data['tentang_kami'] = $this->connect->tentang_kami();
		$data['title'] = 'SYARAT DAN KETENTUAN';
		$item['count_cart'] = $this->cart->contents();
		$data['new_product'] = $this->connect->search();
		$item['category'] = $this->connect->category();
		$item['syarat_dan_ketentuan'] = $this->connect->syarat_dan_ketentuan();
		$this->load->view('head',$item);
		$this->load->view('pages/banner',$data);
		$this->load->view('pages/syarat_dan_ketentuan',$item);
		$this->load->view('index/service');
		$this->load->view('footer',$data);
	}
	public function kebijakan_privasi(){
		$item['title'] = 'kebijakan_privasi';
		$data['tentang_kami'] = $this->connect->tentang_kami();
		$data['title'] = 'SYARAT DAN KETENTUAN';
		$item['count_cart'] = $this->cart->contents();
		$data['new_product'] = $this->connect->search();
		$item['category'] = $this->connect->category();
		$item['kebijakan_privasi'] = $this->connect->kebijakan_privasi();
		$this->load->view('head',$item);
		$this->load->view('pages/banner',$data);
		$this->load->view('pages/kebijakan_privasi',$item);
		$this->load->view('index/service');
		$this->load->view('footer',$data);
	}
	public function hubungi_kami_action(){
		$this->connect->hubungi_kami_action();
		redirect($_SERVER['HTTP_REFERER']);
	}
	public function subscribe(){
		$this->connect->subscribe();
		redirect($_SERVER['HTTP_REFERER']);
	}
	public function subscribe_add(){
		$this->connect->subscribe_add();
		echo "Terima kasih pendaftaran langganan info anda telah berhasil";
	}



}