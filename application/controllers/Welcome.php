<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
 	/*public function index()
	{       
        $data['re'] = $this->ffc->show_customershop();
		$this->load->view('viewindex',$data);
	}

	function __construct()
    {
        parent::__construct();
        $this->load->library('session', 'database');
        $this->load->model('Model', 'ffc');
        $this->load->helper(array('form', 'url')); 
        
    }
    
	public function login_x()

    {

        if ($this->input->post('login')) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $passwordenc = md5($password);
            $check = $this->ffc->login($username, $passwordenc);

           if ($check['message'] == true) {
				if ($check['status'] == 1){
                $array = json_decode(json_encode($check['data']), true);
                $this->session->set_userdata($array[0]);  
                $data['query'] = $this->ffc->showuser_admin();
                $this->load->view('view_admin', $data);
			} else if ($check['status'] == 2){
                $array = json_decode(json_encode($check['data']), true);
                $this->session->set_userdata($array[0]);  
                $data['re'] = $this->ffc->show_customershop();
                $this->load->view('viewindex',$data);
			} else if ($check['status'] == 3){
                $array = json_decode(json_encode($check['data']), true);
                $this->session->set_userdata($array[0]);  
                $a = $this->session->userdata('id');
                $data['pe'] = $this->ffc->shop($a);
                $this->load->view('view_shop', $data);
			} 

            } else {
					echo "<script language='JavaScript'>";
                    echo "alert('กรุณาใส่รหัสอีกครั้ง')";
                    echo "</script>";
					$this->load->view('login');
				//$this->session->set_flashdata('msg_error', 'รหัสผ่านไม่ถูกต้องกรุณาตรวจสอบอีกครั้งค่ะ !');
                //redirect('Welcome/index');
            } 
        }
    }

	public function logout()
    {
        $this->session->sess_destroy();
		redirect('Welcome/page_login');
        $this->load->view('bootstap');
        redirect($this->load->view('navbar'), 'refresh');
        //$this->load->view('login');
        //$this->load->view('footer1');
	}

	function showcustomer_admin()
	{
		$data['query'] = $this->ffc->showuser_admin();
        $this->load->view('view_admin', $data);
	}

	function showshop_admin()
	{
		$data['re'] = $this->ffc->showusershop_admin();
		$this->load->view('viewshop_admin',$data);
	}

	function showproduct_customer()
	{   
        $a = $this->input->post('id');
        $data['re'] = $this->ffc->showproduct_cus($a);
		$this->load->view('viewproduct_cus',$data);
	}

    function showproduct()
    {
        $a = $this->input->post('id');
        $data['re'] = $this->ffc->showproducts($a);
		$this->load->view('showproduct',$data);
    }

    public function Register_cus()
    {
        $data = array(
            
            'username'=> $this->input->post("username"),
            'password'=> md5($this->input->post("password")),
            'email'=> $this->input->post("email"),
            'firstname'=> $this->input->post("firstname"),
            'lastname'=> $this->input->post("lastname"),
			'tell'=> $this->input->post("tell"),
            'status'=> $this->input->post("status"),
            'numhome'=> $this->input->post("numhome"),
            'province'=> $this->input->post("province"),
            'district'=> $this->input->post("district"),
            'parish'=> $this->input->post("parish"),

        );

        $a = $this->ffc->regis_cus($data);
        if($a = 1){ 
            echo "<script language='JavaScript'>";
            echo "alert('คุณกรอกข้อมูลซ้ำ')";
            echo "</script>";
            $this->load->view('bootstap');
            $this->load->view('register');
        }else{
            echo "<script language='JavaScript'>";
            echo "alert('คุณลงทะเบียนสำเร็จ')";
            echo "</script>";
            $this->load->view('bootstap');
            $this->load->view('login');
        }
            

	}

	public function Register()
    {
        $data = array(
            
            'username'=> $this->input->post("username"),
            'password'=> md5($this->input->post("password")),
            'email'=> $this->input->post("email"),
            'firstname'=> $this->input->post("firstname"),
            'lastname'=> $this->input->post("lastname"),
            'id_card_number'=> $this->input->post("id_card_number"),
			'tell'=> $this->input->post("tell"),
            'status'=> $this->input->post("status"),
            'numhome'=> $this->input->post("numhome"),
            'province'=> $this->input->post("province"),
            'district'=> $this->input->post("district"),
            'parish'=> $this->input->post("parish"),
            'latitude'=> $this->input->post("latitude"),
            'longitude'=> $this->input->post("longitude")
        );

        $a = $this->ffc->regis($data);
        $b = $this->ffc->regis1($data);
        /* $c = $this->ffc->regis2($data);
        if($a = 1 && $b = 1 && $c = 1){ *//*
            if($a = 1 && $b = 1){ 
            echo "<script language='JavaScript'>";
            echo "alert('คุณกรอกข้อมูลซ้ำ')";
            echo "</script>";
            $this->load->view('bootstap');
            $this->load->view('register');
        }else{
            echo "<script language='JavaScript'>";
            echo "alert('คุณลงทะเบียนสำเร็จ')";
            echo "</script>";
            $this->load->view('bootstap');
            $this->load->view('login');
        }
            

	}

	function info_customer()
    {  
        $a = $this->input->post('id');
        $data['re'] = $this->ffc->showinfo_customer($a);
        $this->load->view('showinfo_customer', $data);
    }

    function info_shop()
    {  
        $b = $this->input->post('id');
        $data['re'] = $this->ffc->showinfo_shop($b);
        $data['ve'] = $this->ffc->showinfo_shop1($b);
        $this->load->view('showinfo_shop', $data);
    }

    function showapproval_shop()
    {
        $data['query'] = $this->ffc->showapprovals_shop();
        $this->load->view('showapproval_shop', $data);
    }

    function showapprovalinfo_shop()
    {
        $a = $this->input->post('id');
        $data['qu'] = $this->ffc->showapprovals_shop1($a);
        $this->load->view('showapprovalinfo_shop', $data);
    }
    
    /*function showapproval_customer()
    {
        $data['query'] = $this->ffc->showapprovals_cus();
        $data['qu'] = $this->ffc->showapprovals_cuss();
        $this->load->view('showapproval_customer', $data);
    }*/ /*

    function showapprovalinfo_customer()
    {
        $a = $this->input->post('id');
        $data['query'] = $this->ffc->showapprovals_cus1($a);
        $this->load->view('showapprovalinfo_customer', $data);
    }

    function trading_admin()
    {
        $data['query'] = $this->ffc->tradings_admin();
        $this->load->view('trading_admin', $data);
    }

    function tradinginfo_admin()
    {
        $a = $this->input->post('id');
        $data['query'] = $this->ffc->tradings_admin1($a);
        $this->load->view('tradinginfo_admin', $data);
    }

    function tradingfood_admin()
    {
        $a = $this->input->post('id');
        $b = $this->input->post('id_p');
        $c = $this->input->post('id_shop');
        $data['ve'] = $this->ffc->tradings_admin4($c);
        $data['qu'] = $this->ffc->tradings_admin3($b);
        $data['query'] = $this->ffc->tradings_admin2($a);
        $this->load->view('tradingfood_admin', $data);
    }

    function showfood_cus()
    {
        $a = $this->input->post('id');
        $data['query'] = $this->ffc->showfood($a);
        $data['qu'] = $this->ffc->showfood1($a);
        $data['re'] = $this->ffc->showfood2($a);
        $data['ve'] = $this->ffc->showfood3($a);
        $data['xe'] = $this->ffc->showfood4($a);
        $data['qe'] = $this->ffc->showfood5($a);
        $data['te'] = $this->ffc->showfood6($a);
        $this->load->view('showfood', $data);
    }

	public function page_register()
    {
        $this->load->view('bootstap');
        //$this->load->view('header');
        $this->load->view('register');
        $this->load->view('footer');
    }

    public function page_login()
    {
        $this->load->view('bootstap');
        //$this->load->view('header');
        $this->load->view('login');
    }

    public function page_forget()
    {
        $this->load->view('bootstap');
        //$this->load->view('header');
        $this->load->view('forget');
        //$this->load->view('footer1');
    }

    function forget_x()
    {
        if ($this->input->post('forget')) {
            $email = $this->input->post('email');
            $check = $this->ffc->forget($email);

            if ($check['message'] == true) {
                $array = json_decode(json_encode($check['data']), true);
                $this->session->set_userdata($array[0]);
                $a = $this->session->userdata('id')  ;
                $data['query'] = $this->ffc->forget_next($a);
                $this->load->view('forget_next',$data);
                


            } else {

                echo "<script language='JavaScript'>";
                    echo "alert('กรุณาใส่รหัสอีกครั้ง')";
                    echo "</script>";
					$this->load->view('forget');

            }
        }
    }

 
    
    public function change_pass()
	{
		if($this->input->post('change_pass'))
		{
			$new_pass=$this->input->post('new_pass');
			$confirm_pass=$this->input->post('confirm_pass');
			$session_id=$this->session->userdata('id');
			$que=$this->db->query("select * from user where id='$session_id'");
			$row=$que->row();
			if((!strcmp($new_pass, $confirm_pass))){
             
				$this->ffc->change_pass($session_id,$new_pass);
                echo "<script language='JavaScript'>";
                echo "alert('Password changed successfully !')";
                echo "</script>";
                $this->session->sess_destroy();
                redirect('Welcome/page_login');
                //$this->load->view('login');
                redirect($this->load->view('navbar'), 'refresh');
                
				}
			    else{
                    echo "<script language='JavaScript'>";
					echo "alert('ไม่ถูกต้อง')";
                    echo "</script>";
                    $a = $this->session->userdata('id')  ;
                    $data['query'] = $this->ffc->forget_next($a);
                    $this->load->view('forget_next',$data);

				}
    
		}
			
	}

    public function adding()
	{
              $a = $this->input->post('id');
			  $data = array();
			  $config['upload_path'] = 'img_bank/';
			  $config['allowed_types'] = 'jpg|png';
			  $config['max_size'] = 5024;
			  $config['encrypt_name'] = true;  

			  $this->load->library('upload', $config);

			//img1
			  if (!$this->upload->do_upload('P_img_shop')) {
			      $P_img_shop='';
			  } else {
			    $fileData = $this->upload->data();
			    $P_img_shop= $data['P_img_shop'] = $fileData['file_name'];
			  }

                $this->db->set('P_img_shop', $P_img_shop);
                $this->db->where('id_p', $a);
			    $result = $this->db->update('payment');
 
			  if ($result) {
			    echo "<script language='JavaScript'>";
                echo "alert('อับโหลดสำเร็จ $P_img_shop')";
                echo "</script>";
                $data1['query'] = $this->ffc->tradings_admin();
                $this->load->view('trading_admin', $data1);
			  } else {
                echo "<script language='JavaScript'>";
                echo "alert('อับโหลดไม่สำเร็จ')";
                echo "</script>";
                $data['query'] = $this->ffc->tradings_admin1();
                $this->load->view('tradinginfo_admin', $data);
			  }

              
	}

    function ok_shop()
    {
        $id = $this->input->post('id');
        $Waiting_status = $this->input->post('Waiting_status');
        $this->db->set('Waiting_status', $Waiting_status);
        $this->db->where('id', $id);
        $result =$this->db->update('user');
        
        if ($result) {
            echo "<script language='JavaScript'>";
            echo "alert('อนุมัติให้เปิดร้าน')";
            echo "</script>";
            $data['query'] = $this->ffc->showapprovals_shop();
            $this->load->view('showapproval_shop', $data);
        } else {
            echo "<script language='JavaScript'>";
            echo "alert('ไม่สำเร็จ')";
            echo "</script>";
        }
	}

    function page_shop()
    {
        $a = $this->session->userdata('id');
        $data['pe'] = $this->ffc->shop($a);
        $this->load->view('view_shop', $data);
    }              
    
    //----------------------เดทำ------------------------
    public function showproductinfo()
    {
        $a = $this->input->post('id');
        $data['query']= $this->ffc->showproductinfos($a);
        $this->load->view('showproductinfo',$data);
    }

    public function showproductfood(){
        $a = $this->input->post('id');
        $data['query']= $this->ffc->showproductfoods($a);
        $this->load->view('showproductfood',$data);
    }
    public function showproducteditfood(){
        $a = $this->input->post('id');
        $data['query']= $this->ffc->showproducteditfoods($a);
        $this->load->view('editProduct',$data);  
    }

    public function showeditfood(){
        $a = $this->input->post('id');
        $data['query']= $this->ffc->showeditfoods($a);
        $this->load->view('editfood',$data);  
    }

    public function showproductaddfood(){
        $a = $this->input->post('id');
        $b = $this->input->post('id_shop');
        $c = $this->input->post('id_size');
        $data['query']= $this->ffc->showproductaddfoods($a);
        $data['query1']= $this->ffc->showproductaddfoods2($b);
        $data['query2']= $this->ffc->showproductaddfoods1($c);
        $this->load->view('AddProduct',$data);  
    }

    public function showproductdeletefood(){
        $a = $this->input->post('id');
        $data['query']= $this->ffc->showproductdeletefoods($a);
        $this->load->view('DeleteProduct',$data);  
    }

    public function showproductaddsetfood()
    {
        $a = $this->input->post('id');
        $data['query']= $this->ffc->showproductaddsetfoods($a);
        $this->load->view('Addsetfood',$data);  
    }

    public function addsetfood()
	{
              
			  $data = array();
			  $config['upload_path'] = 'img/';
			  $config['allowed_types'] = 'jpg|png';
			  $config['max_size'] = 5024;
			  $config['encrypt_name'] = true;  

			  $this->load->library('upload', $config);

			//img1
			  if (!$this->upload->do_upload('img_product')) {
			      $img_product='';
			  } else {
			    $fileData = $this->upload->data();
			    $img_product= $data['img_product'] = $fileData['file_name'];
			  }

              $add = array(
                'id_shopss'=> $this->input->post("id_shops"),
                'name_set'=> $this->input->post("name_set"),
                'img_product'=> $img_product    
                
            );
			    echo "<script language='JavaScript'>";
                echo "alert('เพิ่่มเซ็ตอาหารสำเร็จ $img_product')";
                echo "</script>";
                $this->ffc->insertset($add);
                $a = $this->input->post('id');
                $data1['query'] = $this->ffc->showproductinfos($a);
                $this->load->view('showproductinfo', $data1);
		
	}

    public function addfood()
	{
              
			  $data = array();
			  $config['upload_path'] = 'img/';
			  $config['allowed_types'] = 'jpg|png';
			  $config['max_size'] = 5024;
			  $config['encrypt_name'] = true;  

			  $this->load->library('upload', $config);

			//img1
			  if (!$this->upload->do_upload('p_img')) {
			      $p_img='';
			  } else {
			    $fileData = $this->upload->data();
			    $p_img= $data['p_img'] = $fileData['file_name'];
			  }

              $add = array(

                'id_set'=> $this->input->post("id_set"),
                'id_shop'=> $this->input->post("id_shop"),
                'nameProduct'=> $this->input->post("nameProduct") ,
                'p_img'=> $p_img,
                'info'=> $this->input->post("info"),
                'type'=> $this->input->post("type"),
                'id_size'=> $this->input->post("id_size")
            );
			    echo "<script language='JavaScript'>";
                echo "alert('เพิ่่มอาหารสำเร็จ $p_img')";
                echo "</script>";
                $this->ffc->insertproduct($add);
                $a = $this->input->post('id');
                $data1['query'] = $this->ffc->showproductaddfoods($a);
                $this->load->view('showproductfood', $data1);     
	}

    function editfood()
    {
        $data = array();
        $config['upload_path'] = 'img/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = 5024;
        $config['encrypt_name'] = true;  

        $this->load->library('upload', $config);

      //img1
        if (!$this->upload->do_upload('p_img')) {
            $p_img='';
        } else {
          $fileData = $this->upload->data();
          $p_img= $data['p_img'] = $fileData['file_name'];
        }

        $add = array(
          'nameProduct'=> $this->input->post("nameProduct") ,
          'p_img'=> $p_img,
          'info'=> $this->input->post("info"),
          'type'=> $this->input->post("type"),
          
          
      );
      $edit = $this->input->post("id");
          echo "<script language='JavaScript'>";
          echo "alert('แก้ไขสำเร็จอาหารสำเร็จ $p_img')";
          echo "</script>";
          $this->ffc->updateproduct($add,$edit);
          $a = $this->input->post('id');
          $data1['query'] = $this->ffc->showproductaddfoods($a);
          $this->load->view('showproductfood', $data1);  
    }

    public function deletedata()
    {
    $id=$this->input->get('id');
    $this->ffc->deleteproduct($id);
    echo "<script language='JavaScript'>";
          echo "alert('แก้ไขสำเร็จอาหารสำเร็จ $p_img')";
          echo "</script>";
          $a = $this->input->post('id');
          $data1['query'] = $this->ffc->showproductaddfoods($a);
          $this->load->view('showproductfood', $data1);  
    }


    public function delete_menu()
	{
		$delete_mid = $this->input->get("id");
		//echo $delete_mid;
		$this->ffc->menu_delete($delete_mid);
        echo "<script language='JavaScript'>";
        echo "alert('ลบสำเร็จอาหารสำเร็จ $delete_mid')";
        echo "</script>";
        $a = $this->input->post('id_set');
        $data1['query'] = $this->ffc->showproductaddfoods($a);
		$this->load->view('showproductfood', $data1);
	}
        //------------ภูริทำนะ-------------
        function how_to_order(){
        
            $this->load->view('how_to_order');
        }
        function how_to_sell(){
    
            $this->load->view('how_to_sell');
        }
        function how_to_pay(){
    
            $this->load->view('how_to_pay');
        }
        function team_bdep(){
    
            $this->load->view('team_bdep');
        } */
 
}
