<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// $this->load->library('encryption');
		$this->load->model('db_user');
	}

	public function index()
	{
		$this->load->view('login/register');
	}

	public function validation()
	{
		$this->form_validation->set_rules('fullname', 'Full Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.user_email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules('password2', 'Password', 'required|min_length[5]|matches[password]');
		// if form validation is true
		if($this->form_validation->run() == TRUE){
			$encrypted_key = md5(rand());
			$data = array(
				'user_name' 	=> $this->input->post('fullname'),
				'user_email'	=> $this->input->post('email'),
				'user_pwd'		=> md5($this->input->post('password')),
				'user_key'		=> $encrypted_key
			);
			$id = $this->db_user->insert_data('user', $data);
			if($id > 0){
				$this->session->set_flashdata('message', 'You can login now. Proceed to <a href="index">login page</a>');
				redirect('login/register');
			}
		}else{
			$this->index();
		}
	}
}
