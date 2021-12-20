<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebsiteController extends CI_Controller { 
	public function index(){
	$this->load->view('web/Index');
	}

	function loadpage($param1="",$param2=""){
        if($param1=="login"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/login', $page_data);   
        }
        if($param1=="register"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/register', $page_data);   
        }
        if($param1=="doctorregister"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/DoctorRegister', $page_data);   
        }
        if($param1=="forgot-password"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/forgot_password', $page_data);

         }
    }
    function PatientRegister(){
        $page_data['message']="";
        $page_data['messagefail']="";
        $data['Name']=$this->input->post('name');
        $data['Phone']=$this->input->post('phone');
        $data['Password']=password_hash($this->input->post('password'), PASSWORD_BCRYPT);
         $data['Status']="Active";
         $data['Role_Id']="2";
        $this->CommonModel->do_insert('tbl_users', $data); 
        if($this->db->affected_rows()>0){
            $page_data['message']="Your Account Has Been Created Successfully.Thank you for using our system";
        }
        else{
            $page_data['messagefail']='Your Created account is not able to submit. Please try again';
        }
        $this->load->view('web/acknowledgement', $page_data);
    }
    function DoctorRegister(){
        $page_data['messege'] = "";
        $page_data['messegefail'] = "";
        $data['Name'] = $this -> input -> post('name');
        $data['Phone'] = $this -> input -> post('phone');
        $data['Password'] = password_hash($this -> input -> post('password'), PASSWORD_BCRYPT);
        $data['Status'] = "Active";
        $data['Role_Id'] = "3";
        $this ->CommonModel ->do_insert('tbl_users', $data);
        if($this->db->affected_rows()>0){
            $page_data['message'] = "Your account Has Been Created Successfully";
        }
        else{
            $page_data['messagefail'] = 'The account cannot be created, Please try again ';
        }
        $this ->load -> view('web/acknowledgement',$page_data);

    }
}

