<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_shop extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function showinfo_shop($b)
    {
       $this->db->where('id',$b);
       $query = $this->db->get('user');
       return $query->result();
    }

    function showinfo_shop1($b)
    {
       $this->db->where('id_cus',$b);
       $query = $this->db->get('shop');
       return $query->result();
    }



    function showapprovals_shop1($a)
    {
        $this->db->select('*')
        ->from('shop')
        ->join('user', ' shop.id_cus = user.id')
        ->where('id_cus',$a);
        $query = $this->db->get();  
        return $query->result();
    }

    function show_customershop()
    {
       $status_work = "เปิดแล้ว";
       $this->db->where('status_work',$status_work);
       $query = $this->db->get('shop');
       return $query->result();
    }
    

    function view_shops($a)
    {
        $this->db->where('id_shops', $a);
        $query = $this->db->get('shop',$a);
        return $query->result();
    }

    function view_shops1($b)
    {
        $this->db->where('id_shops', $b);
        $query = $this->db->get('shop',$b);
        return $query->result();
    }

    function tradings_admin4($c)
    {   
        $this->db->where('id_shops',$c);
        $query = $this->db->get('shop');
        return $query->result();
    }

    function shop($a)
    {
        $this->db->where('id_cus', $a);
        $query = $this->db->get('shop',$a);
        return $query->result();
    }
    

    function adds_shop($add)
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
    }

    function view_status($a)
    {
        $this->db->where('id_shops', $a);
        $query = $this->db->get('shop');
        return $query->result();
    }

    function view_shop($a)
    {
        $this->db->where('id_shops', $a);
        $query = $this->db->get('shop',$a);
        return $query->result();
    }

    function v_shop($a)
    {
        $this->db->where('id_shops', $a);
        $query = $this->db->get('shop');
        return $query->result();
    }

    function view_set($a)
    {
        $this->db->where('id_shops', $a);
        $query = $this->db->get('shop');
        return $query->result();
    }

    function view_shopss($b)
    {
        $this->db->where('id_shops', $b);
        $query = $this->db->get('shop',$b);
        return $query->result();
    }
    public function show_searchs($search)
    {
        $this->db->like('shop' . "." . 'nameShop', $search);
        $result = $this->db->get('shop');
        return $result->result();
    }

    function product_search($id_shop)
    {
        $this->db->where('id_shops', $id_shop);
        $query = $this->db->get('shop');
        return $query->result();
    }

}