<?php

    class m_registoko extends CI_Model{
       public function tambahtoko($data){
            $this->db->insert('tokoku',$data);
       }
    }
?>