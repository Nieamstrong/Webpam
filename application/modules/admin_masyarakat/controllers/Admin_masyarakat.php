<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_masyarakat extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_admin_masyarakat');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 		=> "admin_masyarakat",
			'namafileview' 		=> "V_admin_masyarakat",
			'masyarakat'		=> $this->m_admin_masyarakat->masyarakat(),
		);
		echo Modules::run('template_admin/tampilCore', $data);
	}

	function tambahmasyarakat()
	{
		$this->m_admin_masyarakat->tambahmasyarakat();
		redirect('admin_masyarakat');
	}

	function editmasyarakat()
	{
		$this->m_admin_masyarakat->editmasyarakat();
		redirect('admin_masyarakat');
	}

	function hapusmasyarakat($id)
	{
		$this->m_admin_masyarakat->hapusmasyarakat($id);
		redirect('admin_masyarakat');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "admin_masyarakat",
			'namafileview' 	=> "V_admin_masyarakat",
			'tampil'		=> $this->m_admin_masyarakat->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 