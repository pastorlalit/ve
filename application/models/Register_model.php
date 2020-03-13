<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

    var $table = 'register';

    public function insert_user($registrationFormData) {
        $this->db->insert($this->table, $registrationFormData);
        return $this->db->insert_id();
    }
    
    public function verify_email($key) {
        $this->db->where('verification_key',$key);
        $this->db->where('is_email_verified','no');
        $query = $this->db->get($this->table);
        
        if($query->num_rows()>0){
            $data = array(
                'is_email_verified'=>'yes'
            );
            $this->db->where('verification_key', $key);
            $this->db->update($this->table, $data);
            return TRUE;
        }else{
            return FALSE;
        }
    }

    
    
    
    
    

   
    

    

   

}
