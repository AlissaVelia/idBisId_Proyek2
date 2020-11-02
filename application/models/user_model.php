<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

    public function cariIdeBisnis()
    {
        # code...
        $judul=$this->input->post('judul');
        $kategori=$this->input->post('kategori');
        $oleh=$this->input->post('oleh');
        // echo "'<script>console.log(\"$oleh\")</script>'";
        $this->db->select('judul, ide_bisnis.foto, deskripsi, user.username as oleh, suka');
        $this->db->from('ide_bisnis');
        $this->db->join('user', 'ide_bisnis.id_user = user.id_user');
        if ($judul != '') {
            # code...
            $this->db->or_like('judul', $judul);
        }
        if ($kategori != '') {
            # code...
            $this->db->or_like('kategori_ide', $kategori);
        }
        if ($oleh != '') {
            # code...
            $this->db->or_like('user.username', $oleh);
        }
        return $this->db->get()->result_array();
    }

    public function cariPelatihan()
    {
        # code...
        $nama_pelatihan=$this->input->post('nama_pelatihan');
        $nama_lembaga=$this->input->post('nama_lembaga');
        // echo "'<script>console.log(\"$nama_pelatihan\")</script>'";
        $this->db->select('nama_pelatihan, pelatihan.deskripsi as desc, lembaga_pelatihan.logo_lembaga as logo');
        $this->db->from('pelatihan');
        $this->db->join('lembaga_pelatihan', 'pelatihan.id_lembaga = lembaga_pelatihan.id_lembaga');
        if ($nama_pelatihan != '') {
            # code...
            $this->db->or_like('nama_pelatihan', $nama_pelatihan);
        }
        if ($nama_lembaga != '') {
            # code...
            $this->db->or_like('lembaga_pelatihan.nama_lembaga', $nama_lembaga);
        }
        return $this->db->get()->result_array();
    }

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

    public function tampilLembagaPelatihan()
    {
        # code...
        $this->db->select('nama_lembaga, alamat');
        $this->db->from('lembaga_pelatihan');
        return $this->db->get()->result_array();
    }

}

/* End of file user_model.php */

?>