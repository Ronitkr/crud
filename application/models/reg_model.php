<?php
	 

	Class reg_model extends CI_Model{
		public function insert($data){
			
			
			$this->db->insert('backend_user', $data);
			$user_id = $this->db->insert_id();	
			return $user_id;

		}

		public function get_model(){
			$userdata = $this->db->get('backend_user');
			return $userdata->result();

		}

		public function delete_model($id){
			$this->db->query("delete from backend_user where id = '$id'");
		}
	}

 

?>