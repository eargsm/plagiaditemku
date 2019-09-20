<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_keranjang extends CI_Controller { 
    function __construct(){
        parent::__construct();
        $this->load->model('m_keranjang');
    }

    public function index(){
        $data['keranjang'] = $this->m_keranjang->get_keranjang();
        $this->load->view('keranjang', $data);
    }

    public function updatekeranjang($idKeranjang){
        $this->load->view();    
    }

    public function deketekeranjang($idKeranjang){
        $this->m_keranjang->delete_keranjang($idKeranjang);
        redirect('/c_keranjang');
    }

    public function ttlbyr(){
        $data['title'] = "ttlbyr";
        $this->load->model('m_keranjang');
        $data['ttlbyr'] = $this->m_keranjang->nambahtotal();
        $data['sum_jumlah'] = $this->m_keranjang->getsum();
        $this->load->view('keranjang', $data);
    }

}