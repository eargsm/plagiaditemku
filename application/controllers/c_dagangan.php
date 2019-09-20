<?php
defined('BASEPATH') or exit('No direct script access allowed');

    class c_dagangan extends CI_Controller {
    
        public function __construct()
        {
            parent:: __construct();
            $this->load->model('m_dagangan');
        }
    
        public function index() 
        {
            $data['dagangan'] = $this->m_dagangan->getbyemail();
            $this->load->view('dagangan', $data);
        }
        // function viewdagangan()
        // {
        //      $data = [
        //         "produk" => $this->input->post('namaitem',true),
        //         "harga" => $this->input->post('harga',true),
        //         "stok" => $this->input->post('stok',true),
        //         "minimal" => $this->input->post('minpesanan',true),
        //         "namaToko" =>$this->session->userdata('alredyhave')['namaToko']
        //     ];
        // } 
        // public function editdagangan($idDagangan)
        // {
        //         $produk = $this->input->post('namaitem');
        //         $harga = $this->input->post('harga');
        //         $stok = $this->input->post('stok');
        //         $minimal =  $this->input->post('minpesanan');
        //         $email = $this->session->userdata('login')['email'];

        //         $this->m_dagangan->editdagangan($produk,$harga,$stok,$minimal,$tambah,$email);
        //         redirect('c_dagangan');
        // }
        public function deletedagangan($idDagangan){
            // $cek = $this->m_dagangan->delete($idDagangan);
            // if ($cek) $this->session->set_flashdata('info','Deleted');
            // else $this->session->set_flashdata('info','Failed');
            // redirect('index.php/c_dagangan');
            $this->m_dagangan->delete_dagangan($idDagangan);
            redirect('/c_dagangan');
        }
        
}
?>