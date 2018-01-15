<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Proker extends CI_Model {

	public function getProker(){
		return $this->db->get('proker');
	}
	public function insertProker($data){
		return $this->db->insert('proker',$data);
	}
	public function deleteProker($id_proker){
		return $this->db->delete('proker',$id=array('id_proker'=>$id_proker));
	}
	public function updateProker($id_proker,$data){
		return $this->db->update('proker',$data,$id=array('id_proker'=>$id_proker));
	}
	public function getProkerbyId($id_proker){
		return $this->db->get_where('proker',$id=array('id_proker'=>$id_proker));
	}
}