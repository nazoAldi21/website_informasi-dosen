<?php 
	class Mod_jadwal extends CI_Model{

		function get_jadwal(){
			$this->db->select('*');
			$this->db->select('db_calendar_matkul.id as id');
	        $this->db->from('db_calendar_matkul');
	        
			$sql = $this->db->get();
			return $sql->result_array();
			/*$sql = $this->db->get('ref_kelas');
			return $sql->result_array();*/
		}

		function get_kelas(){
			$this->db->select('*');
			$this->db->select('ref_kelas.id as id');
	        $this->db->from('ref_kelas');
	        $this->db->join('ref_periode', 'ref_periode.id = ref_kelas.ref_periode_id');
	        $this->db->join('ref_prodi', 'ref_prodi.id = ref_kelas.ref_prodi_id');
	        
			$sql = $this->db->get();
			return $sql->result_array();
			/*$sql = $this->db->get('ref_kelas');
			return $sql->result_array();*/
		}

		function delete($id){
			$this->db->where('id', $id);
			$this->db->delete('db_calendar_matkul');
		}

		function set_edit($a, $b, $c, $d, $id){
			$config = array(
				'title'=>$a,
				'dosen'=>$b,
				'to_events_date'=>$c,
				'from_events_date'=>$d,
			);

			$this->db->where('id', $id);
			$this->db->update('db_calendar_matkul', $config);
		}

		function get_jadwal_by_id($id){
			$this->db->where('id', $id);
			$sql = $this->db->get('db_calendar_matkul');

			return $sql->result_array();
		}

		function add_jadwal($a, $b, $c, $d){
			$config = array(
				'title'=>$a,
				'dosen'=>$b,
				'to_events_date'=>$c,
				'from_events_date'=>$d,
			);

			$this->db->insert('db_calendar_matkul', $config);
		}


		function update_matkul($data){
			$this->db->where('id',strtoupper($this->input->post('id')))
			->update('db_calendar_matkul',$data);
		}
	}

?>