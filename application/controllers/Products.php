<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public function __construct(){

		parent::__construct();
		permissionAdm();
		
	}
    public function index() {

        $this->load->model('products_model');
		$dados['produto'] = $this->products_model->index();
		$dados['titulo'] = 'Produtos Cadastrados';
		$this->load->view('painel_adm', $dados);
    
    }

    public function new(){

		$dados['titulo'] = 'Cadastro de Produtos';
		$dados['nome'] = 'Cadastro de Produtos';
		$this->load->view('form-produtos', $dados);
	}

    public function store(){

        
        $produtos = $_POST;
        $produtos['idadm'] == $_SESSION['logged_adm']['id'];
        $this->load->model('products_model');
        $this->products_model->store($produtos);
        redirect('products');
    }
}

// array(
//     'categoria' => $_POST['categoria'],
//     'titulo_produto' => $_POST['titulo_produto'],
//     'descricao' => $_POST['descricao'],
//     'status' => $_POST['status'],
//     'img_produto' => $_POST['img_produto']
// );