<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Question_of_the_day_model extends CI_Model {

    var $table = 'dailyquestions';

    public function insert_question($question) {

        $this->db->insert($this->table, $question);
        return $this->db->insert_id();
    }
        public function get_allQuestions($limit, $offset) {
        $this->db->order_by('created_at	', 'desc');
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
    public function updateQuestion($id, $data) {
        $this->db->where('question_id', $id);
        $this->db->update($this->table, $data);
        return TRUE;
    }
    public function getQuestion($id) {
        $this->db->from($this->table);
        $this->db->where('question_id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    
    public function deleteQuestion($id) {
        $this->db->where('question_id', $id);
        $this->db->delete($this->table);
    }

}
