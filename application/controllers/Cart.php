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
		$response = [
			'dataOption' => '<div class="response"><p><span class="product-name">"The Best Android Phone" was added to your shopping cart</span></p><div><p>You have 1 item(s) in your shopping cart.</p></span></p><div class="action-cart"><button onclick="setLocation(\'checkout/cart\')" class="button btn-cart" title="View Cart" type="button"><span><span>View Cart</span></span></button><button class="button cart-continue" title="Continue" type="button"><span><span>Continue</span></span></button></div>',
   			'count' => '1 item(s)',
    		'add_to_cart' => 1,
    		'update_mini_cart' => '<div class="mini-maincart">
    			<div class="cartSummary toggle-tab">
    				<div class="crat-icon"><span class="item">1</span></div>
    				<p class="mt-cart-title">Cart</p>
    				<div class="cart-header">
    					<p class="cart-tolatl">
    						<!--<span class="toltal"></span>-->
    						<span class="item">1items - </span>
    						<span><span class="price">$45.00</span></span>
    					</p>    
    				</div>
    			</div>
    			<div class="mini-contentCart toggle-content">
    			    <div class="block-content">
    			    	<p class="block-subtitle">Recently added item(s)</p>
    			    	<ol id="cart-sidebar" class="mini-products-list clearfix">
    			    	    <li class="item clearfix">
    			    	        <div class="cart-content-top">
    			    	            <a href="the-best-android-phone.html" title="The Best Android Phone" class="product-image"><img src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/thumbnail/200x250/9df78eab33525d08d6e5fb8d27136e95/1/_/1.jpg" width="73" height="88" alt="The Best Android Phone" /></a>
    			    	            <div class="cart-content-bottom">
    			    	                <div class="clearfix">
    			    	                    <a href="checkout/cart/configure/id/2197/" title="Edit item" class="btn-edit"><i class="fa fa-pencil-square-o"></i></a>
    			    	                    <a href="checkout/cart/delete/id/2197/form_key/sAdyDsJynFULYdDL/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvbWFnaWNzaG9wL2FqYXgvaW5kZXgv/" title="Remove" onclick="return confirm(\'Are you sure you would like to remove this item from the shopping cart?\');" class="btn-remove btn-remove2"><i class="icon-close icons"></i></a>
    			    	                </div>
    			    	            </div>
    			    	            <div class="product-details">
    			    	                <p class="product-name">
    			    	                	<a href="the-best-android-phone.html">The Best Android Phone</a>
    			    	                </p>
    			    	                <strong>1</strong> x
    			    	                <span class="price">$45.00</span>
    			    	            </div>
    			    	        </div>
    			    	    </li>
    			    	</ol>
    			    	<p class="subtotal clearfix">
    			    	    <span class="label">Subtotal:</span> <span class="price">$45.00</span>
    			    	</p>
    			    	<div class="actions">
    			    	    <a href="checkout/cart/" class="view-cart">View cart</a>
    			    	    <a href="checkout/onepage/" class="checkout">Checkout</a>
    			    	</div>
    			    	<script type="text/javascript">decorateList(\'cart-sidebar\', \'none-recursive\')</script>
    			    </div>
    			</div>
    		</div>',
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
