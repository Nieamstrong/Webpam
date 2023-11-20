<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template_masyarakat extends MX_Controller {

	function __construct()
	{
		parent:: __construct();
		//load model

		$this->load->model('m_template_masyarakat');
		$this->load->model('login/m_session');
	}

	

	// view core templating
	public function index()
	{
		
		$this->load->view('view_template_masyarakat_core');
	}

	public function tampilCore($data)
	{

		$id = $this->session->userdata('session_id');
		$user = $this->m_template_masyarakat->oke($id);
		if ( empty( $this->session->userdata('session_id') ) )
		{
			redirect('login');
		}

		$data['nama'] = $this->m_template_masyarakat->oke($id);
		
		$this->load->view('view_template_masyarakat_core',$data);

		// $id = $this->session->userdata('session_id');
		
		// $this->load->view('view_template_masyarakat_core',$data);
	}

}
