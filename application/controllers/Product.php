<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->helper('User');
        $this->load->model('Product_model');
        $this->load->model('Category_model');
    }
	public function quickview($id)
	{
		$this->load->view('site/quickview');
	}
	public function view($product,$category=null)
	{

		$data['class_body'] = ' catalog-product-view catalog-product-view product-tier-pricing-product categorypath-accessories-html category-accessories';
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
		$data['product'] = $this->Product_model->getProduct($product);

		$this->load->view('site/header',$data);
		$this->load->view('site/header-container');
		$this->load->view('site/product-container',$data);
		$this->load->view('site/footer-container');
		$this->load->view('site/footer');
	}
	public function list($type=null,$category=null) { // slug
		//exit('');
		$p = $this->input->post('p'); // desc
		$dir = $this->input->post('dir'); // desc
		$order = $this->input->post('order'); // position
		$limit = $this->input->post('limit'); // int
		$price = $this->input->post('price'); // -100
		$data['class_body'] = 'catalog-category-view categorypath-smartphone-table-html category-smartphone-table';

		if($category) $data['category'] = $this->Category_model->getCategory($category);

		$query = [
			'category' => !empty($data['category']) ? $data['category']['id'] : null,
			'type' => $type, // newest | views | buys
			'order_by' => 'name asc',
		];
		$data['products'] = $this->Product_model->listProduct($query);
		//var_dump($data['category']);exit;

		$this->load->view('site/header',$data);
		$this->load->view('site/header-container');
		$this->load->view('site/product-list-container',$data);
		$this->load->view('site/footer-container');
		$this->load->view('site/footer');
	}
	public function listAjax($type=1) {
		$category = $this->input->post('type');// category id :249
		$info = $this->input->post('info');
		/*
		[limit] :10
		[row]:1
		[productDelay]:
		[widthImages]:235
		[heightImages]:270
		[action][]:cart
		[action][]:compare
		[action][]:wishlist
		[action][]:review
		[types]:featured
		*/
		$data['products'] = array(
			['id'=>'1','name'=>'SP1'],
			['id'=>'2','name'=>'SP1'],
			['id'=>'3','name'=>'SP1'],
			['id'=>'4','name'=>'SP1'],
			['id'=>'5','name'=>'SP1'],
			['id'=>'6','name'=>'SP1'],
			['id'=>'7','name'=>'SP1'],
			['id'=>'1','name'=>'SP1'],
			['id'=>'1','name'=>'SP1'],
			['id'=>'1','name'=>'SP1'],
			['id'=>'1','name'=>'SP1'],
			['id'=>'1','name'=>'SP1'],
			['id'=>'1','name'=>'SP1'],
			['id'=>'1','name'=>'SP1'],
			['id'=>'1','name'=>'SP1'],
			['id'=>'1','name'=>'SP1'],
			['id'=>'1','name'=>'SP1'],
			['id'=>'1','name'=>'SP1'],
			['id'=>'1','name'=>'SP1'],
		);
		$response = $this->load->view('site/ajax-list-product',$data,true);
		echo $response;
	}
	public function addWishlist($id) {
		if(!User_helper::login()) {
			$this->session->set_flashdata('redirect', 'wishlist/index/index/wishlist_id/'.$id);
			redirect('customer/account/login');
		}
	}
}
