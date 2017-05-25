<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->helper('User');
    }
	public function quickview($id)
	{
		$this->load->view('site/quickview');
	}
	public function view($category,$product)
	{
		$data['class_body'] = 'customer-account-create';
		$data['product'] = [
			'id' => strlen($product),
			'name' => ucwords(str_replace('-',' ',$product)),
			'slug' => $product,
			'category' => [
				'id' => strlen($category),
				'name' => ucwords(str_replace('-',' ',$category)),
				'slug' => $category,
			],
		];
		$this->load->view('site/header',$data);
		$this->load->view('site/header-container');
		$this->load->view('site/product-container',$data);
		$this->load->view('site/footer-container');
		$this->load->view('site/footer');
	}
	public function list($category) {
		//if(is_numeric($id))
		$p = $this->input->post('p'); // desc
		$dir = $this->input->post('dir'); // desc
		$order = $this->input->post('order'); // position
		$limit = $this->input->post('limit'); // int
		$limit = $this->input->post('limit'); // int
		$data['class_body'] = 'catalog-category-view categorypath-smartphone-table-html category-smartphone-table';

		$this->load->view('site/header',$data);
		$this->load->view('site/header-container');
		$this->load->view('site/product-list-container',$data);
		$this->load->view('site/footer-container');
		$this->load->view('site/footer');
	}
	public function addWishlist($id) {
		if(!User_helper::login()) {
			$this->session->set_flashdata('redirect', 'wishlist/index/index/wishlist_id/'.$id);
			redirect('customer/account/login');
		}
	}
}
