<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contactus_model extends CI_Model
{

	var $table = 'contactqueries';

	public function contactus_add($contactFormData)
	{       
		$this->db->insert($this->table, $contactFormData);
		return $this->db->insert_id();
	}
        public function all_queries()
        {
        $this->db->from('quick_contact');
        $query=$this->db->get();
        return $query->result();
        }
        
       public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('qid',$id);
		$query = $this->db->get();
                return $query->row();
	}
        public function query_update($where, $data)
	{       
                $this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
	public function delete_by_id($id)
	{
		$this->db->where('qid', $id);
		$this->db->delete($this->table);
	}


}

