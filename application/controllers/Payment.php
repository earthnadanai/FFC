<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('session', 'database');
        $this->load->model('Model_payment', 'ffc_payment');
        $this->load->model('Model_shop', 'ffc_shop');
        $this->load->model('Model_order', 'ffc_order');
        $this->load->model('Model_confirmation', 'ffc_confirmation');
        $this->load->helper(array('form', 'url')); 
        
    }

    function trading_admin()
    {
        $data['query'] = $this->ffc_payment->tradings_admin();
        $this->load->view('trading_admin', $data);
    }

    function tradinginfo_admin()
    {
        $a = $this->input->post('id');
        $data['query'] = $this->ffc_payment->tradings_admin1($a);
        $this->load->view('tradinginfo_admin', $data);
    }

    public function adding()
	{
              $a = $this->input->post('id');
              $id_conn = $this->input->post('id_conn');
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

              $data_add= array(

                'id_shop' => $this->input->post("id_shop"),
                'id_customer' => $this->input->post("id_customer"),
                'id_Set' => $this->input->post("id_Set"),
                'date' => $this->input->post("date_shop"),
                'id_payment' => $this->input->post("id_payment")

              );

              $date_shop = $this->input->post("date_shop");

              $this->db->set('status_admin', "โอนแล้ว");
              $this->db->set('date_shop', $date_shop);
              $this->db->set('P_img_shop', $P_img_shop);
              $this->db->where('id_p', $a);
              $result = $this->db->update('payment');

            if ($result) {
                echo '<script src ="https://code.jquery.com/jquery-3.6.0.min.js"> </script>';
                echo '<script src ="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"> </script>';
                echo '<link rel="stylesheet" href  ="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />';
                echo '<script> setTimeout(function() {
                            swal({
                                title : "ข้อมูลถูกต้อง",
                                text : "อับโหลดสำเร็จ",
                                type : "success"
                            })
                        }, 1000);
                        </script>';
                $this->ffc_order->add_orderhistory($data_add);
                $this->ffc_confirmation->delete_confirmation($id_conn);
                $data1['query'] = $this->ffc_payment->tradings_admin();
                $this->load->view('trading_admin', $data1);
			  } else {
                echo '<script src ="https://code.jquery.com/jquery-3.6.0.min.js"> </script>';
                echo '<script src ="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"> </script>';
                echo '<link rel="stylesheet" href  ="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />';
                echo '<script> setTimeout(function() {
                            swal({
                                title : "ข้อมูลผิดพลาด",
                                text : "อับโหลดไม่สำเร็จ",
                                type : "warning"
                            })
                        }, 1000);
                        </script>';
                $data['query'] = $this->ffc_payment->tradings_admin1();
                $this->load->view('tradinginfo_admin', $data);
			  }

              
	}

    function tradingfood_admin()
    {
        $a = $this->input->post('id');
        $b = $this->input->post('id_p');
        $c = $this->input->post('id_shop');
        $data['ve'] = $this->ffc_shop->tradings_admin4($c);
        $data['qu'] = $this->ffc_payment->tradings_admin3($b);
        $data['query'] = $this->ffc_payment->tradings_admin2($a);
        $this->load->view('tradingfood_admin', $data);
    }

    public function payfor_make()
    {
        $id_conn = $this->input->post("id_conn");
        $data["payfood"] = $this->ffc_confirmation->order_palment($id_conn);
        $this->load->view("view_payfood",$data);        
    }

    
    public function addpay_customer()
	{
              $a = $this->input->post('id');
			  $data = array();
			  $config['upload_path'] = 'img_bank/';
			  $config['allowed_types'] = 'jpg|png';
			  $config['max_size'] = 5024;
			  $config['encrypt_name'] = true;  

			  $this->load->library('upload', $config);

			//img1
			  if (!$this->upload->do_upload('P_img_cus')) {
			      $P_img_cus='';
			  } else {
			    $fileData = $this->upload->data();
			    $P_img_cus= $data['P_img_cus'] = $fileData['file_name'];
			  }
 
            $add = array(

                'total'=> $this->input->post("total"),
                'date_cus'=> $this->input->post("date_cus"),
                'P_img_cus'=> $P_img_cus,
                'id_shopsp'=> $this->input->post("id_shopsp"),
                'id_sset'=> $this->input->post("id_sset"),
                'id_cuss'=> $this->input->post("id_cuss"),
                'nameBang'=> $this->input->post("nameBang"),
                'id_con'=> $this->input->post("id_con")
            );

            $id_conn = $this->input->post("id_con");
            $result = $this->ffc_payment->add_pay($add);
 
			  if ($result) {

                $this->db->set('id_pay', $id_conn);
                $this->db->set('status_pay', "ชำระเงินแล้ว");
                $this->db->where('id_conn', $id_conn);
		        $this->db->update('confirmation');
                echo '<script src ="https://code.jquery.com/jquery-3.6.0.min.js"> </script>';
                echo '<script src ="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"> </script>';
                echo '<link rel="stylesheet" href  ="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />';
                echo '<script> setTimeout(function() {
                            swal({
                                title : "ข้อมูลถูกต้อง",
                                text : "ชำระเงินสำเร็จ",
                                type : "success"
                            })
                        }, 1000);
                        </script>';
                $idcut = $this->session->userdata['id'];
                $data["Order"] = $this->ffc_confirmation->view_comm($idcut); 
                $data["Order_status"] = $this->ffc_confirmation->view_comstatus($idcut); 
                $data["Order_receive"] = $this->ffc_confirmation->view_comreceive($idcut);
                $data["Order_accept"] = $this->ffc_confirmation->view_comaccept($idcut);
                $data["Order_history"] = $this->ffc_order->view_orderhistory($idcut); 
                $this->load->view("view_oderstatus",$data);
                /*$data['query'] = $this->ffc_confirmation->order_palment($id_conn);
                $this->load->view("confirmation", $data);*/

			  } else {

                echo '<script src ="https://code.jquery.com/jquery-3.6.0.min.js"> </script>';
                echo '<script src ="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"> </script>';
                echo '<link rel="stylesheet" href  ="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />';
                echo '<script> setTimeout(function() {
                            swal({
                                title : "ข้อมูลผิดพลาด",
                                text : "อับโหลดไม่สำเร็จ",
                                type : "warning"
                            })
                        }, 1000);
                        </script>';
                $data["payfood"] = $this->ffc_confirmation->order_palment($id_conn);
                $this->load->view("view_payfood",$data); 
			  }           
	}

    /*function add_payconn()
    {
        $status_pay = $this->input->post("status_pay");
        $id_con = $this->input->post("id_con");

        $this->db->set('id_pay', $id_con);
        $this->db->set('status_pay', $status_pay);
        $this->db->where('id_conn', $id_con);
		$this->db->update('confirmation');

            echo '<script src ="https://code.jquery.com/jquery-3.6.0.min.js"> </script>';
            echo '<script src ="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"> </script>';
            echo '<link rel="stylesheet" href  ="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />';
             echo '<script> setTimeout(function() {
                            swal({
                                title : "ข้อมูลถูกต้อง",
                                text : "อับโหลดสำเร็จ",
                                type : "success"
                            })
                        }, 1000);
                        </script>';

        $idcut = $this->session->userdata['id'];
        $data["Order"] = $this->ffc_confirmation->view_comm($idcut); 
        $data["Order_status"] = $this->ffc_confirmation->view_comstatus($idcut); 
        $data["Order_receive"] = $this->ffc_confirmation->view_comreceive($idcut);
        $data["Order_accept"] = $this->ffc_confirmation->view_comaccept($idcut);
        $data["Order_history"] = $this->ffc_order->view_orderhistory($idcut); 
        $this->load->view("view_oderstatus",$data);
    }*/
    
}