<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('session', 'database');
        $this->load->model('Model_order', 'ffc_order');
        $this->load->model('Model_shop', 'ffc_shop');
        $this->load->model('Model_payment', 'ffc_payment');
        $this->load->model('Model_user', 'ffc_user');
        $this->load->helper(array('form', 'url')); 
        
    }

    function showcustomer_admin()
	{
		$data['query'] = $this->ffc_user->showuser_admin();
        $this->load->view('view_admin', $data);
	}

    function showshop_admin()
	{
		$data['re'] = $this->ffc_user->showusershop_admin();
		$this->load->view('viewshop_admin',$data);
	}

    function info_customer()
    {  
        $a = $this->input->post('id');
        $data['re'] = $this->ffc_user->showinfo_customer($a);
        $this->load->view('showinfo_customer', $data);
    }

    function info_shop()
    {  
        $b = $this->input->post('id');
        $data['re'] = $this->ffc_shop->showinfo_shop($b);
        $data['ve'] = $this->ffc_shop->showinfo_shop1($b);
        $this->load->view('showinfo_shop', $data);
    }

    function showapproval_shop()
    {
        $data['query'] = $this->ffc_user->showapprovals_shop();
        $this->load->view('showapproval_shop', $data);
    }

    function showapprovalinfo_shop()
    {
        $a = $this->input->post('id');
        $data['qu'] = $this->ffc_shop->showapprovals_shop1($a);
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
            $data['query'] = $this->ffc_user->showapprovals_shop();
            $this->load->view('showapproval_shop', $data);
        } else {
            echo "<script language='JavaScript'>";
            echo "alert('ไม่อนุมัติให้เปิดร้าน')";
            echo "</script>";
        }
	}

    function trading_admin()
    {
        $data['query'] = $this->ffc_payment->tradings_admin();
        $this->load->view('trading_admin', $data);
    }

    function tradinginfo_admin()
    {
        $a = $this->input->post('id');
        $data['query'] = $this->ffc_payment->tradings_admin1($a);
        $this->load->view('tradinginfo_admin', $data);
    }

    function tradingfood_admin()
    {
        $a = $this->input->post('id');
        $b = $this->input->post('id_p');
        $c = $this->input->post('id_shop');
        $data['ve'] = $this->ffc_shop->tradings_admin4($c);
        $data['qu'] = $this->ffc_payment->tradings_admin3($b);
        $data['query'] = $this->ffc_order->tradings_admin2($a);
        $this->load->view('tradingfood_admin', $data);
    }
}