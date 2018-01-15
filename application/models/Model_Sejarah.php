<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Sejarah extends CI_Model {

	function getSejarah(){
		return $this->db->get('sejarah')->result();
	}
	function getSejarahbyTahun($tahun){
		return $this->db->get_where('sejarah',$data=array('tahun'=>$tahun));
	}
	function updateSejarah($data, $tahun){
		return $this->db->update('sejarah',$data,$dataid=array('tahun'=>$tahun));
	}
	function insertSejarah($data){
		return $this->db->insert('sejarah',$data);
	}
	function deleteSejarah($tahun){
		return $this->db->delete('sejarah',$data=array('tahun'=>$tahun));
	}
}