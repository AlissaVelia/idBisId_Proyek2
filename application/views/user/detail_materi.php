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

    <!-- GAMBAR DETAIL MATERI -->
    <div class="unit-5 overlay" style="background-image: url(<?php echo base_url('assets/user2/images/hero_bg_2.jpg')?>);">
      <div class="container text-center">
        <h2 class="mb-0">01 - Introduction</h2>
        <p class="mb-0 unit-6"><a href="<?=base_url()?>/user/index">Beranda</a> <span class="sep">></span> <span><a href="<?=base_url()?>/user/detail_pelatihan">Detail Pelatihan</a></span><span class="sep">></span><span><a href="<?=base_url()?>/user/materi_pelatihan">Materi Pelatihan</a></span><span class="sep">></span><span>Detail Materi</span></p>
      </div>
    </div>

    <!-- ISI DETAIL MATERI -->
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 mb-5">
            <div class="p-5 bg-white">
              <!-- JUDUL MATERI -->
              <div class="mb-4 mb-md-5 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">01 - Introduction</h2>
                 <div class="badge-wrap">
                  <span class="bg-danger text-white badge py-2 px-4">Desain</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="<?=base_url()?>/user/profil_lembaga">KOMINFO Kota Malang</a></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span>Malang, Jawa Timur</span></div>
               </div>
              </div>

              <!-- VIDEO MATERI -->
              <div class="col-lg-6 col-md-12 mb-5" data-aos="fade" style="padding-left:100px;">
            <img src="<?=base_url()?>/assets/user2/images/img_1.jpg" class="img-md-fluid" alt="Placeholder image">
          </div>

          <!-- DESKRIPSI MATERI -->
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, iure beatae! Voluptas tempora doloremque atque repudiandae maiores odio magni. Illo ut nihil officia numquam in. Deleniti pariatur at minima quaerat!</p>
              <p>Qui corrupti animi, dignissimos veritatis, necessitatibus consequuntur nobis, placeat beatae dolorum ullam harum at atque dolor! Accusantium cupiditate ipsum placeat, vel voluptatibus non eaque, animi neque minima facere provident aspernatur!</p>
              <p>Porro magni numquam ex natus repellat accusamus laborum blanditiis odit consequatur at veritatis nostrum provident recusandae dolores incidunt distinctio facere, nulla odio quo tempore libero! Voluptatum porro velit, qui optio.</p>
              <p>Ducimus odio, fugiat pariatur. Corporis nobis perferendis voluptatum nostrum nesciunt, voluptates pariatur architecto consequatur! Praesentium dicta enim, laboriosam natus doloribus corrupti in sequi perferendis, cupiditate perspiciatis, porro animi sed impedit.</p>
              <p>Illum possimus, enim eaque recusandae earum omnis tempore suscipit sapiente voluptas nam quia dicta, repellendus incidunt dolor dolores nemo laboriosam, quasi nulla deserunt neque est ipsam velit cumque. Quos, ipsum!</p>
              <p>Dignissimos ipsa quibusdam id qui maiores magnam, nesciunt? Voluptatibus nulla quas itaque nostrum necessitatibus repudiandae quaerat facere, amet aperiam iste aspernatur ratione cupiditate est voluptates non. Suscipit corporis, soluta neque.</p>
              <p>Pariatur itaque reiciendis consectetur, deserunt quam adipisci odio doloribus voluptatem laboriosam magni ut repellat tempore? Minus sit officia impedit veritatis reiciendis debitis iure, porro in quaerat inventore nisi sequi quos!</p>
            </div>
          </div>
        </div>
      </div>
    </div>