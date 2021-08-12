<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_product extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*function shop($a)
    {
        $this->db->where('id_cus', $a);
        $query = $this->db->get('shop',$a);
        return $query->result();
    }*/

    /*function adds_shop($add)
    {
        $a = $add['nameShop'];
        $this->db->where('nameShop',$a);
        $query = $this->db->get('shop');
        if ($query->num_rows() > 0) {
            $message = false;
            return $message;
        } else {
            $this->db->insert('shop',$add);
            $message = true;  
            return $message;
        } 
    }*/

    /*function view_status($a)
    {
        $this->db->where('id_shops', $a);
        $query = $this->db->get('shop');
        return $query->result();
    }*/

    /*function view_statu($b)
    {
        $this->db->where('id', $b);
        $query = $this->db->get('user');
        return $query->result();
    }*/

    /*function view_shop($a)
    {
        $this->db->where('id_shops', $a);
        $query = $this->db->get('shop',$a);
        return $query->result();
    }*/

    function add_foods($add_food)
    {
        $a = $add_food['nameProduct'];
        $b = $add_food['id_pro_shop'];
        $this->db->where('nameProduct',$a);
        $this->db->where('id_pro_shop',$b);
        $query = $this->db->get('product');
        if ($query->num_rows() > 0) {
            $message = false;
            return $message;
        } else {
            $this->db->insert('product',$add_food);
            $message = true;  
            return $message;
        } 
    }

    /*function v_shop($a)
    {
        $this->db->where('id_shops', $a);
        $query = $this->db->get('shop');
        return $query->result();
    }*/

    /*function view_set($a)
    {
        $this->db->where('id_shops', $a);
        $query = $this->db->get('shop');
        return $query->result();
    }*/

    function view_sets($a)
    {
        $this->db->where('id_set_shop', $a);
        $query = $this->db->get('product_set');
        return $query->result();
    }
    function view_Proset($b)
    {
        $this->db->where('id_set', $b);
        $query = $this->db->get('product_set');
        return $query->result();
    }

    function view_pro($a)
    {
        $this->db->where('id_pro_shop', $a);
        $query = $this->db->get('product');
        return $query->result();
    }

    function add_setfood($add_set)
    {
        $this->db->insert('product_set',$add_set);
    }
    
    function add_setmeal($add_setmeal)
    {
            $this->db->insert('product_id',$add_setmeal);
    } 
    
    function view_setID($b)
    {
        $this->db->where('Pro_id_set', $b);
        $query = $this->db->get('product_id');
        return $query->result();
    }

    function view_proid($a)
    {
        $this->db->select('*')
        ->from('product_id')
        ->join('product_set', 'product_id.Pro_id_set  = product_set.id_set ')
        ->join('product', 'product_id.Pro_id_pro = product.id_pro')
        ->where('Pro_id_set',$a);
       $query = $this->db->get();
       return $query->result();
    }


    /*function view_shopss($b)
    {
        $this->db->where('id_shops', $b);
        $query = $this->db->get('shop',$b);
        return $query->result();
    }*/

    function view_profood($a)
    {
        $this->db->where('id_pro', $a);
        $query = $this->db->get('product');
        return $query->result();
    }

    function menu_delete($delete_food){
        $this->db->where('id_pro', $delete_food);
        $this->db->delete('product');
    }

    function set_delete($delete_food){
        $this->db->where('Pro_id', $delete_food);
        $this->db->delete('product_id');
    }

    function showproduct_cus($a)
    {
      $this->db->where('id_set_shop',$a);
      $query = $this->db->get('product_set');
      return $query->result();
       
    }
    function showproduct_cuss($b)
    {
      $this->db->where('id_set',$b);
      $query = $this->db->get('product_set');
      return $query->result();
       
    }

    function showproducts($b)
    {
      $this->db->select('*')
        ->from('product_id')
        ->join('product_set', 'product_id.Pro_id_set  = product_set.id_set ')
        ->join('product', 'product_id.Pro_id_pro = product.id_pro')
        ->where('Pro_id_set',$b);
       $query = $this->db->get();
       return $query->result();
    }

    function showfood($a)
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
    }

    function show_search($search)
    {
        //$this->db->or_like('shop' . "." . 'nameShop', $search);
        $this->db->or_like('product' . "." . 'nameProduct', $search);
        $this->db->or_like('product' . "." . 'type', $search);
        $result = $this->db->get('product');
    }
    function show_searchs($search)
    {
        $this->db->or_like('shop' . "." . 'nameShop', $search);
        $result = $this->db->get('shop');
    }

    
}