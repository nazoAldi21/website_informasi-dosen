<?php 
	class Mod_matkul extends CI_Model{

		function get_matkul(){
			$this->db->order_by('semester', 'ASC');
			$sql = $this->db->get('db_matkul');
			return $sql->result_array();
		}

		function get_matkul_front(){
			$this->db->select('*');
			$this->db->select('db_matkul.kode_matkul as kode_matkul');
	        $this->db->from('db_matkul');
	        
			$sql = $this->db->get();
			return $sql->result_array();
			/*$sql = $this->db->get('ref_kelas');
			return $sql->result_array();*/
		}

		function matkul_semester($semester){
			$this->db->where('ref_prodi_id', $this->session->userdata('prodi'));
			$sql = $this->db->get('mst_krs')->result_array();
			foreach($sql as $rs){
				$data[] = $rs['db_matkul_id'];
			}
			$this->db->where_in('id', $data);
			$this->db->where('semester', $semester);
			$sql2 = $this->db->get('db_matkul');
			return $sql2->result_array();
		}

		function add_matkul($a, $b, $c, $d){
			$config = array(
				'kode_matkul'=>$a,
				'nama_matkul'=>ucwords($b),
				'sks'=>$c,
				'semester'=>$d,
			);

			$this->db->insert('db_matkul', $config);
		}

		function check(){
			return $this->db->where('kode_matkul', strtoupper($this->input->post('kode_matkul')))
					 	->get('db_matkul')
					 	->result_array();
		}

		function update_matkul($data){
			$this->db->where('kode_matkul',strtoupper($this->input->post('kode_matkul')))
			->update('db_matkul',$data);
		}

		function get_semester(){
			$this->db->distinct();
			$sql = $this->db->get('ref_semester');
			return $sql->result_array();
		}

		function semester_by_id($id){
			$this->db->where('id', $id);
			$sql = $this->db->get('ref_semester');
			return $sql->result_array();
		}

		function get_matkul_by_semester($a, $b){
			$sql = $this->db->where('semester',$a)
							->get('db_matkul')
							->result_array();
			foreach($sql as $rs){
				$data[] = $rs['id'];
			}
			$this->db->where_in('db_matkul_id', $data);
			$this->db->where('ref_prodi_id', $b);
			$sql2 = $this->db->get('mst_krs');
			#print_r($sql);
			return $sql2->result_array();

		}

		function get_all($sms, $prodi){

			$this->db->select('*');
			$this->db->select('db_matkul.id as id', 'mst_nilai.nilai as nilai');
	        $this->db->from('db_matkul');
	        $this->db->from('ref_prodi');
	        $this->db->join('ref_semester', 'ref_semester.id = db_matkul.semester');
	        $this->db->join('mst_krs', 'mst_krs.db_matkul_id = db_matkul.id');
	        $this->db->where('ref_semester.id',$sms);
	        $this->db->where_in('mst_krs.ref_prodi_id',$prodi);
	        $this->db->group_by('db_matkul.id');
			$sql = $this->db->get();
			return $sql->result_array();
			#return $sql->;             	
		}

		function set_edit($a, $b, $c, $d, $id){
			$config = array(
				'kode_matkul'=>$a,
				'nama_matkul'=>$b,
				'sks'=>$c,
				'semester'=>$d,
			);

			$this->db->where('id', $id);
			$this->db->update('db_matkul', $config);
		}

		function get_matkul_by_id($id){
			$this->db->where('id', $id);
			$sql = $this->db->get('db_matkul');

			return $sql->result_array();
		}

		function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('db_matkul');	
	}	
	}
?>
