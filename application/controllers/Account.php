<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->helper('User');
        $this->load->helper('email');
        $this->load->model('User_model');
    }
	public function index() {
		$data = $this->session->flashdata('data');
		$data['class_body'] = 'customer-account-index';
		$data['user'] = User_helper::info();
		$this->load->view('site/header',$data);
		$this->load->view('site/header-container');
		$this->load->view('site/account-dashboard-container',$data);
		$this->load->view('site/footer-container');
		$this->load->view('site/footer');
	}
	public function forgotpassword() {
		$data = $this->session->flashdata('data');
		$data['class_body'] = 'customer-account-forgotpassword';
		//$data['user'] = User_helper::info();
		$this->load->view('site/header',$data);
		$this->load->view('site/header-container');
		$this->load->view('site/account-forgotpassword-container',$data);
		$this->load->view('site/footer-container');
		$this->load->view('site/footer');
	}
	public function forgotpasswordpost() {
		$data = null;
		$redirect = 'customer/account/forgotpassword';
		$email = $this->input->post('email');
		if(!valid_email($email)) $data['message']['error'] = 'Please enter a valid email address. For example johndoe@domain.com.';
		elseif(!$this->User_model->getUser($email)) $data['message']['error'] = 'Email '.$email.' don\'t exist on system';
		else {
			$user = $this->User_model->getUser($email);
			$mail['user'] = $user;
            $insert = [
            	'token' => md5('MVC'.$email),
            	'email' => $email,
            	];
			
			if($id=$this->User_model->insertTokenReset($insert)) {
				$mail['url_reset'] = base_url().'customer/account/resetpassword/?id='.$id.'&token='.$insert['token'];

				$message = $this->load->view('site/mail-container',$mail,true);

				if($this->config->item('mail')) {
					$this->load->library('email');
	                $this->email->initialize($this->config->item('mail'));
	                $this->email->from('cdtd35a@gmail.com', 'CustomerSupport');
	                $this->email->to('khoazero123@gmail.com');

	                $this->email->subject('Password Reset Confirmation for '.base_url());
	                $this->email->message($message);

	                if (!$this->email->send()) {
	                    echo $this->email->print_debugger();
	                    $data['message']['error'] = 'System cannot send email reset password to '.$email;
	                } else {
	                    $data['message']['success'] = 'If there is an account associated with '.$email.' you will receive an email with a link to reset your password.';
						$redirect = 'customer/account/login';
	                }
	            } else $data['message']['error'] = 'Not found mail config on system';
	        } else $data['message']['error'] = 'Cannot insert session reset password to db.';
        }
        //var_dump($data);exit;
		$this->session->set_flashdata('data', $data);
		redirect($redirect);
	}
	public function resetpassword() {
		$data['class_body'] = 'customer-account-changeforgotten';
		$id = $this->input->get('id');
		$token = $this->input->get('token');
		$info_token = $this->User_model->getTokenReset(['id'=>$id,'token'=>$token]);
		if(!$info_token) {
			$data['message']['error'] = 'Your password reset link has expired.';
			$redirect = 'customer/account/forgotpassword';
		}
		elseif($this->input->method() == 'post') {
			$password = $this->input->post('password');
			$confirmation = $this->input->post('confirmation');
			if($password!=$confirmation) $data['message']['error'] = 'Please make sure your passwords match.';
			else if($this->User_model->updateUser(['password'=>md5($password)],$info_token['email'])) {
				$data['message']['success'] = 'Your password has been updated.';
				$redirect = 'customer/account/login';
				$this->User_model->updateTokenReset(['status'=>1],$token);
			} else $data['message']['error'] = 'Cannot update new password.';
		}

		if(isset($redirect)) {$this->session->set_flashdata('data', $data);redirect($redirect);}

		$this->load->view('site/header',$data);
		$this->load->view('site/header-container');
		$this->load->view('site/account-resetpassword-container',$data); // changeforgotten
		$this->load->view('site/footer-container');
		$this->load->view('site/footer');
	}

	public function edit() {
		$data = $this->session->flashdata('data');
		$data['class_body'] = 'customer-account-edit';
		$data['user'] = User_helper::info();
		$this->load->view('site/header',$data);
		$this->load->view('site/header-container');
		$this->load->view('site/account-edit-container',$data);
		$this->load->view('site/footer-container');
		$this->load->view('site/footer');
	}
	public function editPost() {
		$data = $this->session->flashdata('data');
		$user = User_helper::info();
		$data['class_body'] = 'customer-account-edit';


		$firstname = $this->input->post('firstname');
		if($firstname) $update['firstname'] = $firstname;

		$middlename = $this->input->post('middlename');
		if($middlename) $update['middlename'] = $middlename;

		$lastname = $this->input->post('lastname');
		if($lastname) $update['lastname'] = $lastname;

		$email = $this->input->post('email'); // :khoazero123@gmail.com
		if(valid_email($email)) $update['email'] = $email;
		else $data['message']['error'] = 'Email not valid.';

		$change_password = $this->input->post('change_password'); // 1
		$dummy = $this->input->post('dummy');

		if($change_password==1) {
			$current_password = $this->input->post('current_password');
			if(md5($current_password) != md5($user['password'])) $data['message']['error'] = 'Invalid current password';
			else {
				$password = $this->input->post('password');
				$confirmation = $this->input->post('confirmation');
				if($password==$confirmation) $update['password'] = md5($password);
				else $data['message']['error'] = 'Please make sure your passwords match';
			}
		}

		if(!isset($data['message']['error']))
			if($this->User_model->updateUser($update,$user['id'])) {
				$user = $this->User_model->getUser($user['id']);
				$data['message']['success'] = 'The account information has been saved.';
			} else $data['message']['error'] = 'Cannot update new infomation.';

		$this->session->set_userdata('user', $user);
		$this->session->set_flashdata('data', $data);


		redirect('customer/account/edit');
	}
	public function create()
	{
		$data = $this->session->flashdata('data');
		$data['class_body'] = 'customer-account-create';
		$this->load->view('site/header',$data);
		$this->load->view('site/header-container');
		$this->load->view('site/account-create-container');
		$this->load->view('site/footer-container');
		$this->load->view('site/footer');
	}
	public function createpost() {
		$redirect = 'customer/account/create';

		$success_url = $this->input->post('success_url'); // 
		$error_url = $this->input->post('error_url'); // :
		$firstname = $this->input->post('firstname'); // :Khoa
		$middlename = $this->input->post('middlename'); // :Vo
		$lastname = $this->input->post('lastname'); // :Van
		$email = $this->input->post('email'); // :khoazero123@gmail.com
		$is_subscribed = $this->input->post('is_subscribed'); // 1
		$password = $this->input->post('password'); // :
		$confirmation = $this->input->post('confirmation'); // :



		if($this->User_model->getUser($email)) {
			$data['message']['error'] = 'There is already an account with this email address. If you are sure that it is your email address, <a href="customer/account/forgotpassword/">click here</a> to get your password and access your account.';
		} else {
			$insert = [
				'firstname' => $firstname,
				'middlename' => $middlename,
				'lastname' => $lastname,
				'email' => $email,
				'password' => md5($password),
			];
			if($this->User_model->insertUser($insert)) {
				$user = $this->User_model->getUser($email);
				$this->session->set_userdata('user', $user);
				$data['message']['success'] = 'Thank you for registering.';
				$redirect = 'customer/account';
			} else {
				$data['message']['error'] = 'Cannot create new user';
			}
		}
		$this->session->set_flashdata('data', $data);
		redirect($redirect);

	}
	public function login()
	{
		$data = $this->session->flashdata('data');
		if($redirect = $this->session->flashdata('redirect')) $this->session->set_flashdata('redirect', $redirect);
		$data['class_body'] = 'customer-account-create';
		
		$this->load->view('site/header',$data);
		$this->load->view('site/header-container');
		$this->load->view('site/login-container');
		$this->load->view('site/footer-container');
		$this->load->view('site/footer');
	}
	public function doLogin() {
		$redirect = '';
		$login = $this->input->post('login');//login[username]:khoazero123@gmail.com | login[password]:khoa3933230 | send:
		
		if($user=$this->User_model->getUser(['email' => $login['username'],'password' => md5($login['password'])])) {
			//$user = User_helper::info($login['username']);
			$this->session->set_userdata('user', $user);
			$redirect = 'customer/account';
		} else {
			$data['message']['error'] = 'Invalid login or password.';//.$this->db->last_query();
			$redirect = 'customer/account/login';
		}
		$this->session->set_flashdata('data', $data);
		redirect($redirect);
	}

	public function logout() {
		$this->session->unset_userdata('user');
		$data['class_body'] = 'customer-account-logoutsuccess';
		$this->load->view('site/header',$data);
		$this->load->view('site/header-container');
		$this->load->view('site/logout-container');
		$this->load->view('site/footer-container');
		$this->load->view('site/footer');
	}
}
