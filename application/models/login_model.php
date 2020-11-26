<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class login_model extends CI_Model {

        function login_admin($username, $password) {
            $this->db->select('id_admin, username, password, id_hak_akses');
            $this->db->from('admin');
            $this->db->where('username', $username);
            $this->db->where('password', $password);
            $this->db->limit(1);

            $query = $this->db->get();
            if($query->num_rows()==1) {
                return $query->result();
            }
            else {
                return false;
            }
        }

        function login_user($username, $password) {
            $this->db->select('id_user, username, password');
            $this->db->from('user');
            $this->db->where('username', $username);
            $this->db->where('password', $password);
            $this->db->limit(1);

            $query = $this->db->get();
            if($query->num_rows()==1) {
                return $query->result();
            }
            else {
                return false;
            }
        }

        function register_user() {
            $this->id_user = uniqid();
            $data = [
                "nama" => $this->input->post('nama', true),
                "no_telp" => $this->input->post('telepon', true),
                "alamat" => $this->input->post('alamat', true),
                "email" => $this->input->post('email', true),
                "username" => $this->input->post('username', true),
                "password" => $this->input->post('password', true),
                "foto" => $this->uploadFotoProfil()
            ];
            $this->db->insert('user', $data);
        }

        function uploadFotoProfil() {
            $config['upload_path'] = './upload/user/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['file_name'] = $this->id_user;
            $config['overwrite'] = true;

            $this->upload->initialize($config);
            $this->load->library('upload', $config);
            if($this->upload->do_upload('foto')) {
                return $this->upload->data("file_name");
            }
        }

        // function login_lembaga($username, $password) {
        //     $this->db->select('id_lembaga, username, password');
        //     $this->db->from('lembaga_pelatihan');
        //     $this->db->where('username', $username);
        //     $this->db->where('password', $password);
        //     $this->db->limit(1);

        //     $query = $this->db->get();
        //     if($query->num_rows()==1) {
        //         return $query->result();
        //     }
        //     else {
        //         return false;
        //     }
        // }

        public function login_lembaga()
        {
            $username  = $this->input->post('username');
            $password = $this->input->post('password');
    
            $query = $this->db->where('username', $username)
                ->where('password', $password)
                ->get('lembaga_pelatihan');
            if ($query->num_rows() > 0) {
                $user = array_shift($query->result_array());
                $data = array(
                    'id_lembaga' => $user['id_lembaga'],
                    'nama_lembaga' => $user['nama_lembaga'],
                    'username' => $user['username'],
                    'password' => $user['password'],
                    'logged_in' => TRUE
                );
    
                $this->session->set_userdata($data);
                return TRUE;
            } else {
                return FALSE;
            }
        }

        function register_lembaga($surat, $logo) {
            // $this->id_lembaga = uniqid();
            // $data = [
            //     "nama_lembaga" => $this->input->post('namalembaga', true),
            //     "penanggungjawab" => $this->input->post('penanggungjawab', true),
            //     "alamat" => $this->input->post('alamat', true),
            //     "no_ktp" => $this->input->post('noktp', true),
            //     "no_telp" => $this->input->post('telepon', true),
            //     "email" => $this->input->post('email', true),
            //     "deskripsi" => $this->input->post('deskripsi', true),
            //     "username" => $this->input->post('username', true),
            //     "password" => $this->input->post('password', true),
            //     "surat_lembaga" => $this->uploadSuratLembaga(),
            //     "logo_lembaga" => $this->uploadFotoLembaga()
            // ];
            // $this->db->insert('lembaga_pelatihan', $data);


            	# code...
			$data = array(
                'nama_lembaga' => $this->input->post('namalembaga'),
                'penanggungjawab' => $this->input->post('penanggungjawab'),
                'alamat' => $this->input->post('alamat'),
                'no_ktp' => $this->input->post('noktp'),
                'no_telp' => $this->input->post('telepon'),
                'email' => $this->input->post('email'),
                'deskripsi' => $this->input->post('deskripsi'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'surat_lembaga' => $surat['file_name'],
                'logo_lembaga' => $logo['file_name']
                
			);
			$this->db->insert('lembaga_pelatihan', $data);
			if ($this->db->affected_rows() > 0) {
				return TRUE;
			} else {
				return FALSE;
            }
            
        }

        function uploadSuratLembaga() {
            $config['upload_path'] = './upload/lembaga/surat_lembaga/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['file_name'] = $this->id_lembaga;
            $config['overwrite'] = true;

            $this->upload->initialize($config);
            $this->load->library('upload', $config);
            if($this->upload->do_upload('surat_lembaga')) {
                return $this->upload->data("file_name");
            }
        }

        function uploadFotoLembaga() {
            $config['upload_path'] = './upload/lembaga/foto_lembaga/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['file_name'] = $this->id_lembaga;
            $config['overwrite'] = true;

            $this->upload->initialize($config);
            $this->load->library('upload', $config);
            if($this->upload->do_upload('foto_lembaga')) {
                return $this->upload->data("file_name");
            }
        }
    }
?>