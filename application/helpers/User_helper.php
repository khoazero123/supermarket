<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_helper {
	//private $CI;
	function __construct() {
		//$this->CI = & get_instance();
	}
	public static function info($id=null) {
		$CI = & get_instance();
		$CI->load->helper('email');

		$user = [
			'id' => 1,
			'firstname' => 'Khoa',
			'middlename' => 'Vo',
			'lastname' => 'Van',
			'email' => 'Email',
			'password' => md5(1234),
			'company' => 'Company',
			'phone' => 'Telephone',
			'address' => 'Street Address',
			'city' => 'City',
			'state' => 'State/Province',
			'postcode' => 'Zip/Postal Code',
			'country' => 'Country',
		];
		$user['displayname'] = implode(' ', array_filter([$user['firstname'],$user['middlename'],$user['lastname']]));

		if(valid_email($id)) $user['email'] = $id;
		
		return $user;
	}
	public static function login() {
		$CI = & get_instance();
		$user = $CI->session->userdata("user");
		if($user) return $user;
		return false;
	}
}