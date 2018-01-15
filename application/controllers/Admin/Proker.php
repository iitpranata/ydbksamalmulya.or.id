<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proker extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('Model_Proker');
    }

	function index(){
		$data['halaman'] = "Admin/Proker.php";
		$data['proker'] = $this->Model_Proker->getProker();
		$data['judul'] = "Program Kerja Yayasan";
		$this->load->view('Admin/template',$data);
	}
	function tambah_proker(){
		$data['halaman'] = "Admin/Tambah_Proker.php";
		$data['judul'] = "Program Kerja Yayasan<br><small>Penambahan Program Kerja Yayasan</small>";
		$this->load->view('Admin/template',$data);
	}
	function goTambah_proker(){
		$data=array('bidang'=>$this->input->post('bidang'),'proker'=>$this->input->post('proker'));
		$this->Model_Proker->insertProker($data);
		redirect('Admin/Proker');
	}
	function ubah_proker($id_proker){
		$data['halaman'] = "Admin/Ubah_Proker.php";
		$data['proker'] = $this->Model_Proker->getProkerbyId($id_proker);
		$data['judul'] = "Program Kerja Yayasan<br><small>Pengubahan Program Kerja</small>";
		$this->load->view('Admin/template',$data);
	}
	function goUbah_proker($id_proker){
		$data=array('bidang'=>$this->input->post('bidang'),'proker'=>$this->input->post('proker'));
		$this->Model_Proker->updateProker($id_proker,$data);
		redirect('Admin/Proker');
	}
	function hapus_proker($id_proker){
		$this->Model_Proker->deleteProker($id_proker);
		redirect('Admin/Proker');
	}

}