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

        public function proses_login_user() {
            $username = htmlspecialchars($this->input->post('unameuser'));
            $password = htmlspecialchars($this->input->post('pwduser'));
            $cek_login_user = $this->login_model->login_user($username, $password);

            if($cek_login_user) {
                foreach ($cek_login_user as $row);
                // untuk menampilkan username user yang sedang login
                $this->session->set_userdata('user', $row->username);
                $this->session->set_userdata('id_user', $row->id_user);
                $this->session->set_userdata('status',"login");
                redirect('user');
            }
            else {
                $data['pesan'] = 'Username dan Password Anda Salah';
                $data['title'] = 'Login User - idBisid';
                $this->load->view('template/login/header_login',$data);
                $this->load->view('login/index',$data);
                $this->load->view('template/login/footer_login');
            }


        }

        public function logout()
        {
            // hancurkan semua sesi
            $this->session->sess_destroy();
            redirect('user');
        }

        public function login_admin() {
            $data['title'] = 'Login Admin - idBisis';
            $this->load->view('template/login/header_login',$data);
            $this->load->view('login/login_admin',$data);
            $this->load->view('template/login/footer_login');
        }

        public function proses_login_admin() {
            $username = htmlspecialchars($this->input->post('unameadmin'));
            $password = htmlspecialchars($this->input->post('pwdadmin'));
            $cek_login_admin = $this->login_model->login_admin($username, $password);

            if($cek_login_admin) {
                foreach ($cek_login_admin as $row);
                // untuk menampilkan username admin yang sedang login
                $this->session->set_userdata('admin', $row->username);
                $this->session->set_userdata('id_admin', $row->id_admin);
                $this->session->set_userdata('id_hak_akses', $row->id_hak_akses);

                if($this->session->userdata('id_hak_akses') == 1) {
                    redirect('admin_ide');
                }
                else if($this->session->userdata('id_hak_akses') == 2) {
                    redirect('admin_lembaga');
                }
            }
            else {
                $data['pesan'] = 'Username dan Password Anda Salah';
                $data['title'] = 'Login Admin - idBisid';
                $this->load->view('template/login/header_login',$data);
                $this->load->view('login/login_admin',$data);
                $this->load->view('template/login/footer_login');
            }
        }

        public function login_lembaga() {
            $data['title'] = 'Login Lembaga Pelatihan - idBisis';
            $this->load->view('template/login/header_login',$data);
            $this->load->view('login/login_lembaga',$data);
            $this->load->view('template/login/footer_login');
        }

        public function proses_login_lembaga() {
            // $username = htmlspecialchars($this->input->post('unamelembaga'));
            // $password = htmlspecialchars($this->input->post('pwdlembaga'));
            // $cek_login_lembaga = $this->login_model->login_lembaga($username, $password);

            // if($cek_login_lembaga) {
            //     foreach (cek_login_lembaga as $row);
            //     // untuk menampilkan nama lembaga yang sedang login
            //     $this->session->set_userdata('nama_lembaga', $row->nama_lembaga);
            //     $this->session->set_userdata('id_lembaga', $row->id_lembaga);
                
            //     $this->session->set_userdata('status',"login");
            //     redirect('lembaga');
            // }
            // else {
            //     $data['pesan'] = 'Username dan Password Anda Salah';
            //     $data['title'] = 'Login Lembaga Pelatihan - idBisid';
            //     $this->load->view('template/login/header_login',$data);
            //     $this->load->view('login/login_lembaga',$data);
            //     $this->load->view('template/login/footer_login');
            // }

            
                
		    if ($this->input->post('submit')) {

			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');

			if ($this->form_validation->run() == TRUE) {

				if ($this->login_model->login_lembaga() == TRUE) {
					redirect('lembaga');
				} else {
					$data['notif'] = 'Login gagal';
					redirect('login/login_lembaga');
				}
			} else {
				$data['notif'] = validation_errors();
				redirect('login/login_lembaga', $data);
			}
		}
        }

        public function register_user() {
            $data['title'] = 'Register - idBisid';
            $this->load->view('template/login/header_login',$data);
            $this->load->view('login/register_user',$data);
            $this->load->view('template/login/footer_login');
        }

        public function proses_register_user() {
            $data['title'] = 'Register User - idBisid';

            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('telepon', 'Telepon', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run() == FALSE) {
                $this->load->view('template/login/header_login',$data);
                $this->load->view('login/register_user',$data);
                $this->load->view('template/login/footer_login');
            }
            else {
                $this->login_model->register_user(); 
                redirect('login/index','refresh');
            }
        }

        public function register_lembaga() {
            $data['title'] = 'Register Lembaga Pelatihan - idBisid';
            $this->load->view('template/login/header_login',$data);
            $this->load->view('login/register_lembaga',$data);
            $this->load->view('template/login/footer_login');
        }

        public function proses_register_lembaga() {
            // if($this->input->post('submit'))
			// {
            $data['title'] = 'Register Lembaga Pelatihan - idBisid';

            $this->form_validation->set_rules('nama_lembaga', 'Nama Lembaga', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('no_telp', 'Telepon', 'required');
            $this->form_validation->set_rules('penanggungjawab', 'Penanggungjawab', 'required');
            $this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('deskripsi', 'Deskripsi Lembaga', 'required');

        //     if ($this->form_validation->run() == FALSE) {
        //         $this->load->view('template/login/header_login',$data);
        //         $this->load->view('login/register_lembaga',$data);
        //         $this->load->view('template/login/footer_login');
        //     } else {
        //         $this->login_model->register_lembaga();
        //         redirect('login/login_lembaga','refresh');
        //     }
        //  }

            if ($this->form_validation->run() == TRUE) {
                //konfigurasi upload file
                $config['upload_path'] 		= './upload/lembaga';
                $config['allowed_types']	= 'gif|jpg|png|pdf|docx';
                $config['max_size']			= 5000;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('surat_lembaga', 'logo_lembaga')) {

                    if ($this->login_model->register_lembaga($this->upload->data(), $this->upload->data()) == TRUE) {
                        $this->session->set_flashdata('notif', 'Registrasi berhasil!');
                        redirect('login/login_lembaga','refresh');
                    } else {
                        $this->session->set_flashdata('notif', 'Registrasi gagal!');
                        redirect('lembaga/register_lembaga','refresh');
                    }
                } else {
                    $this->session->set_flashdata('notif', $this->upload->display_errors());
                    redirect('login/register_lembaga','refresh');
                }

            } 
                else{
                    $this->session->set_flashdata('notif', validation_errors());
                    redirect('login/register_lembaga','refresh');
                }
            // }

        }

    }
?>