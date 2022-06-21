<?php
class Form_in extends CI_Model

{
	public function __construct()
	{
		parent::__construct();
	}

	public function adddata()
	{
		$data = array(
			'start' => $this->input->post('start'),
			'end' => $this->input->post('end'),
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




	// public function edit()
	// {
	// 	$data = array(
	// 		'pid' => $this->input->post('pid'),
	// 		'pname' => $this->input->post('pname')
	// 	);

	// 	$this->db->where('pid', $this->input->post('pid'));
	// 	$query = $this->db->update('tbl_position', $data);
	// }
	// public function delete($pid)
	// {
	// 	$this->db->delete('tbl_position', array('pid' => $pid));
	// }
}
