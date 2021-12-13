<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm extends CI_Controller {
	public function __construct(){

		parent::__construct();
		permissionAdm();
		
	}

	public function index()
	{
		$this->load->model('products_model');
		$dados['produto'] = $this->products_model->index();
		$dados['titulo'] = 'Produtos Cadastrados';
		$this->load->view('painel_adm', $dados);
	}
}
