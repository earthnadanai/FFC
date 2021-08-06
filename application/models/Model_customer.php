<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_customer extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*function show_customershop()
    {
       $status_work = "เปิดแล้ว";
       $this->db->where('status_work',$status_work);
       $query = $this->db->get('shop');
       return $query->result();
    }*/

    /*function showproduct_cus($a)
    {
      $this->db->where('id_set_shop',$a);
      $query = $this->db->get('product_set');
      return $query->result();
       
    }*/

   /* function showfood($a)
    {
        $this->db->select('*')
        ->from('product')
        ->join('product_set', 'product.id_sett  = product_set.id_set ')
        ->join('shop', 'product.id_shopss = shop.id_shops')
        ->where('id_sett',$a);
       //$this->db->where('id',$a);
       $query = $this->db->get();
       return $query->result();
    }

    function showfood1($a)
    {
       $this->db->where('id_sett',$a);
       $query = $this->db->get('product');
       return $query->result();
    }

    function showfood2($a)
    {
       $b = "ของหวาน";
       $this->db->where('type',$b);
       $this->db->where('id_set',$a);
       $query = $this->db->get('product_set');
       return $query->result();
    }

    function showfood3($a)
    {
       $b = "ต้ม";
       $this->db->where('type', $b);
       $this->db->where('id_set',$a);
       $query = $this->db->get('product_set');
       return $query->result();
    }
    function showfood4($a)
    {
       $c = "ผัด";
       $this->db->where('type', $c);
       $this->db->where('id_set',$a);
       $query = $this->db->get('product_set');
       return $query->result();
    }

    function showfood5($a)
    {
       $d = "แกง";
       $this->db->where('type', $d);
       $this->db->where('id_set',$a);
       $query = $this->db->get('product_set');
       return $query->result();
    }
    function showfood6($a)
    {
       $e = "ทอด";
       $this->db->where('type', $e);
       $this->db->where('id_set',$a);
       $query = $this->db->get('product_set');
       return $query->result();
    }*/

    /*function showproducts($a)
    {
      $this->db->select('*')
        ->from('product_id')
        ->join('product_set', 'product_id.Pro_id_set  = product_set.id_set ')
        ->join('product', 'product_id.Pro_id_pro = product.id_pro')
        ->where('Pro_id_set',$a);
       $query = $this->db->get();
       return $query->result();
    }*/
    
    /*function view_shops($a)
    {
        $this->db->where('id_shops', $a);
        $query = $this->db->get('shop',$a);
        return $query->result();
    }*/

    /*function showprofile($id)
    {
       $this->db->where('id',$id);
       $query = $this->db->get('user');
       return $query->result();
    }*/

    /*function showinfo_customer($a)
    {
        $this->db->where('id',$a);
        $query = $this->db->get('user');
        return $query->result();
    }*/
}
