<?php
	class  Db_user extends CI_Model {

		public function insert_data($table,$data){
			$this->db->insert($table, $data);
			return $this->db->insert_id();
		}
	}
?>
