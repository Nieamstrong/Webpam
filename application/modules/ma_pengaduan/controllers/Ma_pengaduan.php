<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ma_pengaduan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_ma_pengaduan');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()

	

	{	
		$id = $this->session->userdata('session_id');

		$data = array(
			'namamodule' 		=> "ma_pengaduan",
			'namafileview' 		=> "V_ma_pengaduan",
			'pengaduan'		=> $this->m_ma_pengaduan->pengaduan($id),
		);
		echo Modules::run('template_masyarakat/tampilCore', $data);
	}

	function tambah()
	{
		$id = $this->session->userdata('session_id');

		$this->m_ma_pengaduan->tambah($id);
		redirect('ma_riwayat');
	}

	function edit()
	{
		$this->m_ma_pengaduan->edit();
		redirect('ma_pengaduan');
	}

	function hapus($id)
	{
		$this->m_ma_pengaduan->hapus($id);
		redirect('ma_pengaduan');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "ma_pengaduan",
			'namafileview' 	=> "V_ma_pengaduan",
			'tampil'		=> $this->m_ma_pengaduan->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 