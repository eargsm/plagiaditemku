<?php
defined('BASEPATH') or exit('No direct script access allowed');

    class c_editdagangan extends CI_Controller 
    {
        function __construct(){
            parent::__construct();		
            $this->load->model('m_editdagangan');
     
        }
        public function index() {
        $this->load->view('editdagangan');
    }
    public function editdagangan()
    {
            $tambah = $this->m_editdagangan->gettoko();
            $produk = $this->input->post('namaitem');
            $harga = $this->input->post('harga');
            $stok = $this->input->post('stok');
            $minimal =  $this->input->post('minpesanan');
            $email = $this->session->userdata('login')['email'];
            $data = array (
                'produk' => $produk,
                'harga' => $harga,
                'stok' => $stok,
                'minimal' => $minimal
                // 'namaToko' => $tambah,
                // 'email' => $email
            );
        $this->m_editdagangan->edit_dagangan($idDagangan,$data);
        redirect('c_dagangan');
    }
    // public function editmahasiswa()
	// {
	// 	$nim = $this->input->post('nim');
	// 	$nama = $this->input->post('nama');
	// 	$kelas = $this->input->post('kelas');
	// 	$jurusan = $this->input->post('jurusan');
	// 	$data = array(
	// 		'nama' => $nama,
	// 		'kelas' => $kelas,
	// 		'id_jurusan' => $jurusan,
	// 	);
	// 	$this->M_web->edit_mahasiswa($nim,$data);

	// 	redirect('index.php/web/mahasiswa');	
	// }
}