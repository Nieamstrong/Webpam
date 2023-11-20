<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ma_riwayat extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_ma_riwayat');
		 $this->load->model('login/m_session');
	}
	function index()
	{	
		$id = $this->session->userdata('session_id');

		$data = array(
			'namamodule' 		=> "ma_riwayat",
			'namafileview' 		=> "V_ma_riwayat",
			'riwayat'		=> $this->m_ma_riwayat->riwayat($id),
		);
		echo Modules::run('template_masyarakat/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_ma_riwayat->tambah();
		redirect('ma_riwayat');
	}

	function edit()
	{
		$this->m_ma_riwayat->edit();
		redirect('ma_riwayat');
	}

	function hapus($id)
	{
		$this->m_ma_riwayat->hapus($id);
		redirect('ma_riwayat');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "ma_riwayat",
			'namafileview' 	=> "V_ma_riwayat",
			'tampil'		=> $this->m_ma_riwayat->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 