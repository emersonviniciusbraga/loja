<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_model extends CI_Model {

    public function index(){
        return $this->db->get("produto")->result_array();
    }

	public function store($produtos){

        $this->db->insert("produto", $produtos);
		
	}
}