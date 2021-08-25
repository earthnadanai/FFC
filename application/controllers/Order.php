<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('session', 'database');
        $this->load->model('Model_order', 'ffc_order');
        $this->load->model('Model_product', 'ffc_product');
        $this->load->model('Model_shop', 'ffc_shop');
        $this->load->helper(array('form', 'url')); 
        
    }
    
    public function order_shop()
    {
        $a = $this->input->post('id');
        $data['orderShop'] = $this->ffc_order->order_shops($a);
        $this->load->view('view_order',$data);
    }

    function ok_confirmation()
    {
        $a = $this->input->post('id');
        $id_conn = $this->input->post('id_conn');
        $status_shop = $this->input->post('status_shop');
        $date = $this->input->post('date');
        $this->db->set('date_shop', $date);
        $this->db->set('status_shop', $status_shop);
        $this->db->where('id_conn', $id_conn);
        $result = $this->db->update('confirmation');
        
        if ($result) {
            echo "<script language='JavaScript'>";
            echo "alert('อนุมัติให้เปิดร้าน')";
            echo "</script>";
            $data['orderShop'] = $this->ffc_order->order_shops($a);
            $this->load->view('view_order',$data);
        } else {
            echo "<script language='JavaScript'>";
            echo "alert('ไม่อนุมัติให้เปิดร้าน')";
            echo "</script>";
        }
	}

    function pege_foodset()
    {
        $a = $this->input->post('id_set');
        $b = $this->input->post('id');
        $data['viewProid'] = $this->ffc_product->view_proid($a);
        $data['viewShop'] = $this->ffc_shop->view_shops1($b);
        $this->load->view('view_food',$data);
    }
    public function check_status()
    {
        $this->load->view('bootstap');
        $this->load->view("view_oderstatus");
    }
}