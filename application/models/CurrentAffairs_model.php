<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CurrentAffairs_model extends CI_Model {

    var $table = 'currentaffairs';

    public function insert_currentAffairs($createCurrentAffairs) {

        $this->db->insert($this->table, $createCurrentAffairs);
        return $this->db->insert_id();
    }
        public function get_all_currentAffairs($limit, $offset) {
        $this->db->order_by('ca_date	', 'desc');
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
    
    public function get_currentAffairsDetail($id) {
        $this->db->from($this->table);
        $this->db->where('ca_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function getRows($params = array()) {
        $this->db->select('*');
        $this->db->from($this->table);

        //set start and limit
        if (array_key_exists("start", $params) && array_key_exists("limit", $params)) {
            $this->db->limit($params['limit'], $params['start']);
        } elseif (!array_key_exists("start", $params) && array_key_exists("limit", $params)) {
            $this->db->limit($params['limit']);
        }

        if (array_key_exists("url_slug", $params)) {
            $this->db->where('url_slug', $params['url_slug']);
            $query = $this->db->get();
            $result = ($query->num_rows() > 0) ? $query->row_array() : FALSE;
        } else {
            $query = $this->db->get();
            $result = ($query->num_rows() > 0) ? $query->result_array() : FALSE;
        }

        //return fetched data
        return $result;
    }

    public function update_currentAffairs($id, $data) {
        $this->db->where('ca_id', $id);
        $this->db->update($this->table, $data);
        return TRUE;
    }
    public function get_currentAffairs($ca_id) {
        $this->db->from($this->table);
        $this->db->where('ca_id', $ca_id);
        $query = $this->db->get();
        return $query->row();
    }
    public function delete_currentAffairs($ca_id) {
        $this->db->where('ca_id', $ca_id);
        $this->db->delete($this->table);
    }

}
