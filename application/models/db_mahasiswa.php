<?php
	class Db_mahasiswa extends CI_Model {
		public function get_data(){
			return $this->db->get('mahasiswa');
		}

		public function insert_data($data,$table){
			$this->db->insert($table, $data);
		}

		public function delete_data($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

		public function edit_data($where,$table){
			return $this->db->get_where($table, $where);
		}

		public function update_data($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}
	}
?>
