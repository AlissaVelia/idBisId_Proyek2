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
                <li><a href="<?=base_url()?>/user/index">Beranda</a></li>
                <li>
                  <a href="<?=base_url()?>/user/ide_bisnis">Ide Bisnis</a>
                </li>
                <li><a href="<?=base_url()?>/user/daftar_pelatihan">Pelatihan</a></li>
                <li><a href="<?=base_url()?>/user/tentang">Tentang</a></li>
                <li><a href="<?=base_url()?>/user/kontak">Kontak</a></li>
                <li><a href="<?=base_url()?>/login/index"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2"></span>Login</span></a></li>
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
        <h2 class="mb-0">- Konfirmasi Data Diri Anda -</h2>
        <p class="mb-0 unit-6"><a href="<?=base_url()?>/user/index">Beranda</a> <span class="sep">></span> <a href="<?=base_url()?>/user/daftar_pelatihan">Daftar Pelatihan</a> <span class="sep">></span> <a href="<?=base_url()?>/user/detail_pelatihan">Detail Pelatihan</a> <span class="sep">></span> <span>Konfirmasi Data Diri</span></p>
      </div>
    </div>

    <!-- FORM PENAMBAHAN -->
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 mb-5">
            <form action="#" class="p-5 bg-white" method="post" enctype="multipart/form-data">
            <h4><strong><center>- Konfirmasi Data Diri Anda -</center></strong></h4><br>
            <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Nama Pelatihan</label>
                  <input type="text" id="fullname" class="form-control" value="Desain Grafis dengan menggunakan Adobe Photoshop CS6" disabled>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Nama Lembaga Pelatihan</label>
                  <input type="text" id="fullname" class="form-control" value="Dinas Komunikasi dan Informatika Kota Malang" disabled>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Tanggal dan Waktu Pemesanan</label>
                  <input type="text" id="fullname" class="form-control" value="21 Oktober 2020 20:05 WIB" disabled>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Nama</label>
                  <input type="text" id="fullname" class="form-control">
                  <p><i>Pastikan isi data dengan benar. Nama akan dicantumkan dalam sertifikat</i></p>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Email Aktif</label>
                  <input type="email" id="fullname" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Telepon Aktif</label>
                  <input type="text" id="fullname" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <br><center><button class="btn btn-primary py-2" onclick="konfirmasi()">Konfirmasi</btton></center>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>