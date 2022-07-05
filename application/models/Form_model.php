<?php
class Form_model extends CI_Model

{
	public function __construct()
	{
		parent::__construct();
	}

	public function adddata()
	{

		$data = array(
			'b_name' => $this->input->post('b_name'),
			'b_jobType_id' => $this->input->post('b_jobType_id'),
			'b_address_id' => $this->input->post('b_address_id'),
			'b_working_id' => $this->input->post('b_working_id'),
			'b_title' => $this->input->post('b_title'),
			'b_detail' => $this->input->post('b_detail'),
			'b_unit' => $this->input->post('b_unit'),
			'b_unit_name' => $this->input->post('b_unit_name'),
			'b_job_order' => $this->input->post('b_job_order'),
			'b_start' => $this->input->post('b_start'),
			'b_end' => $this->input->post('b_end'),
			'b_status' => 'รอการพิจารณา'
		);
		$query = $this->db->insert('tbl_bill', $data);
	}


	public function get_list()
	{

		$this->db->select('*');
		$this->db->from('tbl_bill');
		$this->db->where('b_id', '2');
		$query = $this->db->get();
		$row = $query->row_array();
		return $row;
	}
	public function getSinglereq($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_bill');
		$this->db->join('tbl_jobtype', 'b_jobType_id = j_id');
		$this->db->join('tbl_workingarea', 'b_working_id = wa_id');
		$this->db->join('tbl_address', 'b_address_id = a_id');
		$this->db->join('tbl_bo_list', 'b_unit_name = bl_id');
		$this->db->where('b_id', $id);
		$query = $this->db->get();
		return $query->result();
	}




	function getAllworkingArea()
	{
		$query = $this->db->query('SELECT * FROM tbl_workingArea');
		return $query->result();
	}
	function getAlladdress()
	{
		$query = $this->db->query('SELECT * FROM tbl_address');
		return $query->result();
	}

	function getAlljobtype()
	{

		$query = $this->db->query('SELECT * FROM tbl_jobtype');
		return $query->result();
	}

	function getAlllist()
	{
		$query = $this->db->query('SELECT * FROM tbl_bo_list');
		return $query->result();
	}


	function getCancle()
	{
		$query = $this->db->query('SELECT * FROM tbl_bill Where b_status = "ยกเลิก"');

		return $query->num_rows();
	}

	function getNopass()
	{
		$query = $this->db->query('SELECT * FROM tbl_bill Where b_status = "ไม่อนุมัติ"');

		return $query->num_rows();
	}
	function getPass()
	{
		$query = $this->db->query('SELECT * FROM tbl_bill Where b_status = "อนุมัติ"');
		return $query->num_rows();
	}
	function getRequst()
	{
		$query = $this->db->query('SELECT * FROM tbl_bill Where b_status = "รอการพิจารณา"');
		return $query->num_rows();
	}




	function getReqlist()
	{
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));


		$this->db->select("*");
		$this->db->from('tbl_bill');
		$this->db->join('tbl_workingarea', 'b_working_id = wa_id');
		$this->db->where('b_status', "รอการพิจารณา");
		$query = $this->db->get();

		$data = [];

		foreach ($query->result() as $r) {
			$data[] = array(
				$r->b_id,
				$r->b_name,
				$r->b_title,
				$r->wa_name,
				$r->b_title,
				$r_tab[] = $r,
			);
		}

		$result = array(
			"draw" => $draw,
			"recordsTotal" => $query->num_rows(),
			"recordsFiltered" => $query->num_rows(),
			"data" => $data,
			"data" =>  $r_tab

		);

		return $result;
	}
	function getPasslist()
	{
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));


		$this->db->select("*");
		$this->db->from('tbl_bill');
		$this->db->join('tbl_workingarea', 'b_working_id = wa_id');
		$this->db->where('b_status', "อนุมัติ");
		$query = $this->db->get();

		$data = [];

		foreach ($query->result() as $r) {
			$data[] = array(
				$r->b_id,
				$r->b_name,
				$r->b_title,
				$r->wa_name,
				$r->b_title,
				$r_tab[] = $r,
			);
		}

		$result = array(
			"draw" => $draw,
			"recordsTotal" => $query->num_rows(),
			"recordsFiltered" => $query->num_rows(),
			"data" => $data,
			"data" =>  $r_tab

		);

		return $result;
	}
	function getFaillist()
	{
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

		$this->db->select("*");
		$this->db->from('tbl_bill');
		$this->db->join('tbl_workingarea', 'b_working_id = wa_id');
		$this->db->where('b_status', "ไม่อนุมัติ");
		$query = $this->db->get();

		$data = [];

		foreach ($query->result() as $r) {
			$data[] = array(
				$r->b_id,
				$r->b_name,
				$r->b_title,
				$r->wa_name,
				$r->b_title,
				$r_tab[] = $r,
			);
		}

		$result = array(
			"draw" => $draw,
			"recordsTotal" => $query->num_rows(),
			"recordsFiltered" => $query->num_rows(),
			"data" => $data,
			"data" =>  $r_tab

		);

		return $result;
	}
	function getCanlist()
	{
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));


		$this->db->select("*");
		$this->db->from('tbl_bill');
		$this->db->join('tbl_workingarea', 'b_working_id = wa_id');
		$this->db->where('b_status', "ยกเลิก");
		$query = $this->db->get();

		$data = [];

		foreach ($query->result() as $r) {
			$data[] = array(
				$r->b_id,
				$r->b_name,
				$r->b_title,
				$r->wa_name,
				$r->b_title,
				$r_tab[] = $r,
			);
		}

		$result = array(
			"draw" => $draw,
			"recordsTotal" => $query->num_rows(),
			"recordsFiltered" => $query->num_rows(),
			"data" => $data,
			"data" =>  $r_tab

		);

		return $result;
	}
	function getTotallist()
	{
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));


		$this->db->select("*");
		$this->db->from('tbl_bill');
		$this->db->join('tbl_workingarea', 'b_working_id = wa_id');
		$query = $this->db->get();

		$data = [];

		foreach ($query->result() as $r) {
			$data[] = array(
				$r->b_id,
				$r->b_name,
				$r->b_title,
				$r->wa_name,
				$r->b_title,
				$r_tab[] = $r,
			);
		}

		$result = array(
			"draw" => $draw,
			"recordsTotal" => $query->num_rows(),
			"recordsFiltered" => $query->num_rows(),
			"data" => $data,
			"data" =>  $r_tab

		);

		return $result;
	}
	/*
        $query = $this->db->get('location');

        foreach ($query->result() as $row)
        {
            echo $row->description;
        }*/


	// public function edit()
	// {
	// 	$data = array(
	// 		'pid' => $this->input->post('pid'),
	// 		'pname' => $this->input->post('pname')
	// 	);

	// 	$this->db->where('pid', $this->input->post('pid'));
	// 	$query = $this->db->update('tbl_position', $data);
	// }
	public function cancleReqform()
	{
		$update_rows = array('b_status' => 'ยกเลิก',);
		$id = $this->input->post('id');
		$this->db->where('b_id', $id);
		$this->db->update('tbl_bill', $update_rows);
	}

	public function getFaildetail()
	{
		$id = $this->input->post('id');
		$this->db->select("*");
		$this->db->from('tbl_bill');
		$this->db->where('b_id', $id);
		$query = $this->db->get();

		return $query;
	}


	// public function deleteReqform()
	// {

	// 	$id = $this->input->post('id');
	// 	$this->db->where('b_id', $id);
	// 	$this->db->delete('tbl_bill');
	// 	$this->db->update('tbl_bill', 'b_status' == 'ยกเลิก');
	// }
}
