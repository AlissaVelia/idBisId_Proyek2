<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {
    // public function cariIdeBisnis()
    // {
    //     # code...
    //     $kategori = $this->input->post('kategori');
    //     $oleh = $this->input->post('oleh');
    //     $judul = $this->input->post('judul');
    //     $this->db->select('judul, ide_bisnis.foto, deskripsi, kategori_ide, user.username as oleh');
    //     $this->db->from('ide_bisnis');
    //     $this->db->join('user', 'ide_bisnis.id_user = user.id_user');
    //     $this->db->like('kategori_ide', $kategori);
    //     $this->db->or_like('judul', $judul);
    //     $this->db->or_like('user.id_user', $oleh);
    //     return $this->db->get()->result_array();
    // }

    public function tampilTopIdeBisnis()
    {
        # code...
        $this->db->select('judul, ide_bisnis.foto, deskripsi, user.username as oleh');
        $this->db->from('ide_bisnis');
        $this->db->join('user', 'ide_bisnis.id_user = user.id_user');
        return $this->db->get()->result_array();
    }
    

}

/* End of file user_model.php */

?>