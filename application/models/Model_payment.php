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

    function tradings_admin1($a)
    {
        $this->db->select('*')
        ->from('payment')
        ->join('user', ' payment.id_cuss = user.id ')
        ->join('confirmation', ' payment.id_con = confirmation.id_conn')
        ->join('shop', 'payment.id_shopsp = shop.id_shops')
        ->where('id_cuss',$a);
        $query = $this->db->get();
        return $query->result();
    }

    /*function tradings_admin2($a)
    {   
        $this->db->where('id_ostory',$a);
        $query = $this->db->get('orderhistory');
        return $query->result();
    }*/

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

    
}