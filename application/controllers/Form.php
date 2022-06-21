<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('asia/bangkok');
class Form extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Form_in');
		$this->load->helper('quickstart_helper');
	}

	public function index()

	{

		$data = $this->Form_in->get_list();
		$result = array();
		$result['data'] = array();

		$start = $data['start'];
		$end = $data['end'];
		// แปลงระยะเวลาของวันที่
		$test1 = strtotime($start);
		$test2 = strtotime($end);
		$datediff = $test1 - $test2;
		$total = round($datediff / (60 * 60 * 24));
		// แปลงรูปแบบเวลาวันที่เป็น google
		$start1 = new DateTime($start);
		$end1 = new DateTime($end);

		$start = $start1->format(DateTime::ISO8601);
		$end = $end1->format(DateTime::ISO8601);

		$data = array();
		$data = array($start, $end);
		$data = $total;

		$data = array(calldayof($start, $end));
		// ทดสอบfuntionการเรียก Api
		$result['rs'] = $data;

		// $total_date = $item['total_date'];
		// $list['rs'] = $item['dateoff_list'];


		// $data['rs'] = ($total - $item['total_date']);
		// $result['rs'] = array(
		// 	'total' => $total_date,
		// 	'list' => $list,
		// );

		// echo json_encode($result);

		$this->load->view('template/header.php');
		$this->load->view('template/navbar.php');
		$this->load->view('template/aside.php');
		$this->load->view('form/index.php', $result);
		$this->load->view('template/footer.php');
		$this->load->view('template/script.php');
	}

	public function form_add()
	{
		$this->Form_in->adddata();
		redirect('form');
	}

	// public function get_list()
	// {

	// 	$this->load->helper('name');
	// 	return 'echo';
	// }

}
