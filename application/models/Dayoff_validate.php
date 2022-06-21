<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Dayoff_validate extends CI_Model

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Form_in');
        $this->load->helper('quickstart_helper');
    }

    
    //     $now = time(); // or your date as well
    // $your_date = strtotime("2010-01-31");
    // $datediff = $now - $your_date;

    // echo round($datediff / (60 * 60 * 24));
}
