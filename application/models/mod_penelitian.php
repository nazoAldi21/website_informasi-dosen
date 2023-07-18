<?php 
	class Mod_penelitian extends CI_Model{

        function get_peneliti_baru(){
			$this->db->select('*');
	        $this->db->from('db_penelitian');
			$this->db->join('db_dosen', 'db_dosen.id = db_penelitian.nama_dosen_id');
			$this->db->order_by("tahun", "asc");
			$sql = $this->db->get();
			return $sql->result_array();
		}

		function get_penelitian($page){
			$offset = 4 * $page;
			$limit  = 4;
			$query  = "SELECT * FROM db_penelitian INNER JOIN db_dosen
			ON db_penelitian.nama_dosen_id=db_dosen.id ORDER BY id_penelitian DESC limit $offset ,$limit";
			$result = $this->db->query($query)->result();
			return $result;
		}

		function get_penelitianadmin() {
			$this->db->select('*');
			$this->db->from('db_penelitian');
			$this->db->join('db_dosen', 'db_dosen.id = db_penelitian.nama_dosen_id');
			$sql = $this->db->get();
			return $sql->result_array();
		}

		function get_detail_penelitian($id_penelitian){
			$this->db->select('*');
			$this->db->from('db_penelitian');
			$this->db->join('db_dosen', 'db_dosen.id = db_penelitian.nama_dosen_id');
			$this->db->where('id_penelitian', $id_penelitian);
			$sql = $this->db->get();
			return $sql->result_array();
		}

		public function search($keyword){
			if(!$keyword){
				return null;
			}
			$this->db->join('db_dosen', 'db_dosen.id = db_penelitian.nama_dosen_id');
			$this->db->like('nama_penelitian', $keyword);
			$this->db->or_like(array('deskripsi' => $keyword, 'nama_dosen_id' => $keyword));
			$query = $this->db->get('db_penelitian');
			return $query->result();
		}

		// public function filtersort($dosen){
		// 	$this->db->where("nama_dosen",$dosen);
		// 	$query = $this->db->get('db_penelitian');
		// 	return $query->result();
		// }

		public function sorting($dosenpen){
			
		}

		function delete($id){
			$this->db->where('id_penelitian', $id);
			$this->db->delete('db_penelitian');
		}

		function set_edit($a, $b, $c, $d, $id_penelitian){
			$config = array(
				'nama_penelitian'=>$a,
				'nama_dosen_id'=>$b,
				'tahun'=>$c,
				'deskripsi'=>$d,
			);
			$this->db->where('id_penelitian', $id_penelitian);
			$this->db->update('db_penelitian', $config);
		}

		function get_penelitian_by_id($id){
			$this->db->where('id_penelitian', $id);
			$sql = $this->db->get('db_penelitian');

			return $sql->result_array();
		}

		function add_penelitian($a, $b, $c, $d){
			$config = array(
				'nama_penelitian'=>$a,
				'nama_dosen_id'=>$b,
				'tahun'=>$c,
				'deskripsi'=>$d,
			);

			$this->db->insert('db_penelitian', $config);
		}


		function update_penelitian($data){
			$this->db->where('id_penelitian',strtoupper($this->input->post('id_penelitian')))
			->update('db_penelitian',$data);
		}
    }
?>