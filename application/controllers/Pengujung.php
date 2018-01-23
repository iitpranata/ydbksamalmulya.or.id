<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengujung extends CI_Controller {

	public function index()
	{
		$head = array(
			'title' => 'Yayasan Dharma Bhakti Sosial Provinsi Bengkulu | ydbks.or.id',
			'meta' => 'pengujung/1-head/meta_pengujung',
			'css_mdl' => 'pengujung/1-head/css_mdl_pengujung',
			'css_owl' => 'pengujung/1-head/css_owl_pengujung',
		);

		$body = array(
			'utama' => 'pengujung/2-body/main/halaman_pengujung',
			'header' => 'pengujung/2-body/main/header_pengujung',
			'footer' =>	'pengujung/2-body/main/footer_pengujung',
			'halaman' => 'pengujung/2-body/beranda_pengujung',
		);

		$javascript = array(
			'jquery' => 'pengujung/3-javascript/jquery',
			'mdl' => 'pengujung/3-javascript/mdl',
			'owl' => 'pengujung/3-javascript/owl',
		);

		$this->load->view('pengujung/1-head', $head);
		$this->load->view('pengujung/2-body', $body);
		$this->load->view('pengujung/3-javascript', $javascript);
	}

	public function tentang()
	{
		$head = array(
			'title' => 'Tentang | Sejarah - Yayasan Dharma Bhakti Sosial Provinsi Bengkulu | ydbks.or.id',
			'meta' => 'pengujung/1-head/meta_pengujung',
			'css_mdl' => 'pengujung/1-head/css_mdl_pengujung',
			'css_timeline' => 'pengujung/1-head/css_timeline',
		);

		$body = array(
			'utama' => 'pengujung/2-body/main/halaman_pengujung',
			'header' => 'pengujung/2-body/main/header_pengujung',
			'footer' =>	'pengujung/2-body/main/footer_pengujung',
			'halaman' => 'pengujung/2-body/tentang_pengujung',
			'tentang' => 'pengujung/2-body/tentang_sajarah_pengujung'
		);

		$javascript = array(
			'mdl' => 'pengujung/3-javascript/mdl',
		);

		$this->load->view('pengujung/1-head', $head);
		$this->load->view('pengujung/2-body', $body);
		$this->load->view('pengujung/3-javascript', $javascript);
	}

	public function tentang_visi()
	{
		$head = array(
			'title' => 'Tentang | Visi - Yayasan Dharma Bhakti Sosial Provinsi Bengkulu | ydbks.or.id',
			'meta' => 'pengujung/1-head/meta_pengujung',
			'css_mdl' => 'pengujung/1-head/css_mdl_pengujung',
			'css_timeline' => 'pengujung/1-head/css_timeline',
		);

		$body = array(
			'utama' => 'pengujung/2-body/main/halaman_pengujung',
			'header' => 'pengujung/2-body/main/header_pengujung',
			'footer' =>	'pengujung/2-body/main/footer_pengujung',
			'halaman' => 'pengujung/2-body/tentang_pengujung',
			'tentang' => 'pengujung/2-body/tentang_visi_pengujung'
		);

		$javascript = array(
			'mdl' => 'pengujung/3-javascript/mdl',
		);

		$this->load->view('pengujung/1-head', $head);
		$this->load->view('pengujung/2-body', $body);
		$this->load->view('pengujung/3-javascript', $javascript);
	}

	public function tentang_program_kerja()
	{
		$head = array(
			'title' => 'Tentang | Visi - Yayasan Dharma Bhakti Sosial Provinsi Bengkulu | ydbks.or.id',
			'meta' => 'pengujung/1-head/meta_pengujung',
			'css_mdl' => 'pengujung/1-head/css_mdl_pengujung',
			'css_timeline' => 'pengujung/1-head/css_timeline',
		);

		$body = array(
			'utama' => 'pengujung/2-body/main/halaman_pengujung',
			'header' => 'pengujung/2-body/main/header_pengujung',
			'footer' =>	'pengujung/2-body/main/footer_pengujung',
			'halaman' => 'pengujung/2-body/tentang_pengujung',
			'tentang' => 'pengujung/2-body/tentang_program_kerja_pengujung'
		);

		$javascript = array(
			'mdl' => 'pengujung/3-javascript/mdl',
		);

		$this->load->view('pengujung/1-head', $head);
		$this->load->view('pengujung/2-body', $body);
		$this->load->view('pengujung/3-javascript', $javascript);
	}

	public function tentang_pengurus()
	{
		$head = array(
			'title' => 'Tentang | Visi - Yayasan Dharma Bhakti Sosial Provinsi Bengkulu | ydbks.or.id',
			'meta' => 'pengujung/1-head/meta_pengujung',
			'css_mdl' => 'pengujung/1-head/css_mdl_pengujung',
			'css_timeline' => 'pengujung/1-head/css_timeline',
		);

		$body = array(
			'utama' => 'pengujung/2-body/main/halaman_pengujung',
			'header' => 'pengujung/2-body/main/header_pengujung',
			'footer' =>	'pengujung/2-body/main/footer_pengujung',
			'halaman' => 'pengujung/2-body/tentang_pengujung',
			'tentang' => 'pengujung/2-body/tentang_pengurus_pengujung'
		);

		$javascript = array(
			'mdl' => 'pengujung/3-javascript/mdl',
		);

		$this->load->view('pengujung/1-head', $head);
		$this->load->view('pengujung/2-body', $body);
		$this->load->view('pengujung/3-javascript', $javascript);
	}

	public function tentang_anak()
	{
		$head = array(
			'title' => 'Tentang | Visi - Yayasan Dharma Bhakti Sosial Provinsi Bengkulu | ydbks.or.id',
			'meta' => 'pengujung/1-head/meta_pengujung',
			'css_mdl' => 'pengujung/1-head/css_mdl_pengujung',
			'css_timeline' => 'pengujung/1-head/css_timeline',
		);

		$body = array(
			'utama' => 'pengujung/2-body/main/halaman_pengujung',
			'header' => 'pengujung/2-body/main/header_pengujung',
			'footer' =>	'pengujung/2-body/main/footer_pengujung',
			'halaman' => 'pengujung/2-body/tentang_pengujung',
			'tentang' => 'pengujung/2-body/tentang_anak_pengujung'
		);

		$javascript = array(
			'mdl' => 'pengujung/3-javascript/mdl',
		);

		$this->load->view('pengujung/1-head', $head);
		$this->load->view('pengujung/2-body', $body);
		$this->load->view('pengujung/3-javascript', $javascript);
	}

	public function donasi()
	{
		$head = array(
			'title' => 'Donasi - Yayasan Dharma Bhakti Sosial Provinsi Bengkulu | ydbks.or.id',
			'meta' => 'pengujung/1-head/meta_pengujung',
			'css_mdl' => 'pengujung/1-head/css_mdl_pengujung',
			'css_datatables' => 'pengujung/1-head/css_datatables_pengujung',
		);

		$body = array(
			'utama' => 'pengujung/2-body/main/halaman_pengujung',
			'header' => 'pengujung/2-body/main/header_pengujung',
			'footer' =>	'pengujung/2-body/main/footer_pengujung',
			'halaman' => 'pengujung/2-body/donasi_pengujung',
		);

		$javascript = array(
			'jquery' => 'pengujung/3-javascript/jquery',
			'mdl' => 'pengujung/3-javascript/mdl',
			'datatables' => 'pengujung/3-javascript/datatables',
		);

		$this->load->view('pengujung/1-head', $head);
		$this->load->view('pengujung/2-body', $body);
		$this->load->view('pengujung/3-javascript', $javascript);
	}

	public function kegiatan()
	{
		$head = array(
			'title' => 'Kegiatan - Yayasan Dharma Bhakti Sosial Provinsi Bengkulu | ydbks.or.id',
			'meta' => 'pengujung/1-head/meta_pengujung',
			'css_mdl' => 'pengujung/1-head/css_mdl_pengujung',
		);

		$body = array(
			'utama' => 'pengujung/2-body/main/halaman_pengujung',
			'header' => 'pengujung/2-body/main/header_pengujung',
			'footer' =>	'pengujung/2-body/main/footer_pengujung',
			'halaman' => 'pengujung/2-body/kegiatan_pengujung',
		);

		$javascript = array(
			'mdl' => 'pengujung/3-javascript/mdl',
		);

		$this->load->view('pengujung/1-head', $head);
		$this->load->view('pengujung/2-body', $body);
		$this->load->view('pengujung/3-javascript', $javascript);
	}

	public function artikel()
	{
		$head = array(
			'title' => 'Artikel - Yayasan Dharma Bhakti Sosial Provinsi Bengkulu | ydbks.or.id',
			'meta' => 'pengujung/1-head/meta_pengujung',
			'css_mdl' => 'pengujung/1-head/css_mdl_pengujung',
		);

		$body = array(
			'utama' => 'pengujung/2-body/main/halaman_pengujung',
			'header' => 'pengujung/2-body/main/header_pengujung',
			'footer' =>	'pengujung/2-body/main/footer_pengujung',
			'halaman' => 'pengujung/2-body/artikel_pengujung',
		);

		$javascript = array(
			'mdl' => 'pengujung/3-javascript/mdl',
		);

		$this->load->view('pengujung/1-head', $head);
		$this->load->view('pengujung/2-body', $body);
		$this->load->view('pengujung/3-javascript', $javascript);
	}

	public function artikel_post()
	{
		$head = array(
			'title' => 'Hubungi - Yayasan Dharma Bhakti Sosial Provinsi Bengkulu | ydbks.or.id',
			'meta' => 'pengujung/1-head/meta_pengujung',
			'css_mdl' => 'pengujung/1-head/css_mdl_pengujung',
		);

		$body = array(
			'utama' => 'pengujung/2-body/main/halaman_pengujung',
			'header' => 'pengujung/2-body/main/header_pengujung',
			'footer' =>	'pengujung/2-body/main/footer_pengujung',
			'halaman' => 'pengujung/2-body/artikel_post_pengujung',
		);

		$javascript = array(
			'mdl' => 'pengujung/3-javascript/mdl',
		);

		$this->load->view('pengujung/1-head', $head);
		$this->load->view('pengujung/2-body', $body);
		$this->load->view('pengujung/3-javascript', $javascript);
	}

	public function hubungi()
	{
		$head = array(
			'title' => 'Hubungi - Yayasan Dharma Bhakti Sosial Provinsi Bengkulu | ydbks.or.id',
			'meta' => 'pengujung/1-head/meta_pengujung',
			'css_mdl' => 'pengujung/1-head/css_mdl_pengujung',
		);

		$body = array(
			'utama' => 'pengujung/2-body/main/halaman_pengujung',
			'header' => 'pengujung/2-body/main/header_pengujung',
			'footer' =>	'pengujung/2-body/main/footer_pengujung',
			'halaman' => 'pengujung/2-body/hubungi_pengujung',
		);

		$javascript = array(
			'mdl' => 'pengujung/3-javascript/mdl',
			'googlemap' => 'pengujung/3-javascript/googlemap'
		);

		$this->load->view('pengujung/1-head', $head);
		$this->load->view('pengujung/2-body', $body);
		$this->load->view('pengujung/3-javascript', $javascript);
	}
}
