<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function output_json($response=null) {
	//$CI = & get_instance();
	//header('Content-Type: application/json');
	return json_encode($response,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES);
}
