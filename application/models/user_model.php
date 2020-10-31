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
        $this->db->select('judul, ide_bisnis.foto, deskripsi, user.username as oleh, suka');
        $this->db->from('ide_bisnis');
        $this->db->join('user', 'ide_bisnis.id_user = user.id_user');
        $this->db->order_by('suka', 'DESC');
        $this->db->limit(12);
        return $this->db->get()->result_array();
    }
    
    public function tampilTopPelatihan()
    {
        # code...
        $this->db->select('nama_pelatihan, pelatihan.deskripsi as desc, lembaga_pelatihan.logo_lembaga as logo');
        $this->db->from('pelatihan');
        $this->db->join('lembaga_pelatihan', 'pelatihan.id_lembaga = lembaga_pelatihan.id_lembaga');
        $this->db->limit(12);
        return $this->db->get()->result_array();
    }

    public function tambahIde()
    {
        # code...
        $data = [
            'judul'=>$this->input->post('judul', true),
            'foto'=>$this->input->post('foto', true),
            'deskripsi'=>$this->input->post('deskripsi', true),
            'kategori_ide'=>$this->input->post('kategori', true),
            'id_user'=>$this->input->post('iduser', true)
        ];
        $this->db->insert('ide_bisnis', $data);
    }

    public function tampilSemuaIdeBisnis()
    {
        # code...
        $this->db->select('judul, ide_bisnis.foto as foto, deskripsi, user.username as oleh, suka');
        $this->db->from('ide_bisnis');
        $this->db->join('user', 'ide_bisnis.id_user = user.id_user');
        return $this->db->get()->result_array();
    }

    public function tampilSemuaPelatihan()
    {
        # code...
        $this->db->select('nama_pelatihan, pelatihan.deskripsi as desc, lembaga_pelatihan.logo_lembaga as logo');
        $this->db->from('pelatihan');
        $this->db->join('lembaga_pelatihan', 'pelatihan.id_lembaga = lembaga_pelatihan.id_lembaga');
        return $this->db->get()->result_array();
    }

}

/* End of file user_model.php */

?>