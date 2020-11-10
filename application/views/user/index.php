

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
                <li class="active"><a href="<?=base_url()?>user/index">Beranda</a></li>
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
    
    <!-- BUSINESS -->
    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-start text-left mb-5">
          <div class="col-md-9" data-aos="fade">
            <h2 class="font-weight-bold text-black">HOT 12 Business Ideas</h2>
          </div>
          <div class="col-md-3" data-aos="fade" data-aos-delay="200">
            <a href="<?=base_url()?>/user/halaman_tambah_ide" class="btn btn-primary py-3 btn-block"><span class="h5">+</span>Tambahkan Ide</a>
          </div>
        </div>
        <div class="row">
        <!-- 1 -->
        <?php foreach ($ide_bisnis as $ide) :?>
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-3" data-aos="fade">
            <div class="position-relative unit-8">
            <a href="<?=base_url()?>/user/detail_ide/<?= $ide['id_idebisnis'];?>" class="mb-3 d-block img-a"><img src="<?=base_url()?>/uploads/<?= $ide['foto'];?>" alt="Image" class="img-fluid rounded"></a>
            <span class="d-block text-gray-500 text-normal small mb-3">Oleh <a href="<?=base_url()?>/user/profil_user/<?= $ide['oleh'];?>"><?= $ide['oleh'];?></a><span class="mx-2">&bullet;</span> &nbsp;<span class="icon-heart"></span> &nbsp;<?= $ide['suka'];?></span>
            <h2 class="h5 font-weihgt-normal line-height-sm mb-3"><a href="<?=base_url()?>/user/detail_ide/<?= $ide['id_idebisnis'];?>" class="text-black"><?= $ide['judul'];?></a></h2>
            <p><?= $ide['deskripsi'];?></p>
            </div>
          </div>
        <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>    

    <!-- HOT 12 TRAINING -->
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2 class="text-black">- <strong>HOT 12 </strong>Training -</h2>
          </div>
        </div>
        <div class="row hosting">
        <!-- 1 -->
        <?php foreach ($pelatihan as $pl) :?>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="100" >
            <div class="unit-3 h-100 bg-white">
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="<?=base_url()?>/http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span><img src="<?=base_url()?>/upload/lembaga/foto_lembaga/<?= $pl['logo'];?>" width="48px" height="58px"></span>
                  </div>
                <h2 class="h5"><a href="<?=base_url()?>/user/detail_pelatihan/<?= $pl['id_pelatihan'];?>" style="color:black;"><?= $pl['nama_pelatihan'];?></a></h2>
              </div>
              <div class="unit-3-body">
                <p><a href="<?=base_url()?>/user/detail_pelatihan/<?= $pl['id_pelatihan'];?>" style="color:#b3b3b3;"><?= $pl['desc'];?></a></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
    </div>

    