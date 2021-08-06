<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('session', 'database');
        $this->load->model('Model_shop', 'ffc');
        $this->load->helper(array('form', 'url')); 
        
    }

    /*function showapproval_shop()
    {
        $data['query'] = $this->ffc->showapprovals_shop();
        $this->load->view('showapproval_shop', $data);
    }

    function showapprovalinfo_shop()
    {
        $a = $this->input->post('id');
        $data['qu'] = $this->ffc->showapprovals_shop1($a);
        $this->load->view('showapprovalinfo_shop', $data);
    }

    function ok_shop()
    {
        $id = $this->input->post('id');
        $Waiting_status = $this->input->post('Waiting_status');
        $this->db->set('Waiting_status', $Waiting_status);
        $this->db->where('id', $id);
        $result =$this->db->update('user');
        
        if ($result) {
            echo "<script language='JavaScript'>";
            echo "alert('อนุมัติให้เปิดร้าน')";
            echo "</script>";
            $data['query'] = $this->ffc->showapprovals_shop();
            $this->load->view('showapproval_shop', $data);
        } else {
            echo "<script language='JavaScript'>";
            echo "alert('ไม่อนุมัติให้เปิดร้าน')";
            echo "</script>";
        }
	}*/
}