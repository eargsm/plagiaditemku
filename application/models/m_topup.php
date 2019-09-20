<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_topup extends CI_Model {

        public function Get_Topup(){
                $hasil = $this->db->get('dagangan');
                if($hasil->num_rows() > 0){
                    return $hasil->result();
                }else{
                    return array();
                }
        }

        function masukkeranjang(){
            $this->db->insert('keranjang');
            redierct('c_keranjang');
        }

        // public function Get_Topup(){
        // $this->db->select('*');
        // $this->db->from('dagangan'); //tabeldatabase
        // $query = $this->db->get();
        // return $query->result_array();
        // redirect (''); //keranjang
        // }
}
?>
