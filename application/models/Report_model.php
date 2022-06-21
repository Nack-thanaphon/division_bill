<?php
class Report_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
	}


    public function count_doc()
        {   
                $this->db->select('COUNT(doc_id) as dtotal');
                $this->db->from('tbl_doc');
                $query = $this->db->get();
                return $query->result();
        }

        public function count_doc_status()
        {
                $this->db->select('doc_status, COUNT(doc_id) as dtotal');
                $this->db->from('tbl_doc');
                $this->db->group_by('doc_status');
                $query = $this->db->get();
                return $query->result();
             
        }

        public function count_doc_type()
        {
                $this->db->select('t.dname, COUNT(d.doc_id) as dtotal');
                $this->db->from('tbl_doc as d');
                $this->db->join('tbl_doc_type as t' , 'd.ref_did=t.did');
                $this->db->group_by('d.ref_did');
                $query = $this->db->get();
                return $query->result();
        }

        public function count_doc_date()
        {
                $this->db->select('DATE_FORMAT(d.doc_save,"%d-%m-%Y") as docsave, COUNT(d.doc_id) as dtotal');
                $this->db->from('tbl_doc as d');
                $this->db->group_by('DATE_FORMAT(d.doc_save,"%d%")');
                $query = $this->db->get();
                return $query->result();
        }

        public function count_doc_m()
        {
            $this->db->select('DATE_FORMAT(d.doc_save,"%M-%Y") as docsave, COUNT(d.doc_id) as dtotal');
                $this->db->from('tbl_doc as d');
                $this->db->group_by('DATE_FORMAT(d.doc_save,"%m%")');
                $query = $this->db->get();
                return $query->result();
        }

        public function count_doc_y()
        {
            $this->db->select('DATE_FORMAT(d.doc_save,"%Y") as docsave, COUNT(d.doc_id) as dtotal');
                $this->db->from('tbl_doc as d');
                $this->db->group_by('DATE_FORMAT(d.doc_save,"%Y%")');
                $query = $this->db->get();
                return $query->result();
        }

        
        public function count_doc_form()
        {

            $ds = $this->input->post('ds');
            $de = $this->input->post('de');
            // echo $ds .' x '.$de;
            // exit;
            $de = $de .' 23:59:59';

            

                $this->db->select('*');
                $this->db->from('tbl_doc');
                $this->db->where('doc_date >=',$ds);
                $this->db->where('doc_date <=',$de);
                $query = $this->db->get();
                return $query->result();
             
        } 



}
