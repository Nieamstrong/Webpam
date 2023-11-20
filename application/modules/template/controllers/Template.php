<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Template extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		//load model

		$this->load->model('m_template');
		$this->load->model('login/m_session');
	}



	// view core templating
	public function index()
	{
		$data = array(
			'namamodule' 		=> "m_template",
			'namafileview' 		=> "view_template_core",
			'riwayat'		=> $this->m_template->riwayat(),
		);
		$this->load->view('view_template_core', $data);
	}

	public function tampilCore()
	{
		$id = $this->session->userdata('session_id');

		// Dapatkan data pengaduan dari model M_template
		$pengaduan_data = $this->M_template->get_pengaduan_data();

		$data['pengaduan'] = [];

		foreach ($pengaduan_data as $pengaduan) {
			$data['pengaduan'][] = [
				'isi_laporan' => $pengaduan->isi_laporan,
				'foto' => $pengaduan->foto,
			];
		}
		$this->load->view('view_template_core', $data);
	}
}
