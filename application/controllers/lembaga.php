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
    public function data_lembaga($id)
    {
        $data = array(
            'title' => 'Data Lembaga Pelatihan',
            'lembaga_pelatihan' => $this->lembaga_model->getLembagaById($id)
        );
        $this->load->view('template/lembaga/header_lembaga',$data);
        $this->load->view('template/lembaga/sidebar_lembaga',$data);
        $this->load->view('lembaga/data_lembaga',$data);
    }

    public function edit_data_lembaga($id) {
        $data = array(
            'title' => 'Edit Data Lembaga',
            'lembaga_pelatihan' => $this->lembaga_model->getLembagaById($id)
        );

        $this->form_validation->set_rules('nama_lembaga', 'Nama Lembaga', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'Telepon', 'required');
        $this->form_validation->set_rules('penanggungjawab', 'Nama Penanggungjawab', 'required');
        $this->form_validation->set_rules('no_ktp', 'Nomor KTP Penanggungjawab', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if($this->form_validation->run()==TRUE) {
            $config['upload_path'] = './upload/lembaga/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);

            if($this->upload->do_upload('logo_lembaga','surat_lembaga')) {
                if($this->lembaga_model->edit_data_lembaga($this->upload->data(), $this->upload->data()) == TRUE) {
                    $this->session->set_flashdata('notif','Edit Berhasil');
                    redirect('lembaga/data_lembaga/'.$this->input->post('id_lembaga'),'refresh');
                }
                else {
                    redirect('lembaga/data_lembaga/'.$this->input->post('id_lembaga'),'refresh');
                }
            }
            else {
                $this->session->set_flashdata('notif', $this->upload->display_errors());
                $this->load->view('template/lembaga/header_lembaga',$data);
                $this->load->view('template/lembaga/sidebar_lembaga',$data);
                $this->load->view('lembaga/edit_datalembaga',$data);
            }
        }
        else {
            $this->session->set_flashdata('notif', validation_errors());
            $this->load->view('template/lembaga/header_lembaga',$data);
            $this->load->view('template/lembaga/sidebar_lembaga',$data);
            $this->load->view('lembaga/edit_datalembaga',$data);
            // $this->lembaga_model->edit_data_lembaga($id);
            // redirect('lembaga/data_lembaga/'.$this->input->post('id_lembaga'),'refresh');
        }

        
    }

    public function kategori_pelatihan()
    {
        $id_lembaga = $this->session->userdata('id_lembaga');
        $data['data_kategori'] = $this->lembaga_model->get_kategori($id_lembaga);
        $data['title'] = 'Dashboard - idBisid';
        
        $this->load->view('template/lembaga/header_lembaga',$data);
        $this->load->view('template/lembaga/sidebar_lembaga',$data);
        $this->load->view('lembaga/kategori_pelatihan',$data);
        $this->load->view('template/lembaga/footer_lembaga');
    }
    public function materi_pelatihan()
    {
        $data['title'] = 'Dashboard - idBisid';
        $this->load->view('template/lembaga/header_lembaga',$data);
        $this->load->view('template/lembaga/sidebar_lembaga',$data);
        $this->load->view('lembaga/materi_pelatihan',$data);
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
        $this->form_validation->set_rules('nama_kategori', 'nama_kategori', 'required');
        $this->form_validation->set_rules('id_lembaga', 'id_lembaga', 'required');
        if ($this->form_validation->run()==FALSE){
            $this->load->view('template/lembaga/header_lembaga',$data);
            $this->load->view('lembaga/kategori_pelatihan',$data);
            $this->load->view('template/lembaga/footer_lembaga');
        }else{
            $this->lembaga_model->tambah_kategori();
            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('lembaga/kategori_pelatihan','refresh');
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
  
    public function edit_kategori()
		{
			
            if ($this->session->userdata('logged_in') == TRUE) {

                //$this->form_validation->set_rules('edit_id_lap_masuk', 'id_lap_masuk', 'trim|required');
                $this->form_validation->set_rules('nama_kategori', 'nama_kategori', 'trim|required');
    
                if ($this->form_validation->run() == TRUE) {
    
                    if ($this->lembaga_model->ubah_kategori() == TRUE) {
                        $this->session->set_flashdata('notif', 'Ubah laporan berhasil!');
                        redirect('lembaga/kategori_pelatihan');
                    } else {
                        $this->session->set_flashdata('notif', 'Ubah laporan gagal!');
                        redirect('lembaga/kategori_pelatihan');
                    }
                } else {
                    $this->session->set_flashdata('notif', validation_errors());
                    redirect('lembaga');
                }
            } else {
                redirect('login');
            }
        }

        public function get_kategori_by_id($id_kategori)
        {
            if ($this->session->userdata('logged_in') == TRUE) {
        
                $data_kategori_by_id = $this->lembaga_model->get_kategori_by_id($id_kategori);
        
                echo json_encode($data_kategori_by_id);
            } else {
                redirect('login/lembaga_login');
            }
        }




    public function tambah_pelatihan()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('nama_pelatihan', 'nama_pelatihan', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('id_kategori', 'id_kategori', 'required');
        $this->form_validation->set_rules('pembayaran', 'pembayaran', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('id_lembaga', 'id_lembaga', 'required');
        if ($this->form_validation->run()==FALSE){
            $this->load->view('template/lembaga/header_lembaga',$data);
            $this->load->view('lembaga/pelatihan',$data);
            $this->load->view('template/lembaga/footer_lembaga');
        }else{
            $this->lembaga_model->tambah_pelatihan();
            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('lembaga/pelatihan','refresh');
        }
    }
    public function pelatihan()
    {
        $id_lembaga = $this->session->userdata('id_lembaga');
        $data['data_pelatihan'] = $this->lembaga_model->get_pelatihan($id_lembaga);
        $this->load->view('template/lembaga/header_lembaga',$data);
        $this->load->view('template/lembaga/sidebar_lembaga',$data);
        $this->load->view('lembaga/pelatihan',$data);
        //$this->load->view('template/lembaga/footer_lembaga');
    }

    public function hapus_pelatihan($id_pelatihan)
	{
		if ($this->lembaga_model->hapus_pelatihan($id_pelatihan) == TRUE) {
            $this->session->set_flashdata('notif', 'Hapus surat Berhasil!');
            redirect('lembaga/pelatihan');
        } else {
            $this->session->set_flashdata('notif', 'Hapus surat gagal!');
            redirect('lembaga/pelatihan');
        }
    }

    public function get_pelatihan_by_id($id_pelatihan)
        {
            if ($this->session->userdata('logged_in') == TRUE) {
                
                $data_pelatihan_by_id = $this->lembaga_model->get_pelatihan_by_id($id_pelatihan);
        
                echo json_encode($data_pelatihan_by_id);
            } else {
                redirect('login/lembaga_login');
            }
        } 
    
    public function edit_pelatihan()
		{
            $id_pelatihan = $this->uri->segment(3);
            $data['list'] = $this->lembaga_model->get_pelatihan_by_id($id_pelatihan);
           
            if($this->input->post('submit'))
			{
                    //$this->form_validation->set_rules('edit_id_lap_masuk', 'id_lap_masuk', 'trim|required');
                $this->form_validation->set_rules('nama_pelatihan', 'nama_pelatihan', 'required');
                $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
                $this->form_validation->set_rules('id_kategori', 'id_kategori', 'required');
                $this->form_validation->set_rules('pembayaran', 'pembayaran', 'required');
                $this->form_validation->set_rules('harga', 'harga', 'required');
    
                if ($this->form_validation->run() == TRUE) {
    
                    if ($this->lembaga_model->update_pelatihan($id_pelatihan) == TRUE) {
                        $this->session->set_flashdata('notif', 'Ubah laporan berhasil!');
                        redirect('lembaga/pelatihan');
                    } else {
                        $this->session->set_flashdata('notif', 'Ubah laporan gagal!');
                        redirect('lembaga');
                    }
                } else {
                    $this->session->set_flashdata('notif', validation_errors());
                    redirect('lembaga');
                }
              }
        
        }
    
        public function tambah_data_pelatihan()
        {
            $id_lembaga = $this->session->userdata('id_lembaga');
            $data['data_kategori'] = $this->lembaga_model->get_kategori($id_lembaga);        
            $this->load->view('template/lembaga/header_lembaga');
            $this->load->view('template/lembaga/sidebar_lembaga');
            $this->load->view('lembaga/tambah_pelatihan',$data);
        }
        public function edit_data_pelatihan()
        {
            $id_kategori = $this->uri->segment(3);
            $id_lembaga = $this->session->userdata('id_lembaga');
            $data['list'] = $this->lembaga_model->get_pelatihan_by_id($id_kategori);
            $data['data_kategori'] = $this->lembaga_model->get_kategori($id_lembaga);     
            $this->load->view('template/lembaga/header_lembaga');
            $this->load->view('template/lembaga/sidebar_lembaga');
            $this->load->view('lembaga/edit_pelatihan',$data);
        }

        public function tambah_materi_by_id(){
            if($this->input->post('submit'))
			{
            $this->form_validation->set_rules('judul', 'judul', 'required');
            $this->form_validation->set_rules('bab', 'bab', 'required');
            $this->form_validation->set_rules('penjelasan', 'penjelasan', 'required');
            $this->form_validation->set_rules('id_pelatihan', 'id_pelatihan', 'required');


            if ($this->form_validation->run() == TRUE) {
                //konfigurasi upload file
                $config['upload_path'] 		= './upload/materi';
                $config['allowed_types']	= 'gif|jpg|png|pdf|docx';
                $config['max_size']			= 5000;
                $this->load->library('upload', $config);
    
                if ($this->upload->do_upload('file_materi')) {
    
                    if ($this->lembaga_model->tambah_materi($this->upload->data()) == TRUE) {
                        $this->session->set_flashdata('notif', 'Tambah Materi berhasil!');
                        redirect('lembaga/pelatihan','refresh');
                    } else {
                        $this->session->set_flashdata('notif', 'Tambah Materi gagal!');
                        redirect('lembaga/pelatihan','refresh');
                    }
                } else {
                    $this->session->set_flashdata('notif', $this->upload->display_errors());
                    redirect('lembaga/kategori','refresh');
                }

            }
            else{
                $this->session->set_flashdata('notif', validation_errors());
                redirect('lembaga/login_lembaga','refresh');
            }
        }
    }


    public function detail_materi_pelatihan()
    {
        $id_pelatihan = $this->uri->segment(3);
        $data['data_materi'] = $this->lembaga_model->detail_materi_pelatihan_by_id($id_pelatihan);
        $this->load->view('template/lembaga/header_lembaga');
        $this->load->view('template/lembaga/sidebar_lembaga');
        $this->load->view('lembaga/materi_pelatihan',$data);
    }


    
}




/* End of file admin.php */

?>