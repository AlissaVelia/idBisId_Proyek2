<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class lembaga_model extends CI_Model {

    public function tambah_kategori()
	{
		$data = array(
				// 'id_kategori' => $this->input->post('id_kategori'),
				'nama_kategori' => $this->input->post('nama_kategori'),
				'id_lembaga' => $this->input->post('id_lembaga')
		
			);

		$this->db->insert('kategori', $data);
		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
    }
    
    public function get_kategori($id_lembaga)
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->where('kategori.id_lembaga', $id_lembaga);
		
		$query = $this->db->get();
		return $query->result();
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

	public function ubah_kategori()
	{
		$data = array(
				'nama_kategori' => $this->input->post('nama_kategori')
			);

		$this->db->where('id_kategori', $this->input->post('id_kategori'))
				 ->update('kategori', $data);

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}


	public function get_pelatihan($id_lembaga)
	{
		$this->db->select('*');
		$this->db->from('pelatihan');
		$this->db->join('kategori', 'kategori.id_kategori = pelatihan.id_kategori');
		$this->db->where('pelatihan.id_lembaga', $id_lembaga);
		
		$query = $this->db->get();
		return $query->result();

	}
    public function tambah_pelatihan()
	{
		$data = array(
				// 'id_kategori' => $this->input->post('id_kategori'),
				'nama_pelatihan' => $this->input->post('nama_pelatihan'),
				'deskripsi' => $this->input->post('deskripsi'),
				'id_lembaga' => $this->input->post('id_lembaga'),
				'id_kategori' => $this->input->post('id_kategori'),
				'pembayaran' => $this->input->post('pembayaran'),
				'harga' => $this->input->post('harga')
		
			);

		$this->db->insert('pelatihan', $data);
		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
    }
	
	public function get_pelatihan_by_id($id_pelatihan)
	{
		
		return $this->db->join('kategori', 'kategori.id_kategori = pelatihan.id_kategori')
			->where('id_pelatihan', $id_pelatihan)
			->get('pelatihan')
			->row();

		// $this->db->select('*');
		// $this->db->from('pelatihan');
		// $this->db->join('kategori', 'kategori.id_kategori = pelatihan.id_kategori');
		// $this->db->where('pelatihan.id_pelatihan', $id_pelatihan);
		
		
		// return $this->db->where('id_pelatihan', $id_pelatihan)
        // ->get('pelatihan')
		// ->result();
    }
    
    public function hapus_pelatihan($id_pelatihan)
	{
		$this->db->where('id_pelatihan', $id_pelatihan)
				 ->delete('pelatihan');

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function update_pelatihan($id_pelatihan)
	{
		
		$data = array(
		//'KD_GURU' => $this->input->post('KD_GURU'),
		'nama_pelatihan' => $this->input->post('nama_pelatihan'),
		'deskripsi' => $this->input->post('deskripsi'),
		'id_kategori' => $this->input->post('id_kategori'),
		'pembayaran' => $this->input->post('pembayaran'),
		'harga' => $this->input->post('harga'));
		$this->db->where('id_pelatihan', $id_pelatihan)
				 ->update('pelatihan', $data);
				 
		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		else
		 {
			return FALSE; 
		}
	}

	function tambah_materi($file_materi) {

			# code...
			$data = array(
				'judul'=>$this->input->post('judul'),
				// 'foto'=>$this->input->post('foto', true),
				'bab'=>$this->input->post('bab'),
				'penjelasan'=>$this->input->post('penjelasan'),
				'id_pelatihan'=>$this->input->post('id_pelatihan'),
				'file_materi' => $file_materi['file_name']
			);
			$this->db->insert('materi', $data);
			if ($this->db->affected_rows() > 0) {
				return TRUE;
			} else {
				return FALSE;
			}
	}

	function uploadMateri() {
		$config['upload_path'] = './upload/lembaga/materi/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name'] = $this->id_materi;
		$config['overwrite'] = true;

		$this->upload->initialize($config);
		$this->load->library('upload', $config);
		if($this->upload->do_upload('file_materi')) {
			return $this->upload->data("file_name");
		}
	}


}

/* End of file admin_model.php */

?>