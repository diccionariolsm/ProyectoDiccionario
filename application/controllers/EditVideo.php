<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditVideo extends DSLM_Controller{


	public function __construct(){
		parent::__construct();
		$this->load->model('video');
	}
	
	public function index(){
	}
	
	public function info_v(){
		$idvideo =$this->uri->segment(3);
		$info_video = $this->video->info_video($idvideo);


		if($info_video != FALSE){
			foreach ($info_video->result() as $row) {
				//$iduser = $row->iduser;
				$nombre = $row->nombre;         
                $descripcion = $row->descripcion;
			}

			$info = array(
				'idvideo' => $idvideo,
				'nombre' => $nombre,
				'descripcion' => $descripcion,
				'archivo' => $nombre);
		}else{
			$data = '';
			return FALSE;
		}

		$data = array(
			'head' => $this->load->view('system/head',NULL,TRUE),
			'header' => '',
			'navbar' => $this->load->view('system/navbar',NULL,TRUE),
			'menu' => '',
			'content' => $this->load->view('video/edit',$info,TRUE),
			//'footer' => $this->load->view('system/footer',NULL,TRUE)
		);
		$this->load->view('system/layout',$data);
	
}
	public function edit_v(){
		 $idvideo = $this->uri->segment(3);

		$info_video = array(
			'nombre' => xss_clean($this->input->post('nombre')),
			'descripcion' => xss_clean($this->input->post('descripcion')));
		
		$this->video->edit_video($idvideo,$info_video);


		$mostrar_video = array('videos' => $this->video->get_videos());



		$data = array(
			'head' => $this->load->view('system/head',NULL,TRUE),
			'header' => '',
			'navbar' => $this->load->view('system/navbar',NULL,TRUE),
			'menu' => $this->load->view('system/menu_lateral',NULL,TRUE),
			'content' => $this->load->view('video/t_videos',$mostrar_video,TRUE),
			'footer' => $this->load->view('system/footer',NULL,TRUE)
		);
		$this->load->view('system/layout',$data);

	}

}
