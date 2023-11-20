<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_laporan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_admin_laporan');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "admin_laporan",
			'namafileview' 	=> "V_admin_laporan",
			'laporan'		=> $this->m_admin_laporan->laporan(),
		);
		echo Modules::run('template_admin/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_admin_laporan->tambah();
		redirect('admin_laporan');
	}

	function editlaporan()
	{
		$this->m_admin_laporan->editlaporan();
		redirect('admin_laporan');
	}

	function hapuspengaduan($id)
	{
		$this->m_admin_laporan->hapuspengaduan($id);
		redirect('admin_laporan');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "admin_laporan",
			'namafileview' 	=> "V_admin_laporan",
			'tampil'		=> $this->m_admin_laporan->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	function fpdf()
	{
		$mpdf = new \Mpdf\Mpdf();

		$hasil = array(
			'namamodule' 			=> "admin_laporan",
			'export'		=> $this->m_admin_laporan->export(),
		);

		$data = $this->load->view('V_export',$hasil,TRUE);
		$nama = "Laporan Pengaduan Masyarakat";
		$mpdf->WriteHTML($data);
		$mpdf->output($nama.'.pdf','I');

	}
	
}
 