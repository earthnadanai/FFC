<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('session', 'database');
        $this->load->model('Model_product', 'ffc_product');
        $this->load->model('Model_shop', 'ffc_shop');
        $this->load->model('Model_user', 'ffc_user');
        $this->load->model('Model_order', 'ffc_order');
        $this->load->helper(array('form', 'url')); 
        
    }

    public function index()
	{       
        $data['re'] = $this->ffc_shop->show_customershop();
		$this->load->view('viewindex',$data);
	}

    function showproduct_customer()
	{   
        $a = $this->input->post('id');
        $data['re'] = $this->ffc_product->showproduct_cus($a);
        $data['viewShop'] = $this->ffc_shop->view_shops($a);
		$this->load->view('viewproduct_cus',$data);
	}

    function showproduct()
    {
        $a = $this->input->post('id');
        $b = $this->input->post('id_set');
        $data['re'] = $this->ffc_product->showproducts($b);
        $data['result'] = $this->ffc_product->showproduct_cuss($b);
        $data['viewShop'] = $this->ffc_shop->view_shops($a);
		$this->load->view('showproduct',$data);
    }
    
    /*function showproducts($a)
    {
        $this->db->where('id_sett',$a);
        $query = $this->db->get('product');
        return $query->result();
    }*/

    function showfood_cus()
    {
        $a = $this->input->post('id');
        $data['query'] = $this->ffc_product->showfood($a);
        $data['qu'] = $this->ffc_product->showfood1($a);
        $data['re'] = $this->ffc_product->showfood2($a);
        $data['ve'] = $this->ffc_product->showfood3($a);
        $data['xe'] = $this->ffc_product->showfood4($a);
        $data['qe'] = $this->ffc_product->showfood5($a);
        $data['te'] = $this->ffc_product->showfood6($a);
        $this->load->view('showfood', $data);
    }

    public function page_edit()
    {
        $id=$this->session->userdata('id');
        $data['query'] = $this->ffc_user->showprofile($id);
        $this->load->view('edituser',$data);
    }
    public function profile_edit()
    {
        $id=$this->session->userdata('id');
        $firstname= $this->input->post('firstname');
        $lastname= $this->input->post('lastname');
        $email= $this->input->post('email');
        $tell= $this->input->post('tell');
        $province= $this->input->post('province');
        $numhome= $this->input->post('numhome');
        $district= $this->input->post('district');
        $parish= $this->input->post('parish');

        $this->db->set('firstname', $firstname);
        $this->db->set('lastname', $lastname);
        $this->db->set('email', $email);
        $this->db->set('tell', $tell);
        $this->db->set('numhome', $numhome);
        $this->db->set('province', $province);
        $this->db->set('district', $district);
        $this->db->set('parish', $parish);
        $this->db->where('id', $id);
        $result = $this->db->update('user');
        echo "<script language='JavaScript'>";
        echo "alert('แก้ไขสำเร็จ!')";
        echo "</script>";
        $data['query'] = $this->ffc_user->showprofile($id);
        $this->load->view('edituser',$data);
        
    }

    public function lalalapayment()
    {
        $this->load->view('bootstap');
        $this->load->view('view_payment');
    }

    public function search()
    {
        $search = $this->input->post('search');
        $data['xe'] = $this->ffc_product->show_search($search);
        $data['xx'] = $this->ffc_shop->show_searchs($search);
        $this->load->view('view_search', $data);
    }

    public function buy_product()
    {
        {
            $data = array(
                
                'id_order'=> $this->input->post("id_order"),
                'id_customer'=> $this->input->post("id_customer"),
                'id_shop'=> $this->input->post("id_shop"),
                'nameProduct'=> $this->input->post("nameProduct"),
                'image'=> $this->input->post("image"),
                'price'=> $this->input->post("price"),
                'name_size'=> $this->input->post("name_size"),
    
            );
            
            $a = $this->ffc_order->buy_product($data);
            $b = $this->input->post('id');
            $c = $this->input->post('id_customer');
            if($a == 0){ 
                echo "<script language='JavaScript'>";
                echo "alert('กรุณาชำระเงินค่าอาหารก่อนสั่งซ้ำ')";
                echo "</script>";
                $data["buyshop"] = $this->ffc_shop->view_shopss($b);
                $data["buypro"] = $this->ffc_order->view_order($c);
                $this->load->view("set_product",$data);
            }else{
                $data["buyshop"] = $this->ffc_shop->view_shopss($b);
                $data["buypro"] = $this->ffc_order->view_order($c);
                $this->load->view("set_product",$data);
            }
                
    
        }
        /*$a = $this->input->post('id_sets');
        $b = $this->input->post('id');
        $data["buypro"] = $this->ffc_product->buy_product($a);
        $data["buyshop"] = $this->ffc_shop->view_shopss($b);
        $this->load->view("set_product",$data);*/
    }

    
    public function final_payment()
    {
        $this->load->view('bootstap');
        $this->load->view("final_payment");
    }
}