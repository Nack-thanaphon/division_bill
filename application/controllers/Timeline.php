<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Timeline extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// if($this->session->userdata('m_level') !=1){
		// 		redirect('user','refresh');
		// }
		$this->load->model('doc_model');
	}

	public function index()
	{
		$this->load->view('template/header.php');
		$this->load->view('template/navbar.php');
		$this->load->view('template/aside.php');
		$this->load->view('timeline/index.php');
		$this->load->view('template/footer.php');
		$this->load->view('template/script.php');

	}
}
