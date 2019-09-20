<?php

    class m_editdagangan extends CI_Model{
        public function getdatabyid($idDagangan){
            $this->db->where('idDagangan',$idDagangan);
            return $this->db->get('dagangan')->row_array();
        }
        public function edit_dagangan($idDagangan,$data)
        {
            $this->db->where('idDagangan', $idDagangan);
            $this->db->update('dagangan', $data);
            return;
        }
        function gettoko(){
            $email1 = $this->session->userdata('login')['email'];
            $this->db->select('namaToko');
            $this->db->from('tokoku');
            $this->db->where('email',$email1);
            return $this->db->get()->result_array();

    }
}
?>