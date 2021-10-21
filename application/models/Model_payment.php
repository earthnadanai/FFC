<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_payment extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function tradings_admin()
    {
        $P_img_shop = "-";
        $this->db->where('P_img_shop',$P_img_shop);
        $query = $this->db->get('payment');
        return $query->result();
    }

    function tradings_adminconn($id_conn)
    {
        $this->db->where('id_conn',$id_conn);
        $query = $this->db->get('payment');
        return $query->result();
    }

    function tradings_admin1($a)
    {
        $this->db->select('*')
        ->from('payment')
        ->join('user', ' payment.id_cuss = user.id ')
        ->join('shop', 'payment.id_shopsp = shop.id_shops')
        //->join('confirmation','payment.id_p = confirmation.id_pay')
        ->join('product_set','payment.id_sset = product_set.id_set')
        ->where('id_cuss',$a);
        $query = $this->db->get();
        return $query->result();
    }

    function tradings_admins($a)
    {
        $this->db->select('*')
        ->from('payment')
        ->join('user', ' payment.id_cuss = user.id ')
        ->join('shop', 'payment.id_shopsp = shop.id_shops')
        //->join('confirmation','payment.id_p = confirmation.id_pay')
        ->join('product_set','payment.id_sset = product_set.id_set')
        ->where('id_cuss',$a);
        $query = $this->db->get();
        return $query->result();
    }

    function tradings_admin3($b)
    {   
        $this->db->where('id_p',$b);
        $query = $this->db->get('payment');
        return $query->result();
    }
    
    /*function tradings_admin4($c)
    {   
        $this->db->where('id_shops',$c);
        $query = $this->db->get('shop');
        return $query->result();
    }*/

    function add_pay($add)
    {
        $id_con = $add['id_con'];
        $this->db->where('id_con',$id_con);
        $query = $this->db->get('payment');
        if ($query->num_rows() > 0) {
            $message = false;
            return $message;
        } else {
            $this->db->insert('payment',$add);
            $message = true;  
            return $message;
        } 
    }
}