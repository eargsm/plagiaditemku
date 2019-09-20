<?php
defined('BASEPATH') or exit('No direct script access allowed');

    class c_tambahdagangan extends CI_Controller 
    {

        function __construct(){
            parent::__construct();
            $this->load->model('m_tambahdagangan');
            $this->load->helper('url');
        }

        function tambah(){
            $this->load->view('tambahdagangan');
        }

        public function index() {
            $this->load->view('tambahdagangan');
        }
        function tambahitem()
        {
            $tambah = $this->m_tambahdagangan->gettoko();
            $produk = $this->input->post('namaitem',true);
            $harga = $this->input->post('harga',true);
            $stok = $this->input->post('stok',true);
            $minimal = $this->input->post('minpesanan',true);
            // $toko = $this->session->userdata('login')['namaToko'];
            $email = $this->session->userdata('login')['email'];

            $this->m_tambahdagangan->tambahitem($produk,$harga,$stok,$minimal,$tambah,$email);
        // $this->load->model('m_tambahdagangan');
        // $this->m_registoko->tambahitem($data);
            redirect('c_dagangan');
        }
}