<?php 
  if ($this->session->userdata('status')=="login") {
    # code...
    $id = $this->session->userdata('id_user');
  } else if ($this->session->userdata('status')!="login") {
    # code...
    redirect('login','refresh');
  ?>
    
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Harap Login</strong> <?= $this->session->flashdata('flash-data');?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
    </div>
<?php }?>

<body>
  <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>    
    
    <header class="site-navbar py-1" role="banner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="<?=base_url()?>/user/index" class="text-black h2 mb-0">- id<strong>Bis</strong>id -</a></h1>
          </div>
          <!-- MENU ATAS -->
          <div class="col-10 col-xl-10 d-none d-xl-block">
            <nav class="site-navigation text-right" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="<?=base_url()?>user/index">Beranda</a></li>
                <li>
                  <a href="<?=base_url()?>user/ide_bisnis">Ide Bisnis</a>
                </li>
                <li><a href="<?=base_url()?>user/daftar_pelatihan">Pelatihan</a></li>
                <li><a href="<?=base_url()?>user/tentang">Tentang</a></li>
                <li><a href="<?=base_url()?>user/kontak">Kontak</a></li>
                <li>
                  <?php if ($this->session->userdata('status')=="login") {;?>
                      <a href="<?=base_url()?>user/profil_user/<?php echo $this->session->userdata('user'); ?>">Hi, <?php echo $this->session->userdata('user'); ?></a>
                  <?php }?>
                  <?php if ($this->session->userdata('status')!="login"){?>
                      <a href="<?=base_url()?>login/index"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2"></span>Login</span></a>
                  <?php }?>
                </li>
                </ul>
            </nav>
          </div>
          <div class="col-6 col-xl-2 text-right d-block">
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
          </div>
        </div>
      </div>
    </header>

    <!-- GAMBAR ATAS -->
    <div class="unit-5 overlay" style="background-image: url(<?php echo base_url('assets/user2/images/hero_bg_2.jpg')?>);">
      <div class="container text-center">
        <h2 class="mb-0">- Tambahkan Ide Bisnis Anda -</h2>
        <p class="mb-0 unit-6"><a href="#">Beranda</a> <span class="sep">></span> <span>Tambah Ide Bisnis</span></p>
      </div>
    </div>

    <!-- FORM PENAMBAHAN -->
    <?php if(validation_errors()) { ?>
      <div class="alert alert-danger" role="alert">
        <?= validation_errors() ?>
      </div>
    <?php } ?>
    <form action="<?php echo base_url('index.php/user/tambah_ide'); ?>" method="post" enctype="multipart/form-data">
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 mb-5">
            <h4><strong><center>- Ide Bisnis Anda -</center></strong></h4><br>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" form="judul">Judul Ide Bisnis</label>
                  <input name="judul" type="text" id="judul" class="form-control">
                </div>
              </div>
              <div class="row form-group mb-5">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" form="foto">Gambar : </label>
                  <input type="file" name="foto" class="form-control">
                  <p>Format .jpg dan .png Maks. Ukuran : 500KB</p>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" form="deskripsi">Deskripsi Ide Bisnis</label>
                  <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="5"></textarea>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" form="kategori">Kategori Ide Bisnis</label>
                          <span class="icon-keyboard_arrow_down arrow-down"></span>
                            <select name="kategori" id="kategori" class="form-control"> PILIH KATEGORI
                            <option value="1" >Penjualan</option>
                            <option value="2">Pertanian</option>
                            <option value="3">Peternakan</option>
                            <option value="4">Travelling</option>
                            <option value="5">Kuliner</option>
                            <option value="6">Lain</option>
                          </select>
                </div>
                <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <input name="iduser" type="hidden" id="iduser" class="form-control" value="<?=$id?>">
                </div>
              </div>
                <div class="col-md-12">
                  <center><input type="submit" value="Kirim Ide" class="btn btn-primary  py-2 px-5"></center>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    </form>