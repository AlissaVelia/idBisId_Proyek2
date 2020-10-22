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
                <li class="active"><a href="<?=base_url()?>/user/index">Beranda</a></li>
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

    <!-- ISI HEADER -->
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
                <li class="nav-item">
                  <a class="nav-link py-3" id="pills-candidate-tab" data-toggle="pill" href="#pills-candidate" role="tab" aria-controls="pills-candidate" aria-selected="false">Cari Pelatihan</a>
                </li>
              </ul>

              <!-- PENCARIAN IDE -->
              <div class="tab-content bg-white p-4 rounded" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-job" role="tabpanel" aria-labelledby="pills-job-tab">
                  <form action="#" method="post">
                    <div class="row">
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="text" class="form-control" placeholder="Contoh : Ternak Lele">
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="select-wrap">
                          <span class="icon-keyboard_arrow_down arrow-down"></span>
                          <select name="" id="" class="form-control">
                            <option value="">Kategori</option>
                            <option value="fulltime">Semua Kategori</option>
                            <option value="fulltime">Kuliner</option>
                            <option value="fulltime">Travelling</option>
                            <option value="freelance">Penjualan</option>
                            <option value="internship">Peternakan</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="text" class="form-control" placeholder="Siapa Pemilik Ide?">
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="submit" class="btn btn-primary btn-block" value="Search">
                      </div>
                    </div>
                  </form>
                </div>

                <!-- PENCARIAN PELATIHAN -->
                <div class="tab-pane fade" id="pills-candidate" role="tabpanel" aria-labelledby="pills-candidate-tab">
                  <form action="#" method="post">
                    <div class="row">
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="text" class="form-control" placeholder="Contoh : Desain Grafis">
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="select-wrap">
                          <span class="icon-keyboard_arrow_down arrow-down"></span>
                          <select name="" id="" class="form-control">
                            <option value="">Kategori</option>
                            <option value="fulltime">Semua Kategori</option>
                            <option value="fulltime">Komputer</option>
                            <option value="fulltime">Desain Grafis</option>
                            <option value="freelance">Menjahit</option>
                            <option value="internship">Barista</option>
                            <option value="internship">Memasak</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="text" class="form-control" placeholder="Contoh : KOMINFO Kota Malang">
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="submit" class="btn btn-primary btn-block" value="Search">
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
    
    <!-- HOT 12 BUSINESS -->
    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-start text-left mb-5">
          <div class="col-md-9" data-aos="fade">
            <h2 class="font-weight-bold text-black">HOT 12 Business Ideas</h2>
          </div>
          <div class="col-md-3" data-aos="fade" data-aos-delay="200">
            <a href="<?=base_url()?>/user/tambah_ide" class="btn btn-primary py-3 btn-block"><span class="h5">+</span>Tambahkan Ide</a>
          </div>
        </div>
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

    <!-- REVIEW -->
    <div class="site-section block-4 bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2 class="text-black">- Review -</h2>
          </div>
        </div>
        <div class="nonloop-block-4 owl-carousel" data-aos="fade">
        <!-- 1 -->
          <div class="item col-md-8 mx-auto">
            <div class="block-38 text-center bg-white p-4">
              <div class="block-38-img">
                <div class="block-38-header"> 
                  <img src="<?= base_url()?>/assets/user2/images/person_1.jpg" alt="Image placeholder">
                  <h3 class="block-38-heading">Elizabeth Graham</h3>
                  <p class="block-38-subheading">Creative Director, XYG Company</p>
                </div>
                <div class="block-38-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
                </div>
              </div>
            </div>
          </div>
          <!-- 2 -->
          <div class="item col-md-8 mx-auto">
            <div class="block-38 text-center bg-white p-4">
              <div class="block-38-img">
                <div class="block-38-header">
                  <img src="<?= base_url()?>/assets/user2/images/person_2.jpg" alt="Image placeholder">
                  <h3 class="block-38-heading">Jennifer Greive</h3>
                  <p class="block-38-subheading">Lead Designer, Mig Company</p>
                </div>
                <div class="block-38-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
                </div>
              </div>
            </div>
          </div>
          <!-- 3 -->
          <div class="item col-md-8 mx-auto">
            <div class="block-38 text-center bg-white p-4">
              <div class="block-38-img">
                <div class="block-38-header"> 
                  <img src="<?= base_url()?>/assets/user2/images/person_1.jpg" alt="Image placeholder">
                  <h3 class="block-38-heading">Elizabeth Graham</h3>
                  <p class="block-38-subheading">Creative Director, XYG Company</p>
                </div>
                <div class="block-38-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
                </div>
              </div>
            </div>
          </div>
          <!-- 4 -->
          <div class="item col-md-8 mx-auto">
            <div class="block-38 text-center bg-white p-4">
              <div class="block-38-img">
                <div class="block-38-header">
                  <img src="<?= base_url()?>/assets/user2/images/person_2.jpg" alt="Image placeholder">
                  <h3 class="block-38-heading">Jennifer Greive</h3>
                  <p class="block-38-subheading">Lead Designer, Mig Company</p>
                </div>
                <div class="block-38-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>