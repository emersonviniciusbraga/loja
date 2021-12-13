<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup_model extends CI_Model {
	
	public function index() {

		
	}

	public function storeUser($user){

		$this->db->insert('usuario', $user);
	}

	// public function storeAdm($adm){

	// 	$this->db->insert('administracao', $adm);
	// }

	public function verificaEmailUser($email){

		$this->db->where('email',$email);
		return $this->db->get('usuario')->row_array();
	}

	// public function verificaEmailAdm($email){

	// 	$this->db->where('email',$email);
	// 	return $this->db->get('administracao')->row_array();
	// }

	// public function success($usuarios){

	// 	$this->load->library('email');
	// 	$this->email->clear();

	// 	$this->email->from('dma.teste.emerson@gmail.com', 'Teste D.M.A');
	// 	$this->email->to($usuarios['email'], $usuarios['name']);
	// 	$this->email->subject('Cadastro Realizado');
	// 	$this->email->reply_to('dma.teste.emerson@gmail.com', 'Teste D.M.A');
	// 	$this->email->message($this->load->view('email', $usuarios, TRUE));

	// 	if (!$this->email->send()) {
	// 		echo $this->email->print_debugger();
	// 	}
	// }
}