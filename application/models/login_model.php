<?php
class Login_model extends CI_Model
{
	function can_login($email, $password)
	{
		$this->db->where('user_email', $email);
		$query = $this->db->get('user');
		if($query->num_rows() > 0){
			foreach($query->result() as $row)
			{
				$crypt_password = md5($password);
				$store_password = $row->user_pwd;
				if($crypt_password == $store_password){
					$this->session->set_userdata('id_user', $row->id_user);
					$this->session->set_userdata('user_name', $row->user_name);
				}else{
					return 'Wrong Password';
				}
			}
		}else{
			return 'Wrong Email Address';
		}
	}
}

?>
