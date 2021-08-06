<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_admin extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*function showuser_admin()
    {
        $status = "2";
        $this->db->where('status', $status);
        $query = $this->db->get('user');
        return $query->result();
    }

    function showusershop_admin()
    {
        $status = "3";
        $this->db->where('status', $status);
        $query = $this->db->get('user');
        return $query->result();
    }*/

   /* function showinfo_customer($a)
    {
        $this->db->where('id',$a);
        $query = $this->db->get('user');
        return $query->result();
    } */

    /*function showinfo_shop($b)
    {
       $this->db->where('id',$b);
       $query = $this->db->get('user');
       return $query->result();
    }*/

    /*function showinfo_shop1($b)
    {
       $this->db->where('id_cus',$b);
       $query = $this->db->get('shop');
       return $query->result();
    }*/

    /*function showapprovals_shop()
    {   
        $waiting_status = "รอการนำเนิดการ";
        $status = "3";
        $this->db->where('waiting_status',$waiting_status);
        $this->db->where('status',$status);
        $query = $this->db->get('user');
        return $query->result();
    }*/

    /*function showapprovals_shop1($a)
    {
        $this->db->select('*')
        ->from('shop')
        ->join('user', ' shop.id_cus = user.id')
        ->where('id_cus',$a);
        $query = $this->db->get();  
        return $query->result();
    }*/

    /*function tradings_admin()
    {
        $P_img_shop = "-";
        $this->db->where('P_img_shop',$P_img_shop);
        $query = $this->db->get('payment');
        return $query->result();
    }*/

    /*function tradings_admin1($a)
    {
        $this->db->select('*')
        ->from('payment')
        ->join('user', ' payment.id_cuss = user.id ')
        ->join('confirmation', ' payment.id_con = confirmation.id_conn')
        ->join('shop', 'payment.id_shopsp = shop.id_shops')
        ->where('id_cuss',$a);
        $query = $this->db->get();
        return $query->result();
    }*/

    /*function tradings_admin2($a)
    {   
        $this->db->where('id_ostory',$a);
        $query = $this->db->get('orderhistory');
        return $query->result();
    }*/

    /*function tradings_admin3($b)
    {   
        $this->db->where('id_p',$b);
        $query = $this->db->get('payment');
        return $query->result();
    }*/

    /*function tradings_admin4($c)
    {   
        $this->db->where('id_shops',$c);
        $query = $this->db->get('shop');
        return $query->result();
    }*/

}