<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function index() {
        $data['header'] = $this->load->view('layouts/header', '', TRUE);
        $data['footer'] = $this->load->view('layouts/footer', '', TRUE);
        
        $this->load->view('users/index', $data);
    }
    
    public function login(){
        $this->load->view('login');
    }

}
