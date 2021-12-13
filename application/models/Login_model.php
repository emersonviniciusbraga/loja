<?php

class Login_model extends CI_Model {
	
	public function index(){
        return $this->db->get("adm")->result_array();
    }

	public function storeUser($email, $password){

		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$user = $this->db->get('usuario')->row_array();
		return $user;
	}

	public function storeAdm($email, $senha){

		$this->db->where('email', $email);
		$this->db->where('senha', $senha);
		$adm = $this->db->get('adm')->row_array();
		return $adm;
	}
}