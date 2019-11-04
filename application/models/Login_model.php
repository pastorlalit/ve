<?php 
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class Login_model extends CI_Model {
      public function isValidate($username,$password){
          $q = $this->db->where(['username'=>$username,'password'=>$password])
                            ->get('users');
//                print_r($q->row());
                  if($q->num_rows()){
                      return $q->row()->userid;
                  }else{
                      return false;
                  }
      }
  
}
