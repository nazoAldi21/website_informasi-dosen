<?php 
	class Mod_jtoday extends CI_Model{

        function get_sore(){
			$this->db->select('*');
	        $this->db->from('db_calendar_matkul');
            $this->db->like('kelas', 'Sore');
			$sql = $this->db->get();
			return $sql->result_array();
		}

		function get_reguler(){
			$this->db->select('*');
	        $this->db->from('db_calendar_matkul');
            $this->db->like('kelas', 'Reguler');
			$sql = $this->db->get();
			return $sql->result_array();
		}

		function get_weekend(){
			$this->db->select('*');
	        $this->db->from('db_calendar_matkul');
            $this->db->like('kelas', 'Weekend');
			$sql = $this->db->get();
			return $sql->result_array();
			
		}
    }
?>