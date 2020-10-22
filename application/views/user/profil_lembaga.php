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
    <div class="unit-5 overlay" style="background-image: url(<?php echo base_url('assets/user2/images/hero_bg_1.jpg')?>);">
      <div class="container text-center">
        <h2 class="mb-0">Profil Lembaga</h2>
        <p class="mb-0 unit-6"><a href="<?=base_url()?>/user/index">Beranda</a> <span class="sep">></span> <a href="<?=base_url()?>/user/daftar_pelatihan">Pelatihan</a><span class="sep">></span><a href="<?=base_url()?>/user/daftar_lembaga">Daftar Lembaga</a><span class="sep">></span><span>Profil Lembaga</span></p>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 mb-5" data-aos="fade">
            <img src="<?=base_url()?>/assets/user2/images/img_1.jpg" class="img-md-fluid" alt="Placeholder image">
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="bg-white pl-lg-5 pl-0  pb-lg-5 pb-0">
            <h2 class="font-weight-bold text-black" data-aos="fade">Dinas Komunikasi dan Informatika Kota Malang</h2><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur atque perferendis, laudantium quod architecto velit ad officiis facere eveniet in fuga fugiat delectus rerum doloribus quos consectetur unde, expedita, quibusdam corporis impedit quia sequi aliquid sit. Ducimus labore molestias odio nam necessitatibus laboriosam vero saepe enim nobis. Repudiandae quidem, sint earum dolorum consequuntur dignissimos excepturi mollitia omnis aliquid, corporis, unde!</p>
            <ul class="site-block-check">
              <li>Lorem ipsum dolor sit amet.</li>
              <li>Dicta doloribus veniam impedit, enim!</li>
              <li>Quod, facilis cupiditate repellat voluptas.</li>
              <li>Quae impedit id maxime fugiat.</li>
              <li>Esse aut iste dolor. In.</li>
            </ul>
            </div>
          </div>
          <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">- Informasi Kontak -</h3>
              <p class="mb-0 font-weight-bold">Alamat</p>
              <p class="mb-4">Perkantoran Terpadu Pemerintah Kota Malang, Gedung A Lantai 4, <br>Jl. Mayjen Sungkono, Arjowinangun, Kec. Kedungkandang, Kota Malang, Jawa Timur 65132</p>
              <p class="mb-0 font-weight-bold">Telepon</p>
              <p class="mb-4"><a href="#">(0341) 751550</a></p>
              <p class="mb-0 font-weight-bold">E-mail</p>
              <p class="mb-0"><a href="#">kominfo@malangkota.go.id / ppid@malangkota.go.id.</a></p>
            </div>
            <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Informasi tambahan</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur</p>
              <p><a href="#" class="btn btn-primary  py-2 px-4 rounded-0">Lihat Surat Berdirinya Lembaga</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <!-- KONTEN DAFTAR PELATIHAN -->
    <div class="site-section border-top">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2 class="text-black">- Daftar <strong>Pelatihan -</strong> </h2>
          </div>
        </div>
        <div class="row hosting">
        <!-- 1 -->
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="100" >
            <div class="unit-3 h-100 bg-white">
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="<?=base_url()?>/http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-portfolio23"></span>
                </div>
                <h2 class="h5"><a href="<?=base_url()?>/user/detail_pelatihan" style="color:black;">Search Millions of Jobs</a></h2>
              </div>
              <div class="unit-3-body">
                <p><a href="<?=base_url()?>/user/detail_pelatihan" style="color:#b3b3b3;">Lorem ipsum dolor sit amet consectetur is a nice adipisicing elita ssumenda a similique perferendis dolorem eos.</a></p>
              </div>
            </div>
          </div>
          <!-- 2 -->
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="500">
            <div class="unit-3 h-100 bg-white">
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="<?=base_url()?>/http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-clipboard68"></span>
                </div>
                <h2 class="h5"><a href="<?=base_url()?>/user/detail_pelatihan" style="color:black;">Easy To Manage Jobs</a></h2>
              </div>
              <div class="unit-3-body">
                <p><a href="<?=base_url()?>/user/detail_pelatihan" style="color:#b3b3b3;">Lorem ipsum dolor sit amet consectetur is a nice adipisicing elita ssumenda a similique perferendis dolorem eos.</a></p>
              </div>
            </div>
          </div>
          <!-- 3 -->
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="600">
            <div class="unit-3 h-100 bg-white">
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="<?=base_url()?>/http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-user143"></span>
                </div>
                <h2 class="h5"><a href="<?=base_url()?>/user/detail_pelatihan" style="color:black;">Online Reviews</a></h2>
              </div>
              <div class="unit-3-body">
                <p><a href="<?=base_url()?>/user/detail_pelatihan" style="color:#b3b3b3;">Lorem ipsum dolor sit amet consectetur is a nice adipisicing elita ssumenda a similique perferendis dolorem eos.</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>