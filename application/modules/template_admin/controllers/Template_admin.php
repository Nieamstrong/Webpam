<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template_admin extends MX_Controller {

	function __construct()
	{
		parent:: __construct();
		//load model

		$this->load->model('m_template_admin');
		$this->load->model('login/m_session');
	}

	

	// view core templating
	public function index()
	{
		
		$this->load->view('view_template_admin_core');
	}

	public function tampilCore($data)
	{

		$id = $this->session->userdata('session_id');
		$user = $this->m_template_admin->oke($id);
		if ( empty( $this->session->userdata('session_id') ) )
		{
			redirect('login');
		}

		$data['nama'] = $this->m_template_admin->oke($id);
		
		$this->load->view('view_template_admin_core',$data);

		// $id = $this->session->userdata('session_id');
		
		// $this->load->view('view_template_admin_core',$data);
	}

}
