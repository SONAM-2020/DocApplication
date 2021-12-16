<?php header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class loginController extends CI_Controller {
    public function _construct(){
        parent::_construct();
    }
    public function index(){
        $this->load->view('web/index', $page_data);
    }
    function login(){
        $page_data['message']="";
        if($this->input->post('phone')!="" &&  $this->input->post('password')!=""){
            $query = $this->db->get_where('tbl_users', array('Phone' => $this->input->post('phone')));
            if ($query->num_rows() > 0){
                $row = $query->row_array(); 
                if(password_verify($this->input->post('password'), $row['Password'])){
                    if($row['Status']=="Inactive"){
                     $page_data['messagefail']='Your user detail is deactivated. Please contact system administrator.';
                         $this->load->view('web/acknowledgement', $page_data); 
                    }
                    else{
                        $this->session->set_userdata('User_Id', $row['Id']);
                        //$this->session->set_userdata('Image', $row['Image']);
                        $this->session->set_userdata('Name', $row['Name']);
                        $this->session->set_userdata('Phone', $row['Phone']);
                        //$this->session->set_userdata('Contact_No', $row['Contact_No']);
                        $this->session->set_userdata('Role_Id', $row['Role_Id']);
                        redirect(base_url() . 'index.php?loginController/dashboard', 'refresh');
                    }  
                }
                else{
                    $page_data['messagefail']='Invalid Phone and Password';
                    $this->load->view('web/acknowledgement', $page_data); 
                }
            } 
            else{
                $page_data['messagefail']='Invalid Phone  Address';
                $this->load->view('web/acknowledgement', $page_data); 
            }
        } 
        else{
            $page_data['messagefail']='Phone Address and Password is Required';
                $this->load->view('web/acknowledgement', $page_data); 
        }
    }
    function dashboard($param=""){
        $page_data['message']="";
        if ($this->session->userdata('User_Id') == null ){
            redirect(base_url(), 'refresh');
        }
        else{
            $this->load->view('patient_dashboard/dashboard', $page_data);
        }
    }
    function logout($param=''){  
        $this->session->unset_userdata(0);
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(base_url().'index.php?loginController/', 'refresh');
    }
}