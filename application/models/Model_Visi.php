<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Visi extends CI_Model {
	public function getVisi(){
		return $this->db->get('visi')->result();
	}
	public function updateVisi($data){
		return $this->db->update('visi',$data,$id=array('id_visi'=>1));
	}
}	