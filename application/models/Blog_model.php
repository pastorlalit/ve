<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

    var $table = 'blogs';

    public function insert_blog($createBlog) {

        $this->db->insert($this->table, $createBlog);
        return $this->db->insert_id();
    }

    public function get_allBlogs($limit, $offset) {
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
    
    public function get_blogDetail($id) {
        $this->db->from($this->table);
        $this->db->where('blog_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function getRows($params = array()) {
        $this->db->select('*');
        $this->db->from("blogs");

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

    public function updateBlog($id, $data) {
        $this->db->where('blog_id', $id);
        $this->db->update($this->table, $data);
        return TRUE;
    }
    public function getBlog($blog_id) {
        $this->db->from($this->table);
        $this->db->where('blog_id', $blog_id);
        $query = $this->db->get();
        return $query->row();
    }
    public function deleteBlog($blog_id) {
        $this->db->where('blog_id', $blog_id);
        $this->db->delete($this->table);
    }

}
