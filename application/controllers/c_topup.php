<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_topup extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_topup');
    }

    public function index(){
        $data['topup'] = $this->m_topup->Get_Topup();
        $this->load->view('topup', $data);
    }
    public function tambahkeranjang()
    {
        $data = [
            "idKeranjang"=> $this->db->query(''),
            "idItem"=> $this->db->query('SELECT idItem from item'),
            "total" => $this->db->get()
        ];
        redirect('c_keranjang');
    }
    
}
?>