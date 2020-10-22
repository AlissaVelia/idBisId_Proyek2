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

    <!-- GAMBAR MATERI PELATIHAN -->
    <div class="unit-5 overlay" style="background-image: url(<?php echo base_url('assets/user2/images/hero_bg_2.jpg')?>);">
      <div class="container text-center">
        <h2 class="mb-0">Materi Pelatihan</h2>
        <p class="mb-0 unit-6"><a href="<?=base_url()?>/user/index">Beranda</a> <span class="sep">></span> <span><a href="<?=base_url()?>/user/detail_pelatihan">Detail Pelatihan</a></span><span class="sep">></span><span>Materi Pelatihan</span></p>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
      <h2><strong><center>- MATERI PELATIHAN -</center></strong></h2><br>

        <!-- DAFTAR MATERI -->
        <div class="row" data-aos="fade">
         <div class="col-md-12">
           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">01 - Introduction</h2>
                 <div class="badge-wrap">
                  <span class="bg-warning text-white badge py-2 px-4">Desain</span>
                 </div>
               </div>
              </div>

              <!-- BUTTON LIHAT DAN IKUTI-->
              <div class="ml-auto">
                <a href="<?=base_url()?>/user/detail_materi" class="btn btn-primary py-2">Lihat</a>
                <a href="#" class="btn btn-primary py-2">Ikuti</a>
              </div>
           </div>
         </div>
        </div>
        
        <!-- NOMOR -->
        <div class="row mt-5">
          <div class="col-md-12 text-center">
            <div class="site-block-27">
              <ul>
                <li><a href="#"><i class="icon-keyboard_arrow_left h5"></i></a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="icon-keyboard_arrow_right h5"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>