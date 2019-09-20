<?php
    class m_keranjang extends CI_Model{
            public function get_keranjang(){
                    $hasil = $this->db->get('keranjang');
                    if($hasil->num_rows() > 0){
                        return $hasil->result();
                    }else{
                        return array();
                    }
            }

            public function getkeranjang_byid($idKeranjang){
                $this->db->where('idKeranjang',$idKeranjang);
                return $this->db->get('keranjang')->row_array();
            }

            public function update_keranjang($idKeranjang, $data){
                $this->db->where('idKeranjang',$idKeranjang);
                return $this->db->update('keranjang', $data);
            }

            public function delete_keranjang($idKeranjang){
                $this->db->delete('keranjang', array('idKeranjang' => $idKeranjang));
                return;
            }

            public function nambahtotal(){
                $sql = "SELECT idKeranjang, idItem, total, (total * total) as totalbayar FROM keranjang ORDER BY idKeranjang";
                return $this->db->query($sql);
            }

            public function getsum(){
                $this->db->select_sum('total', 'total');
                $this->db->from('keranjang');
                return $this->db->get('')->row();
            }
}