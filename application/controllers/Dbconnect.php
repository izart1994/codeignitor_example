<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dbconnect extends CI_Controller {
	//  access as url > localhost/codeigniter/db_connect/index
	public function index()
	{
		$this->load->model('ci_1');
		$data['pljr'] = $this->ci_1->get_data();
		$this->load->view('page_contoh', $data);
	}
}
