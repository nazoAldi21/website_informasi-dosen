<?php 
	class Mod_dosen_front extends CI_Model{
		function get_dosen_front(){
			$this->db->select('*');
			$this->db->select('db_dosen.id as id');
	        $this->db->from('db_dosen');
	        
			$sql = $this->db->get();
			return $sql->result_array();             	
		}
    }
?>