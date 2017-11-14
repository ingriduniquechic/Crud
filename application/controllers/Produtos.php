<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index($page = 1) {

        $this->load->library('pagination');

//        $config = array(
//        "base_url" => base_url('produtos/index'),
//        "per_page" => 3,
//        "num_links" => 3,
//        "uri_segment" => 3,
//        "total_rows" => 
//        );
//        
//        $this->pagination->initialize($config);

        $this->pagination->initialize([
            'total_rows' => 30,
            'per_page' => 5,
            'base_url' => '/produtos/index',
            'first_link' => 'Primeiro',
            'last_link' => 'Último'
        ]);

        $this->load->view('produtos/list');
    }

    public function get($id) {
        echo 'Resgata um produto código: ' . $id;
    }

    public function create() {
        echo ' Salvar o produto';
    }

}
