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
                <li class="active"><a href="<?=base_url()?>user/tentang">Tentang</a></li>
                <li><a href="<?=base_url()?>user/kontak">Kontak</a></li>
                <li>
                  <?php if ($this->session->userdata('status')=="login") {;?>
                      <a href="<?=base_url()?>user/profil_user/<?= $this->session->userdata('user')?>">Hi, <?php echo $this->session->userdata('user'); ?></a>
                  <?php }?>
                  <?php if ($this->session->userdata('status')!="login"){?>
                      <a href="<?=base_url()?>login/index"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2"></span>Login</span></a>
                  <?php }?>
                </li></ul>
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
        <h2 class="mb-0">- Tentang Kami -</h2>
        <p class="mb-0 unit-6"><a href="#">Beranda</a> <span class="sep">></span> <span>Tentang</span></p>
      </div>
    </div>

    <!-- TENTANG idBisid -->
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 mb-5" data-aos="fade">
            <img src="<?=base_url()?>/assets/user2/images/img_1.jpg" class="img-md-fluid" alt="Placeholder image">
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="bg-white pl-lg-5 pl-0  pb-lg-5 pb-0">
            <h2 class="font-weight-bold text-black" data-aos="fade">- Tentang Kami -</h2>
            <p><br><strong>idBisId</strong> merupakan sebuah website yang menjadi media antara lembaga pelatihan virtual dengan orang-orang yang mebutuhkan ide bisnis maupun orang-orang yang ingin meningkatkan skill mereka. Website ini akan menyediakan ide-ide dan beberapa pilihan pelatihan kerja bagi para pencari kerja. Nantinya pelatihan akan dilakukan secara online dengan batuan lembaga pelatihan yang terpecaya. Pelatihan secara online ini bisa diakses dimana saja dan kapan saja.</p>
            <ul class="site-block-check">
              <li>Ide Bisnis</li>
              <li>Pelatihan Kerja</li>
            </ul>
            </div>
          </div>
        </div>
        <hr>

        <!-- NAMA TIM idBisid -->
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-bold text-black" data-aos="fade"><br>- Tim idBisid -</h2>
            <p><br>Tim inti pada pengembangan sistem ini terdiri dari lima orang yang solid ihuy, yaitu:</p>
          </div>
        </div>
        <div class="row top-destination" style="margin-left:120px;">
          <div class="col-lg-2 col-md-4 col-sm-6 col-12" data-aos="fade">
            <a href="#" class="place">
              <img src="<?=base_url()?>/assets/user2/images/person_1.jpg" alt="Image placeholder">
              <h2>Allisa Velia R. J.</h2>
              <p>Project Manager</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12" data-aos="fade">
            <a href="#" class="place">
              <img src="<?=base_url()?>/assets/user2/images/person_2.jpg" alt="Image placeholder">
              <h2>Fatihana Nur Salsabillah</h2>
              <p>Analist System</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12" data-aos="fade">
            <a href="#" class="place">
              <img src="<?=base_url()?>/assets/user2/images/person_3.jpg" alt="Image placeholder">
              <h2>Riskia Dinda Ramadina</h2>
              <p>Programmer</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12" data-aos="fade">
            <a href="#" class="place">
              <img src="<?=base_url()?>/assets/user2/images/person_4.jpg" alt="Image placeholder">
              <h2>Rizky Aulia F.</h2>
              <p>Programmer</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12" data-aos="fade">
            <a href="#" class="place">
              <img src="<?=base_url()?>/assets/user2/images/person_1.jpg" alt="Image placeholder">
              <h2>Sheva Putri Wahidah</h2>
              <p>Product Designer</p>
            </a>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>