<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel_User extends CI_Controller {

	public function __construct(){

		parent::__construct();
		permissionUser();
		
	}
	public function index()
	{
		$dados['titulo'] = 'Creative World';
		$this->load->view('painel_user', $dados);
	}
}