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

    public function kontak() {
        $data['title'] = 'Kontak - idBisid';
        $this->load->view('template/user/header_user',$data);
        $this->load->view('user/kontak',$data);
        $this->load->view('template/user/footer_user');

        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('from', 'from', 'required');
        $this->form_validation->set_rules('subject', 'subject', 'required');
        $this->form_validation->set_rules('message', 'message', 'required');

        if ($this->form_validation->run() == TRUE){
            // $this->load->helper(array('form', 'url'));
            $this->load->library('email');

            //konfigurasi email
            $config = array();
            $config['charset'] = 'utf-8';
            $config['useragent'] = 'idBisId'; //bebas sesuai keinginan kamu
            $config['protocol']= "smtp";
            $config['mailtype']= "html";
            $config['smtp_host']= "ssl://smtp.gmail.com";
            $config['smtp_port']= "465";
            $config['smtp_timeout']= "5";
            $config['smtp_user']= "idbisid97@gmail.com"; //isi dengan email anda
            $config['smtp_pass']= "idbis1831710"; // isi dengan password dari email anda
            $config['crlf']="\r\n";
            $config['newline']="\r\n";

            $config['wordwrap'] = TRUE;

            //memanggil library email dan set konfigurasi untuk pengiriman email

            $this->email->initialize($config);
            //konfigurasi pengiriman kotak di view ke pengiriman email di gmail
            $this->email->from($this->input->post('from'));
            $this->email->to('idbisid97@gmail.com');
            $this->email->subject($this->input->post('subject'));
            $this->email->message($this->input->post('message'));

            // proses uploads

            // $this->upload->initialize(array(
            // "upload_path" => "./uploads/",
            // "allowed_types" => "*"
            // ));
            $config['upload_path'] 		= './uploads/';
            $config['allowed_types']	= '*';
            $this->load->library('upload', $config);

            // pernyataan jika pengiriman berhasil atau tidak

            if($this->email->send())
            {
                $this->session->set_flashdata('notif', 'Email berhasil dikirim');
                redirect('user/kontak', 'refresh');
            }else
            {
                $this->session->set_flashdata('notif', 'Email gagal dikirim');
                redirect('user');
            }
        }
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
        $data['title'] = 'Tambah Ide Bisnis - idBisid';
        $this->load->view('template/user/header_user');
        $this->load->view('user/tambah_ide');
        $this->load->view('template/user/footer_user');
    }
    public function tambah_ide() {
        if ($this->session->userdata('status') == "login") {
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
        $data['fav']=$this->user_model->cekFav($id_idebisnis);
        // echo "'<script>console.log(\"$x\")</script>'";
        // if (!$this->user_model->cekFav($id_idebisnis)) {
        //     $fav='0';
        // }else {
        //     $fav='1';
        // }
        $this->load->view('template/user/header_user',$data);
        $this->load->view('user/detail_ide',$data);
        $this->load->view('template/user/footer_user');
    }

    public function sukaiIde($id_idebisnis, $suka)
    {
        if ($this->session->userdata('status') == "login") {
            $this->user_model->suka($id_idebisnis, $suka);
            redirect('user/detail_ide/'.$id_idebisnis, 'refresh');
        }else {
            # code...
            redirect('login');
        }
    }

    public function favoritIde($id_idebisnis)
    {
        if ($this->session->userdata('status') == "login") {
            $this->user_model->fav($id_idebisnis);
            redirect('user/detail_ide/'.$id_idebisnis, 'refresh');
        }else {
            # code...
            redirect('login');
        }
    }

    public function hapusFav($id_idebisnis)
    {
        if ($this->session->userdata('status') == "login") {
            $this->user_model->hapusFav($id_idebisnis);
            redirect('user/detail_ide/'.$id_idebisnis, 'refresh');
        }else {
            # code...
            redirect('login');
        }
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
        $data['user_pelatihan']=$this->user_model->tampilDetailUserPelatihan($id_pelatihan);
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

    public function profil_user($username) {
        $data['title'] = 'Profil Pengguna - idBisid';

        $data['user']=$this->user_model->tampilProfilUser($username);
        $data['ide_bisnis']=$this->user_model->tampilIdbisByUser($username);
        $data['pelatihan']=$this->user_model->tampilPelatihanUser($username);
        $data['ide_fav']=$this->user_model->tampilIdbisFav($username);
        
        $this->load->view('template/user/header_profil_user',$data);
        $this->load->view('user/profil_user',$data);
        $this->load->view('template/user/footer_user');
    }

    public function ubah_profil_user($oleh, $id_user) {
        $data['title'] = 'Update Profil Kamu - idBisid';
        $data['user']=$this->user_model->tampilDetailProfilUser();
        
        if ($this->session->userdata('user') == $oleh) {
            $this->form_validation->set_rules('nama', 'nama', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('telepon', 'telepon', 'required');
            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('pswd', 'pswd', 'required');
    
            if ($this->form_validation->run() == TRUE) {
                //konfigurasi upload file
                $config['upload_path'] 		= './upload/user';
                $config['allowed_types']	= 'gif|jpg|png';
                $config['max_size']			= 2000;
                $this->load->library('upload', $config);
    
                if ($this->upload->do_upload('foto')) {
    
                    if ($this->user_model->editProfilUser($id_user, $this->upload->data()) == TRUE) {
                        $this->session->set_flashdata('notif', 'Edit berhasil!');
                        redirect('user/profil_user/'.$this->input->post('username') ,'refresh');
                    } else {
                        $this->session->set_flashdata('notif', 'Edit gagal!');
                        $this->load->view('template/user/header_user',$data);
                        $this->load->view('user/ubah_profil_user',$data);
                        $this->load->view('template/user/footer_user');
                    }
                } else {
                    $this->session->set_flashdata('notif', $this->upload->display_errors());
                    $this->load->view('template/user/header_user',$data);
                    $this->load->view('user/ubah_profil_user',$data);
                    $this->load->view('template/user/footer_user');
                }
            } 
    
            else{
                $this->session->set_flashdata('notif', validation_errors());
                $this->load->view('template/user/header_user',$data);
                $this->load->view('user/ubah_profil_user',$data);
                $this->load->view('template/user/footer_user');
            }
        } else {
            redirect('login');
        }
    }

    public function detail_ide_user($oleh, $id_idebisnis) {
        $data['title'] = 'Detail Ide Kamu - idBisid';
        // $data['ide_bisnis']=$this->user_model->tampilDetailIdeBisnis($id_idebisnis);
        
        if ($this->session->userdata('user') == $oleh) {
            # code...
            $data['ide_bisnis']=$this->user_model->tampilDetailIdeBisnisByUser($oleh, $id_idebisnis);

            $this->load->view('template/user/header_user',$data);
            $this->load->view('user/detail_ide_user',$data);
            $this->load->view('template/user/footer_user');
        }else {
            redirect('user/detail_ide/'.$id_idebisnis);
        }
        
        
    }

    public function ubah_ide($oleh, $id_idebisnis) {
        $data['title'] = 'Ubah Ide Kamu - idBisid';
        if ($this->session->userdata('user') == $oleh) {
            $data['ide_bisnis']=$this->user_model->tampilDetailIdeBisnisByUser($oleh, $id_idebisnis);
            $this->form_validation->set_rules('judul', 'judul', 'required');
            $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
    
            if ($this->form_validation->run() == TRUE) {
                //konfigurasi upload file
                $config['upload_path'] 		= './uploads/';
                $config['allowed_types']	= 'gif|jpg|png';
                $config['max_size']			= 2000;
                $this->load->library('upload', $config);
    
                if ($this->upload->do_upload('foto')) {
    
                    if ($this->user_model->editIde($id_idebisnis, $this->upload->data()) == TRUE) {
                        $this->session->set_flashdata('notif', 'Edit berhasil!');
                        redirect('user/profil_user/'.$oleh ,'refresh');
                    } else {
                        $this->session->set_flashdata('notif', 'Edit gagal!');
                        $this->load->view('template/user/header_user',$data);
                        $this->load->view('user/ubah_ide',$data);
                        $this->load->view('template/user/footer_user');
                    }
                } else {
                    $this->session->set_flashdata('notif', $this->upload->display_errors());
                    $this->load->view('template/user/header_user',$data);
                    $this->load->view('user/ubah_ide', $data);
                    $this->load->view('template/user/footer_user');
                }
            } 
    
            else{
                $this->session->set_flashdata('notif', validation_errors());
                $this->load->view('template/user/header_user',$data);
                $this->load->view('user/ubah_ide',$data);
                $this->load->view('template/user/footer_user');
            }
        } else {
            redirect('login');
        }
    }

    public function chatting() {
        $data['title'] = 'Chat - idBisid';
        $this->load->view('template/user/header_chat',$data);
        $this->load->view('user/chatting',$data);
    }

 
    public function penilaian() {
        $data['title'] = 'Rating & Review - idBisid';
        
        $data['pelatihan']=$this->user_model->tampilDetailPelatihan($this->uri->segment(3)); 
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

    

    public function tambah_user_pelatihan() {
        
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('id_user', 'id_user', 'required');
            $this->form_validation->set_rules('id_pelatihan', 'id_pelatihan', 'required');
            $this->form_validation->set_rules('status_pembayaran', 'status_pembayaran', 'required');
            $this->form_validation->set_rules('status_pelatihan', 'status_pelatihan', 'required');
            $this->form_validation->set_rules('bukti_pembayaran', 'bukti_pembayaran', 'required');

            if ($this->form_validation->run()==TRUE){
                $this->user_model->tambah_user_pelatihan();
                $this->session->set_flashdata('flash-data','ditambahkan');
                redirect('user/daftar_pelatihan','refresh');
                
            }else{
                redirect('user/daftar_pelatihan','refresh');
            }
       
    }

    public function detail_user_pelatihan($id_pelatihan) {
        $data['title'] = 'Daftar Lembaga - idBisid';
        $data['materi']=$this->user_model->tampilMateriPelatihanById($id_pelatihan);

        $this->load->view('template/user/header_user',$data);
        $this->load->view('user/detail_user_pelatihan',$data);
        $this->load->view('template/user/footer_user');
    } 
    public function tambah_penilaian() {
        if($this->input->post('submit'))
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('id_user', 'id_user', 'required');
            $this->form_validation->set_rules('id_lembaga', 'id_lembaga', 'required');
            $this->form_validation->set_rules('rating', 'rating', 'required');
            $this->form_validation->set_rules('review', 'review', 'required');

            if ($this->form_validation->run()==TRUE){
                redirect('user/daftar_pelatihan','refresh');
                
            }else{
                redirect('user/index', 'refresh');
            }
        }else{
            
                $this->user_model->tambah_penilaian();
            redirect('user/daftar_lembaga', 'refresh');
        }

   
}

    
   
}




/* End of file user.php */

?>