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
            <h1 class="mb-0"><a href="<?=base_url()?>user/index" class="text-black h2 mb-0">- id<strong>Bis</strong>id -</a></h1>
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

    <!-- GAMBAR MATERI PELATIHAN -->
    <div class="unit-5 overlay" style="background-image: url(<?php echo base_url('assets/user2/images/hero_bg_2.jpg')?>);">
      <div class="container text-center">
        <h2 class="mb-0">Materi Pelatihan User</h2>
        <p class="mb-0 unit-6"><a href="<?=base_url()?>/user/index">Beranda</a> <span class="sep">></span> <a href="<?=base_url()?>/user/daftar_pelatihan">Daftar Pelatihan</a><span class="sep">></span><span>Daftar Lembaga Pelatihan</span></p>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
      <h2><strong><center>- Materi Pelatihan -</center></strong></h2><br>

        <!-- DAFTAR Lembaga-->
        <?php foreach ($materi as $lb) :?>
        <div class="row" data-aos="fade">
         <div class="col-md-12">
           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Bab <?= $lb['bab'];?></h2>
                 <!-- <div class="badge-wrap">
                  <span class="bg-warning text-white badge py-2 px-4">Full Time</span>
                 </div> -->
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div><span><?= $lb['judul'];?></span></div>
               </div>
              </div>
              <div class="ml-auto">
              <button class="btn btn-warning py-2" data-toggle="modal" data-target="#exampleModalScrollable" id="#modalScroll" >Penjelasan</button>
                
                <a href="<?php echo base_url('/upload/materi/')?><?= $lb['file_materi'];?> " target="_blank" class="btn btn-primary py-2">Lihat Modul</a>
              </div>
           </div>
         </div>
        </div>
        <?php endforeach; ?>

    <!-- POP UP PELATIHAN GRATIS  -->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="#" method="post" enctype="multipart/form-data" >

          <div class="modal-body">
          <div class="form-group">
                
                  
                    <h3> BAB <?= $lb['bab'];?> - <?= $lb['judul'];?> </h3>
                    <p> <?= $lb['penjelasan'];?>
                    </p>
                          
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
        </form>
     
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