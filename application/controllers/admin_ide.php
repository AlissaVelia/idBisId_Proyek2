<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class admin_ide extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('adminide_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Dashboard - idBisid';
        $this->load->view('template/admin_ide/header_adminide',$data);
        $this->load->view('template/admin_ide/sidebar_adminide');
        $this->load->view('admin_ide/index',$data);
        // $this->load->view('template/admin/footer_admin');
    }
    public function ide_bisnis()
    {
        $data['title'] = 'Dashboard - idBisid';
        $this->load->view('template/admin_ide/header_adminide',$data);
        $this->load->view('template/admin_ide/sidebar_adminide',$data);
        $this->load->view('admin_ide/ide_bisnis',$data);
        // $this->load->view('template/admin/footer_admin');
    }
    public function grafik_idbis()
    {
        $data['title'] = 'Dashboard - idBisid';
        $this->load->view('template/admin_ide/header_adminide',$data);
        $this->load->view('template/admin_ide/sidebar_adminide',$data);
        $this->load->view('admin_ide/grafik_idbis',$data);
        // $this->load->view('template/admin/footer_admin');
    }
}

/* End of file admin.php */

?>