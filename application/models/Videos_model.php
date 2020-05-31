<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Videos_model extends CI_Model {

    var $table = 'videos';

    public function insert_video($createVideo) {

        $this->db->insert($this->table, $createVideo);
        return $this->db->insert_id();
    }
        public function get_allVideos($limit, $offset) {
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
    
    public function get_videoDetail($id) {
        $this->db->from($this->table);
        $this->db->where('video_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function getRows($params = array()) {
        $this->db->select('*');
        $this->db->order_by('created_at','DESC');
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

    public function updateVideo($id, $data) {
        $this->db->where('video_id', $id);
        $this->db->update($this->table, $data);
        return TRUE;
    }
    public function getVideo($video_id) {
        $this->db->from($this->table);
        $this->db->where('video_id', $video_id);
        $query = $this->db->get();
        return $query->row();
    }
    public function deleteVideo($video_id) {
        $this->db->where('video_id', $video_id);
        $this->db->delete($this->table);
    }

}
