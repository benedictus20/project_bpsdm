<?php 

class ModelLogin extends CI_Model{

	public function cek_login(){

		$username = set_value('username');
		$password = set_value('password');
		$password1 = PASSWORD_VERIFY($password,PASSWORD_DEFAULT);
		
		$result   = $this->db->where('username', $username)
							 ->where('password', $password1)
							 ->limit(1)
							 ->get('user');

		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}
}
