<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('asia/bangkok');
class Form extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Form_model');
		$this->load->helper('quickstart_helper');
	}

	public function index()

	{

		// $data = $this->Form_model->get_list();
		// $result = array();
		// $result['data'] = array();

		// $start = $data['start'];
		// $end = $data['end'];
		// แปลงระยะเวลาของวันที่
		// $test1 = strtotime($start);
		// $test2 = strtotime($end);
		// $datediff = $test1 - $test2;
		// $total = round($datediff / (60 * 60 * 24));
		// แปลงรูปแบบเวลาวันที่เป็น google
		// $start1 = new DateTime($start);
		// $end1 = new DateTime($end);

		// $start = $start1->format(DateTime::ISO8601);
		// $end = $end1->format(DateTime::ISO8601);

		// $data = array();
		// $data = array($start, $end);
		// $data = $total;

		// $data = array(calldayof($start, $end));
		// ทดสอบfuntionการเรียก Api
		// $result['rs'] = $data;

		// $total_date = $item['total_date'];
		// $list['rs'] = $item['dateoff_list'];


		// $data['rs'] = ($total - $item['total_date']);
		// $result['rs'] = array(
		// 	'total' => $total_date,
		// 	'list' => $list,
		// );
		$data['workingArea'] = $this->Form_model->getAllworkingArea();
		$data['address'] = $this->Form_model->getAlladdress();
		$data['jobtype'] = $this->Form_model->getAlljobtype();
		$data['list'] = $this->Form_model->getAlllist();
		$data['countPass'] = $this->Form_model->getPass();

		$data['countFail'] = $this->Form_model->getCancle();
		$data['countNopass'] = $this->Form_model->getNopass();
		$data['countReq'] = $this->Form_model->getRequst();

		$this->load->view('template/header.php');
		$this->load->view('template/navbar.php');
		$this->load->view('template/loader.php');
		$this->load->view('template/aside.php');
		$this->load->view('template/script.php');
		$this->load->view('form/index.php', $data);
		$this->load->view('template/footer.php');
		$this->load->view('form/reqTable.php');
		$this->load->view('form/failTable.php');
		$this->load->view('form/totalTable.php');
		$this->load->view('form/passTable.php');
		$this->load->view('form/canTable.php');
	}


	public function getStatus($b_id = NULL)
	{
		$data['getData'] = $this->Form_model->getSinglereq($b_id);
		$this->load->view('template/header.php');
		$this->load->view('template/loader.php');
		$this->load->view('template/navbar.php');
		$this->load->view('template/aside.php');
		$this->load->view('template/script.php');
		$this->load->view('form/updateStatus.php', $data);
		$this->load->view('template/footer.php');
	}



	public function getReqlist()
	{
		$data = $this->Form_model->getReqlist();
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}
	public function getFaillist()
	{
		$data = $this->Form_model->getFaillist();
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}
	public function getPasslist()
	{
		$data = $this->Form_model->getPasslist();
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function getCanlist()
	{
		$data = $this->Form_model->getCanlist();
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function getTotallist()
	{
		$data = $this->Form_model->getTotallist();
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function form_add()
	{
		$data = $this->Form_model->adddata();
		redirect('form');
	}

	public function getFaildetail()
	{
		$data = $this->Form_model->getFaildetail();
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}
}
