<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Pengurus extends CI_Model {
	
	public function getPengurusPembina(){
		return $this->db->get_where('pengurus',$group=array('kelompok_jabatan'=>'pembina'));
	}
	public function getPengurusInti(){
		return $this->db->get_where('pengurus',$group=array('kelompok_jabatan'=>'inti'));
	}
	public function getPengurusSeksi(){
		$this->db->order_by('jabatan');
		return $this->db->get_where('pengurus',$group=array('kelompok_jabatan'=>'seksi'));
	}
	public function getPengurusPengawas(){
		return $this->db->get_where('pengurus',$group=array('kelompok_jabatan'=>'pengawas'));
	}
	public function insertPengurus($data){
		return $this->db->insert('pengurus',$data);
	}
	public function updatePengurus($id_pengurus,$data){
		return $this->db->update('pengurus',$data,$id=array('id_pengurus'=>$id_pengurus));
	}
	public function deletePengurus($id_pengurus){
		return $this->db->delete('pengurus', $id=array('id_pengurus'=>$id_pengurus));
	}
	public function getFotoPengurus($id_pengurus){
		foreach($this->db->get_where('pengurus', $id=array('id_pengurus'=>$id_pengurus))->result() as $p){
			return $p->foto;
		}
	}
}