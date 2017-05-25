<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_helper {
	//private $CI;
	function __construct() {
		//$this->CI = & get_instance();
	}
	public static function info($id=null) {
		$CI = & get_instance();
		//$CI->load->helper('email');
		if($id) {
			$CI->load->model('User_model');
			$user = $CI->User_model->getUser($id);
		} else $user = $CI->session->userdata('user');

		if($user && empty($user['displayname'])) $user['displayname'] = implode(' ', array_filter([$user['firstname'],$user['middlename'],$user['lastname']]));
		
		return $user;
	}
	public static function login() {
		$CI = & get_instance();
		$user = $CI->session->userdata('user');
		//var_dump($user);exit;
		if($user) return Self::info($user['id']);
		return false;
	}
}