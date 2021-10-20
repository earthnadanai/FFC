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
        echo '<script src ="https://code.jquery.com/jquery-3.6.0.min.js"> </script>';
        echo '<script src ="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"> </script>';
        echo '<link rel="stylesheet" href  ="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />';
        echo '<script> setTimeout(function() {
                    swal({
                        title : "ข้อมูลถูกต้อง",
                        text : "แก้ไขสำเร็จ",
                        type : "success"
                    })
                }, 1000);
                </script>';
        $data['query'] = $this->ffc_user->showprofile($id);
        $this->load->view('edituser',$data);
        
    }

    public function foodpayment()
    {
        $id_order = $this->input->post('id_o');
        /*$id_food = $this->input->post('id_order');
        $id_customer = $this->input->post('id_customer');
        $id_shop = $this->input->post('id_shop');*/
        $data['foodpay'] = $this->ffc_order->foodpayment($id_order);
        $this->load->view('view_payment',$data);
    }

    public function search()
    {
        $search = $this->input->post('search');
        $data['searchs_product'] = $this->ffc_product->show_search($search);
        $data['search_shop'] = $this->ffc_shop->show_searchs($search);
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
            //$b = $this->input->post('id_set');
            $idcut = $this->input->post('id_customer');
            if($a == 0){ 
                /*echo "<script language='JavaScript'>";
                echo "alert('กรุณาชำระเงินค่าอาหารก่อนสั่งซ้ำ')";
                echo "</script>";
                $data['result'] = $this->ffc_product->showproduct_cuss($b);*/
                $data["buypro"] = $this->ffc_order->view_order($idcut);
                echo '<script src ="https://code.jquery.com/jquery-3.6.0.min.js"> </script>';
                echo '<script src ="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"> </script>';
                echo '<link rel="stylesheet" href  ="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />';
                echo '<script> setTimeout(function() {
                            swal({
                                title : "ข้อมูลผิดพลาด",
                                text : "กรุณาชำระเงินค่าอาหารก่อนสั่งซ้ำ",
                                type : "warning"
                            })
                        }, 1000);
                        </script>';
                $this->load->view("set_product",$data);
            }else{
                //$data['result'] = $this->ffc_product->showproduct_cuss($b);
                $data["buypro"] = $this->ffc_order->view_order($idcut);
                $this->load->view("set_product",$data);
            }
                
    
        }

    }

    public function buy_productback()
    {
        $idcut = $this->input->post('id_customer');
        $data["buypro"] = $this->ffc_order->view_order($idcut);
        $this->load->view("set_product",$data);        
    }

    
    
    public function final_payment()
    {
        $data = array(
                
            'id_customer'=> $this->input->post("id_customer"),
            'id_shop'=> $this->input->post("id_shop"),
            'date_customer'=> $this->input->post("date_customer"),
            'id_sett'=> $this->input->post("id_sett"), 
            'comment'=> $this->input->post("comment")

        );
        
        $add_order = $this->ffc_order->final_payment($data);
        $delete_order = $this->input->post("id_o");
        $idcut = $this->input->post('id_customer');
        if($add_order == 0){ 
            echo "<script language='JavaScript'>";
            echo "alert('ยืนยันการสั่งไม่สำเร็จ')";
            echo "</script>";
            $data["buypro"] = $this->ffc_order->view_order($idcut);
            $this->load->view("set_product",$data);
        }else{
            $this->ffc_order->order_delete($delete_order);
            $this->load->view("final_payment");
        }
    }

    public function view_basketsimple()
    {
        $idcut = $this->session->userdata['id'];
        $data["buypro"] = $this->ffc_order->view_order($idcut);
        $this->load->view("view_basket",$data);        
    }

    public function delete_order()
    {
        $idcut = $this->session->userdata['id'];
        $data["buypro"] = $this->ffc_order->view_order($idcut);
        $this->load->view("delete_order",$data);        
    }

    function showproduct_search()
    {
        $id_pro = $this->input->post("id");
        $id_shop = $this->input->post("id_shop");
        $data["foodset"] = $this->ffc_product->product_search($id_pro);
        $data["foodshop"] = $this->ffc_shop->product_search($id_shop);
        $this->load->view("food_search",$data);
    }
}