<?php

    class m_tambahdagangan extends CI_Model{
        public function tambahitem($produk, $harga, $stok, $minimal,$tambah, $email){
            // $this->db->insert('dagangan',$data);
            $email1 = $this->session->userdata('login')['email'];
            $toko = $this->session->userdata('login')['namaToko'];

            // print_r($tambah);
            //$cek = $this->db->query("Select namaToko from dagangan join tokoku using(namaToko) where email = '$email1'");
            $data = 
            [
                "produk" => $produk,
                "harga" => $harga,
                "stok" => $stok,
                "minimal" => $minimal,
                "namaToko" => $tambah[0]['namaToko'],
                "email" => $email1

            ];
           $this->db->insert('dagangan', $data);
           
           //$this->db->query("insert into dagangan(produk, harga, stok, minimal, namaToko) values ('$produk', '$harga', '$stok', '$minimal', '$cek')");
       }
       function gettoko(){
        $email1 = $this->session->userdata('login')['email'];
        // return $this->db->query("SELECT namaToko FROM tokoku WHERE email = '$email1'")->result_array();
        $this->db->select('namaToko');
        $this->db->from('tokoku');
        $this->db->where('email',$email1);
        // $x = $this->db->get()->result_array();
        return $this->db->get()->result_array();
        // $x =  $this->db->query("SELECT namaToko FROM tokoku WHERE email = $email1")->result_array();
        
        // print_r($x);
    //$this->db->select('namaToko')->from('tokoku')->where('email', $email1)->join('dagangan', 'tokoku.namaToko = dagangan.namaToko');

       }
       public function tambahdagangan($data){
           $this->db->insert('dagangan', $data);

       }
       
    }
?>