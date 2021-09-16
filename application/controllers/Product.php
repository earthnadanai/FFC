<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('session', 'database');
        $this->load->model('Model_product', 'ffc_product');
        $this->load->model('Model_shop', 'ffc_shop');
        $this->load->model('Model_user', 'ffc_user');
        $this->load->helper(array('form', 'url')); 
        
    }

    function page_shop()
    {
        $a = $this->session->userdata('id');
        $data['pe'] = $this->ffc_shop->shop($a);
        $this->load->view('view_shop', $data);
    }   

    function add_shop()
    {
        $data = array();
        $config['upload_path'] = 'img/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = 5024;
        $config['encrypt_name'] = true;  

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('img_shop')) {
            $img_shop='';
        } else {
          $fileData = $this->upload->data();
          $img_shop= $data['img_shop'] = $fileData['file_name'];
        }

        $add = array(

          'id_cus'=> $this->input->post("id_cus"),
          'nameShop'=> $this->input->post("nameShop"),
          'img_shop'=> $img_shop,
          'number_bank'=> $this->input->post("number_bank")
      );

      $a = $this->ffc_shop->adds_shop($add);
      $b = $this->session->userdata('id');

        if($a == 0){ 
            echo "<script language='JavaScript'>";
            echo "alert('คุณกรอกชื่อร้านซ้ำ')";
            echo "</script>";
            $data['pe'] = $this->ffc_shop->shop($b);
            $this->load->view('view_shop', $data);
        }else{
            echo "<script language='JavaScript'>";
            echo "alert('คุณเปิดร้านสำเร็จ')";
            echo "</script>";
            $this->db->set('have_shop', "มี");
            $this->db->where('id', $b);
            $this->db->update('user');
            $data['viewST'] = $this->ffc_shop->view_status($b);
            $this->load->view('view_status', $data);
        }
    }

    function pege_status()
    {
        $a = $this->input->post('id');
        $b = $this->session->userdata('id');
        $data['viewS'] = $this->ffc_shop->view_shop($a);
        $data['viewST'] = $this->ffc_user->view_statu($b);
        $this->load->view('view_status', $data);
    }
    
    function add_status()
    {
        $data = array();
        $config['upload_path'] = 'img/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = 5024;
        $config['encrypt_name'] = true;  

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('img_id_card_number')) {
            $img_id_card_number = '';
        } else {
          $fileData = $this->upload->data();
          $img_id_card_number = $data['img_id_card_number'] = $fileData['file_name'];
        }
        $b = $this->session->userdata('id');
        $this->db->set('img_id_card_number', $img_id_card_number);
        $this->db->set('Waiting_status', "รอการนำเนิดการ");
        $this->db->where('id', $b);
        $result = $this->db->update('user');
        if($result){
            echo "<script language='JavaScript'>";
            echo "alert('คุณได้ส่งการยืนยันแล้ว')";
            echo "</script>";
            $data['viewST'] = $this->ffc_shop->view_status($b);
            $this->load->view('view_status', $data);
        } else {
            echo "<script language='JavaScript'>";
            echo "alert('คุณส่งการยืนยันไม่สำเร็จ')";
            echo "</script>";
            $data['viewST'] = $this->ffc_shop->view_status($b);
            $this->load->view('view_status', $data);
        }
        
    }

    function pege_addfood()
    {
        $a = $this->input->post('id');
        //$a = $this->session->userdata('id');
        $data['viewShop'] = $this->ffc_shop->v_shop($a);
        $this->load->view('add_food',$data);
    }

    function add_food()
    {
        $data = array();
        $config['upload_path'] = 'img/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = 5024;
        $config['encrypt_name'] = true;  

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('img_pro')) {
            $img_pro='';
        } else {
          $fileData = $this->upload->data();
          $img_pro= $data['img_pro'] = $fileData['file_name'];
        }

        $add_food = array(

          'id_pro_shop'=> $this->input->post("id_pro_shop"),
          'nameProduct'=> $this->input->post("nameProduct"),
          'img_pro'=> $img_pro,
          'info'=> $this->input->post("info"),
          'type'=> $this->input->post("type")
      );

      $add = $this->ffc_product->add_foods($add_food);
      $a = $this->input->post('id_pro_shop');

        if($add == 0){ 
            echo "<script language='JavaScript'>";
            echo "alert('อาหารที่คุณเพิ่มมีอยู่แล้ว')";
            echo "</script>";
            $data['viewShop'] = $this->ffc_shop->v_shop($a);
            $this->load->view('add_food',$data);
        }else{
            echo "<script language='JavaScript'>";
            echo "alert('คุณเพิ่มอาหารสำเร็จ')";
            echo "</script>";
            $data['viewS'] = $this->ffc_shop->view_status($a);
            $this->load->view('view_status', $data);
        }
    }

    function pege_setfood()
    {
        $a = $this->input->post('id');
        //$a = $this->session->userdata('id');
        $data['viewSet'] = $this->ffc_shop->view_set($a);
        $this->load->view('set_food',$data);
    }

    function add_set()
    {
        $add_set = array(

            'id_set_shop'=> $this->input->post("id_set_shop"),
            'name_set'=> $this->input->post("name_set"),
            'size'=> $this->input->post("size"),
            'unit_eat'=> $this->input->post("unit_eat"),
            'price'=> $this->input->post("price")
        );

        $this->ffc_product->add_setfood($add_set);
        echo "<script language='JavaScript'>";
        echo "alert('คุณเพิ่มชุดอาหารสำเร็จ')";
        echo "</script>";
        $a = $this->input->post('id_set_shop');
        $data['viewS'] = $this->ffc_shop->view_shop($a);
        $this->load->view('view_status', $data);
 
    }

    function pege_setmeal()
    {
        $a = $this->input->post('id');
        $data['viewSets'] = $this->ffc_product->view_sets($a);
        $data['viewPro'] = $this->ffc_product->view_pro($a);
        $data['viewSet'] = $this->ffc_shop->view_set($a);
        $this->load->view('set_meal',$data);
    }

    function add_setfood()
    {
        $add_setmeal = array(

            'Pro_id_set'=> $this->input->post("Pro_id_set"),
            'Pro_id_pro'=> $this->input->post("Pro_id_pro")
        );

        $add = $this->ffc_product->add_setmeal($add_setmeal);
        $a = $this->input->post('id');
        $b = $this->input->post('Pro_id_set');

        if($add == 0){
            echo "<script language='JavaScript'>";
            echo "alert('คุณเพิ่มอาหารซ้ำ')";
            echo "</script>";
            $data['viewProSet'] = $this->ffc_product->view_Proset($b);
            $data['viewPro'] = $this->ffc_product->view_pro($a);
            $data['viewSet'] = $this->ffc_shop->view_set($a);
            $this->load->view('set_n1meal',$data);
        } else {
            echo "<script language='JavaScript'>";
            echo "alert('คุณเพิ่มอาหารใส่ชุดอาหารสำเร็จ')";
            echo "</script>";
            $data['viewProSet'] = $this->ffc_product->view_Proset($b);
            $data['viewPro'] = $this->ffc_product->view_pro($a);
            $data['viewSet'] = $this->ffc_shop->view_set($a);
            $this->load->view('set_n1meal',$data);
        }
    }

    function pege_N1setmeal()
    {
        $a = $this->input->post('id');
        $b = $this->input->post('Pro_id_set');
        $data['viewProSet'] = $this->ffc_product->view_Proset($b);
        $data['viewPro'] = $this->ffc_product->view_pro($a);
        $data['viewSet'] = $this->ffc_shop->view_set($a);
        $data['viewSetID'] = $this->ffc_product->view_setID($b);
        $this->load->view('set_n1meal',$data);
    }

    
    function pege_foodset()
    {
        $a = $this->input->post('id');
        $data['viewShop'] = $this->ffc_shop->view_shop($a);
        $data['viewProset'] = $this->ffc_product->view_sets($a);
        $data['viewPro'] = $this->ffc_product->view_pro($a);
        $this->load->view('view_foodset',$data);
    }

    function pege_deletefoodset()
    {
        $a = $this->input->post('id');
        $data['viewShop'] = $this->ffc_shop->view_shop($a);
        $data['viewProset'] = $this->ffc_product->view_sets($a);
        $data['viewPro'] = $this->ffc_product->view_pro($a);
        $this->load->view('delete_food',$data);
    }

    function pege_deletefood()
    {
        $a = $this->input->post('id_set');
        $b = $this->input->post('id');
        $data['viewProid'] = $this->ffc_product->view_proid($a);
        $data['viewShop'] = $this->ffc_shop->view_shopss($b);
        $this->load->view('delete_foodset',$data);
    }

    function pege_editfoodset()
    {
        $a = $this->input->post('id_set');
        $b = $this->input->post('id');
        $data['viewProid'] = $this->ffc_product->view_proid($a);
        $data['viewShop'] = $this->ffc_shop->view_shopss($b);
        $this->load->view('edit_foodset',$data);
    }

    function pege_editfood()
    {
        $a = $this->input->post('id_pro');
        $b = $this->input->post('id');
        $data['viewPro'] = $this->ffc_product->view_profood($a);
        $data['viewShop'] = $this->ffc_shop->view_shopss($b);
        $this->load->view('edit_food',$data);
    }

    function edit_food()
    {
        $data = array();
        $config['upload_path'] = 'img/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = 5024;
        $config['encrypt_name'] = true;  

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('img_pro')) {
            $img_pro = '';
        } else {
          $fileData = $this->upload->data();
          $img_pro = $data['img_pro'] = $fileData['file_name'];
        }

            $nameProduct = $this->input->post("nameProduct");
            $type = $this->input->post("type");
            $info = $this->input->post("info");
            $a = $this->input->post("id_pro");
            $b = $this->input->post('id');

        $this->db->set('img_pro', $img_pro);
        $this->db->set('nameProduct', $nameProduct);
        $this->db->set('type', $type);
        $this->db->set('info', $info);
        $this->db->where('id_pro', $a);
        $result = $this->db->update('product');

        if($result){
            echo "<script language='JavaScript'>";
            echo "alert('คุณได้แก้ไขแล้ว')";
            echo "</script>";
            $data['viewPro'] = $this->ffc_product->view_profood($a);
            $data['viewShop'] = $this->ffc_shop->view_shopss($b);
            $this->load->view('edit_food',$data);
        } else {
            echo "<script language='JavaScript'>";
            echo "alert('คุณได้แก้ไขไม่สำเร็จ')";
            echo "</script>";
            $data['viewPro'] = $this->ffc_product->view_profood($a);
            $data['viewShop'] = $this->ffc_shop->view_shopss($b);
            $this->load->view('edit_food',$data);
        }
        
    }

    public function delete_menu()
    {
        $delete_food = $this->input->post("id_pro");
        $a = $this->input->post('id');
        $result = $this->ffc_product->menu_delete($delete_food);
        if($delete_food){
            echo "<script language='JavaScript'>";
            echo "alert('ลบสำเร็จ')";
            echo "</script>";
        $data['viewShop'] = $this->ffc_shop->view_shop($a);
        $data['viewProset'] = $this->ffc_product->view_sets($a);
        $data['viewPro'] = $this->ffc_product->view_pro($a);
        $this->load->view('delete_food',$data);
    } else {
        echo "<script language='JavaScript'>";
            echo "alert('ลบไม่สำเร็จ')";
            echo "</script>";
        $data['viewShop'] = $this->ffc_shop->view_shop($a);
        $data['viewProset'] = $this->ffc_product->view_sets($a);
        $data['viewPro'] = $this->ffc_product->view_pro($a);
        $this->load->view('delete_food',$data);
    }

    }

    public function delete_set()
    {
        $delete_food = $this->input->post("Pro_id");
        $this->ffc_product->set_delete($delete_food);
        if($delete_food){
            $a = $this->input->post('id_set');
            $b = $this->input->post('id');
            $data['viewProid'] = $this->ffc_product->view_proid($a);
            $data['viewShop'] = $this->ffc_shop->view_shopss($b);
            $this->load->view('delete_foodset',$data);
        }         
    }
}