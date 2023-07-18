<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_user extends CI_Model {

		public function cek_user($data) {
			$query = $this->db->get('db_user', $data);
			return $query;
		}

		public function get_user()
		{
			return $this->db->get('db_user')->result_array();
		}

		public function add($data){
			$this->db->insert('db_user', $data);
		}

		public function user_by_id($id){
			$this->db->where('id', $id);
			$sql = $this->db->get('db_user');
			return $sql->result_array();
		}

		public function update($config,$id){
			$this->db->where('id', $id);
			$this->db->update('db_user', $config);
		}

		public function update_sandi($config,$username){
			$this->db->where('username', $username);
			$this->db->update('db_user', $config);
		}

		function delete($id){
			$this->db->where('id', $id);
			$this->db->delete('db_user');
		}

	}

?>
