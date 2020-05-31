<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

    var $table = 'register';

    public function insert_user($registrationFormData) {
        $this->db->insert($this->table, $registrationFormData);
        return $this->db->insert_id();
    }

    public function verify_email($key) {
        $this->db->where('verification_key', $key);
        $this->db->where('is_email_verified', 'no');
        $query = $this->db->get($this->table);

        if ($query->num_rows() > 0) {
            $data = array(
                'is_email_verified' => 'yes'
            );
            $this->db->where('verification_key', $key);
            $this->db->update($this->table, $data);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function get_allUsers($limit, $offset) {
        $this->db->order_by('date', 'desc');
        $this->db->limit($limit, $offset);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function num_rows() {
        $q = $this->db->select()
                ->from($this->table)
                ->get();
        return $q->num_rows();
    }

    public function updateUserStatus($user_id, $status) {
        $data = array('user_id'=>$user_id,  'status' => $status);
        $this->db->set($data);
        $this->db->where('user_id', $user_id);
        $this->db->update($this->table);
        return TRUE;
    }

}
