<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Artikel extends CI_Model {
	public function get(){
		$hasil = $this->db->get('user');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return array();
		}
	}

	public function create($data_user){
		$this->db->insert('user', $data_user);
	}

	public function update($kode, $data_user){
		$this->db->where('Kode', $kode)
				 ->update('user', $data_user);
	}

	public function delete($kode){
		$this->db->where('kode', $kode)
				 ->delete('user');
	}
}	