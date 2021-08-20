<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_user extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

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

    function regis_shop($data_register)
    {
        $username = $data_register['username'];
        $this->db->where('username',$username);
        $query = $this->db->get('user');
        if ($query->num_rows() > 0) {
            $message = false;
            return $message;
        } else {
            $this->db->insert('user',$data_register);
            $message = true;  
            return $message;
        }      
    }
    
    function regis1_shop($data_register)
    {
        $id_card = $data_register['id_card_number'];
        $this->db->where('id_card_number',$id_card);
        $query = $this->db->get('user');
        if ($query->num_rows() > 0) {
            $message = false;
            return $message;
        } else {
            $this->db->insert('user',$data_register);
            $message = true;  
            return $message;
        }      
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

    function change_pass($session_id,$new_pass)
	{
	    $update_pass=$this->db->query("UPDATE user set password='$new_pass'  where id='$session_id'");
	}

    function showuser_admin()
    {
        $status = "2";
        $this->db->where('status', $status);
        $query = $this->db->get('user');
        return $query->result();
    }

    /*function show_customershop()
    {
       $status_work = "เปิดแล้ว";
       $this->db->where('status_work',$status_work);
       $query = $this->db->get('shop');
       return $query->result();
    }*/

    /*function shop($a)
    {
        $this->db->where('id_cus', $a);
        $query = $this->db->get('shop',$a);
        return $query->result();
    }*/

    function showapprovals_shop()
    {   
        $waiting_status = "รอการนำเนิดการ";
        $status = "3";
        $this->db->where('waiting_status',$waiting_status);
        $this->db->where('status',$status);
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

    function showprofile($id)
    {
       $this->db->where('id',$id);
       $query = $this->db->get('user');
       return $query->result();
    }

    function showinfo_customer($a)
    {
        $this->db->where('id',$a);
        $query = $this->db->get('user');
        return $query->result();
    }

    function view_statu($b)
    {
        $this->db->where('id', $b);
        $query = $this->db->get('user');
        return $query->result();
    }

    

}