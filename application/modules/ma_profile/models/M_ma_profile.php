<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_ma_profile extends CI_Model
{



	function profile($id)
	{
		$this->db->select('*')
			->join('tb_user', 'tb_user.id_user = tb_pengaduan.id_user', 'left')
			->where('tb_pengaduan.id_user', $id);
		$query = $this->db->get('tb_pengaduan');
		return $query->result();
	}
	function oke($id)
	{
		$this->db->select('*')
		->from('tb_user')
		->where('id_user',$id);
		$query = $this->db->get();
		return $query->row();
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

	function edit()
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


	function hapus($id)
	{
		$this->db->where('id_pengaduan', $id)->delete('tb_pengaduan');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_sekolah', $cari)->get('sekolah')->result();
	}
}
