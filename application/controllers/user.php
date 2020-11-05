<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('user_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Beranda - idBisid';

        $data['ide_bisnis']=$this->user_model->tampilTopIdeBisnis();
        $data['pelatihan']=$this->user_model->tampilTopPelatihan();

        $this->load->view('template/user/header_user',$data);
        $this->load->view('user/index',$data);
        $this->load->view('template/user/footer_user');
    }

    // public function cari()
    // {
    //     $data['title'] = 'Pencarian - idBisid';
    //     $data['ide_bisnis']=$this->user_model->cariIdeBisnis();

    //     $this->load->view('template/user/header_user',$data);
    //     $this->load->view('user/cari',$data);
    //     $this->load->view('template/user/footer_user');

    //     redirect('cari','refresh');
    // }

    public function kontak() {
        $data['title'] = 'Kontak - idBisid';
        $this->load->view('template/user/header_user',$data);
        $this->load->view('user/kontak',$data);
        $this->load->view('template/user/footer_user');
    }

    public function tentang() {
        $data['title'] = 'Tentang - idBisid';
        $this->load->view('template/user/header_user',$data);
        $this->load->view('user/tentang',$data);
        $this->load->view('template/user/footer_user');
    }

    public function ide_bisnis() {
        $data['title'] = 'Ide Bisnis - idBisid';
        $data['ide_bisnis']=$this->user_model->tampilSemuaIdeBisnis();
        $data['kategori_ide']=$this->user_model->tampilKategoriIde();

        if ($this->input->post('judul') or $this->input->post('kategori') or $this->input->post('oleh')){
            $data['ide_bisnis']=$this->user_model->cariIdeBisnis();
        }

        $this->load->view('template/user/header_user',$data);
        $this->load->view('user/ide_bisnis',$data);
        $this->load->view('template/user/footer_user');
    }

    public function halaman_tambah_ide() {
            $this->load->view('template/user/header_user');
            $this->load->view('user/tambah_ide');
            $this->load->view('template/user/footer_user');
    }
    public function tambah_ide() {
        if ($this->session->userdata('logged_in') == TRUE) {
        // $this->load->library('form_validation');
        // $data['title'] = 'Tambahkan Ide - idBisid';
        $this->form_validation->set_rules('judul', 'judul', 'required');
        // $this->form_validation->set_rules('foto', 'foto', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('kategori', 'kategori', 'required');
        $this->form_validation->set_rules('iduser', 'iduser', 'required');
        // if ($this->form_validation->run()==FALSE){
        //     $this->load->view('template/user/header_user',$data);
        //     $this->load->view('user/tambah_ide',$data);
        //     $this->load->view('template/user/footer_user');
        // }else{
        //     $this->user_model->tambahIde();
        //     $this->session->set_flashdata('flash-data','ditambahkan');
        //     redirect('user','refresh');
        // }

        if ($this->form_validation->run() == TRUE) {
            //konfigurasi upload file
            $config['upload_path'] 		= './uploads/';
            $config['allowed_types']	= 'gif|jpg|png';
            $config['max_size']			= 2000;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {

                if ($this->user_model->tambahIde($this->upload->data()) == TRUE) {
                    $this->session->set_flashdata('notif', 'TambLaporan berhasil!');
                    redirect('user','refresh');
                } else {
                    $this->session->set_flashdata('notif', 'Tambah laporan gagal!');
                    $this->load->view('template/user/header_user');
                    $this->load->view('user/tambah_ide');
                    $this->load->view('template/user/footer_user');
                }
            } else {
                $this->session->set_flashdata('notif', $this->upload->display_errors());
                $this->load->view('template/user/header_user');
                $this->load->view('user/tambah_ide');
                $this->load->view('template/user/footer_user');
            }
        } 

        else{
            $this->session->set_flashdata('notif', validation_errors());
            $this->load->view('template/user/header_user',$data);
            $this->load->view('user/tambah_ide',$data);
            $this->load->view('template/user/footer_user');
        }
        } 
         else {
			redirect('login');
		}
    }

    public function detail_ide($id_idebisnis) {
        $data['title'] = 'Detail Ide - idBisid';
        $data['ide_bisnis']=$this->user_model->tampilDetailIdeBisnis($id_idebisnis);
        $this->load->view('template/user/header_user',$data);
        $this->load->view('user/detail_ide',$data);
        $this->load->view('template/user/footer_user');
    }

    public function daftar_pelatihan() {
        $data['title'] = 'Daftar Pelatihan - idBisid';
        $data['pelatihan']=$this->user_model->tampilSemuaPelatihan();

        if ($this->input->post('nama_pelatihan') or $this->input->post('nama_lembaga')){
            $data['pelatihan']=$this->user_model->cariPelatihan();
        }

        $this->load->view('template/user/header_user',$data);
        $this->load->view('user/daftar_pelatihan',$data);
        $this->load->view('template/user/footer_user');
    }

    public function detail_pelatihan($id_pelatihan) {
        $data['title'] = 'Daftar Pelatihan - idBisid';
        $data['pelatihan']=$this->user_model->tampilDetailPelatihan($id_pelatihan);
        $this->load->view('template/user/header_user',$data);
        $this->load->view('user/detail_pelatihan',$data);
        $this->load->view('template/user/footer_user');
    }

    public function materi_pelatihan() {
        $data['title'] = 'Materi - idBisid';
        $this->load->view('template/user/header_user',$data);
        $this->load->view('user/materi_pelatihan',$data);
        $this->load->view('template/user/footer_user');
    }

    public function detail_materi() {
        $data['title'] = 'Detail Materi - idBisid';
        $this->load->view('template/user/header_user',$data);
        $this->load->view('user/detail_materi',$data);
        $this->load->view('template/user/footer_user');
    }

    public function detail_lembaga() {
        $data['title'] = 'Detail Lembaga - idBisid';
        $this->load->view('template/user/header_user',$data);
        $this->load->view('user/detail_lembaga',$data);
        $this->load->view('template/user/footer_user');
    }

    public function daftar_lembaga() {
        $data['title'] = 'Daftar Lembaga - idBisid';
        $data['lembaga']=$this->user_model->tampilLembagaPelatihan();
        $this->load->view('template/user/header_user',$data);
        $this->load->view('user/daftar_lembaga',$data);
        $this->load->view('template/user/footer_user');
    }

    public function profil_lembaga() {
        $data['title'] = 'Detail Lembaga - idBisid';
        $this->load->view('template/user/header_user',$data);
        $this->load->view('user/profil_lembaga',$data);
        $this->load->view('template/user/footer_user');
    }

    // public function look_profil_user() {
    //     $data['title'] = 'Profil Kamu - idBisid';
    //     $this->load->view('template/user/header_profil_user',$data);
    //     $this->load->view('user/look_profil_user',$data);
    //     $this->load->view('template/user/footer_user');
    // }

    public function profil_user() {
        $data['title'] = 'Profil Kamu - idBisid';
        $this->load->view('template/user/header_profil_user',$data);
        $this->load->view('user/profil_user',$data);
        $this->load->view('template/user/footer_user');
    }

    public function ubah_profil_user() {
        $data['title'] = 'Update Profil Kamu - idBisid';
        $this->load->view('template/user/header_user',$data);
        $this->load->view('user/ubah_profil_user',$data);
        $this->load->view('template/user/footer_user');
    }

    public function detail_ide_user() {
        $data['title'] = 'Detail Ide Kamu - idBisid';
        $this->load->view('template/user/header_user',$data);
        $this->load->view('user/detail_ide_user',$data);
        $this->load->view('template/user/footer_user');
    }

    public function ubah_ide() {
        $data['title'] = 'Ubah Ide Kamu - idBisid';
        $this->load->view('template/user/header_user',$data);
        $this->load->view('user/ubah_ide',$data);
        $this->load->view('template/user/footer_user');
    }

    public function chatting() {
        $data['title'] = 'Chat - idBisid';
        $this->load->view('template/user/header_chat',$data);
        $this->load->view('user/chatting',$data);
    }

    public function penilaian() {
        $data['title'] = 'Rating & Review - idBisid';
        $this->load->view('template/user/header_rating',$data);
        $this->load->view('user/penilaian',$data);
        $this->load->view('template/user/footer_user');
    }

    public function konfirmasi() {
        $data['title'] = 'Konfirmasi Pembayaran - idBisid';
        $this->load->view('template/user/header_user',$data);
        $this->load->view('user/konfirmasi',$data);
        $this->load->view('template/user/footer_user');
    }

    public function invoice() {
        $data['title'] = 'Invoice - idBisid';
        $this->load->view('template/user/header_invoice',$data);
        $this->load->view('user/invoice',$data);
    }
}

/* End of file user.php */

?>