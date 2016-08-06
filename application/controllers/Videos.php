<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends DSLM_Controller{
	
	
	public function __construct(){
		parent::__construct();
		$this->load->model('video');
	}
	
	public function index(){
		$mostrar_videos = array('videos' => $this->video->get_videos());

		$data = array(
			'head' => $this->load->view('system/head',NULL,TRUE),
			'header' => '',
			'navbar' => $this->load->view('system/navbar',NULL,TRUE),
			'menu' => $this->load->view('system/menu_lateral',NULL,TRUE),
			'content' => $this->load->view('video/t_videos',$mostrar_videos,TRUE),
			//'footer' => $this->load->view('system/footer',NULL,TRUE)
		);
		$this->load->view('system/layout',$data);
	}
}		