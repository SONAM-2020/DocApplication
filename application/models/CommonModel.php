<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CommonModel extends CI_Model{
	function __construct(){
        parent::__construct();
    }
    function do_insert($table,$data){
        $this->db->insert($table,$data);
        return $this->db->insert_id();
    }

    function getusers(){ 
       $query =$this->db->query("SELECT * FROM `agentdetails` u JOIN `role` uc ON u.`role`=uc.`roleid` JOIN `region` cl ON u.`region`=cl.`id`  WHERE u.`status`='active'")->result_array();
        return $query;
    }
}