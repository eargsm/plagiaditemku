<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_registoko extends CI_Controller 
{
    public function index() {
        $this->load->view('registoko');
}
function tambahtoko()
    {
    $data = [
        "namaToko" => $this->input->post('namatoko',true),
        "namaBank" => $this->input->post('bank',true),
        "atasNama" => $this->input->post('atasnama',true),
        "noRekening" => $this->input->post('norek',true),
        "sloganToko" => $this->input->post('slogan',true),
        "email" => $this->session->userdata('login')['email']
    ];
    $this->load->model('m_registoko');
    $this->m_registoko->tambahtoko($data);
    redirect('c_mainmenu');
    }
}
