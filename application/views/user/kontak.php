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
                <li class="active"><a href="<?=base_url()?>/user/kontak">Kontak</a></li>
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

    <!-- GAMBAR KONTAK KAMI -->
    <div class="unit-5 overlay" style="background-image: url(<?php echo base_url('assets/user2/images/hero_bg_1.jpg')?>);">
      <div class="container text-center">
        <h2 class="mb-0">- Kontak Kami -</h2>
        <p class="mb-0 unit-6"><a href="#">Beranda</a> <span class="sep">></span> <span>Kontak</span></p>
      </div>
    </div>

    <!-- FORM KONTAK KAMI -->
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8 mb-5">
            <form action="#" class="p-5 bg-white">
              <h4><strong><center>- Kontak Kami -</center></strong></h4>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Nama Lengkap</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Masukkan Nama Lengkap Anda">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" class="form-control" placeholder="Masukkan Alamat Email Anda">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Judul</label>
                  <input type="text" id="subject" class="form-control" placeholder="Masukkan Judul Anda">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Pesan</label> 
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Tulis Pesan Disini"></textarea>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Kirim" class="btn btn-primary  py-2 px-4">
                </div>
              </div>
            </form>
          </div>

        <!-- INFO KONTAK -->
          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">- Informasi Kontak -</h3>
              <p class="mb-0 font-weight-bold">Alamat</p>
              <p class="mb-4">Jl. Soekarno-Hatta No. 9, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141</p>
              <p><a href="#" class="btn btn-primary  py-2 px-4 rounded-0">Lihat Peta</a></p>
              <p class="mb-0 font-weight-bold">Telepon</p>
              <p class="mb-4"><a href="#">(0341) 404424-404425</a></p>
              <p class="mb-0 font-weight-bold">E-mail</p>
              <p class="mb-0"><a href="#">cs@idBisid.id</a></p><br>
              <p class="mb-0 font-weight-bold">Website</p>
              <p class="mb-4">www.idBisid.com</p>
              <p class="mb-0 font-weight-bold">Instagram</p>
              <p class="mb-4"><a href="#">idBisid.id</a></p>
              <p class="mb-0 font-weight-bold">Chat Dengan Kami</p>
              <a href="<?=base_url()?>/user/chatting"><img src="<?=base_url()?>/assets/user2/images/chat.png" style="width:50px;heigh:50px;margin-top:10px;"></a>
            </div>
          </div>
        </div>
      </div>
    </div>