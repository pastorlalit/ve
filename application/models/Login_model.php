<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    var $table = 'register';
    public function isValidate($username, $password) {
        $q = $this->db->where(['username' => $username, 'password' => $password])
                ->get('users');
//                print_r($q->row());
        if ($q->num_rows()) {
            return $q->row()->userid;
        } else {
            return false;
        }
    }
    
    public function can_login($username, $password) {
        $this->db->where('email', $username);
        $query = $this->db->get($this->table);
        
        if($query->num_rows()>0){
            
            foreach($query->result() as $row){
                 
//                 print_r($row->name);
                
                if($row->is_email_verified=='yes'){
                    $store_password = $this->encrypt->decode($row->password);
                    echo $store_password;
                    if($password === $store_password){
                        $newdata = array(
                            'user_id'=>$row->user_id,
                            'uname' => $row->name,
                            'email' => $row->email,
                            'logged_in' => TRUE
                    );
                      $this->session->set_userdata($newdata);
                   
                      
                    }else{
                        return 'Wrong password';
                    }
                }else{
                    return 'First verify your email address'; 
                }
            }
        }else{
            return 'Wrong email address';
        }
    }

}
