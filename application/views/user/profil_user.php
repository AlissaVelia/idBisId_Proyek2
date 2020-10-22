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
                <li class="active"><a href="<?=base_url()?>/login/profil">Hi, (Nama Kamu)</a></li>
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
        <h2 class="mb-0">- Profil Kamu -</h2>
        <p class="mb-0 unit-6"><a href="<?=base_url()?>/user/index">Beranda</a> <span class="sep">></span> <span>Profil</span></p>
      </div>
    </div>
    
    <!-- KONTEN -->
    <div class="container">
      <div class="profile">
        <div class="profile-image">
          <img src="https://images.unsplash.com/photo-1513721032312-6a18a42c8763?w=152&h=152&fit=crop&crop=faces" alt="">
        </div>
        <div class="profile-user-settings">
          <h4 class="profile-user-name">shevaputriw</h4>
          <a href="<?=base_url()?>/user/ubah_profil_user"><button class="btn profile-edit-btn">Ubah Profil</button></a>
          <button class="btn profile-settings-btn" aria-label="profile settings"><i class="fas fa-cog" aria-hidden="true"></i></button>
        </div>
        <div class="profile-stats">
          <ul>
            <li><span class="profile-stat-count">4</span> Ide Bisnis</li>
            <li><span class="profile-stat-count">7</span> menyukai</li>
          </ul>
        </div>
        <div class="profile-bio">
          <p><span class="profile-real-name">shevaputriw</span> Lorem ipsum dolor sit, amet consectetur adipisicing elit 📷✈️🏕️</p>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <center><h2 class="text-black">- Ide Bisnis <strong>Kamu -</strong></h2></center><br>
        <div class="row">
          <!-- 1 -->
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-3" data-aos="fade">
            <div class="position-relative unit-8">
              <a href="<?=base_url()?>/user/detail_ide_user" class="mb-3 d-block img-a"><img src="<?= base_url()?>/assets/user2/images/img_1.jpg" alt="Image" class="img-fluid rounded"></a>
              <span class="d-block text-gray-500 text-normal small mb-3">Jan 20th, 2019 <span class="mx-2">&bullet;</span>&nbsp;<span class="icon-heart"></span> &nbsp;3</span>
              <h2 class="h5 font-weihgt-normal line-height-sm mb-3"><a href="<?=base_url()?>/user/detail_ide_user" class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In pariatur nostrum asperiores corrupti delectus.</p>
            </div>
          </div>
            <!-- 2 -->
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-3" data-aos="fade">
            <div class="position-relative unit-8">
              <a href="<?=base_url()?>/user/detail_ide_user" class="mb-3 d-block img-a"><img src="<?= base_url()?>/assets/user2/images/img_2.jpg" alt="Image" class="img-fluid rounded"></a>
              <span class="d-block text-gray-500 text-normal small mb-3">Jan 20th, 2019 <span class="mx-2">&bullet;</span>&nbsp;<span class="icon-heart"></span> &nbsp;3</span>
              <h2 class="h5 font-weihgt-normal line-height-sm mb-3"><a href="<?=base_url()?>/user/detail_ide_user" class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In pariatur nostrum asperiores corrupti delectus.</p>
            </div>
          </div>
            <!-- 3 -->
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-3" data-aos="fade">
            <div class="position-relative unit-8">
              <a href="<?=base_url()?>/user/detail_ide_user" class="mb-3 d-block img-a"><img src="<?= base_url()?>/assets/user2/images/img_3.jpg" alt="Image" class="img-fluid rounded"></a>
              <span class="d-block text-gray-500 text-normal small mb-3">Jan 20th, 2019 <span class="mx-2">&bullet;</span>&nbsp;<span class="icon-heart"></span> &nbsp;3</span>
              <h2 class="h5 font-weihgt-normal line-height-sm mb-3"><a href="<?=base_url()?>/user/detail_ide_user" class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In pariatur nostrum asperiores corrupti delectus.</p>
            </div>
          </div>
            <!-- 4 -->
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-3" data-aos="fade">
            <div class="position-relative unit-8">
              <a href="<?=base_url()?>/user/detail_ide_user" class="mb-3 d-block img-a"><img src="<?= base_url()?>/assets/user2/images/img_4.jpg" alt="Image" class="img-fluid rounded"></a>
              <span class="d-block text-gray-500 text-normal small mb-3">Jan 20th, 2019 <span class="mx-2">&bullet;</span>&nbsp;<span class="icon-heart"></span> &nbsp;3</span>
              <h2 class="h5 font-weihgt-normal line-height-sm mb-3"><a href="<?=base_url()?>/user/detail_ide_user" class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In pariatur nostrum asperiores corrupti delectus.szxsxsx</p>
            </div>
          </div>
        </div>

          <!-- NOMOR IDE BISNIS -->
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
    </div>

      <!-- PELATIHAN YANG DIIKUTI -->
    <div class="site-section border-top">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2 class="text-black">- Pelatihan <strong>yang Kamu Ikuti -</strong> </h2>
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
                <h2 class="h5"><a href="<?=base_url()?>/user/detail_pelatihan" style="color:black;">Desain Grafis</a></h2>
              </div>
              <div class="unit-3-body">
                <p><a href="<?=base_url()?>/user/detail_pelatihan" style="color:#b3b3b3;">Lorem ipsum dolor sit amet consectetur is a nice adipisicing elita ssumenda a similique perferendis dolorem eos.csdacsacs</a></p>
                <p style="margin-left: 160px;"><a href="<?=base_url()?>/user/penilaian" style="color:#4d90fe;"><b>Beri Penilaian -></b></a></p>
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
                <p style="margin-left: 160px;"><a href="<?=base_url()?>/user/penilaian" style="color:#4d90fe;"><b>Beri Penilaian -></b></a></p>
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
                <p><a href="<?=base_url()?>/user/detail_pelatihan" style="color:#b3b3b3;">Lorem ipsum dolor sit amet consectetur is a nice adipisicing elita ssumenda a similique perferendis dolorem eos.dxcs</a></p>
                <p style="margin-left: 160px;"><a href="<?=base_url()?>/user/penilaian" style="color:#4d90fe;"><b>Beri Penilaian -></b></a></p>
              </div>
            </div>
          </div>
        </div>

        <!-- NOMOR PELATIHAN -->
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
  </div>

  <div class="site-section bg-light">
      <div class="container">
        <center><h2 class="text-black">- Ide Bisnis <strong>yang Kamu Sukai -</strong></h2></center><br>
        <div class="row">
        <!-- 1 -->
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-3" data-aos="fade">
            <div class="position-relative unit-8">
            <a href="<?=base_url()?>/user/detail_ide" class="mb-3 d-block img-a"><img src="<?= base_url()?>/assets/user2/images/img_1.jpg" alt="Image" class="img-fluid rounded"></a>
            <span class="d-block text-gray-500 text-normal small mb-3">Oleh <a href="<?=base_url()?>/user/profil_user">Allisa</a> <span class="mx-2">&bullet;</span> Jan 20th, 2019 <span class="mx-2">&bullet;</span> &nbsp;<span class="icon-heart"></span> &nbsp;3</span>
            <h2 class="h5 font-weihgt-normal line-height-sm mb-3"><a href="<?=base_url()?>/user/detail_ide" class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In pariatur nostrum asperiores corrupti delectus.</p>
            </div>
          </div>
          <!-- 2 -->
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-3" data-aos="fade">
            <div class="position-relative unit-8">
            <a href="<?=base_url()?>/user/detail_ide" class="mb-3 d-block img-a"><img src="<?= base_url()?>/assets/user2/images/img_2.jpg" alt="Image" class="img-fluid rounded"></a>
            <span class="d-block text-gray-500 text-normal small mb-3">Oleh <a href="<?=base_url()?>/user/profil_user">Allisa</a> <span class="mx-2">&bullet;</span> Jan 20th, 2019 <span class="mx-2">&bullet;</span> &nbsp;<span class="icon-heart"></span> &nbsp;3</span>
            <h2 class="h5 font-weihgt-normal line-height-sm mb-3"><a href="<?=base_url()?>/user/detail_ide" class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In pariatur nostrum asperiores corrupti delectus.</p>
            </div>
          </div>
          <!-- 3 -->
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-3" data-aos="fade">
            <div class="position-relative unit-8">
            <a href="<?=base_url()?>/user/detail_ide" class="mb-3 d-block img-a"><img src="<?= base_url()?>/assets/user2/images/img_3.jpg" alt="Image" class="img-fluid rounded"></a>
            <span class="d-block text-gray-500 text-normal small mb-3">Oleh <a href="<?=base_url()?>/user/profil_user">Allisa</a> <span class="mx-2">&bullet;</span> Jan 20th, 2019 <span class="mx-2">&bullet;</span> &nbsp;<span class="icon-heart"></span> &nbsp;3</span>
            <h2 class="h5 font-weihgt-normal line-height-sm mb-3"><a href="<?=base_url()?>/user/detail_ide" class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In pariatur nostrum asperiores corrupti delectus.</p>
            </div>
          </div>
          <!-- 4 -->
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-3" data-aos="fade">
            <div class="position-relative unit-8">
            <a href="<?=base_url()?>/user/detail_ide" class="mb-3 d-block img-a"><img src="<?= base_url()?>/assets/user2/images/img_4.jpg" alt="Image" class="img-fluid rounded"></a>
            <span class="d-block text-gray-500 text-normal small mb-3">Oleh <a href="<?=base_url()?>/user/profil_user">Allisa</a> <span class="mx-2">&bullet;</span> Jan 20th, 2019 <span class="mx-2">&bullet;</span> &nbsp;<span class="icon-heart"></span> &nbsp;3</span>
            <h2 class="h5 font-weihgt-normal line-height-sm mb-3"><a href="<?=base_url()?>/user/detail_ide" class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In pariatur nostrum asperiores corrupti delectus.</p>
            </div>
          </div>
        </div>

          <!-- NOMOR IDE BISNIS -->
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
    </div>