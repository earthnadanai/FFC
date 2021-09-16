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
        $data['orderCus'] = $this->ffc_order->order_cus($a);
        $data['orderMakes'] = $this->ffc_order->order_Makes($a);
        $data['orderfinished'] = $this->ffc_order->order_finished($a);
        $this->load->view('view_order',$data);
    }

    function ok_confirmation()
    {
        
        $id_conn = $this->input->post('id_conn');
        $status_shop = $this->input->post('status_shop');
        $date_shop = $this->input->post('date_shop');
        $this->db->set('date_shop', $date_shop);
        $this->db->set('status_shop', $status_shop);
        $this->db->where('id_conn', $id_conn);
        $result = $this->db->update('confirmation');

        if ($result) {
           $a = $this->input->post('id');
           $data['Shop'] = $this->ffc_shop->view_shop($a);
           $this->load->view("confirmation",$data);
        } else {
            echo "<script language='JavaScript'>";
            echo "alert('เปลี่ยนแปลงไม่สำเร็จ')";
            echo "</script>";
            $data['idShop'] = $this->ffc_order->order_shops($a);
            $this->load->view('confirmation',$data);
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