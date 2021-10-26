<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('session', 'database');
        $this->load->model('Model_shop', 'ffc_shop');
        $this->load->model('Model_user', 'ffc_user');
        $this->load->helper(array('form', 'url')); 
        
    }

    function open ()
    {
        $a = $this->input->post('id');
        $this->db->set('status_work', "เปิดแล้ว");
        $this->db->set('img_status', "green.png");
        $this->db->where('id_shops', $a);
        $this->db->update('shop');
            echo '<script src ="https://code.jquery.com/jquery-3.6.0.min.js"> </script>';
            echo '<script src ="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"> </script>';
            echo '<link rel="stylesheet" href  ="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />';
            echo '<script> setTimeout(function() {
                        swal({
                            title : "ข้อมูลถูกต้อง",
                            text : "คุณเปิดร้านเรียบร้อย",
                            type : "success"
                        })
                    }, 1000);
                    </script>';
        
        $b = $this->session->userdata('id');
        $data['viewS'] = $this->ffc_shop->view_shop($a);
        $data['viewST'] = $this->ffc_user->view_statu($b);
        $this->load->view('view_status', $data);
    }

    function close()
    {
        $a = $this->input->post('id');
        $this->db->set('status_work', "ยังไม่เปิด");
        $this->db->set('img_status', "gray.png");
        $this->db->where('id_shops', $a);
        $this->db->update('shop');
            echo '<script src ="https://code.jquery.com/jquery-3.6.0.min.js"> </script>';
            echo '<script src ="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"> </script>';
            echo '<link rel="stylesheet" href  ="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />';
            echo '<script> setTimeout(function() {
                        swal({
                            title : "ข้อมูลถูกต้อง",
                            text : "คุณปิดร้านเรียบร้อย",
                            type : "success"
                        })
                    }, 1000);
                    </script>';
        $a = $this->input->post('id');
        $b = $this->session->userdata('id');
        $data['viewS'] = $this->ffc_shop->view_shop($a);
        $data['viewST'] = $this->ffc_user->view_statu($b);
        $this->load->view('view_status', $data);
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