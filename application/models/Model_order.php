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
        $this->db->where('id_order',$a);
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
    
    function view_order($c)
    {
        $this->db->select('*')
        ->from('order')
        ->join('shop', 'order.id_shop  = shop.id_shops ')
        ->where('id_customer', $c);
        $query = $this->db->get();
        return $query->result();
    }
}