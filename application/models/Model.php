<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function regis_cus($data)
    {
        $a = $data['username'];
        $this->db->where('username',$a);
        $query = $this->db->get('user');
        if ($query->num_rows() > 0) {
            $message = false;
            return $message;
        } else {
            $this->db->insert('user',$data);
            $message = true;  
            return $message;
        }      
    }

    function regis($data)
    {
        $a = $data['username'];
        $this->db->where('username',$a);
        $query = $this->db->get('user');
        if ($query->num_rows() > 0) {
            $message = false;
            return $message;
        } else {
            $this->db->insert('user',$data);
            $message = true;  
            return $message;
        }      
    }
    
    function regis1($data)
    {
        $b = $data['id_card_number'];
        $this->db->where('id_card_number',$b);
        $query = $this->db->get('user');
        if ($query->num_rows() > 0) {
            $message = false;
            return $message;
        } else {
            $this->db->insert('user',$data);
            $message = true;  
            return $message;
        }      
    }

    /*function regis2($data)
    {
        $c = $data['password'];
        $this->db->where('password',$c);
        $query = $this->db->get('user');
        if ($query->num_rows() > 0) {
            $message = false;
            return $message;
        } else {
            $this->db->insert('user',$data);
            $message = true;  
            return $message;
        }      
    }*/
    
    function login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('user');
        $message = '';
        if ($result->num_rows() > 0) {
            $message = true;

            
        } else {
            $message = false;
        }
        foreach ($result->result_array() as $row){
            $status = $row['status'];
        
        $data = array(
            "status" => $status, 
            "message" => $message, "data" => $result->result()

        );
        return $data;
    }
        
    }

    function showuser_admin()
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
    }

    function shop($a)
    {
        $this->db->where('id_cus', $a);
        $query = $this->db->get('shop',$a);
        return $query->result();
    }

    function showapprovals_shop()
    {   
        $waiting_status = "รอการนำเนิดการ";
        $status = "3";
        $this->db->where('waiting_status',$waiting_status);
        $this->db->where('status',$status);
        $query = $this->db->get('user');
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

/*    function showapprovals_cus()
    {
        $waiting_status = "รอการนำเนิดการ";
        $status = "2";
        $this->db->where('waiting_status',$waiting_status);
        $this->db->where('status',$status);
        $query = $this->db->get('user');
        return $query->result();
    }

    function showapprovals_cuss()
    {
        $query = $this->db->get('user');
        return $query->result();
    }*/

    function showapprovals_cus1($a)
    {
        $this->db->where('id',$a);
        $query = $this->db->get('user');
        return $query->result();
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

    function tradings_admin2($a)
    {   
        $this->db->where('id_ostory',$a);
        $query = $this->db->get('orderhistory');
        return $query->result();
    }

    function tradings_admin3($b)
    {   
        $this->db->where('id_p',$b);
        $query = $this->db->get('payment');
        return $query->result();
    }

    function tradings_admin4($c)
    {   
        $this->db->where('id_shops',$c);
        $query = $this->db->get('shop');
        return $query->result();
    }

    function showinfo_customer($a)
    {
        /*$this->db->select('*')
        ->from('payment')
        ->join('shop', ' shop.id_shop = payment.id_shop')
        ->join('user', 'user.id = payment.id_customer')
        ->where('id_customer',$a);
        $query = $this->db->get()*/
        $this->db->where('id',$a);
        $query = $this->db->get('user');
        return $query->result();
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

    function show_customershop()
    {
       $status_work = "เปิดแล้ว";
       $this->db->where('status_work',$status_work);
       $query = $this->db->get('shop');
       return $query->result();
    }

    function showproduct_cus($a)
    {
        $this->db->select('*')
        ->from('product')
        //->join('product_set', ' product.id_set = product_set.id_set')
        ->join('shop', 'product.id_shopss = shop.id_shops')
        ->where('id_shopss',$a);
        $query = $this->db->get();
        return $query->result();
    }
    
    function showproducts($a)
    {
        $this->db->where('id_sett',$a);
        $query = $this->db->get('product');
        return $query->result();
    }



    function forget($email)
    {
        $this->db->where('email', $email);
        $result = $this->db->get('user');
        $message = '';
        if ($result->num_rows() > 0) {
            $message = true;

            // $this->load->view('list');

        } else {
            $message = false;
        }
        $data = array(
            "message" => $message, "data" => $result->result()

        );
        return $data;
    }

    function forget_next($a)
    {
        $this->db->where('id',$a);
        $query = $this->db->get('user');
        return $query->result();
    }

    function fetch_pass($session_id)
	{
	    $fetch_pass=$this->db->query("select * from user where id='$session_id'");
	    $res=$fetch_pass->result();
	}

	function change_pass($session_id,$new_pass)
	{
	    $update_pass=$this->db->query("UPDATE user set password='$new_pass'  where id='$session_id'");
	}

    //----------------เดทำ--------------

    function showproductinfos($a)
    {
        $this->db->where('id_shopss',$a);
        $query = $this->db->get('product');
        return $query->result();
    }

    function showproductfoods($a)
    {
        $this->db->where('id_set',$a);
        $query = $this->db->get('product_set');
        return $query->result();
    }

    function showproducteditfoods($a)
    {
        $this->db->where('id_set',$a);
        $query = $this->db->get('product_set');
        return $query->result();
    }

    function showeditfoods($a)
    {
        $this->db->where('id',$a);
        $query = $this->db->get('product_set');
        return $query->result();
    }

    function showproductaddfoods($a)
    {
        $this->db->where('id_set',$a);
        $query = $this->db->get('product_set');
        return $query->result();
    }

    function showproductaddfoods1($b)
    {
        $this->db->where('id_sizes',$b);
        $query = $this->db->get('product_size');
        return $query->result();
    }

    function showproductaddfoods2($c)
    {
        $this->db->where('id_shops',$c);
        $query = $this->db->get('shop');
        return $query->result();
    }

    function showproductdeletefoods($a)
    {
        $this->db->where('id_set',$a);
        $query = $this->db->get('product_set');
        return $query->result();
    }

    function showproductaddsetfoods($a)
    {
        $this->db->where('id_shops',$a);
        $query = $this->db->get('shop');
        return $query->result();
    }

    function insertset($add){
        $this->db->insert('product',$add);
    }

    function insertproduct($add){
        $this->db->insert('product_set',$add);
    }

    function updateproduct($add,$edit){
        $this->db->where('id',$edit);
        $this->db->update('product_set',$add);
    }

    
    function deleteproduct($id){
        $this->db->where('id',$id);
        $this->db->delete('product_set');
    }
    
    function menu_delete($id){
        $this->db->where('id', $id);
        $this->db->delete('product_set');  
    }



}

