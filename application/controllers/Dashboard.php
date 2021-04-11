<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('id_user'))
		{
			redirect('login/index');
		}
	}

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('dashboard');
		$this->load->view('layout/footer');
	}

	public function index_2()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('dashboard2');
		$this->load->view('layout/footer');
	}

	public function index_3()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('dashboard3');
		$this->load->view('layout/footer');
	}

	public function widgets()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('pages/widgets');
		$this->load->view('layout/footer');
	}

	function logout()
	{
		$data = $this->session->all_userdata();
		foreach($data as $row => $rows_value)
		{
			$this->session->unset_userdata($row);
		}
		redirect('login/index');
	}
}
