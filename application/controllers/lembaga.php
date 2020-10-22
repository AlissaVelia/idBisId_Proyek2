<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class lembaga extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('admin_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Dashboard - idBisid';
        $this->load->view('template/lembaga/header_lembaga',$data);
        $this->load->view('lembaga/index',$data);
        $this->load->view('template/lembaga/footer_lembaga');
    }
    public function data_lembaga()
    {
        $data['title'] = 'Dashboard - idBisid';
        $this->load->view('template/lembaga/header_lembaga',$data);
        $this->load->view('lembaga/data_lembaga',$data);
        $this->load->view('template/lembaga/footer_lembaga');
    }
    public function kategori_pelatihan()
    {
        $data['title'] = 'Dashboard - idBisid';
        $this->load->view('template/lembaga/header_lembaga',$data);
        $this->load->view('lembaga/kategori_pelatihan',$data);
        $this->load->view('template/lembaga/footer_lembaga');
    }
    public function materi_pelatihan()
    {
        $data['title'] = 'Dashboard - idBisid';
        $this->load->view('template/lembaga/header_lembaga',$data);
        $this->load->view('lembaga/materi_pelatihan',$data);
        $this->load->view('template/lembaga/footer_lembaga');
    }
    public function edit_data()
    {
        $data['title'] = 'Dashboard - idBisid';
        $this->load->view('template/lembaga/header_lembaga',$data);
        $this->load->view('lembaga/edit_datalembaga',$data);
        $this->load->view('template/lembaga/footer_lembaga');
    }
    public function tambah_kategori()
    {
        $data['title'] = 'Dashboard - idBisid';
        $this->load->view('template/lembaga/header_lembaga',$data);
        $this->load->view('lembaga/tambah_kategori',$data);
        $this->load->view('template/lembaga/footer_lembaga');
    }
    public function tambah_materi()
    {
        $data['title'] = 'Dashboard - idBisid';
        $this->load->view('template/lembaga/header_lembaga',$data);
        $this->load->view('lembaga/tambah_materi',$data);
        $this->load->view('template/lembaga/footer_lembaga');
    }
}

/* End of file admin.php */

?>