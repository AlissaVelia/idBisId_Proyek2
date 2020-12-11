<body id="page-top">
  <div id="wrapper">
  <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
          <div class="row">
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Lengkapi Data Lembaga</h6>
                </div>
                <div class="card-body">
                <?php foreach($lembaga_pelatihan as $lp):?>

                  <form action="<?= base_url();?>lembaga/edit_data_lembaga/<?=$this->session->userdata('id_lembaga');?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_lembaga" value="<?=$lp['id_lembaga'];?>">
                    <input type="hidden" name="id_lembaga" value="<?=$lp['id_lembaga'];?>">
                    <div class="form-group">
                      <label for="nama lembaga">Nama Lembaga</label>
                      <input type="text" class="form-control" id="nama_lembaga" name="nama_lembaga" value="<?=$lp['nama_lembaga'];?>">
                    </div>

                    <div class="form-group">
                      <label for="alamat">Alamat Lembaga</label>
                      <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$lp['alamat'];?>">
                    </div>

                    <div class="form-group">
                      <label for="telepon lembaga">Telepon Lembaga</label>
                      <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?=$lp['no_telp'];?>">
                    </div>

                    <div class="form-group">
                      <label for="penanggungjawa">Penanggungjawab Lembaga</label>
                      <input type="text" class="form-control" id="penanggungjawab" name="penanggungjawab" value="<?=$lp['penanggungjawab'];?>">
                    </div>

                    <div class="form-group">
                      <label for="no ktp">Nomor KTP Penanggungjawab</label>
                      <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="<?=$lp['no_ktp'];?>">
                    </div>

                    <div class="form-group">
                      <label for="username">Username Lembaga</label>
                      <input type="text" class="form-control" id="username" name="username" value="<?=$lp['username'];?>">
                    </div>

                    <div class="form-group">
                      <label for="password">Password Lembaga</label>
                      <input type="password" class="form-control" id="password" name="password" value="<?=$lp['password'];?>">
                    </div>

                    <div class="form-group">
                      <label for="deskripsi">Deskripsi Lembaga</label>
                      <input type="text" class="form-control" id="no_telp" name="deskripsi" value="<?=$lp['deskripsi'];?>">
                    </div>

                    <div class="row form-group mb-5">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="fullname">Unggah Logo Lembaga</label>
                        <input type="file"  class="form-control" name="logo_lembaga">
                        <p>Format .jpg dan .png Maks. Ukuran : 500KB</p>
                      </div>
                    </div>

                    <div class="row form-group mb-5">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="fullname">Unggah Surat Berdirinya Lembaga</label>
                        <input type="file"  class="form-control" name="surat_lembaga">
                        <p>Format .jpg dan .png Maks. Ukuran : 500KB</p>
                      </div>
                    </div><br><br>

                    <center><button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
        </div>
        <?php endforeach;?>