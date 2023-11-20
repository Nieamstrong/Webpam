<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_beranda extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_admin_beranda');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "admin_beranda",
			'namafileview' 	=> "V_admin_beranda",
			'petugas'		=> $this->m_admin_beranda->petugas(),
			'masyarakat'		=> $this->m_admin_beranda->masyarakat(),
		);
		echo Modules::run('template_admin/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_admin_beranda->tambah();
		redirect('admin_beranda');
	}

	function editpetugas()
	{
		$this->m_admin_beranda->editpetugas();
		redirect('admin_beranda');
	}

	function hapuspetugas($id)
	{
		$this->m_admin_beranda->hapuspetugas($id);
		redirect('admin_beranda');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "admin_beranda",
			'namafileview' 	=> "V_admin_beranda",
			'tampil'		=> $this->m_admin_beranda->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 