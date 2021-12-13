<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_User extends CI_Controller {

    public function index() {

        $this->load->model('login_model');
        $dados['titulo'] = 'Creative World';
        $this->load->view('login-user', $dados);

    }
    public function storeUser(){

        $this->load->model('login_model');
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $user = $this->login_model->storeUser($email, $password);

        if($user){
            $this->session->set_userdata('logged_user', $user);
            $this->session->set_flashdata('success', 'Logado com sucesso!');
            redirect('painel_user');
        }else{
            $this->session->set_flashdata('danger', 'Usuário e/ou senha inválidos!');
            redirect('login_user');
        }
    }

    public function logout(){

        $this->session->unset_userdata('logged_user');
        redirect('login_user');
    }
}