<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_confirmation extends CI_Model
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

    function view_comm($idcut)
    {
        $status_pay = "รอการนำเนิดการ";
        $this->db->select('*')
        ->from('confirmation')
        ->join('product_set', 'confirmation.id_sett  = product_set.id_set ')
        ->join('shop', 'confirmation.id_shop  = shop.id_shops ')
        ->where('id_customer', $idcut)
        ->where('status_customer', $status_pay);
        $query = $this->db->get();
        return $query->result();
    }

    function view_comstatus($idcut)
    {
        $status_shop = "รอการนำเนิดการ";
        $this->db->select('*')
        ->from('confirmation')
        ->join('product_set', 'confirmation.id_sett  = product_set.id_set ')
        ->join('shop', 'confirmation.id_shop  = shop.id_shops ')
        ->where('id_customer', $idcut)
        ->where('status_shop', $status_shop);
        $query = $this->db->get();
        return $query->result();
    }

    function view_comreceive($idcut)
    {
        $status_receive = "ยอมรับ";
        $this->db->select('*')
        ->from('confirmation')
        ->join('product_set', 'confirmation.id_sett  = product_set.id_set ')
        ->join('shop', 'confirmation.id_shop  = shop.id_shops ')
        ->where('id_customer', $idcut)
        ->where('status_shop', $status_receive);
        $query = $this->db->get();
        return $query->result();
    }

    
    function conn_delete($delete_conn)
    {
        $this->db->where('id_conn', $delete_conn);
        $this->db->delete('confirmation');
    }

    function view_comaccept($idcut)
    {
        $status_accept = "ส่ง";
        $this->db->select('*')
        ->from('confirmation')
        ->join('product_set', 'confirmation.id_sett  = product_set.id_set ')
        ->join('shop', 'confirmation.id_shop  = shop.id_shops ')
        ->where('id_customer', $idcut)
        ->where('status_shop', $status_accept);
        $query = $this->db->get();
        return $query->result();
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
    }

    function order_palment($id_conn)
    {
        $this->db->select('*')
        ->from('confirmation')
        ->join('shop', 'confirmation.id_shop  = shop.id_shops ')
        ->join('user', 'confirmation.id_customer = user.id')
        ->join('product_set', 'confirmation.id_sett = product_set.id_set')
        ->where('id_conn', $id_conn);
        $query = $this->db->get();
        return $query->result();
    }
}