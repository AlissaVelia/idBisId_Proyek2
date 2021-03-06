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
                      <a href="<?=base_url()?>user/profil_user/<?= $this->session->userdata('user')?>">Hi, <?php echo $this->session->userdata('user'); ?></a>
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

    <!-- GAMBAR DETAIL IDE -->
    <div class="unit-5 overlay" style="background-image: url(<?php echo base_url('assets/user2/images/hero_bg_2.jpg')?>);">
      <div class="container text-center">
        <h2 class="mb-0">Detail Ide Bisnis</h2>
        <p class="mb-0 unit-6"><a href="<?=base_url()?>/user/index">Beranda</a> <span class="sep">></span> <span>Detail Ide Bisnis</span></p>
      </div>
    </div>

    <!-- ISI DETAIL IDE -->
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 mb-5">
            <div class="p-5 bg-white">
              <!-- JUDUL -->
              <div class="mb-4 mb-md-5 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4"><?= $ide_bisnis['judul'];?></h2>
                 <div class="badge-wrap">
                  <span class="bg-danger text-white badge py-2 px-4"><?= $ide_bisnis['nama_kategori'];?></span>
                 </div>
               </div>
               <!-- <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">New York Times</a></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span>New York City, USA</span></div>
               </div> -->
              </div>

              <!-- GAMBAR IDE -->
              <div class="col-lg-6 col-md-12 mb-5" data-aos="fade" style="padding-left:100px;">
            <img src="<?=base_url()?>/uploads/<?= $ide_bisnis['foto'];?>" class="img-md-fluid" alt="Placeholder image">
          </div>

          <!-- DESKRIPSI -->
              <p><?= $ide_bisnis['deskripsi'];?></p>
              
              <div class="ml-auto">
                <a href="<?=base_url()?>/user/ubah_ide/<?= $this->session->userdata('user')?>/<?= $ide_bisnis['id_idebisnis'];?>" class="btn btn-primary py-2">Ubah</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>