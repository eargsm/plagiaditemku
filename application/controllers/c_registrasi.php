<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_registrasi extends CI_Controller 
{

    function __construct(){
		parent::__construct();		
        $this->load->model('m_registrasi');
		$this->load->helper('url');
 
    }
    
	function tambah(){
		$this->load->view('registrasi');
    }
    function index() {
        $this->load->view('registrasi');
    }

    function tambahdata()
    {
    $data = [
        "nama" => $this->input->post('name',true),
        "email" => $this->input->post('email',true),
        "password" => $this->input->post('password',true),
        "noHp" => $this->input->post('nohp',true)
    ];
    $cek = $this->m_registrasi->cekemail($data['email'])->row_array();
    if ($cek > 0 ) {
        redirect('c_registrasi');
        return alert('Email sudah Terdaftar');
        
    } else {
    $this->m_registrasi->tambahdata($data);
    redirect('c_login');
    }
}

}