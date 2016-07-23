<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeleteUser extends DSLM_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('user');
	}
	
	public function index(){
	}

	public function delete_u(){
		$iduser = $this->uri->segment(3);
		$this->user->delete_user($iduser);

		$mostrar_usuarios = array('users' => $this->user->get_users());



		$data = array(
			'head' => $this->load->view('system/head',NULL,TRUE),
			'header' => '',
			'navbar' => $this->load->view('system/navbar',NULL,TRUE),
			'menu' => $this->load->view('system/menu_lateral',NULL,TRUE),
			'content' => $this->load->view('user/t_users',$mostrar_usuarios,TRUE),
			'footer' => $this->load->view('system/footer',NULL,TRUE)
		);
		$this->load->view('system/layout',$data);
	}

	
}