<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conf_dedos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		//Se seleccionan configuraciones dependiendko del numero de dodos

<<<<<<< HEAD
		$sql=$this->db->query("SELECT * FROM cnf_manual WHERE dedos='3'");
=======
		$sql=$this->db->query("SELECT * FROM cnf_manual WHERE no_dedos='1'");
>>>>>>> df92a2139dbf4ad67765579c9ea5f59b9ac9dd9d
		$res = $sql->result_array();
		$data_dedos = array('name_image' => $res );/*array( 'image' =>array('name' => 'sena1.jpe',
																	'id' => '1'),
													'image1' =>array('name' => 'sena1.jpe',
																	'id' => '2')) );*/
		$data = array(
			'head' => $this->load->view('system/head',NULL,TRUE),
			'header' => '',
			'navbar' => $this->load->view('system/navbar',NULL,TRUE),
			'content' => $this->load->view('system/conf_dedos',$data_dedos,TRUE),
			'footer' => $this->load->view('system/footer',NULL,TRUE)
		);
		$this->load->view('system/layout',$data);	
	}

	public function confi($id){
		//se guarda el id de la configuracion y se define el pto de articulacion 

		


		$data_dedos = array('name_image' => array( 'image' =>array('path' => 'sena1.jpe',
																	'idcnf_manual' => '1'),
													'image1' =>array('path' => 'sena1.jpe',
																	'idcnf_manual' => '2')) );
		$data = array(
			'head' => $this->load->view('system/head',NULL,TRUE),
			'header' => '',
			'navbar' => $this->load->view('system/navbar',NULL,TRUE),
			'content' => $this->load->view('system/conf_dedos',$data_dedos,TRUE),
			'footer' => $this->load->view('system/footer',NULL,TRUE)
		);
		$this->load->view('system/layout',$data);	
	}

	
}
