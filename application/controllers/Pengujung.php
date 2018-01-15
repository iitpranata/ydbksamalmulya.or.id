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

	public function kegiatan()
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
			'title' => 'Hubungi - Yayasan Dharma Bhakti Sosial Provinsi Bengkulu | ydbks.or.id',
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
