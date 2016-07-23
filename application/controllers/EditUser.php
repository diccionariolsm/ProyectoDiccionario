<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditUser extends DSLM_Controller{


	public function __construct(){
		parent::__construct();
		$this->load->model('user');
	}
	
	public function index(){
	}
	
	public function info_u(){
		$iduser =$this->uri->segment(3);
		$info_user = $this->user->info_user($iduser);

		if($info_user != FALSE){
			foreach ($info_user->result() as $row) {
				//$iduser = $row->iduser;
				$username = $row->username;           
                $password = $row->password;
                $mail = $row->mail;
			}

			$info = array(
				'iduser' => $iduser,
				'username' => $username,
				'password' => $password,
				'mail' => $mail);
		}else{
			$data = '';
			return FALSE;
		}

		$data = array(
			'head' => $this->load->view('system/head',NULL,TRUE),
			'header' => '',
			'navbar' => $this->load->view('system/navbar',NULL,TRUE),
			'menu' => '',
			'content' => $this->load->view('user/edit',$info,TRUE),
			//'footer' => $this->load->view('system/footer',NULL,TRUE)
		);
		$this->load->view('system/layout',$data);
	
}
	public function editar_u(){
		 $iduser = $this->uri->segment(3);

		$info_user = array(
			'username' => xss_clean($this->input->post('username')),
			'password' => do_hash(xss_clean($this->input->post('password')),'md5'),
			'mail' => xss_clean($this->input->post('mail')));
		
		$this->user->edit_user($iduser,$info_user);


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
