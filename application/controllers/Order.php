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
        $this->load->model('Model_user', 'ffc_user');
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
           $data['orderShop'] = $this->ffc_order->order_shops($a);
           $data['orderCus'] = $this->ffc_order->order_cus($a);
           $data['orderMakes'] = $this->ffc_order->order_Makes($a);
           $data['orderfinished'] = $this->ffc_order->order_finished($a);
           echo '<script src ="https://code.jquery.com/jquery-3.6.0.min.js"> </script>';
           echo '<script src ="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"> </script>';
           echo '<link rel="stylesheet" href  ="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />';
           echo '<script> setTimeout(function() {
                       swal({
                           title : "ข้อมูลถูกต้อง",
                           text : "ทำรายการสำเร็จ",
                           type : "success"
                       })
                   }, 1000);
                   </script>';
           $this->load->view('view_order',$data);
        } else {
            $data['orderShop'] = $this->ffc_order->order_shops($a);
            $data['orderCus'] = $this->ffc_order->order_cus($a);
            $data['orderMakes'] = $this->ffc_order->order_Makes($a);
            $data['orderfinished'] = $this->ffc_order->order_finished($a);
            echo '<script src ="https://code.jquery.com/jquery-3.6.0.min.js"> </script>';
            echo '<script src ="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"> </script>';
            echo '<link rel="stylesheet" href  ="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />';
            echo '<script> setTimeout(function() {
                        swal({
                            title : "ข้อมูลผิดพลาด",
                            text : "เปลี่ยนแปลงไม่สำเร็จ",
                            type : "warning"
                        })
                    }, 1000);
                    </script>';
            $this->load->view('view_order',$data);
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


    function infocus_shop()
    {  
        $a = $this->input->post('id');
        $b = $this->input->post('id_shops');
        $data['viewcut'] = $this->ffc_user->showinfo_customer($a);
        $data['viewShop'] = $this->ffc_shop->view_shops1($b);
        $this->load->view('showinfocus_shop', $data);
    }
    
    function cancel_shop()
    {
        $id_conn = $this->input->post('id_conn');
        $status_shop = $this->input->post('status_shop');
        $this->db->set('status_shop', $status_shop);
        $this->db->where('id_conn', $id_conn);
        $result = $this->db->update('confirmation');

        if ($result) {
            $a = $this->input->post('id');
            $data['orderShop'] = $this->ffc_order->order_shops($a);
            $data['orderCus'] = $this->ffc_order->order_cus($a);
            $data['orderMakes'] = $this->ffc_order->order_Makes($a);
            $data['orderfinished'] = $this->ffc_order->order_finished($a);
            echo '<script src ="https://code.jquery.com/jquery-3.6.0.min.js"> </script>';
            echo '<script src ="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"> </script>';
            echo '<link rel="stylesheet" href  ="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />';
            echo '<script> setTimeout(function() {
                        swal({
                            title : "ข้อมูลถูกต้อง",
                            text : "สำเร็จ",
                            type : "success"
                        })
                    }, 1000);
                    </script>';
            $this->load->view('view_order',$data);
         }
    }

    public function check_status()
    {
        $idcut = $this->session->userdata['id'];
        $data["Order"] = $this->ffc_order->view_comm($idcut); 
        $this->load->view("view_oderstatus",$data);
    }
}