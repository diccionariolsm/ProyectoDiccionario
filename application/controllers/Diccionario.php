<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diccionario extends DSLM_Controller{
	
	/*controlador para la vista principal de bienvenida, solo manda a llamar la vista panel*/
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data = array(
			'head' => $this->load->view('system/head',NULL,TRUE),
			'header' => '',
			'navbar' => $this->load->view('system/navbar',NULL,TRUE),
			//'content' => $this->load->view('home/content',NULL,TRUE),
			'content' => $this->load->view('administracion/panel',NULL,TRUE),
			'footer' => $this->load->view('system/footer',NULL,TRUE)
		);
		$this->load->view('system/layout',$data);	
	}
}