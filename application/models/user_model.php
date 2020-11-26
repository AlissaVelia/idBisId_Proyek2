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
        $this->db->select('id_idebisnis, judul, ide_bisnis.foto, deskripsi, user.username as oleh, suka');
        $this->db->from('ide_bisnis');
        $this->db->join('user', 'ide_bisnis.id_user = user.id_user');
        $this->db->join('kategori_ide', 'ide_bisnis.id_kategoriide  = kategori_ide.id_kategoriide');
        if ($judul != '') {
            # code...
            $this->db->or_like('judul', $judul);
        }
        if ($kategori != '') {
            # code...
            $this->db->or_like('kategori_ide.nama_kategori', $kategori);
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
        $this->db->select('id_pelatihan, nama_pelatihan, pelatihan.deskripsi as desc, lembaga_pelatihan.logo_lembaga as logo');
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

    public function tampilKategoriIde()
    {
        # code...
        $this->db->select('id_kategoriide, nama_kategori');
        $this->db->from('kategori_ide');
        return $this->db->get()->result_array();
    }

    public function tampilTopIdeBisnis()
    {
        # code...
        $this->db->select('id_idebisnis, judul, ide_bisnis.foto, deskripsi, user.username as oleh, suka');
        $this->db->from('ide_bisnis');
        $this->db->join('user', 'ide_bisnis.id_user = user.id_user');
        $this->db->order_by('suka', 'DESC');
        $this->db->limit(12);
        return $this->db->get()->result_array();
    }
    
    public function tampilTopPelatihan()
    {
        # code...
        $this->db->select('id_pelatihan, nama_pelatihan, pelatihan.deskripsi as desc, lembaga_pelatihan.logo_lembaga as logo');
        $this->db->from('pelatihan');
        $this->db->join('lembaga_pelatihan', 'pelatihan.id_lembaga = lembaga_pelatihan.id_lembaga');
        $this->db->limit(12);
        return $this->db->get()->result_array();
    }

    public function tambahIde($foto)
    {
        # code...
        $data = array(
            'judul'=>$this->input->post('judul'),
            // 'foto'=>$this->input->post('foto', true),
            'deskripsi'=>$this->input->post('deskripsi'),
            'id_kategoriide'=>$this->input->post('kategori'),
            'id_user'=>$this->input->post('iduser', true),
            'foto' => $foto['file_name']
        );
        $this->db->insert('ide_bisnis', $data);
        if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
    }

    public function tampilSemuaIdeBisnis()
    {
        # code...
        $this->db->select('id_idebisnis, judul, ide_bisnis.foto as foto, deskripsi, user.username as oleh, suka');
        $this->db->from('ide_bisnis');
        $this->db->join('user', 'ide_bisnis.id_user = user.id_user');
        return $this->db->get()->result_array();
    }

    public function tampilSemuaPelatihan()
    {
        # code...
        $this->db->select('id_pelatihan, nama_pelatihan, pelatihan.deskripsi as desc, lembaga_pelatihan.logo_lembaga as logo');
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

    public function tampilDetailIdeBisnis($id_idebisnis)
    {
        # code...
        $this->db->select('id_idebisnis, judul, ide_bisnis.foto, deskripsi, suka, nama_kategori');
        $this->db->from('ide_bisnis');
        $this->db->join('kategori_ide', 'ide_bisnis.id_kategoriide  = kategori_ide.id_kategoriide');
        $this->db->where('id_idebisnis', $id_idebisnis);
        return $this->db->get()->row_array();
    }

    public function tampilDetailPelatihan($id_pelatihan)
    {
        // $this->db->select('*');
        // $this->db->from('pelatihan');
        // $this->db->left_join('user_pelatihan', 'pelatihan.id_pelatihan  = user_pelatihan.id_pelatihan');
        // $this->db->where('pelatihan.id_pelatihan', $id_pelatihan);
        // return $this->db->get()->row_array();
         return $this->db->get_where('pelatihan', ['id_pelatihan'=>$id_pelatihan])->row_array();
    }
    public function tampilDetailUserPelatihan($id_pelatihan)
    {
         
         return $this->db->get_where('user_pelatihan', ['id_pelatihan'=>$id_pelatihan])->row_array();
    }

    public function tampilProfilUser($username)
    {
        # code...
        $this->db->select('user.id_user, nama, username, user.foto, COUNT(ide_bisnis.id_idebisnis) as jmlide');
        $this->db->from('user');
        $this->db->join('ide_bisnis', 'ide_bisnis.id_user  = user.id_user');
        $this->db->where('username', $username);
        return $this->db->get()->row_array();
    }

    public function tampilIdbisByUser($username)
    {
        # code...
        $this->db->select('id_idebisnis, judul, ide_bisnis.foto, deskripsi, user.username as oleh, suka');
        $this->db->from('ide_bisnis');
        $this->db->join('user', 'ide_bisnis.id_user = user.id_user');
        $this->db->where('username', $username);
        return $this->db->get()->result_array();
    }

    public function tampilIdbisFav($username)
    {
        # code...
        $this->db->select('ide_bisnis.id_idebisnis, ide_bisnis.judul, ide_bisnis.foto, ide_bisnis.deskripsi, user.username as oleh, ide_bisnis.suka');
        $this->db->from('favorit');
        $this->db->join('user', 'favorit.id_user = user.id_user');
        $this->db->join('ide_bisnis', 'favorit.id_idebisnis = ide_bisnis.id_idebisnis');
        $this->db->where('username', $username);
        return $this->db->get()->result_array();
    }

    public function tampilPelatihanUser($username)
    {
        # code...
        $this->db->select('pelatihan.id_pelatihan, nama_pelatihan, pelatihan.deskripsi as desc, lembaga_pelatihan.logo_lembaga as logo');
        $this->db->from('pelatihan');
        $this->db->join('lembaga_pelatihan', 'pelatihan.id_lembaga = lembaga_pelatihan.id_lembaga');
        $this->db->join('user_pelatihan', 'pelatihan.id_pelatihan = user_pelatihan.id_pelatihan');
        $this->db->join('user', 'user.id_user = user_pelatihan.id_user');
        $this->db->where('user.username', $username);
        return $this->db->get()->result_array();
    }

    public function tampilDetailIdeBisnisByUser($oleh, $id_idebisnis)
    {
        # code...
        $this->db->select('id_idebisnis, judul, ide_bisnis.foto, deskripsi, suka, nama_kategori');
        $this->db->from('ide_bisnis');
        $this->db->join('kategori_ide', 'ide_bisnis.id_kategoriide  = kategori_ide.id_kategoriide');
        $this->db->where('id_idebisnis', $id_idebisnis);
        return $this->db->get()->row_array();
    }

    public function editIde($id_idebisnis, $foto)
    {
        # code...
        $data = [
            'judul'=>$this->input->post('judul'),
            'deskripsi'=>$this->input->post('deskripsi'),
            'foto' => $foto['file_name']
            // 'foto'=>$this->input->post('foto',true)
        ];
        $this->db->where('id_idebisnis', $id_idebisnis);
        $this->db->update('ide_bisnis', $data);
        if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
    }

    public function editProfilUser($id_user, $foto)
    {
        # code...
        $data = [
            'nama'=>$this->input->post('nama'),
            'email'=>$this->input->post('email'),
            'no_telp'=>$this->input->post('telepon'),
            'username'=>$this->input->post('username'),
            'password'=>$this->input->post('pswd'),
            'foto' => $foto['file_name']
            // 'foto'=>$this->input->post('foto',true)
        ];
        $this->session->set_userdata('user', $this->input->post('username'));
        $this->db->where('id_user', $id_user);
        $this->db->update('user', $data);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
		} else {
			return FALSE;
		}
    }

    public function tampilDetailProfilUser()
    {
        # code...
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id_user', $this->session->userdata('id_user'));
        return $this->db->get()->row_array();
    }

    public function suka($id_idebisnis, $suka)
    {
        $this->db->set('suka', $suka);
        $this->db->where('id_idebisnis', $id_idebisnis);
        $this->db->update('ide_bisnis');
    }

    public function fav($id_idebisnis) {
        $id = $this->session->userdata('id_user');
        
            $data = array(
                "id_user" => $id,
                "id_idebisnis" => $id_idebisnis
            );
            $this->db->insert('favorit', $data);
        
    }

    public function cekFav($id_idebisnis) {
        $this->db->select('COUNT(id_favorit) fav');
        $this->db->from('favorit');
        $this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->where('id_idebisnis', $id_idebisnis);
        return $this->db->get()->row_array();
    }

    public function hapusFav($id_idebisnis) {
        $this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->where('id_idebisnis', $id_idebisnis);
        $this->db->delete('favorit');
    }


    public function tambah_user_pelatihan()
	{
		$data = array(
				'id_user' => $this->input->post('id_user'),
                'id_pelatihan' => $this->input->post('id_pelatihan'),
                'status_pembayaran' => $this->input->post('status_pembayaran'),
                'status_pelatihan' => $this->input->post('status_pelatihan'),
                'bukti_pembayaran' => $this->input->post('bukti_pembayaran')
                
		
			);

		$this->db->insert('user_pelatihan', $data);
		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
    }
    
}

/* End of file user_model.php */

?>