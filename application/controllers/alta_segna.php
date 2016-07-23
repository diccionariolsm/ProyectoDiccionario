<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alta_segna extends DSLM_Controller{


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
			'content' => $this->load->view('registro/alta_segna',NULL,TRUE),
			'footer' => $this->load->view('system/footer',NULL,TRUE)
		);
		$this->load->view('system/layout',$data);
	}
	
	

}
	