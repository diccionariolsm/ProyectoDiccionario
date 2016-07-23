<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diccionario_e_lsm extends CI_Controller {

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
	public function index()
	{
		//echo "string";
		//$this->load->view('welcome_message');
		//$this->load->view('diccionario');
		$this->load->view('system/layout_diccionario');
		//$this->load->view('conf_dedos');
		//$this->load->view('panel_final');
	}

	public function buscar(){
		//echo "algo encontre";
		$b =$this->input->post("b");
		if (strlen($b) >1) {
			//$b ='per';
			$query =  $this->db->query("SELECT * FROM palabras where nombre LIKE '%".$b."%'");
			//print_r($query->result());
			$data['palabra']="No se encontraron resultados";
			foreach ($query->result() as $palabra) {
				//$data['palabra']= 
				echo $palabra->nombre;

			
			//$query = $this->db->query('SELECT * FROM palabras WHERE nombre LIKE '%".$b."%'');
			}
		}
		//$b =$this->input->post("b");

		
		//$this->load->view('welcome_message',$data);

	}
}
