<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiries_model extends CI_Model {

    var $table = 'contactqueries';

    public function insertEnquiry($contactFormData) {
        $this->db->insert($this->table, $contactFormData);
        return $this->db->insert_id();
    }

    
    
    public function get_all_enquiries($limit, $offset) {
        $this->db->order_by('contactid	', 'desc');
        $this->db->limit($limit, $offset);
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function num_rows() {
        $q=$this->db->select()
            ->from($this->table)
            ->get();
           return $q->num_rows();
    }
    public function getEnquiry($contactid) {
        $this->db->from($this->table);
        $this->db->where('contactid', $contactid);
        $query = $this->db->get();
        return $query->row();
    }

    public function query_update($where, $data) {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    /*
     * Delete data from the database
     * @param id array/int
     */
    public function delEnquiry($contactid) {
        
        if (is_array($contactid)) {
            $this->db->where_in('contactid', $contactid);
        } else {
            $this->db->where('contactid', $contactid);
        }
        $delete = $this->db->delete($this->table);
        return $delete ? true : false;
    }

    

   

}
