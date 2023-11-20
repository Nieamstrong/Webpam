<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_reg extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('m_admin_reg');
		$this->load->model('login/m_session');
	}


	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "admin_reg",
			'namafileview' 	=> "V_admin_reg",
			'petugas'		=> $this->m_admin_reg->petugas(),
			'masyarakat'		=> $this->m_admin_reg->masyarakat(),
		);
		echo Modules::run('template_admin/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_admin_reg->tambah();
		redirect('admin_reg');
	}

	function editpetugas()
	{
		$this->m_admin_reg->editpetugas();
		redirect('admin_reg');
	}

	function hapuspetugas($id)
	{
		$this->m_admin_reg->hapuspetugas($id);
		redirect('admin_reg');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "admin_reg",
			'namafileview' 	=> "V_admin_reg",
			'tampil'		=> $this->m_admin_reg->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
}
