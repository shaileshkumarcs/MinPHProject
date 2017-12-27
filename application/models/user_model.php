<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{
	function registerUser($table,$data){

		$this->load->database('default');
        $this->db->insert($table, $data);
        $id = $this->db->insert_id();
        $this->db->close();
        return $id;
	}
	function getWhere($table,$field,$fieldValue){
		
		$this->load->database('default');
        $this->db->where($field, $fieldValue);
        $query = $this->db->get($table);
        $result = $query->result_array();
        $this->db->close();
        return $result;
	}
}
