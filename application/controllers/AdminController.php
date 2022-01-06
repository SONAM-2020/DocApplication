<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {
	public function index(){
	}   
    function loadpage($param1="",$param2="",$param3=""){
        $page_data['formSubmit']="";
        if($param1=="doctor"){
            $query="SELECT  * FROM tbl_users WHERE  Role_Id='3'";
            $page_data['t_doctor_list'] = $this->db->query($query)->result_array(); 
            $this->load->view('admin_dashboard/pages/doctor_list',$page_data);
        }
        if($param1=="appointment"){
            $this->load->view('admin_dashboard/pages/appointment_list');
        }
        if($param1=="specialities"){
            $this->load->view('admin_dashboard/pages/specialities_list');
        }
        if($param1=="patient"){
            $this->load->view('admin_dashboard/pages/patient_list');
        }
        
    }
    function logout($param=''){  
        $this->session->unset_userdata(0);
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(base_url().'index.php?websiteController/index', 'refresh');
    }

}

  


