    <?php

                    defined('BASEPATH') OR exit('No direct script access allowed');

    class Current_affairs_model extends CI_Model {

        var $table = 'currentaffairs';

        public function insert_current_affairs($createBlog) {

            $this->db->insert($this->table, $createBlog);
            return $this->db->insert_id();
        }

        function select_current_affairs($params = array()) {
            $this->db->select('*');
            $this->db->from($this->table);

            //set start and limit
            if (array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                $this->db->limit($params['limit'], $params['start']);
            } elseif (!array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                $this->db->limit($params['limit']);
            }

            if (array_key_exists("url_slug", $params)) {
                $this->db->where('ca_url_slug', $params['url_slug']);
                $query = $this->db->get();
                $result = ($query->num_rows() > 0) ? $query->row_array() : FALSE;
            } else {
                $query = $this->db->get();
                $result = ($query->num_rows() > 0) ? $query->result_array() : FALSE;
            }

            //return fetched data
            return $result;
        }

        public function update_current_affairs($where, $data) {
            $this->db->update($this->table, $data, $where);
            return $this->db->affected_rows();
        }

        public function delete_current_affairs($id) {
            $this->db->where('qid', $id);
            $this->db->delete($this->table);
        }

    }
