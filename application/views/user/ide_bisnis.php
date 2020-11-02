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
    
    <!-- MENU ATAS -->
    <header class="site-navbar py-1" role="banner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="<?=base_url()?>user/index" class="text-black h2 mb-0">- id<strong>Bis</strong>id -</a></h1>
          </div>
          <!-- MENU ATAS -->
          <div class="col-10 col-xl-10 d-none d-xl-block">
            <nav class="site-navigation text-right" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="<?=base_url()?>user/index">Beranda</a></li>
                <li  class="active">
                  <a href="<?=base_url()?>user/ide_bisnis">Ide Bisnis</a>
                </li>
                <li><a href="<?=base_url()?>user/daftar_pelatihan">Pelatihan</a></li>
                <li><a href="<?=base_url()?>user/tentang">Tentang</a></li>
                <li><a href="<?=base_url()?>user/kontak">Kontak</a></li>
                <li><a href="<?=base_url()?>login/index"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2"></span>Login</span></a></li>
              </ul>
            </nav>
          </div>
          <div class="col-6 col-xl-2 text-right d-block">
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
          </div>
        </div>
      </div>
    </header>

    <!-- GAMBAR IDE BISNIS -->
    <div class="unit-5 overlay" style="background-image: url(<?php echo base_url('assets/user2/images/hero_bg_1.jpg')?>);">
      <div class="container text-center">
        <h2 class="mb-0">Daftar Ide Bisnis</h2>
        <p class="mb-0 unit-6"><a href="index.html">Beranda</a> <span class="sep">></span> <span>Ide Bisnis</span></p>
      </div>
    </div>

    <div class="site-blocks-cover" style="background-image: url(<?php echo base_url('assets/user2/images/hero_bg_1.jpg')?>);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row row-custom align-items-center">
          <div class="col-md-10">
            <h1 class="mb-2 text-black w-75"><span class="font-weight-bold">Find Your</span> Dream Job Here</h1>

            <!-- PENCARIAN -->
            <div class="job-search">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active py-3" id="pills-job-tab" data-toggle="pill" href="#pills-job" role="tab" aria-controls="pills-job" aria-selected="true">Cari Ide</a>
                </li>
              </ul>

              <!-- PENCARIAN IDE -->
              <div class="tab-content bg-white p-4 rounded" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-job" role="tabpanel" aria-labelledby="pills-job-tab">
                  <form action="" method="post">
                    <div class="row">
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input name="judul" id="judul" type="text" class="form-control" placeholder="Contoh : Ternak Lele">
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="select-wrap">
                          <span class="icon-keyboard_arrow_down arrow-down"></span>
                          <select name="kategori" id="kategori" class="form-control">
                            <option value="">Kategori</option>
                            <option value="Kuliner">Kuliner</option>
                            <option value="Travelling">Travelling</option>
                            <option value="Penjualan">Penjualan</option>
                            <option value="Peternakan">Peternakan</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="text" class="form-control" name="oleh" id="oleh" placeholder="Siapa Pemilik Ide?">
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="submit" class="btn btn-primary btn-block" value="Cari">
                      </div>
                      
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  

    <!-- KONTEN IDE -->
    <div class="site-section bg-light">
      <div class="container">
      <center><h2 class="text-black">- Daftar <strong>Ide Bisnis -</strong></h2></center><br>
      <div class="row">
        <!-- 1 -->
        <?php foreach ($ide_bisnis as $ide) :?>
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-3" data-aos="fade">
            <div class="position-relative unit-8">
            <a href="<?=base_url()?>/user/detail_ide" class="mb-3 d-block img-a"><img src="<?= $ide['foto'];?>" alt="Image" class="img-fluid rounded"></a>
            <span class="d-block text-gray-500 text-normal small mb-3">Oleh <a href="<?=base_url()?>/user/profil_user"><?= $ide['oleh'];?></a> <span class="mx-2">&bullet;</span> Jan 20th, 2019 <span class="mx-2">&bullet;</span> &nbsp;<span class="icon-heart"></span> &nbsp;<?= $ide['suka'];?></span>
            <h2 class="h5 font-weihgt-normal line-height-sm mb-3"><a href="<?=base_url()?>/user/detail_ide" class="text-black"><?= $ide['judul'];?></a></h2>
            <p><?= $ide['deskripsi'];?></p>
            </div>
          </div>
        <?php endforeach; ?>
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