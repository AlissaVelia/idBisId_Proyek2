<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class lembaga_model extends CI_Model {

    public function tambah_kategori()
	{
		$data = array(
				'id_kategori' => $this->input->post('id_kategori'),
				'nama_kategori' => $this->input->post('nama_kategori'),
				'jml_bab' => $this->input->post('jml_bab'),
				'id_pelatihan' => $this->input->post('id_pelatihan'),
				'id_user_pelatihan' => $this->input->post('id_user_pelatihan'),
		
			);

		$this->db->insert('kategori', $data);
		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
    }
    
    public function get_kategori()
	{
		return $this->db->get('kategori')
						->result();
	}


	public function get_kategori_by_id($id_kategori)
	{
		return $this->db->where('id_kategori', $id_kategori)
        ->get('kategori')
        ->row();
    }
    
    public function hapus_kategori($id_kategori)
	{
		$this->db->where('id_kategori', $id_kategori)
				 ->delete('kategori');

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}



}

/* End of file admin_model.php */

?>