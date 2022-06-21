<?php
class Member_model extends CI_Model 
{

	//public $a_name; 
	public function __construct()
	{
		parent::__construct();
	}

	// public function list_member()
	// {
	// 	$query = $this->db->get('tbl_member');
 //                return $query->result();
	// }


    public function list_member()
        {   
                $this->db->select('m.m_id,m.m_fname,m.m_name,m.m_lname,p.pname');
                $this->db->from('tbl_member  as m');
                $this->db->join('tbl_position as p', 'm.ref_pid=p.pid');
                $query = $this->db->get();
                return $query->result();
        }








	public function addmember()
	{
		$data = array(
                'ref_pid' => $this->input->post('ref_pid'),
                'm_username' => $this->input->post('m_username'),
                'm_password' => sha1($this->input->post('m_password')),
                'm_fname' => $this->input->post('m_fname'),
                'm_name' => $this->input->post('m_name'),
                'm_lname' => $this->input->post('m_lname')
                );
                $query=$this->db->insert('tbl_member',$data);
	}

    public function addmember2()
    {

        $m_username = $this->input->post('m_username');
        // num rows example
        $this->db->select('m_username');
        $this->db->where('m_username',$m_username);
        $query = $this->db->get('tbl_member');
        $num = $query->num_rows();
                if($num > 0)
                {
                        echo "<script>";
                        echo "alert(' ข้อมูลซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
                        echo "window.history.back();";
                        echo "</script>";
                }else{



        $data = array(
                'ref_pid' => $this->input->post('ref_pid'),
                'm_username' => $this->input->post('m_username'),
                'm_password' => sha1($this->input->post('m_password')),
                'm_fname' => $this->input->post('m_fname'),
                'm_name' => $this->input->post('m_name'),
                'm_lname' => $this->input->post('m_lname')
                );
                $query=$this->db->insert('tbl_member',$data);
            }

            if($query){
                        echo "<script>";
                        echo "alert(' Add ok !');";
                        echo "</script>";
            }else{
                        echo "<script>";
                        echo "alert(' Error  !');";
                        echo "</script>";

            }
    }


	 public function read($m_id){
                $this->db->select('
                    m.m_id,
                    m.m_fname,
                    m.m_name,
                    m.m_lname,
                    p.pname,
                    m.m_username,
                    m.ref_pid'
                );
                $this->db->from('tbl_member  as m');
                $this->db->join('tbl_position as p', 'm.ref_pid=p.pid');
                $this->db->where('m.m_id',$m_id);
                $query = $this->db->get();
                if($query->num_rows() > 0){
                        $data = $query->row();
                        return $data;
                }
                return FALSE;
        }


         public function editmember()
        {
                $data = array(
                'ref_pid' => $this->input->post('ref_pid'),
                'm_fname' => $this->input->post('m_fname'),
                'm_name' => $this->input->post('m_name'),
                'm_lname' => $this->input->post('m_lname')
                );
                $this->db->where('m_id', $this->input->post('m_id'));
                $query=$this->db->update('tbl_member',$data);

                if($query){
                        echo "<script>";
                        echo "alert(' Update Ok  !');";
                        echo "</script>";
            }else{
                        echo "<script>";
                        echo "alert(' Error  !');";
                        echo "</script>";

            }
        }


        public function editmemberpwd()
        {
                $data = array(
               'm_password' => sha1($this->input->post('m_password'))
                );
                $this->db->where('m_id', $this->input->post('m_id'));
                $query=$this->db->update('tbl_member',$data);

                if($query){
                        echo "<script>";
                        echo "alert(' Update passwork Ok  !');";
                        echo "</script>";
                    }else{
                        echo "<script>";
                        echo "alert(' Error  !');";
                        echo "</script>";

                }
        }



        


        public function deldata($m_id)
        {
               $this->db->delete('tbl_member',array('m_id'=>$m_id));

        }





public function fetch_user_login($m_username,$m_password)
{
        $this->db->where('m_username',$m_username);
        $this->db->where('m_password',$m_password);
        $query = $this->db->get('tbl_member');
        return $query->row();
}




public function editboss()
        {
                $data = array(
                'm_fname' => $this->input->post('m_fname'),
                'm_name' => $this->input->post('m_name'),
                'm_lname' => $this->input->post('m_lname')
                );
                $this->db->where('m_id', $this->input->post('m_id'));
                $query=$this->db->update('tbl_member',$data);

                if($query){
                        echo "<script>";
                        echo "alert(' ปรับปรุงข้อมูลเรียบร้อยแล้ว  !');";
                        echo "</script>";
                }else{
                        echo "<script>";
                        echo "alert(' Error  !');";
                        echo "</script>";

                }
        }

        public function editstaff()
        {
                $data = array(
                'm_fname' => $this->input->post('m_fname'),
                'm_name' => $this->input->post('m_name'),
                'm_lname' => $this->input->post('m_lname')
                );
                $this->db->where('m_id', $this->input->post('m_id'));
                $query=$this->db->update('tbl_member',$data);

                if($query){
                        echo "<script>";
                        echo "alert(' ปรับปรุงข้อมูลเรียบร้อยแล้ว  !');";
                        echo "</script>";
                }else{
                        echo "<script>";
                        echo "alert(' Error  !');";
                        echo "</script>";

                }
        }


        public function editemp()
        {
                $data = array(
                'm_fname' => $this->input->post('m_fname'),
                'm_name' => $this->input->post('m_name'),
                'm_lname' => $this->input->post('m_lname')
                );
                $this->db->where('m_id', $this->input->post('m_id'));
                $query=$this->db->update('tbl_member',$data);

                if($query){
                        echo "<script>";
                        echo "alert(' ปรับปรุงข้อมูลเรียบร้อยแล้ว  !');";
                        echo "</script>";
                }else{
                        echo "<script>";
                        echo "alert(' Error  !');";
                        echo "</script>";

                }
        }



        public function editbosspwd()
        {
                $data = array(
               'm_password' => sha1($this->input->post('m_password'))
                );
                $this->db->where('m_id', $this->input->post('m_id'));
                $query=$this->db->update('tbl_member',$data);

                if($query){
                        echo "<script>";
                        echo "alert(' Update passwork Ok  !');";
                        echo "</script>";
                    }else{
                        echo "<script>";
                        echo "alert(' Error  !');";
                        echo "</script>";

                }
        }

        public function editstaffpwd()
        {
                $data = array(
               'm_password' => sha1($this->input->post('m_password'))
                );
                $this->db->where('m_id', $this->input->post('m_id'));
                $query=$this->db->update('tbl_member',$data);

                if($query){
                        echo "<script>";
                        echo "alert(' Update passwork Ok  !');";
                        echo "</script>";
                    }else{
                        echo "<script>";
                        echo "alert(' Error  !');";
                        echo "</script>";

                }
        }




public function editemppwd()
        {
                $data = array(
               'm_password' => sha1($this->input->post('m_password'))
                );
                $this->db->where('m_id', $this->input->post('m_id'));
                $query=$this->db->update('tbl_member',$data);

                if($query){
                        echo "<script>";
                        echo "alert(' ปรับปรุงรหัสผ่านเรียบร้อยแล้ว !');";
                        echo "</script>";
                    }else{
                        echo "<script>";
                        echo "alert(' Error  !');";
                        echo "</script>";

                }
        }


        






}
