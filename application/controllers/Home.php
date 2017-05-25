<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('Category_model');
    }
	public function index() {
		$data['category_tree'] = $this->Category_model->listCategoryTree();
		$data['show_offer'] = true;
		$this->load->view('site/header',$data);
		$this->load->view('site/header-container',$data);
		$this->load->view('site/main-container');
		$this->load->view('site/footer-container');
		$this->load->view('site/footer');
	}
}
