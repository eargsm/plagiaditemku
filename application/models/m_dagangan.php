<?php

    class m_dagangan extends CI_Model{
        // public function all(){
        //     //query semua record di table dagangan
        //     $email3=  $this->session->userdata('login')['email'];
        //     $this->db->where('email', $email3 )
        //     // $hasil = $this->db->get('dagangan')->where('email',  $this->session->userdata('login')['email'];);
        //     if($email3->num_rows() > 0){
        //         return $hasil->result();
        //     }else{
        //         return array();
        //     }
        // }

        public function getbyemail(){
            $imel = $this->session->userdata('login')['email'];
            $this->db->where('email', $imel);
            $hasil = $this->db->get('dagangan');
            if($hasil->num_rows() > 0){
                return $hasil->result();
            }else{
                return array();
            }
        }
        // public function getdaganganbyemail(){
        //     $email2 =  $this->session->userdata('login')['email'];
        //     if($email2->num_rows() > 0){
        //         return->$email2->result();
        //     }else{
        //         return array();
        //     }
        // }

        // public function find($idDagangan){
        //     //query mencari record berdasar id
        //     $hasil = $this->db->where('idDagangan', $idDagangan)
        //                       ->limit(1)
        //                       ->get('dagangan');
        //     if($hasil->num_rows() > 0){
        //         return $hasil->row();
        //     }else{
        //         return array();
        //     }

        // }
        public function getdagangan_byid($idDagangan){
            $this->db->where('idDagangan',$idDagangan);
            return $this->db->get('dagangan')->row_array();
        }
        // public function update_dagangan($idDagangan, $data){
        //     //query update from
        //     $this->db->where('idDagangan',$idDagangan);
        //     return $this->db->update('dagangan', $data);
        // }
        public function delete_dagangan($idDagangan){
            //query delete
            // $this->db->where('idDagangan',$idDagangan);
            // return $this->db->delete('dagangan');
            $this->db->delete('dagangan', array('idDagangan' => $idDagangan));
            return;
        }
    }
?>
