<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->library('session', 'database');
        $this->load->model('Model_user', 'ffc_user');
        $this->load->model('Model_shop', 'ffc_shop');
        $this->load->helper(array('form', 'url')); 
        
    }

        
	public function login_x()

    {

        if ($this->input->post('login')) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $passwordenc = md5($password);
            $check = $this->ffc_user->login($username, $passwordenc);

           if ($check['message'] == true) {
				if ($check['status'] == 1){
                $array = json_decode(json_encode($check['data']), true);
                $this->session->set_userdata($array[0]);  
                $data['query'] = $this->ffc_user->showuser_admin();
                $this->load->view('view_admin', $data);
			} else if ($check['status'] == 2){
                $array = json_decode(json_encode($check['data']), true);
                $this->session->set_userdata($array[0]);  
                $data['re'] = $this->ffc_shop->show_customershop();
                $this->load->view('viewindex',$data);
			} else if ($check['status'] == 3){
                $array = json_decode(json_encode($check['data']), true);
                $this->session->set_userdata($array[0]);  
                $a = $this->session->userdata('id');
                $data['pe'] = $this->ffc_shop->shop($a);
                $this->load->view('view_shop', $data);
			} 

            } else {
					echo "<script language='JavaScript'>";
                    echo "alert('กรุณาใส่รหัสอีกครั้ง')";
                    echo "</script>";
					$this->load->view('login');
            } 
        }
    }

	public function logout()
    {
        $this->session->sess_destroy();
		redirect('User/page_login');
        $this->load->view('bootstap');
        redirect($this->load->view('navbar'), 'refresh');
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
        
        $a = $this->ffc_user->regis_cus($data);
        if($a == 0){ 
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
        $data_register = array(
            
            'username'=> $this->input->post("s_username"),
            'password'=> md5($this->input->post("s_password")),
            'email'=> $this->input->post("s_email"),
            'firstname'=> $this->input->post("s_firstname"),
            'lastname'=> $this->input->post("s_lastname"),
            'id_card_number'=> $this->input->post("id_card_number"),
			'tell'=> $this->input->post("s_tell"),
            'status'=> $this->input->post("s_status"),
            'numhome'=> $this->input->post("s_numhome"),
            'province'=> $this->input->post("s_province"),
            'district'=> $this->input->post("s_district"),
            'parish'=> $this->input->post("s_parish"),
            'latitude'=> $this->input->post("latitude"),
            'longitude'=> $this->input->post("longitude")
        );

        $a = $this->ffc_user->regis_shop($data_register);
        $b = $this->ffc_user->regis1_shop($data_register);
            if($a == 0 && $b == 0){ 
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
    
	public function page_register()
    {
        $this->load->view('bootstap');
        $this->load->view('register');
        $this->load->view('footer');
    }

    public function page_login()
    {
        $this->load->view('bootstap');
        $this->load->view('login');
    }

    public function page_forget()
    {
        $this->load->view('bootstap');
        $this->load->view('forget');
    }

    function forget_x()
    {
        if ($this->input->post('forget')) {
            $email = $this->input->post('email');
            $check = $this->ffc_user->forget($email);

            if ($check['message'] == true) {
                $array = json_decode(json_encode($check['data']), true);
                $this->session->set_userdata($array[0]);
                $a = $this->session->userdata('id')  ;
                $data['query'] = $this->ffc_user->forget_next($a);
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
			$new_pass= md5($this->input->post('new_pass'));
			$confirm_pass= md5($this->input->post('confirm_pass'));
			$session_id=$this->session->userdata('id');
			$que=$this->db->query("select * from user where id='$session_id'");
			$row=$que->row();
			if((!strcmp($new_pass, $confirm_pass))){
             
				$this->ffc_user->change_pass($session_id,$new_pass);
                echo "<script language='JavaScript'>";
                echo "alert('Password changed successfully !')";
                echo "</script>";
                $this->session->sess_destroy();
                redirect('User/page_login');
                redirect($this->load->view('navbar'), 'refresh');
                
				}
			    else{
                    echo "<script language='JavaScript'>";
					echo "alert('ไม่ถูกต้อง')";
                    echo "</script>";
                    $a = $this->session->userdata('id')  ;
                    $data['query'] = $this->ffc_user->forget_next($a);
                    $this->load->view('forget_next',$data);

				}
    
		}
			
	}
    


}