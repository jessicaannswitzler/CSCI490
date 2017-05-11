<?php

class loginModel extends CI_Model{

	public fucntion login(){

		$this->db->select('name, pass');
		$this->db->from('members');
		$this->db->where('name', $name);
		$this->db->where('pass', $pass);

		$query = $this->db->get();

		if($query->num_rows() == 1){
			return true;
		}else{
			return false;
		}
	}
}


?>