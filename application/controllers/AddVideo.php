<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddVideo extends DSLM_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('video');
	}


	public function index(){
		$data = array(
			'head' => $this->load->view('system/head',NULL,TRUE),
			'header' => '',
			'navbar' => $this->load->view('system/navbar',NULL,TRUE),
			'menu' => '',
			'content' => $this->load->view('video/add',NULL,TRUE),
			//'footer' => $this->load->view('system/footer',NULL,TRUE)
		);
		$this->load->view('system/layout',$data);
	}

	public function insert_v(){

		$info_guardar = array(
			'nombre' => xss_clean($this->input->post('nombre')),
			'descripcion' => xss_clean($this->input->post('descripcion'))
			);

		if($this->cargar_video()){
			$this->video->insert_video($info_guardar);	
			$this->index();
		}else{
			echo "VIDEO NO CARGADO";
			//$this->index();
		}
	}

	public function cargar_video(){

        $config['upload_path'] = './videos/'; //Carpeta destino (donde se van a cargar los videos)
        $config['file_name'] = $this->input->post('nombre'); //Nombre con el que se guardara el video en la carpeta
        $config['allowed_types'] = "mp4|mpg"; //Tipos de extenciones de archivo permitidas
        //$config['allowed_types'] = "avi|mp4|mpg|gif|jpg|jpeg|png";

		

        //Se inicializa la libreria 'upload' y se carga la configuración
		$this->load->library('upload', $config);

		//Se valida que se cargo el video
        if (!$this->upload->do_upload('archivo')) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();           
            echo "FALSO";
            return FALSE;
        }else{
        	//echo "Se cargo video correctamente";
        	return TRUE;
        }
    }
}