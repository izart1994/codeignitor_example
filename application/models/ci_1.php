<?php
	class Ci_1 extends CI_Model {
		public function get_data(){
			return $this->db->get('person')->result_array();
		}
	}
?>
