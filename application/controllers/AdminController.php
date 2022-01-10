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
            $page_data['specialities_list']=$this->db->get_where('tbl_specialities',array('Status'=>'Active'))->result_array();
            $this->load->view('admin_dashboard/pages/specialities_list',$page_data);
        }
        if($param1=="patient"){
            $this->load->view('admin_dashboard/pages/patient_list');
        }
    }
    function AddSpecialities(){
        $page_data['message']="";
        $page_data['messagefail']="";
        $page_data['specialities_list']=$this->db->get_where('tbl_specialities',array('Status'=>'Active'))->result_array();
        $data['Specialities']=$this->input->post('name');
         $data['Status']="Active";
        $this->CommonModel->do_insert('tbl_specialities', $data); 
        if($this->db->affected_rows()>0){
            $page_data['message']="Your specialities Has Been Created Successfully.Thank you for using our system";
        }
        else{
            $page_data['messagefail']='Your specialities is not able to submit. Please try again';
        }
        $this->load->view('admin_dashboard/pages/specialities_list', $page_data);
    }
    function Edit_specialities(){
        $page_data['message']="";
        $page_data['messagefail']="";
        $page_data['specialities_list']=$this->db->get_where('tbl_specialities',array('Status'=>'Active'))->result_array();
        $data['Specialities']=$this->input->post('name1');
        $this->db->where('Id', $this->input->post('EditId'));
        $this->db->update('tbl_specialities', $data);
        if($this->db->affected_rows()>0){
            $page_data['message']="Your specialities Has Been Updated Successfully.Thank you for using our system";
        }
        else{
            $page_data['messagefail']='Your Not Able to Update specialities. Please try again';
        }
        $this->load->view('admin_dashboard/pages/specialities_list', $page_data);
    }
    function Delete_specialities(){
        $page_data['message']="";
        $page_data['messagefail']="";
        $page_data['specialities_list']=$this->db->get_where('tbl_specialities',array('Status'=>'Active'))->result_array();
        $data['Status']="InActive";
        $this->db->where('Id', $this->input->post('DeleteId'));
        $this->db->update('tbl_specialities', $data);
        if($this->db->affected_rows()>0){
            $page_data['message']="Your specialities Has Been Deleted Successfully.Thank you for using our system";
        }
        else{
            $page_data['messagefail']='Your Not Able to Deleted specialities. Please try again';
        }
        $this->load->view('admin_dashboard/pages/specialities_list', $page_data);
    }

    function logout($param=''){  
        $this->session->unset_userdata(0);
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(base_url().'index.php?websiteController/index', 'refresh');
    }

}

  


