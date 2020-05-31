<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vocabulary_model extends CI_Model {

    var $table = 'dictionary';

    public function insert_vocab($createVocab) {

        $this->db->insert($this->table, $createVocab);
        return $this->db->insert_id();
    }
        public function get_allVocab($limit, $offset) {
        $this->db->order_by('created_at', 'desc');
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
    
    public function get_vocabDetail($id) {
        $this->db->from($this->table);
        $this->db->where('word_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

   public function updateVocab($id, $data) {
        $this->db->where('word_id', $id);
        $this->db->update($this->table, $data);
        return TRUE;
    }
    public function getVocab($word_id) {
        $this->db->from($this->table);
        $this->db->where('word_id', $word_id);
        $query = $this->db->get();
        return $query->row();
    }
    public function deleteVocab($word_id) {
        $this->db->where('word_id', $word_id);
        $this->db->delete($this->table);
    }

}
