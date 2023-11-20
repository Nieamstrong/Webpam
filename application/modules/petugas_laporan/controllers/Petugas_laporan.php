<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_laporan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_petugas_laporan');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "petugas_laporan",
			'namafileview' 	=> "V_petugas_laporan",
			'laporan'		=> $this->m_petugas_laporan->laporan(),
		);
		echo Modules::run('template_petugas/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_petugas_laporan->tambah();
		redirect('petugas_laporan');
	}

	function editlaporan()
	{
		$this->m_petugas_laporan->editlaporan();
		redirect('petugas_laporan');
	}

	function hapuspengaduan($id)
	{
		$this->m_petugas_laporan->hapuspengaduan($id);
		redirect('petugas_laporan');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "petugas_laporan",
			'namafileview' 	=> "V_petugas_laporan",
			'tampil'		=> $this->m_petugas_laporan->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 