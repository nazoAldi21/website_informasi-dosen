<?php 
	class Mod_ruangan extends CI_Model{

		function get_ruangan(){
			$sql = $this->db->get('db_ruangan');
			return $sql->result_array();
		}

        function get_ruangan_kosong(){
            $this->db->like('status_ruang', 'Kosong');
			$sql = $this->db->get('db_ruangan');
			return $sql->result_array();
		}

        function get_ruangan_isi(){
            $this->db->like('status_ruang', 'Terisi');
			$sql = $this->db->get('db_ruangan');
			return $sql->result_array();
		}

        function get_count_kosong(){
            $this->db->from('db_ruangan');
            $this->db->like('status_ruang', 'Kosong');
            return $this->db->count_all_results();
        }
    }
?>