<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_petugas_laporan extends CI_Model
{

	function laporan()
	{
		$this->db->select('*')
 		->join('tb_user','tb_user.id_user = tb_pengaduan.id_user');
 		$query = $this->db->get('tb_pengaduan');
 		return $query->result();
	}

	function masyarakat()
	{
		$this->db->select('*')
			->where('level', 2);
		$query = $this->db->get('tb_user');
		return $query->result();
	}

	function tambah()
	{
		$nik		= $this->input->post('nik');
		$nama		= $this->input->post('nama');
		$username	= $this->input->post('username');
		$password	= $this->input->post('password');
		$password2	= sha1($password);
		$telepon	= $this->input->post('telepon');
		$level		= $this->input->post('level');

		$data = array(
			'nik'			=> $nik,
			'nama'			=> $nama,
			'username'		=> $username,
			'password'		=> $password2,
			'telepon'		=> $telepon,
			'level'			=> $level,
		);

		$this->db->insert('tb_user', $data);
	}

	function editlaporan()
	{
		$id_user		= $this->input->post('id_user');
		$id_pengaduan		= $this->input->post('id_pengaduan');
		$status		= $this->input->post('status');

		$data = array(
			'id_user'			=> $id_user,
			'id_pengaduan'			=> $id_pengaduan,
			'status'		=> $status,
		);

		$this->db->where('id_pengaduan',$id_pengaduan)->update('tb_pengaduan', $data);
	}

	function hapuspengaduan($id)
	{
		$this->db->where('id_pengaduan', $id)->delete('tb_pengaduan');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_sekolah', $cari)->get('sekolah')->result();
	}
}
