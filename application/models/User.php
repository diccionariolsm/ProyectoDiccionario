<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	/**
	 * is_register($user)
	 * 
	 * Este método determina si lso datos del usuario estan registrados en la base de datos
	 * 
	 * @param array()  $user   User es una rreglo compuesto por:
	 * 								'username'   String
	 * 								'password'   String códificada en MD5
	 * @return boolean			Regresa FALSE si el usuario no esta registrado
	 * 							y TRUE si el usuario esta registrado
	 */						
	public function is_register($user){
		extract($user);
		$this->db->select('*');
		$this->db->from('diccionario');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get();
		$result = $query->result_array();
		if(empty($result))
			return FALSE;
		else
			return TRUE;
		
	}
	
	/**
	 * set_user($user)
	 * 
	 * Este método es para agregar un usuario al catálogo de usuarios
	 * 
	 * @param array()	Arreglo con llos datos del usuario
	 * 					'username'    Cadena nombre de usuario
	 * 					'password' 	  Cadena MD5 del password
	 * 					'mail'		  Cadena con el mail del usuario
	 * 
	 * @return	boolean  Regresa TRUE si inserto correctamente
	 * 					 FALSE si no lo inserto
	 */
	 public function set_user($user){
	 	if($this->db->insert('user',$user)){
	 		return TRUE;
	 	}else{
	 		return FALSE;
	 	}
	 }
	 
	 public function delete_user($iduser){
	 	$this->db->where('iduser',$iduser);
	 	$this->db->delete('user');
	}

	public function info_user($iduser){
		$this->db->where('iduser',$iduser);
		$query = $this->db->get('user');
		if($query->num_rows()>0){
			return $query;
		}else
			return FALSE;
	}

	public function edit_user($iduser,$info_user){
		$this->db->where('iduser',$iduser);
		$this->db->update('user',$info_user);

	}

	 /*
	  * get_users()
	  * 
	  * Este método regresa un lista de todos los usuarios registrados en el catálogo user
	  * 
	  * @return  array    Arreglo 
	  */
	  public function get_users(){
	  	$this->db->select('*');
		$this->db->from('user');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	  }

	
}