<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('Category_model');
        $this->load->model('Product_model');
    }
	public function index() {
		//$categorys = $this->Category_model->updateBatchSlug();
		var_dump($this->Product_model->getProduct(1));exit;

	}

}
?>
