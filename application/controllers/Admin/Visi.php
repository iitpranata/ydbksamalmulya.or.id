<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('Model_Visi');
    }

	function index(){
		$data['halaman'] = "Admin/Visi.php";
		$data['visi'] = $this->Model_Visi->getVisi();
		$data['judul'] = "Visi Yayasan";
		$this->load->view('Admin/template',$data);
	}
	function ubah_visi(){
		$data['halaman'] = "Admin/Ubah_Visi.php";
		$data['visi'] = $this->Model_Visi->getVisi();
		$data['judul'] = "Visi Yayasan<br><small>Pengubahan Visi</small>";
		$this->load->view('Admin/template',$data);
	}
	function goUbah_visi(){
		$data=array('visi'=>$this->input->post('visi'));
		$this->Model_Visi->updateVisi($data);
		redirect('Admin/Visi');
	}

}