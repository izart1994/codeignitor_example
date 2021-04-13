<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		$data['mahasiswa'] = $this->db_mahasiswa->get_data()->result();

		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('layout/footer');
	}

	public function tambah()
	{
		$nama 			= $this->input->post('mahasiswa_nama');
		$ic 			= $this->input->post('mahasiswa_ic');
		$tarikh_lahir 	= $this->input->post('mahasiswa_tarikh_lahir');
		$desc 			= $this->input->post('mahasiswa_desc');
		$tel 			= $this->input->post('mahasiswa_tel');
		$pic 			= $_FILES['mahasiswa_pic'];
		if($pic=''){
		}else{
			$config['upload_path']		= './assets/gambar';
			$config['allowed_types']	= 'jpg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('mahasiswa_pic')){
				echo "Gagal Upload";
				die();
			}else{
				$pic = $this->upload->data('file_name');
			}
		}

		$data = array(
			'mahasiswa_nama'			=> $nama,
			'mahasiswa_ic'				=> $ic,
			'mahasiswa_tarikh_lahir'	=> $tarikh_lahir,
			'mahasiswa_desc'			=> $desc,
			'mahasiswa_tel'				=> $tel,
			'mahasiswa_pic'				=> $pic
		);

		$this->db_mahasiswa->insert_data($data, 'mahasiswa');
		redirect('mahasiswa/index');
	}

	public function padam($id)
	{
		$where = array('id_mahasiswa' => $id);
		$this->db_mahasiswa->delete_data($where, 'mahasiswa');
		redirect('mahasiswa/index');
	}

	public function edit($id)
	{
		$where = array('id_mahasiswa' => $id);
		$data['mahasiswa'] = $this->db_mahasiswa->edit_data($where, 'mahasiswa')->result();

		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('mahasiswa/edit', $data);
		$this->load->view('layout/footer');
	}

	public function update_data()
	{
		$id 			= $this->input->post('id_mahasiswa');
		$nama 			= $this->input->post('mahasiswa_nama');
		$ic 			= $this->input->post('mahasiswa_ic');
		$tarikh_lahir 	= $this->input->post('mahasiswa_tarikh_lahir');
		$desc 			= $this->input->post('mahasiswa_desc');
		$tel 			= $this->input->post('mahasiswa_tel');
		$pic 			= $_FILES['mahasiswa_pic'];
		if($pic=''){
		}else{
			$config['upload_path']		= './assets/gambar';
			$config['allowed_types']	= 'jpg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('mahasiswa_pic')){
				echo "Gagal Upload";
				die();
			}else{
				$pic = $this->upload->data('file_name');
			}
		}

		$data = array(
			'mahasiswa_nama'			=> $nama,
			'mahasiswa_ic'				=> $ic,
			'mahasiswa_tarikh_lahir'	=> $tarikh_lahir,
			'mahasiswa_desc'			=> $desc,
			'mahasiswa_tel'				=> $tel,
			'mahasiswa_pic'				=> $pic
		);

		$where = array('id_mahasiswa' => $id);
		$this->db_mahasiswa->update_data($where, $data, 'mahasiswa');
		redirect('mahasiswa/index');
	}

	public function detail($id)
	{
		$where = array('id_mahasiswa' => $id);
		$data['mahasiswa'] = $this->db_mahasiswa->detail_data($where, 'mahasiswa');

		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('mahasiswa/detail', $data);
		$this->load->view('layout/footer');
	}
}
