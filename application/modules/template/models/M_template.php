<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_template extends CI_Model {

	public function __construct(){

		parent::__construct();

	}
    function riwayat()
	{
		$this->db->select('*');
			
		$query = $this->db->get('tb_pengaduan');
		return $query->result();
	}

	public function get_pengaduan_data()
    {
        $this->db->select('id ,isi_laporan, foto');
        $query = $this->db->get('tb_pengaduan');
        return $query->result();
    }

	

}
