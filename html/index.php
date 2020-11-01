<?php


class UserModel extends CI_Model {


	public function diplayUsers(){
		$this->db->select('*');
		$this->db->from('users');
		return $this->db->get();
	}

}