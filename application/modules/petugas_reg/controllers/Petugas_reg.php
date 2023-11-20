<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas_reg extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('m_Petugas_reg');
		$this->load->model('login/m_session');
	}


	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Petugas_reg",
			'namafileview' 	=> "V_Petugas_reg",
			'petugas'		=> $this->m_Petugas_reg->petugas(),
			'masyarakat'		=> $this->m_Petugas_reg->masyarakat(),
		);
		echo Modules::run('template_Petugas/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_Petugas_reg->tambah();
		redirect('Petugas_reg');
	}

	function editpetugas()
	{
		$this->m_Petugas_reg->editpetugas();
		redirect('Petugas_reg');
	}

	function hapuspetugas($id)
	{
		$this->m_Petugas_reg->hapuspetugas($id);
		redirect('Petugas_reg');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "Petugas_reg",
			'namafileview' 	=> "V_Petugas_reg",
			'tampil'		=> $this->m_Petugas_reg->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
}
