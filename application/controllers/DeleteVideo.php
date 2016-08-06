<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeleteVideo extends DSLM_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('video');
	}
	
	public function index(){
	}

	public function delete_v(){
		$idvideo = $this->uri->segment(3);
		$info_video = $this->video->info_video($idvideo);


		if($info_video != FALSE){
			foreach ($info_video->result() as $row) {
				$nombre = $row->nombre;         
			}
		}

		unlink('./videos/'.$nombre.".mp4");
		$this->video->delete_video($idvideo);

		$mostrar_video = array('videos' => $this->video->get_videos());



		$data = array(
			'head' => $this->load->view('system/head',NULL,TRUE),
			'header' => '',
			'navbar' => $this->load->view('system/navbar',NULL,TRUE),
			'menu' => $this->load->view('system/menu_lateral',NULL,TRUE),
			'content' => $this->load->view('video/t_videos',$mostrar_video,TRUE),
			'footer' =>''
			//'footer' => $this->load->view('system/footer',NULL,TRUE)
		);
		$this->load->view('system/layout',$data);
	}

}