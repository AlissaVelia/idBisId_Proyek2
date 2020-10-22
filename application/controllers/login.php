<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class login extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->model('login_model');
            $this->load->library('form_validation');
        }

        public function index() {
            $data['title'] = 'Login - idBisis';
            $this->load->view('template/login/header_login',$data);
            $this->load->view('login/index',$data);
            $this->load->view('template/login/footer_login');
        }

        public function register() {
            $data['title'] = 'Register - idBisid';
            $this->load->view('template/login/header_login',$data);
            $this->load->view('login/register',$data);
            $this->load->view('template/login/footer_login');
        }

        // public function proses_login() {
        //     $username=htmlspecialchars($this->input->post('uname1'));
        //     $password=htmlspecialchars($this->input->post('pwd1'));
            
        //     $cek_login = $this->login_model->login($username,$password);

        //     if($cek_login) {
        //         foreach ($cek_login as $row);
        //         $this->session->set_userdata('admin', $row->username);
        //         $this->session->set_userdata('id_admin', $row->id_admin);
        //         $this->session->set_userdata('level', $row->level);

        //         if($this->session->userdata('level') == 1) {
        //             redirect('administrator');
        //         }
        //         else if($this->session->userdata('level') == 2) {
        //             redirect('adminukm');
        //         }
        //     }
        //     else {
        //         $data['pesan'] = 'Username dan Password Anda Salah';
        //         $data['title'] = 'Login Admin';
        //         $this->load->view('template/login/header_login', $data);
        //         $this->load->view('login/index', $data);
        //         $this->load->view('template/login/footer_login');
        //     }
        // } 
    }
?>