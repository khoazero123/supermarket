<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function quickview($id)
	{
		$this->load->view('site/quickview');
	}
	public function view($category,$product)
	{
		$data['class_body'] = 'customer-account-create';
		$this->load->view('site/header',$data);
		$this->load->view('site/header-container');
		$this->load->view('site/product-container');
		$this->load->view('site/footer-container');
		$this->load->view('site/footer');
	}
}