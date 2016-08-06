<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Video extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function insert_video($info_guardar){
	 	$this->db->insert('video',$info_guardar);
	 }	

	public function get_videos(){
	  	$this->db->select('*');
		$this->db->from('video');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	 }

	  public function delete_video($idvideo){
	 	$this->db->where('idvideo',$idvideo);
	 	$this->db->delete('video');
	}

	public function info_video($idvideo){
		$this->db->where('idvideo',$idvideo);
		$query = $this->db->get('video');
		if($query->num_rows()>0){
			return $query;
		}else
			return FALSE;
	}

	public function edit_video($idvideo,$info_video){
		$this->db->where('idvideo',$idvideo);
		$this->db->update('video',$info_video);
	}



}