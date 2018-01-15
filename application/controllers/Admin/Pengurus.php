<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengurus extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('Model_Pengurus');
    }

	function index(){
		$data['halaman'] = "Admin/Pengurus.php";
		$data['pembina'] = $this->Model_Pengurus->getPengurusPembina();
		$data['inti'] = $this->Model_Pengurus->getPengurusInti();
		$data['seksi'] = $this->Model_Pengurus->getPengurusSeksi();
		$data['pengawas'] = $this->Model_Pengurus->getPengurusPengawas();
		$data['judul'] = "Struktur Pengurus Yayasan";
		$this->load->view('Admin/template',$data);
	}

	function tambah_seksi(){
		$config = array(
			'upload_path' => './assets/img/foto-pengurus/',
			'allowed_types' => 'jpg|png|gif|jpeg',
		    'max_width' => '18000',
    		'max_height' => '18000',
		    'max_size' => '30000',
		    'file_name' => url_title($this->input->post('userfile'))
  			);
		$this->load->library('upload',$config);
		if(! $this->upload->do_upload()){
			$error = $this->upload->display_errors();
			echo $error;
			if(is_null($this->input->post('userfile'))){
		   		$data=array(
		   				'nama'=>$this->input->post('nama')
		   			);
		   		$this->Model_Pengurus->insertPengurus($data);
		   		redirect('Admin/Pengurus');	
	   		}else{
	   			echo $error;
	   		}
	   	}else{
	   		$data=array(
	   				'foto'=>$this->upload->data('file_name'),
	   				'jabatan'=>strtoupper($this->input->post('jabatan')),
	   				'kelompok_jabatan'=>"seksi",
	   				'nama'=>$this->input->post('nama')
	   			);
	   		$this->Model_Pengurus->insertPengurus($data);
	   		redirect('Admin/Pengurus');	
	   	}
	}

	function goUbah_pengurus($id_pengurus){
		$config = array(
			'upload_path' => './assets/img/foto-pengurus/',
			'allowed_types' => 'jpg|png|gif|jpeg',
		    'max_width' => '18000',
    		'max_height' => '18000',
		    'max_size' => '30000',
		    'file_name' => url_title($this->input->post('userfile'))
  			);
		$this->load->library('upload',$config);
		if(! $this->upload->do_upload()){
			$error = $this->upload->display_errors();
			echo $error;
			if(is_null($this->input->post('userfile'))){
		   		$data=array(
		   			'nama'=>$this->input->post('nama')
		   		);
		   		$this->Model_Pengurus->updatePengurus($id_pengurus, $data);
		   		redirect('Admin/Pengurus');	
	   		}else{
	   			echo $error;
	   		}
	   	}else{
	   		unlink('./assets/img/foto-pengurus/'.$this->Model_Pengurus->getFotoPengurus($id_pengurus));
	   		$data=array(
	   				'foto'=>$this->upload->data('file_name'),
	   				'nama'=>$this->input->post('nama')
	   			);
	   		$this->Model_Pengurus->updatePengurus($id_pengurus, $data);
	   		redirect('Admin/Pengurus');	
	   	}
	}

}