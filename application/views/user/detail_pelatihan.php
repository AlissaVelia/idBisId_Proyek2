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

    <!-- GAMBAR DETAIL IDE -->
    <div class="unit-5 overlay" style="background-image: url(<?php echo base_url('assets/user2/images/hero_bg_2.jpg')?>);">
      <div class="container text-center">
        <h2 class="mb-0">Desain Grafis</h2>
        <p class="mb-0 unit-6"><a href="index.html">Beranda</a> <span class="sep">></span> <span>Detail Pelatihan</span></p>
      </div>
    </div>


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
          <form action="<?php echo base_url('index.php/user/tambah_user_pelatihan'); ?>" method="post" enctype="multipart/form-data" >

          <div class="modal-body">
          <div class="form-group">
                        
                  <div class="form-group">
                      <input type="text" name="id_user" value="<?php echo $this->session->userdata('id_user') ?>" class="form-control" hidden> 
                   </div>
                    <div class="form-group">
                      <input type="text" name="id_pelatihan" value="<?= $pelatihan['id_pelatihan'];?>" class="form-control" hidden> 
                    </div>
                    <div class="form-group">
                      <input type="text" name="status_pembayaran" value="gratis" class="form-control" hidden> 
                   </div>
                   <div class="form-group">
                      <input type="text" name="status_pelatihan" value="progress" class="form-control" hidden> 
                   </div>
                   <div class="form-group">
                      <input type="text" name="bukti_pembayaran" value="gratis" class="form-control" hidden> 
                   </div>
                   
                    <h4 style="text-align:center;"><img src="<?= base_url()?>/assets/user2/images/ceklis.png" height="90" width="90" > 
                    <br><br> Apakah Anda Yakin Akan Mengikuti Kelas Pelatihan Ini ? </h4>
                          
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            <input type="submit" value="Submit" class="btn btn-primary">
          </div>
        </div>
        </form>
     
          </div>
        </div>
       
      </div>
    </div>


    <!-- ISI DETAIL IDE -->
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 mb-5">
            <div class="p-5 bg-white">
              <!-- JUDUL -->
              <div class="mb-4 mb-md-5 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4"><?= $pelatihan['nama_pelatihan'];?></h2>
             <button class="btn btn-warning sm"><?= $pelatihan['pembayaran'];?> 
              <?php if ($pelatihan['pembayaran']=="Berbayar"){?>
                Rp.<?= $pelatihan['harga'];?>
              <?php }?> 
              </button>
               <?php if ($user_pelatihan['status_pelatihan']=="progress"){?>
                - <button class="btn btn-primary sm" >Progress</button>
                 <?php }?>
                 <?php if ($user_pelatihan['status_pelatihan']=="finish"){?>
                  <button class="btn btn-primary sm">Progress</button>
                 <?php }?>
              
                 <!-- <div class="badge-wrap">
                  <span class="bg-danger text-white badge py-2 px-4">Desain</span>
                 </div> -->
               </div>

          <!-- DESKRIPSI -->
              <p><?= $pelatihan['deskripsi'];?></p> 
             
              <div class="ml-auto">
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php if (($pelatihan['pembayaran']=="Gratis") && (empty($user_pelatihan))){?>
                  <button class="btn btn-primary py-2" data-toggle="modal" data-target="#exampleModalScrollable" id="#modalScroll" >Ikuti Pelatihan</button>
                 <?php }?> 
                 <?php if ($pelatihan['pembayaran']=="Berbayar" && (empty($user_pelatihan))){?>
                  <button class="btn btn-primary py-2" onclick="ikuti()">Ikuti Pelatihan</button>
                 <?php }?> 
                 

                 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

