<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class lembaga extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('lembaga_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Dashboard - idBisid';
        $this->load->view('template/lembaga/header_lembaga',$data);
        $this->load->view('template/lembaga/sidebar_lembaga');
        $this->load->view('lembaga/index',$data);
        //$this->load->view('template/lembaga/footer_lembaga');
        
    }
    public function data_lembaga()
    {
        $data['title'] = 'Dashboard - idBisid';
        $this->load->view('template/lembaga/header_lembaga',$data);
        $this->load->view('template/lembaga/sidebar_lembaga',$data);
        $this->load->view('lembaga/data_lembaga',$data);
        //$this->load->view('template/lembaga/footer_lembaga');
    }
    public function kategori_pelatihan()
    {
        
        $data['data_kategori'] = $this->lembaga_model->get_kategori();
        $data['title'] = 'Dashboard - idBisid';
        
        $this->load->view('template/lembaga/header_lembaga',$data);
        $this->load->view('template/lembaga/sidebar_lembaga',$data);
        $this->load->view('lembaga/kategori_pelatihan',$data);
        
        //$this->load->view('template/lembaga/footer_lembaga');
    }
    public function materi_pelatihan()
    {
        $data['title'] = 'Dashboard - idBisid';
        $this->load->view('template/lembaga/header_lembaga',$data);
        $this->load->view('template/lembaga/sidebar_lembaga',$data);
        $this->load->view('lembaga/materi_pelatihan',$data);
        //$this->load->view('template/lembaga/footer_lembaga');
    }
    public function edit_data()
    {
        $data['title'] = 'Dashboard - idBisid';
        $this->load->view('template/lembaga/header_lembaga',$data);
        $this->load->view('template/lembaga/sidebar_lembaga',$data);
        $this->load->view('lembaga/edit_datalembaga',$data);
        //$this->load->view('template/lembaga/footer_lembaga');
    }
    public function tambah_kategori()
    {
        $data['title'] = 'Dashboard - idBisid';
        $this->load->view('template/lembaga/header_lembaga',$data);
        $this->load->view('template/lembaga/sidebar_lembaga',$data);
        $this->load->view('lembaga/tambah_kategori',$data);
        //$this->load->view('template/lembaga/footer_lembaga');
    }
    public function tambah_materi()
    {
        $data['title'] = 'Dashboard - idBisid';
        $this->load->view('template/lembaga/header_lembaga',$data);
        $this->load->view('template/lembaga/sidebar_lembaga',$data);
        $this->load->view('lembaga/tambah_materi',$data);
        //$this->load->view('template/lembaga/footer_lembaga');
    }

    public function tambah_data_kategori()
    {
        $this->load->library('form_validation');
        $data['title'] = 'Tambahkan Kategori - idBisid';
        $this->form_validation->set_rules('id_kategori', 'id_kategori', 'required');
        $this->form_validation->set_rules('nama_kategori', 'nama_kategori', 'required');
        $this->form_validation->set_rules('jml_bab', 'jml_bab', 'required');
        $this->form_validation->set_rules('id_pelatihan', 'id_pelatihan', 'required');
        $this->form_validation->set_rules('id_user_pelatihan', 'id_user_pelatihan', 'required');
        if ($this->form_validation->run()==FALSE){
            $this->load->view('template/lembaga/header_lembaga',$data);
            $this->load->view('lembaga/tambah_kategori',$data);
            $this->load->view('template/lembaga/footer_lembaga');
        }else{
            $this->lembaga_model->tambah_kategori();
            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('lembaga/tambah_kategori','refresh');
        }
    }

    public function hapus_kategori($id_kategori)
	{
		if ($this->lembaga_model->hapus_kategori($id_kategori) == TRUE) {
            $this->session->set_flashdata('notif', 'Hapus surat Berhasil!');
            redirect('lembaga/kategori_pelatihan');
        } else {
            $this->session->set_flashdata('notif', 'Hapus surat gagal!');
            redirect('lembaga/kategori_pelatihan');
        }
    }
    public function lihat_kategori()
    {
         
            $id_kategori = $this->uri->segment(3);
            $data['list'] = $this->lembaga_model->get_kategori_by_id($id_kategori);
            $this->load->view('template/lembaga/header_lembaga',$data);
            $this->load->view('lembaga/edit_kategori',$data);
            $this->load->view('template/lembaga/footer_lembaga');
    }
    public function edit_kategori()
		{
			
			$id_kategori = $this->uri->segment(3);
			$data['list'] = $this->lembaga_model->get_kategori_by_id($id_kategori);
			if($this->input->post('submit'))
			{
			// $this->form_validation->set_rules('KD_KELAS', 'KD_KELAS', 'trim|required');	
		 	$this->form_validation->set_rules('id_kategori', 'id_kategori', 'trim|required');
			 			 	
				
				if($this->form_validation->run()==TRUE)
				{
					if($this->admin_model->update_kelas($KD_KELAS) == TRUE)
					{
						$data['notif'] = 'berhasil';
                        $this->load->view('template/lembaga/header_lembaga',$data);
                        $this->load->view('lembaga/edit_kategori',$data);
                        $this->load->view('template/lembaga/footer_lembaga');
						redirect('lembaga/edit_kategori');
					}
					else
					{
						$data['notif'] = 'gagal';
                        $this->load->view('template/lembaga/header_lembaga',$data);
                        $this->load->view('lembaga/edit_kategori',$data);
                        $this->load->view('template/lembaga/footer_lembaga');
						redirect('lembaga/edit_kategori');
					}
				} else
				{
						$data['notif'] = validation_errors();
                        $this->load->view('template/lembaga/header_lembaga',$data);
                        $this->load->view('lembaga/edit_kategori',$data);
                        $this->load->view('template/lembaga/footer_lembaga');
						redirect('lembaga/edit_kategori');
				}
            }
        }
}

/* End of file admin.php */

?>