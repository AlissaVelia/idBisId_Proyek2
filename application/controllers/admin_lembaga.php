<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class admin_lembaga extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('adminlembaga_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Dashboard - idBisid';
        $this->load->view('template/admin_lembaga/header_adminlembaga',$data);
        $this->load->view('template/admin_lembaga/sidebar_adminlembaga',$data);
        $this->load->view('admin_lembaga/index',$data);
        // $this->load->view('template/admin/footer_admin');
    }
    public function data_lembaga()
    {
        $data['title'] = 'Dashboard - idBisid';
        $this->load->view('template/admin_lembaga/header_adminlembaga',$data);
        $this->load->view('template/admin_lembaga/sidebar_adminlembaga',$data);
        $this->load->view('admin_lembaga/data_lembaga',$data);
        // $this->load->view('template/admin/footer_admin');
    }
    public function lembaga_favorite()
    {
        $data['title'] = 'Dashboard - idBisid';
        $this->load->view('template/admin_lembaga/header_adminlembaga',$data);
        $this->load->view('template/admin_lembaga/sidebar_adminlembaga',$data);
        $this->load->view('admin_lembaga/lembaga_favorite',$data);
        // $this->load->view('template/admin/footer_admin');
    }
    public function grafik_lembaga()
    {
        $data['title'] = 'Dashboard - idBisid';
        $this->load->view('template/admin_lembaga/header_adminlembaga',$data);
        $this->load->view('template/admin_lembaga/sidebar_adminlembaga',$data);
        $this->load->view('admin_lembaga/grafik_lembaga',$data);
        // $this->load->view('template/admin/footer_admin');
    }

}

/* End of file admin_lembaga.php */

?>