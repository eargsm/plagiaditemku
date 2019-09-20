<?php

class Home extends CI_Controller {
    public function index() {
        $data['judul'] = 'Home';
        $this->load->view('login');
        // $this->load->view('registrasi');
    }
}