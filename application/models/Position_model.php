<?php
class Position_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}
	public function list_position()
	{
		$query = $this->db->get('tbl_position');
		if ($query == '') {
			echo 'no data';
		} else {
			return $query->result();
		}
	}
	public function addposition()
	{
		$data = array(
			'pname' => $this->input->post('pname'),
		);
		$query = $this->db->insert('tbl_position', $data);
	}
	public function read($pid)
	{
		$this->db->select('*');
		$this->db->from('tbl_position');
		$this->db->where('pid', $pid);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$data = $query->row();
			return $data;
		}
		return false;
	}

	public function edit()
	{
		$data = array(
			'pid' => $this->input->post('pid'),
			'pname' => $this->input->post('pname')
		);

		$this->db->where('pid', $this->input->post('pid'));
		$query = $this->db->update('tbl_position', $data);
	}
	public function delete($pid)
	{
		$this->db->delete('tbl_position',array('pid'=>$pid));
	}
}
