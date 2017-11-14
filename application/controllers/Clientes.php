<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $clientes = [
            [
                'id' => 1,
                'nome' => 'Jefferson Arrouba',
                'email' => 'jefferson@mail.com',
                'cadastrado_em' => '12/05/2017'
            ],
            [
                'id' => 2,
                'nome' => 'Ingrid Arrouba',
                'email' => 'ingrid@mail.com',
                'cadastrado_em' => '15/05/2017'
            ],
            [
                'id' => 3,
                'nome' => 'Diogo Arrouba',
                'email' => 'diogo@mail.com',
                'cadastrado_em' => '17/05/2017'
            ],
        ];
        $this->load->view('clientes/list', [
            'clientes' => $clientes
        ]);
    }

    public function get($id) {
        echo 'Resgata um cliente código: ' . $id;
    }

    public function cadastro() {

        $this->load->helper(['form', 'url']);

        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('nome', 'Nome', 'required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'required|min_length[4]|max_length[40]|valid_email');

        // Enquanto o formulario não passar na validação, ele vai ficar exibindo sempre a mesma tela de cadastro
        if ($this->form_validation->run() === false) {

            $this->load->view('clientes/cadastro');
            // Caso contrário, cadastra o cliente
        } else {
            //Cadastrar Cliente
            var_dump($this->input->post());
        }
    }

}
