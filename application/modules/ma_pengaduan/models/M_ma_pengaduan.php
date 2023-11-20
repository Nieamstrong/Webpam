<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_ma_pengaduan extends CI_Model
{

	

	function pengaduan($id)
	{
		$this->db->select('*')
 		->join('tb_user','tb_user.id_user = tb_pengaduan.id_user');
 		$query = $this->db->get('tb_pengaduan', $id);
 		return $query->result();
	}

	function tambah($id)
	{
		$id_user = $id;
		$tgl_pengaduan		= date('y-m-d');
		$status	= $this->input->post('status');
		$keterangan	= $this->input->post('keterangan');

		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'id_user'			=> $id_user,
					'status'			=> $status,
					'tgl_pengaduan'		=> $tgl_pengaduan,
					'isi_laporan'		=> $keterangan,
					'foto' 				=> $gbr['file_name'],
					
					
				);
				$this->db->insert('tb_pengaduan', $data);
			
			}	 
		}
		else{
				$data = array(
					'id_user'			=> $id_user,
					'status'			=> $status,
					'tgl_pengaduan'		=> $tgl_pengaduan,
					'isi_laporan'		=> $keterangan,
					'foto' 				=> 'kosong1.png',
				);
				$this->db->insert('tb_pengaduan', $data);
			}
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
