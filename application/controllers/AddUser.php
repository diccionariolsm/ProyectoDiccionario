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
			'footer' => ''//$this->load->view('system/footer',NULL,TRUE)
		);
		$this->load->view('system/layout',$data);
	}


	public function insert_u(){
		$info_guardar = array(
			'username' => xss_clean($this->input->post('username')),
			'password' => do_hash(xss_clean($this->input->post('password')),'md5'),
			'mail' => xss_clean($this->input->post('mail'))
			);

		$this->user->insert_user($info_guardar);	
		$this->index();
	}

}
	