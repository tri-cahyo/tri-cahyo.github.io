<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
	}


	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'data' => $this->m_admin->lihat()->result_array(),



		];
		$this->load->view('user/index', $data);
	}
}
