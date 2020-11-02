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
        $this->load->view('template/admin/header_admin',$data);
        $this->load->view('admin_ide/index',$data);
        // $this->load->view('template/admin/footer_admin');
    }
}

/* End of file admin.php */

?>