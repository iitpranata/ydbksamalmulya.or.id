<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('Model_Sejarah');
    }

	function index(){
		$data['halaman'] = "Admin/Sejarah.php";
		$data['sejarah'] = $this->Model_Sejarah->getSejarah();
		$data['judul'] = "Sejarah Yayasan";
		$this->load->view('Admin/template',$data);
	}
	function tambah_sejarah(){
		$data['halaman'] = "Admin/Tambah_Sejarah.php";
		$data['judul'] = "Sejarah Yayasan<br><small>Penambahan Rangkaian Sejarah</small>";
		$this->load->view('Admin/template',$data);
	}
	function goTambah_sejarah(){
		$data=array('tahun'=>$this->input->post('tahun'),'sejarah'=>$this->input->post('sejarah'));
		$this->Model_Sejarah->insertSejarah($data);
		redirect('Admin/Sejarah');
	}
	function ubah_sejarah($tahun){
		$data['halaman'] = "Admin/Ubah_Sejarah.php";
		$data['sejarah'] = $this->Model_Sejarah->getSejarahbyTahun($tahun);
		$data['judul'] = "Sejarah Yayasan<br><small>Pengubahan Rangkaian Sejarah $tahun</small>";
		$this->load->view('Admin/template',$data);
	}
	function goUbah_sejarah($tahun){
		$data=array('tahun'=>$this->input->post('tahun'),'sejarah'=>$this->input->post('sejarah'));
		$this->Model_Sejarah->updateSejarah($data, $tahun);
		redirect('Admin/Sejarah');
	}
	function hapus_sejarah($tahun){
		$this->Model_Sejarah->deleteSejarah($tahun);
		redirect('Admin/Sejarah');
	}

}