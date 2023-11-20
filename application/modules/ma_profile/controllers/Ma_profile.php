<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ma_profile extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_ma_profile');
		 $this->load->model('login/m_session');
	}
	
	
	// index
	function index()
	{	
		$id = $this->session->userdata('session_id');

		$data = array(
			'namamodule' 		=> "ma_profile",
			'namafileview' 		=> "V_ma_profile",
			'profile'		=> $this->m_ma_profile->profile($id),
		);
		$data['username'] = $this->m_ma_profile->oke($id);
		$data['nama'] = $this->m_ma_profile->oke($id);
		$data['password'] = $this->m_ma_profile->oke($id);
		$data['telepon'] = $this->m_ma_profile->oke($id);
		$data['id'] = $this->m_ma_profile->oke($id);
		$data['level'] = $this->m_ma_profile->oke($id);
		echo Modules::run('template_profile/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_ma_profile->tambah();
		redirect('ma_profile');
	}

	function edit()
	{
		$this->m_ma_profile->edit();
		redirect('ma_profile');
	}

	function hapus($id)
	{
		$this->m_ma_profile->hapus($id);
		redirect('ma_profile');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "ma_profile",
			'namafileview' 	=> "V_ma_profile",
			'tampil'		=> $this->m_ma_profile->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 