<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// if($this->session->userdata('m_level') !=1){
		// 		redirect('user','refresh');
		// }
		$this->load->model('Form_model');
		$this->load->helper('quickstart_helper');
	}

	public function index()
	{
		$data['countPass'] = $this->Form_model->getPass();
		$data['countFail'] = $this->Form_model->getCancle();
		$data['countReq'] = $this->Form_model->getRequst();

		$this->load->view('template/header.php');
		$this->load->view('template/navbar.php');
		$this->load->view('template/loader.php');
		$this->load->view('template/aside.php');
		$this->load->view('Dashboard.php', $data);
		$this->load->view('template/footer.php');
		$this->load->view('template/script.php');
	}
}
