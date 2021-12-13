<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup_User extends CI_Controller { 

    public function index() {

        $dados['titulo'] = 'Cadastro';
        $this->load->view('signup', $dados);

    }
    public function storeUser(){

        $this->load->model('signup_model');
        $usuarios = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => md5($_POST['password'])
        );


        if(!$this->signup_model->verificaEmailUser($usuarios['email'])){
            $this->signup_model->storeUser($usuarios);
            // $this->signup_model->success($usuarios);
            $this->session->set_flashdata('sucesso', 'Cadastrado com sucesso!');
            redirect('login_user');
        }else{
            $this->session->set_flashdata('error', 'Error ao cadastrar, email em uso!');
            redirect('signup');
        }

    }
}