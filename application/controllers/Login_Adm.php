<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Adm extends CI_Controller {

    public function index() {

        $this->load->model('login_model');
        $dados['titulo'] = 'Creative World';
        $this->load->view('login-adm', $dados);

    }
    public function storeAdm(){

        $this->load->model('login_model');
        $email = $_POST['email'];
        $senha= md5($_POST['senha']);
        $adm = $this->login_model->storeAdm($email, $senha);

        if($adm){
            $this->session->set_userdata('logged_adm', $adm);
            $this->session->set_flashdata('success', 'Logado com sucesso!');
            redirect('adm');
        }else{
            $this->session->set_flashdata('danger', 'Usuário e/ou senha inválidos!');
            redirect('login_adm');
        }
    }

    public function logout(){

        $this->session->unset_userdata('logged_adm');
        redirect('login_adm');
    }
}