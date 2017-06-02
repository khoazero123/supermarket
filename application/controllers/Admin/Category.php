<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
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
		$id = $this->input->get('id');
		//exit($id);
		//if($id && !($data['category'] = $this->Product_model->getProduct($id))) $data['alert'] = ['title'=>'Error','type'=>'danger','message'=>'Product not exist!'];

		//var_dump($data);exit;

		switch ($views) {
			case 'page_ecom_categorys':
				return $this->listCategory();
				break;
			case 'page_ecom_category_add':
				return $this->addCategory();
				break;
			case 'page_ecom_category_edit':
				return $this->editCategory($id);
				break;

			default:
				# code...
				break;
		}

		

		$this->load->view('admin/'.$this->views,$data);
	}
	public function listCategory() {
		$data = $this->session->flashdata('data');
		$data['categorys'] = $this->Category_model->listCategory();
		$this->load->view('admin/'.$this->views,$data);
	}
	public function addCategory() {
		$data = $this->session->flashdata('data');
		$data['categorys'] = $this->Category_model->listCategory();
		if($this->input->method() == 'post') {
			//if($this->input->get('type') == 'add_images') return $this->uploadImage();

			$image = $this->session->userdata('tmp_category_img');
			if(!empty($image)) $insert['image'] = $image;

			$insert['name'] = $this->input->post('category-name'); // :Name
			$insert['parent'] = $this->input->post('category-category'); // :42

			$insert['display'] = ($this->input->post('category-status') == 'on') ? 1 : 0; // :on

			if($id=$this->Category_model->insertCategory($insert)) {
				$data['alert'] = ['message'=>'Add category success! #<a href="'.base_url().'admin/page_ecom_category_edit.php?id='.$id.'">'.$id.'</a>'];
			} else {
				$data['alert'] = ['title'=>'Error','type'=>'danger','message'=>'Add category fail!'];
			}

			$this->session->unset_userdata('tmp_category_img');

			$this->session->set_flashdata('data', $data);
			redirect('admin/category/'.$this->views.'.php');
		}
		$this->load->view('admin/'.$this->views,$data);
	}
	public function editCategory($id) {
		$data = [];
		//exit($id);
		//$id = (int) $this->input->get('id');
		if($id && !($data['category'] = $this->Category_model->getCategory($id))) $data['alert'] = ['title'=>'Error','type'=>'danger','message'=>'Category not exist!'];

		$data['categorys'] = $this->Category_model->listCategory();
		if($this->input->method() == 'post') {

			$update['name'] = $this->input->post('category-name'); // :Name

			$update['parent'] = $this->input->post('category-category'); // :42

			$update['display'] = ($this->input->post('category-status') == 'on') ? 1 : 0; // :on


			if($this->Category_model->updateCategory($update,$id)) {
				$data['alert'] = ['message'=>'Edit category success! #<a href="'.base_url().'admin/category/page_ecom_category_edit.php?id='.$id.'">'.$id.'</a>'];
			} else {
				$data['alert'] = ['title'=>'Error','type'=>'danger','message'=>'Edit category fail!'];
			}


			$this->session->unset_userdata('tmp_upload_img');

			$this->session->set_flashdata('data', $data);
			redirect('admin/category/'.$this->views.'.php?id='.$id);
		}
		$this->load->view('admin/'.$this->views,$data);
	}
	public function deleteCategory($id) {
		if($this->Product_model->deleteProduct($id)) {
			$response = ['status'=>1,'message'=>'Delete category success!'];
		} else {
			$response = ['status'=>1,'message'=>'Delete category fail!'];
		}
		header('Content-Type: application/json');
		echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
	}
	public function uploadImage() {
		$data = [];
		if($this->input->method() == 'post') {
			$category_id = (int) $this->input->get('id');

			$images = $this->session->userdata('tmp_category_img');

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
	            $image = $this->config->item('upload_dir').$file_name;

	            if($category_id) {
	            	$this->Category_model->updateCategory(['image'=>$image],$category_id);
	            	$this->session->unset_userdata('tmp_category_img');
	            } else $this->session->set_userdata('tmp_category_img', $image);
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
	public function deleteImage($category_id=null) {
		//if(!$id) $id = (int) $this->input->get('id');
		if($this->Category_model->updateCategory(['image'=>null],$category_id)) {
			$response = ['status'=>1,'message'=>'Delete image success!'];
		} else {
			$response = ['status'=>1,'message'=>'Delete image fail!'];
		}
		header('Content-Type: application/json');
		echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
	}
}
