<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('id_user'))
		{
			redirect('dashboard');
		}
		$this->load->library('form_validation');
		$this->load->model('login_model');
	}

	function index()
	{
		$this->load->view('login/index');
	}

	function validation()
	{
		$this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run() == TRUE){
			$result = $this->login_model->can_login($this->input->post('email'), $this->input->post('password'));
			if($result == ''){
				redirect('dashboard');
			} else {
				$this->session->set_flashdata('message',$result);
				redirect('login/index');
			}
		} else {
			$this->session->set_flashdata('message', 'Please insert matching inputs');
			$this->index();
		}
	}

}

?>
