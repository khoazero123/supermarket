<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
	private $cart;
	public function __construct() {
        parent::__construct();
        $this->cart = $this->session->userdata('cart');
    }
	public function index()
	{
		// Product Image	Product Name	Edit	Unit Price	Qty	Subtotal	Remove
		$data = $this->session->flashdata('data');
		$data['cart'] = $this->cart;
		$data['class_body'] = 'catalog-product-view catalog-product-view product-fusce-nec-facilisi categorypath-accessories-html category-accessories';
		//var_dump($data);exit;
		$this->load->view('site/header',$data);
		$this->load->view('site/header-container');
		$this->load->view('site/cart-container',$data);
		$this->load->view('site/footer-container');
		$this->load->view('site/footer');
	}
	public function update() {
		$update_cart_action = $this->input->post('update_cart_action'); // update_qty | empty_cart
		$cart = $this->input->post('cart');// //cart[2164][qty]:11

		switch ($update_cart_action) {
			case 'update_qty':
				foreach ($cart as $product_id => $value) {
					$qty = $value['qty'];
					$this->cart[$product_id]['qty'] = $qty;
				}
				break;
			case 'empty_cart':
				$cart = [];
				break;
			
			default:
				# code...
				break;
		}
		$this->session->set_userdata('cart', $this->cart);
		redirect('checkout/cart');
	}

	public function addAjax() {
		$id = $this->input->post('product_id');
		$IsProductView = $this->input->post('IsProductView');

		$data['product'] = '';
		$data['count'] = 1;

		$dataoption_html = $this->load->view('ajax/dataoption',$data,true);
		$update_mini_cart_html = $this->load->view('ajax/addtocart',$data,true);

		$response = [
			'dataOption' => $dataoption_html,
   			'count' => '1 item(s)',
    		'add_to_cart' => 1,
    		'update_mini_cart' => $update_mini_cart_html,
    		'script' => '',
		];
		header('Content-Type: application/json');
		exit(json_encode($response,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES));
	}
	public function add($id=null) {
		//if(!$id) $id = $this->input->post('product_id');
		$product = $this->input->post('product');
		$related_product = $this->input->post('related_product');
		$qty = (int)$this->input->post('qty');
		$qty = ($qty<0) ? 1 : $qty;
		$product = [
			'id' => '',
			'name' => $id.' - Fusce Nec Facilisi',
			'slug' => $id.'-fusce-nec-facilisi',
			'thumbnail' => 'http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/thumbnail/120x/9df78eab33525d08d6e5fb8d27136e95/5/_/5_34.jpg',
			'price' => 250,
		];
		$this->cart[$id] = [
							'thumbnail' => $product['thumbnail'],
							'name' => $product['name'],
							'slug' => $product['slug'],
							'price' => $product['price'],
							'qty' => $qty,
							'subtotal' => $product['price'] * $qty,
							];
		$data['cart'] = $this->cart;
		$data['message']['success'] = 'Fusce nec facilisi was added to your shopping cart.';
		$this->session->set_userdata('cart', $this->cart);
		$this->session->set_flashdata('data', $data);
		redirect('checkout/cart');
	}
	public function delete() {
		
	}
	public function estimate() {
		// GET A QUOTE
		$country_id = $this->input->post('country_id'); // US
		$region_id = $this->input->post('region_id'); // 5
		$region = $this->input->post('region');
		$estimate_postcode = $this->input->post('estimate_postcode'); // 324324

		// UPDATE TOTAL
		$estimate_method = $this->input->get('estimate_method');//:flatrate_flatrate
		$do = $this->input->get('do');//Update Total
		redirect('checkout/cart');
		
	}
	public function coupon() {
		$remove = $this->input->post('remove'); // 0
		$coupon_code = $this->input->post('coupon_code'); // 0
		$data['message']['error'] = 'Coupon code "'.$coupon_code.'" is not valid.';
		$this->session->set_flashdata('data', $data);
		redirect('checkout/cart');
	}
}
