<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_member()
    {
       $this->db->select('*');
       $this->db->form('member');
       $this->db->where('user=',$u);
       $this->db->where('password=',$p);
       $query=$this->db->get();
        if($query->num_rows() > 0){
            $result = $query->result_array();
            return $result;
        }else{
            return false;
        }
    }

    function can_login($username, $password)  
    {  
         $this->db->where('user', $username);  
         $this->db->where('password', $password);  
         $query = $this->db->get('member');  
         if($query->num_rows() > 0)  
         {  
              return true;  
         }  
         else  
         {  
              return false;       
         }  
    }  
}