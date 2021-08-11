<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('session', 'database');
        //$this->load->model('Model_customer', 'ffc_customer');
        $this->load->model('Model_product', 'ffc_product');
        $this->load->model('Model_shop', 'ffc_shop');
        $this->load->model('Model_user', 'ffc_user');
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
        $district= $this->input->post('district');
        $parish= $this->input->post('parish');

        $this->db->set('firstname', $firstname);
        $this->db->set('lastname', $lastname);
        $this->db->set('email', $email);
        $this->db->set('tell', $tell);
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
    public function lalala()
    {
        $this->load->view('bootstap');
        $this->load->view('view_search');
    }
    public function lalalapayment()
    {
        $this->load->view('bootstap');
        $this->load->view('view_payment');
    }

}