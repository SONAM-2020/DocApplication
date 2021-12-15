<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {
	public function index(){
	}
    function login(){

        if($this->input->post('email')!="" &&  $this->input->post('password')!=""){
            $query = $this->db->get_where('agentdetails', array(
            'emailid' => $this->input->post('email'), 'password' => $this->input->post('password')));
            if ($query->num_rows() > 0){
                $row = $query->row_array(); 
                if($row['status']=="Inactive"){
                     $page_data['message']='Your user is deactivated. Please contact system administrator.';
                     $this->load->view('web/include/acknowledgement', $page_data); 
                }
                else{
                    $this->session->set_userdata('UserName', $row['firstname']);
                    $this->session->set_userdata('ContactNo', $row['phoneno']);
                    $this->session->set_userdata('email', $row['emailid']);
                    $this->session->set_userdata('userId', $row['id']);
                    $this->session->set_userdata('Role_Id', $row['role']);
                   redirect(base_url() . 'index.php?adminController/dashboard', 'refresh');
                    return TRUE;
                }                
            } 
            else{
                $page_data['message']='Invalid email and password';
                $this->load->view('web/Index', $page_data); 
            }
        } 
        else{
            $page_data['message']='Email and password is required';
                $this->load->view('web/Index', $page_data); 
        }

    }
   
    function dashboard(){
        $query ="SELECT COUNT(id) AS IdCount FROM `ticket_info` WHERE `status`= 3";
        $page_data['IdCount'] = $this->db->query($query)->row();
        $page_data['formSubmit']="";
        $page_data['message']="";
        if ($this->session->userdata('UserName') == null ){
            redirect(base_url(), 'refresh');
        }
        else{
            $this->load->view('admin/dashboard', $page_data);
        }
    }
    function loadpage($param1="",$param2="",$param3=""){
        $page_data['formSubmit']="";
        if($param1=="users"){
            $page_data['users_info'] = $this->CommonModel->getusers();
            $this->load->view('admin/pages/systemusers', $page_data);
        }
        if($param1=="userprofile"){
             $page_data['userprofile_info'] = $this->db->get_where('t_user',array('Id'=>$param2))->row(); 
            $this->load->view('admin/pages/userprofile', $page_data);
        }
        if($param1=="reportIndex"){
            $this->load->view('admin/report/callreportindex');
        }

        if($param1=="GenerateCallReport"){
            $fromdate=$this->input->post('fromdate');
            $todate=$this->input->post('todate');
            // die($this->input->post('todate'));
            $query="SELECT * FROM `ticket_info` u JOIN `complain_type` uc ON u.`complain_type`=uc.`id` 
JOIN `region` cl ON u.`region`=cl.`id` JOIN `follow_up_action` ll ON u.`follow_action`=ll.`id`
 JOIN `ticket_status` lt ON u.`status`=lt.`id` JOIN `bt_service` ss ON u.`service`=ss.`id` WHERE `ticket_date_time` BETWEEN '".$fromdate."' AND '".$todate."'";
            $page_data['reportDetils'] = $this->db->query($query)->result_array(); 
            $this->load->view('admin/report/callreportdetails',$page_data);
        }

        if($param1=="ambDreportIndex"){
            $this->load->view('admin/report/ambDreportIndex');
        }
        if($param1=="generateambdreport"){
            $fromdate=$this->input->post('fromdate');
            $todate=$this->input->post('todate');
            // die($this->input->post('todate'));
            $query="SELECT  * FROM t_ambulancemovement_master WHERE  AssignTime BETWEEN '".$fromdate."' AND '".$todate."'";
            $page_data['reportDetils'] = $this->db->query($query)->result_array(); 
            $this->load->view('admin/report/reportAmbdDetails',$page_data);
        }
        if($param1=="reporTriptIndex"){
            $this->load->view('admin/report/reporTriptIndex');
        }
        if($param1=="generatetripreport"){
            $fromdate=$this->input->post('fromdate');
            $todate=$this->input->post('todate');
            // die($this->input->post('todate'));
            $query="SELECT  * FROM t_ambulancemovement_master WHERE  BHospital_Arrival_time BETWEEN '".$fromdate."' AND '".$todate."'";
            $page_data['reportDetils'] = $this->db->query($query)->result_array(); 
            $this->load->view('admin/report/reportTripDetails',$page_data);
        }

        
    }
    function addnotification($page=""){
        $page_data['message']="";
        $page_data['messagefail']="";
        $data['title']=$this->input->post('name');
        $data['notification']=$this->input->post('info');
        $data['status']='Yes';
        $data['created_date']=$this->input->post('date');
        $this->CommonModel->do_insert('t_notification', $data); 
        if($this->db->affected_rows()>0){
            $page_data['message']="New notification details has been added.Thank you for using our system";
        }
        else{
            $page_data['messagefail']='New notification is not able to submit. Please try again';
        }
        $this->load->view('admin/pages/acknowledgement', $page_data); 
    }
    function Updatenotification($param1=""){
        $data['status']=$this->input->post('status');
        $this->db->where('Id',  $this->input->post('deleteId'));
        $this->db->update('t_notification`', $data);
        $page_data['notification_info'] = $this->db->get_where('t_notification',array('status'=>'Yes'))->result_array();
        $this->load->view('admin/pages/viewnotification'.$param1,$page_data);
    }
    function Deletenotification($notificationid="",$page=""){ 
        $page_data['message']="";
        $page_data['messagefail']="";
        $this->db->where('Id', $notificationid);
        $this->db->delete('t_notification');
        // $page_data['notification_info'] = $this->db->get_where('t_notification',array('status'=>'Yes'))->result_array();
        //$this->load->view('admin/pages/viewnotification'.$page,$page_data);
        if($this->db->affected_rows()>0){
            $page_data['message']="Notification has been delete successfully.Thank you for using our system";
        }
        else{
            $page_data['messagefail']='Not able to delete Notification. Please try again';
        }
        $this->load->view('admin/pages/acknowledgement', $page_data);
        }

        function addusers($page=""){
        // $page_data['users_info'] = $this->db->get_where('t_user',array('Status'=>'Yes'))->result_array();
        $page_data['message']="";
        $page_data['messagefail']="";
        $data['Email_Id']=$this->input->post('Email');
        //$data['Password']=$this->input->post('Password');
        $data['Password']=password_hash($this->input->post('Password'), PASSWORD_BCRYPT);
        $data['Role_Id']=$this->input->post('Role');
        $data['Mobile_Number']=$this->input->post('Phone');
        $data['Name']=$this->input->post('Name');
        $data['Designation']=$this->input->post('Designation');
        $data['Status']='Yes';
        $this->CommonModel->do_insert('t_user', $data); 
        if($this->db->affected_rows()>0){
            $page_data['message']="New User has been added.Thank you for using our system";
        }
        else{
            $page_data['messagefail']='Unable to add New Users. Please try again';
        }
        $this->load->view('admin/pages/acknowledgement', $page_data); 
      }
      function DeleteUser($userid="",$page=""){ 
        $page_data['message']="";
        $page_data['messagefail']="";
        $this->db->where('Id', $userid);
        $this->db->delete('t_user');
        // $page_data['notification_info'] = $this->db->get_where('t_notification',array('status'=>'Yes'))->result_array();
        //$this->load->view('admin/pages/viewnotification'.$page,$page_data);
        $page_data['users_info'] = $this->db->get_where('t_user',array('Status'=>'Yes'))->result_array();
        if($this->db->affected_rows()>0){
            $page_data['message']="User has been delete successfully.Thank you for using our system";
        }
        else{
            $page_data['messagefail']='Not able to delete User. Please try again';
        }
        $this->load->view('admin/pages/systemusers', $page_data);
        }
        function updateYourAccount($param1=""){
        $page_data['message']="";
        $page_data['messagefail']="";
        $data['Mobile_Number']=$this->input->post('Phone_Number');
        if(!empty($_FILES["Image"]["name"])){
                $fle="../uploads/".$this->input->post('currentlogoinivalue');
                if (file_exists($fle)){
                    unlink($fle);
                }
                move_uploaded_file($_FILES['Image']['tmp_name'],'./uploads/'.$_FILES["Image"]["name"]);
                $data['Image']=$_FILES["Image"]["name"];
            }
        $this->db->where('Id', "1");
        $this->db->update('t_user`', $data);
        if($this->db->affected_rows()>0){
            $page_data['message']="Your Profile has been updated.Thank you for using our system";
        }
        else{
            $page_data['messagefail']='Unable to Update Profile. Please try again';
        }
        $this->load->view('admin/pages/acknowledgement', $page_data);
    }
    function updatePassword($param1=""){
        $page_data['message']="";
        $page_data['messagefail']="";
        $data['Password']=password_hash($this->input->post('newpassword'), PASSWORD_BCRYPT);
            $this->db->where('Id', $this->input->post('UserId'));
            $this->db->update('t_user`', $data);
            if($this->db->affected_rows()>0){
                $page_data['message']='Password is updated. Please logout and login back';
            }
            else{
                $page_data['messagefail']='Not able to update your password.please try again';
            } 
            $this->load->view('admin/pages/acknowledgement', $page_data); 
    }
    function logout($param=''){  
        $this->session->unset_userdata(0);
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(base_url().'index.php?websiteController/index', 'refresh');
    }

}

  


