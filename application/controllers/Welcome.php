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
	public function index()
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
            $check = $this->ffc->login($username, $password);

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

	public function Register()
    {
        $data = array(
            
            'username'=> $this->input->post("username"),
            'password'=> $this->input->post("password"),
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
        $c = $this->ffc->regis2($data);
        if($a = 1 && $b = 1 && $c = 1){ 
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
        $data['qu'] = $this->ffc->showapprovals_shops();
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
    }*/

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
        $data['query'] = $this->ffc->tradings_admin2($a);
        $this->load->view('tradingfood_admin', $data);
    }

    function showfood_cus()
    {
        $a = $this->input->post('id');
        $data['query'] = $this->ffc->showfood($a);
        $data['qu'] = $this->ffc->showfood1($a);
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
        $this->load->view('footer');
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

			//insert to table
			                $datatotable = array(
                                
                                'id'=> $this->input->post("id"),
			                    'P_img_shop' => $P_img_shop
			                );
                            $a = $this->input->post('id');
                            $this->db->where('id', $a);
			                $result = $this->db->update('payment', $datatotable);

                            
			  if ($result) {
			    echo "<script language='JavaScript'>";
                echo "alert('อับโหลดสำเร็จ')";
                echo "</script>";
			  } else {
			    echo 'wrong';
			  }
                  /*$a = $this->input->post('id');
                  $data = array(
                      
                      'id'=> $this->input->post("id"),
                      'id_cuss'=> $this->input->post("id_cuss"),
                      'id_shops'=> $this->input->post("id_shops"),
                      'id_order'=> $this->input->post("id_order"),
                      'P_img_cus'=> $this->input->post("P_img_cus"),
                      'total'=> $this->input->post("total"),
                      'nameBang'=> $this->input->post("nameBang"),
                      'P_img_shop'=> $this->input->post("P_img_shop")
                  );
                  $this->ffc->update($data);
                  echo "<script language='JavaScript'>";
                  echo "alert('อับโหลดสำเร็จ')";
                  echo "</script>";*/
              
	}
 
}
