<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	private $views;
	private $alert = [
		'title' => '',
		'type' => 'danger', // success | info | warning | danger
		'message' => ''
	];
	public function __construct() {
		parent::__construct();
        $this->load->model(['Product_model','Category_model']);
        //$this->load->helper('url','isAdmin');
        //$this->load->database();
	}
	public function index($views='index') {
		$this->views = $views;
		$data = $this->session->flashdata('data');
		$id = (int) $this->input->get('id');
		if($id && !($data['product'] = $this->Product_model->getProduct($id))) $data['alert'] = ['title'=>'Error','type'=>'danger','message'=>'Product not exist!'];

		//var_dump($data);exit;

		//if($this->input->method() == 'post') {
			switch ($views) {
				case 'page_ecom_products':
					return $this->listProduct();
					break;
				case 'page_ecom_product_add':
					return $this->addProduct();
					break;
				case 'page_ecom_product_edit':
					return $this->editProduct($id);
					break;
				case 'page_ecom_orders':
					return $this->listProduct();
					break;
				
				default:
					# code...
					break;
			}
		//}

		

		$this->load->view('admin/'.$this->views,$data);
	}
	public function listProduct() {
		$data = $this->session->flashdata('data');
		$data['products'] = $this->Product_model->listProduct();
		$this->load->view('admin/'.$this->views,$data);
	}
	public function addProduct($type='add') {
		$data = $this->session->flashdata('data');
		$data['categorys'] = $this->Category_model->listCategory();
		if($this->input->method() == 'post') {
			if($this->input->get('type') == 'add_images') return $this->uploadImage();

			$images = $this->session->userdata('tmp_upload_img');
			if(!empty($images)) $insert['images'] = $images;

			$insert['name'] = $this->input->post('product-name'); // :Name
			$insert['description'] = $this->input->post('product-description'); // :<p>Description</p>
			$insert['short_description'] = $this->input->post('product-short-description'); // :Short Description
			$insert['category_id'] = $this->input->post('product-category'); // :42
			$insert['price'] = $this->input->post('product-price'); // :145
			$insert['condition'] = (int)$this->input->post('product-condition'); // :100
			$insert['display'] = ($this->input->post('product-status') == 'on') ? 1 : 0; // :on

			if($id=$this->Product_model->insertProduct($insert)) {
				$data['alert'] = ['message'=>'Add product success! #<a href="'.base_url().'admin/product/page_ecom_product_edit.php?id='.$id.'">'.$id.'</a>'];
			} else {
				$data['alert'] = ['title'=>'Error','type'=>'danger','message'=>'Add product fail!'];
			}

			$this->session->unset_userdata('tmp_upload_img');

			$this->session->set_flashdata('data', $data);
			redirect('admin/'.$this->views.'.php');
		}
		$this->load->view('admin/'.$this->views,$data);
	}
	public function editProduct($id) {
		$data = [];
		$id = (int) $this->input->get('id');
		if($id && !($data['product'] = $this->Product_model->getProduct($id))) $data['alert'] = ['title'=>'Error','type'=>'danger','message'=>'Product not exist!'];

		$data['categorys'] = $this->Category_model->listCategory();
		if($this->input->method() == 'post') {

			$update['name'] = $this->input->post('product-name'); // :Name
			$update['description'] = $this->input->post('product-description'); // :<p>Description</p>
			$update['short_description'] = $this->input->post('product-short-description'); // :Short Description
			$update['category_id'] = $this->input->post('product-category'); // :42
			$update['price'] = $this->input->post('product-price'); // :145
			$update['condition'] = (int)$this->input->post('product-condition'); // :100
			$update['display'] = ($this->input->post('product-status') == 'on') ? 1 : 0; // :on


			if($this->Product_model->updateProduct($update,$id)) {
				$data['alert'] = ['message'=>'Edit product success! #<a href="'.base_url().'admin/product/page_ecom_product_edit.php?id='.$id.'">'.$id.'</a>'];
			} else {
				$data['alert'] = ['title'=>'Error','type'=>'danger','message'=>'Edit product fail!'];
			}


			$this->session->unset_userdata('tmp_upload_img');

			$this->session->set_flashdata('data', $data);
			redirect('admin/product/'.$this->views.'.php?id='.$id);
		}
		$this->load->view('admin/'.$this->views,$data);
	}
	public function deleteProduct($id) {
		if($this->Product_model->deleteProduct($id)) {
			$response = ['status'=>1,'message'=>'Delete product success!'];
		} else {
			$response = ['status'=>1,'message'=>'Delete product fail!'];
		}
		header('Content-Type: application/json');
		echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
	}
	public function uploadImage() {
		$data = [];
		if($this->input->method() == 'post') {
			$product_id = (int) $this->input->get('id');

			$images = $this->session->userdata('tmp_upload_img');

			$config['upload_path']          = APPPATH.'../'.$this->config->item('upload_dir');
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['max_size']             = 10*1024; // 10 Mb
	        $config['encrypt_name']            = true;
	        $config['file_ext_tolower']            = true;
	        //$config['max_height']           = 768;
	        
	        $this->load->library('upload', $config);
			if (!$this->upload->do_upload('file')) {
	            $result = $this->upload->display_errors();
	        } else {
	            $result = $this->upload->data();
	            $file_name = $result['file_name'];
	            $url = $this->config->item('upload_dir').$file_name;

	            $images[] = $url;
	            if($product_id) {
	            	$this->Product_model->insertImages($product_id,$images);
	            	$this->session->unset_userdata('tmp_upload_img');
	            } else $this->session->set_userdata('tmp_upload_img', $images);
	        }
	        var_dump($images);
	        var_dump($result);
	    }
	}
	public function updateImage($id=null) {
		$data = [];
		if($this->input->method() == 'post') {
			$update = $this->input->post('data');
			var_dump($update);
			if($this->Product_model->updateImage($update,$id)) {
				echo "Update $id success\n";
			} else echo "Update $id fail\n";
		}
	}
	public function deleteImage($id=null) {
		if(!$id) $id = (int) $this->input->get('id');
		if($this->Product_model->deleteImages($id)) {
			$response = ['status'=>1,'message'=>'Delete image success!'];
		} else {
			$response = ['status'=>1,'message'=>'Delete image fail!'];
		}
		header('Content-Type: application/json');
		echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
	}
}
