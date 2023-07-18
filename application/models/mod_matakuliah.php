<?php 
	class Mod_matakuliah extends CI_Model{

		function get_matkul_front(){
			$this->db->select('*');
	        $this->db->from('db_matkul');
            $this->db->join('db_dosen', 'db_dosen.id = db_matkul.id_dosen');
	        
			$sql = $this->db->get();
			return $sql->result_array();
			/*$sql = $this->db->get('ref_kelas');
			return $sql->result_array();*/
		}
    }
?>