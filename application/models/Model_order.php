<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_order extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function order_shops($a)
    {
        $this->db->select('*')
        ->from('confirmation')
        ->join('shop', 'confirmation.id_shop  = shop.id_shops ')
        ->join('user', 'confirmation.id_customer = user.id')
        ->join('product_set', 'confirmation.id_sett = product_set.id_set')
        ->where('id_shop', $a);
        $query = $this->db->get();
        return $query->result();
    }

    function tradings_admin2($a)
    {   
        $this->db->where('id_ostory',$a);
        $query = $this->db->get('orderhistory');
        return $query->result();
    }

    /*function view_proid($a)
    {
        $this->db->select('*')
        ->from('product_id')
        ->join('product_set', 'product_id.Pro_id_set  = product_set.id_set ')
        ->join('product', 'product_id.Pro_id_pro = product.id_pro')
        ->where('Pro_id_set',$a);
       $query = $this->db->get();
       return $query->result();
    }*/

    /*function view_shops($b)
    {
        $this->db->where('id_shops', $b);
        $query = $this->db->get('shop',$b);
        return $query->result();
    }*/
    
    function buy_product($data)
    {
        $a = $data['id_order'];
        $idcut = $this->session->userdata('id');
        $this->db->where('id_order',$a);
        $this->db->where('id_customer',$idcut);
        $query = $this->db->get('order');
        if ($query->num_rows() > 0) {
            $message = false;
            return $message;
        } else {
            $this->db->insert('order',$data);
            $message = true;  
            return $message;
        }      
    }
    
    function view_order($idcut)
    {
        $this->db->select('*')
        ->from('order')
        ->join('shop', 'order.id_shop  = shop.id_shops ')
        ->where('id_customer', $idcut);
        $query = $this->db->get();
        return $query->result();
    }

    function view_comm($idcut)
    {
        $this->db->select('*')
        ->from('confirmation')
        ->join('product_set', 'confirmation.id_sett  = product_set.id_set ')
        ->join('shop', 'confirmation.id_shop  = shop.id_shops ')
        ->where('id_customer', $idcut);
        $query = $this->db->get();
        return $query->result();
    }

    function foodpayment($id_order)
    {
        $this->db->select('*')
        ->from('order')
        ->join('shop', 'order.id_shop  = shop.id_shops ')
        ->join('user', 'order.id_customer  = user.id ')
        ->join('product_set', 'order.id_order  = product_set.id_set ')
        ->where('id_o', $id_order);
        $query = $this->db->get();
        return $query->result();
    }

    function order_delete($delete_order){
        $this->db->where('id_o', $delete_order);
        $this->db->delete('order');
    }

    function final_payment($data)
    {
        $add_order = $data['id_sett'];
        $idcut = $this->session->userdata('id');
        $this->db->where('id_sett',$add_order);
        $this->db->where('id_customer',$idcut);
        $query = $this->db->get('confirmation');
        if ($query->num_rows() > 0) {
            $message = false;
            return $message;
        } else {
            $this->db->insert('confirmation',$data);
            $message = true;  
            return $message;
        }      
    }
    function change_status($data)
    {
        $change_status = $data['status_shop'.'date_shop'];
        $status_shop = $data['status_shop'];
        $date_shop = $data['date_shop'];
        $id_conn = $data['id_conn'];
        /*$this->db->set('date_shop', $date_shop);
        $this->db->set('status_shop', $status_shop);*/
        $this->db->where('id_conn', $id_conn);
        $query = $this->db->get('confirmation');
        if ($query->num_rows() > 0) {
            //$this->db->update('confirmation',$change_status);
            $message = false;
            return $message;
        } else {
           $this->db->update('confirmation',$change_status);
            $message = true;  
            return $message;
        }      

       /* $this->db->set('date_shop', $date_shop);
        $this->db->set('status_shop', $status_shop);
        $this->db->where('id_conn', $id_conn);
        $result = $this->db->update('confirmation');*/
    }
    
    function order_cus($a)
    {
        $status_shop = "ยอมรับ";
        $this->db->select('*')
        ->from('confirmation')
        ->join('shop', 'confirmation.id_shop  = shop.id_shops ')
        ->join('user', 'confirmation.id_customer = user.id')
        ->join('product_set', 'confirmation.id_sett = product_set.id_set')
        ->where('id_shop', $a)
        ->where('status_shop', $status_shop)
        ->where('status_customer', "รอการนำเนิดการ");
        $query = $this->db->get();
        return $query->result();
    }

    function order_Makes($a)
    {
        $status_shop = "รอการนำเนิดการ";
        $this->db->select('*')
        ->from('confirmation')
        ->join('shop', 'confirmation.id_shop  = shop.id_shops ')
        ->join('user', 'confirmation.id_customer = user.id')
        ->join('product_set', 'confirmation.id_sett = product_set.id_set')
        ->where('id_shop', $a)
        ->where('status_shop', $status_shop);
        $query = $this->db->get();
        return $query->result();
    }

    function order_finished($a)
    {
        $status_shop = "ส่ง";
        $this->db->select('*')
        ->from('confirmation')
        ->join('shop', 'confirmation.id_shop  = shop.id_shops ')
        ->join('user', 'confirmation.id_customer = user.id')
        ->join('product_set', 'confirmation.id_sett = product_set.id_set')
        ->where('id_shop', $a)
        ->where('status_shop', $status_shop);
        $query = $this->db->get();
        return $query->result();
    }

}