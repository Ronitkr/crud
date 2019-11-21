<?php 

	Class Login_model extends CI_Model{
		public function Conn_login($username,$password){
			$hash = $this->input->post('pwd');
			$q = $this->db->where(['username'=>$username, 'password'=> password_verify($password, $hash) ])
							->get('backend_user');

				// echo "<pre>";
				// print_r($q);


			if ($q->num_rows()) {
				$result = $q->row();
				// $result->password;
				// print_r($result);exit;
				return $result;
				}else{
					return false;
				}
					
		} 
	}

 ?>
