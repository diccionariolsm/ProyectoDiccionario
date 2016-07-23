<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddUser extends DSLM_Controller{


	public function __construct(){
		parent::__construct();
		$this->load->model('user');
	}
	
	public function index(){

		$data = array(
			'head' => $this->load->view('system/head',NULL,TRUE),
			'header' => '',
			'navbar' => $this->load->view('system/navbar',NULL,TRUE),
			'menu' => '',
			'content' => $this->load->view('user/add',NULL,TRUE),
			'footer' => $this->load->view('system/footer',NULL,TRUE)
		);
		$this->load->view('system/layout',$data);
	}


	public function validate(){
		$username = xss_clean($this->input->post('username'));
		$password = do_hash(xss_clean($this->input->post('password')),'md5');
		$mail = xss_clean($this->input->post('mail'));
		
		if($this->form_validation->run() === FALSE){
			$this->index();
		}else{
			$flag = $this->user->set_user(array(
				'username' => $username,
				'password' => $password,
				'mail' => $mail
			));
			
			if($flag){
				$message = "Se guardo con exito..!!";
			}else{
				$message = "Error al crear usuario";
			}
			
			$this->success($message);
		}	
	}
	
	
	public function success($message){
		
		$data = array(
			'head' => $this->load->view('system/head',NULL,TRUE),
			'header' => '',
			'navbar' => $this->load->view('system/navbar',NULL,TRUE),
			'content' => $this->load->view('user/add',array('message' => $message),TRUE),
			'footer' => $this->load->view('system/footer',NULL,TRUE)
		);
		$this->load->view('system/layout',$data);
	}
	

}
	