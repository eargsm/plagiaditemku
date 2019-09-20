<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_mainmenu extends CI_Controller 
{  
    // public function __construct(){
    //     parent::__construct();
    //     $this->load->model('m_mainmenu'); 
    // }

    public function index(){
        $this->load->view('mainmenu');
    }

//     public function cektoko($email){
        
//     //     // $cek = getemail($email);
//     //     // if($cek == $this->session->userdata(('login')['email'])){
//     //     //     $this->load->view('dagangan');
//     //     // }else{
//     //     //     $this->load->view('registoko');
//     //     // }
        
//     //     $cek = $this->m_mainmenu->getemail($email);
//     //     if ($cek) $this->load->view('dagangan');
//     //     else $this->load->view('registoko');
//     // //     // return $this->db->query("SELECT email from tokoku WHERE Email='$email'")->row_array();
//     // }
// }

// <?php
// defined('BASEPATH') or exit('No direct script access allowed');

// class c_mainmenu extends CI_Controller 
// {

//     public function __construct()
//     {
//         parent:: __construct();
//         $this->load->model('m_mainmenu');
//     }

//     public function index() {
//         $this->load->view('mainmenu');
//         // $cek = $this->m_mainmenu->ambildata();
//         // if($cek ==  $this->session->userdata('login')['email'] ){
//         //     $this->load->view('dagangan');
//         // }else{
//         //     $this->load->view('registoko');
//         // }
//         // $data = [
//         //     "cek" => $this->session->userdata('login')['email']
//         // ];
        
//     }
    
// }
}
