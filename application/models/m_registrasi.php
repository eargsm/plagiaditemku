<?php

class m_registrasi extends CI_model
{
    public function tampil_data(){
        return $this->db->get('user');
    }

    public function tambahdata($data) {
        $this->db->insert('user',$data);
    }
    public function cekemail($email) {
        $this->db->where('email',$email);
        return $this->db->get('user');
    }
}
?>