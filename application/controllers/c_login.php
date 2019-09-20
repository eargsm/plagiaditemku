<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_login extends CI_Controller 
{

    function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}

    public function index() {
        $this->load->view('login');
    }
    function aksiLogin(){
        $namaToko =  $this->db->query("SELECT namaToko from tokoku join dagangan using(namaToko) where dagangan.namaToko = tokoku.namaToko");
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $where = array(
			'email' => $email,
			'password' => $password
        );
        $cek = $this->m_login->cek_login("user",$where)->num_rows();
		if($cek > 0){
            $data_session = array(
                'email' => $email,
                'namaToko' => $namaToko,
				'status' => "login"
            );
            $this->session->set_userdata('login', $data_session);
            redirect("c_mainmenu");
        }else {
            echo "Username dan password salah !";
        }
    }
    function logOut(){
        $this->session->sess_destroy();
		redirect('c_login');
    }
}
