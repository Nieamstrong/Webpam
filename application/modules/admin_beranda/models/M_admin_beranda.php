<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin_beranda extends CI_Model
{

	function petugas()
	{
		$this->db->select('*')
			->where('level', 3);
		$query = $this->db->get('tb_user');
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

	function editpetugas()
	{
		$id_user		= $this->input->post('id_user');
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

		$this->db->where('id_user',$id_user)->update('tb_user', $data);
	}

	function hapuspetugas($id)
	{
		$this->db->where('id_user', $id)->delete('tb_user');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_sekolah', $cari)->get('sekolah')->result();
	}
}
