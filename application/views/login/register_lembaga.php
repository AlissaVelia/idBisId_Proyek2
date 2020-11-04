<body class="bg-gradient-login">
  <!-- Register Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <b><h1 class="h4 text-gray-900 mb-4">Register Lembaga Pelatihan - idBisid</h1></b>
                  </div>
                  <?php if (validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo validation_errors(); ?>
                    </div>
                  <?php endif; ?>
                  <form action="<?=base_url('login/proses_register_lembaga')?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label>Nama Lembaga</label>
                      <input type="text" class="form-control" id="exampleInputFirstName" name="namalembaga">
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" class="form-control" id="exampleInputLastName" name="alamat">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="form-group">
                      <label>Telepon</label>
                      <input type="text" class="form-control" id="exampleInputEmail" name="telepon">
                    </div>
                    <div class="form-group">
                      <label>Penanggungjawab Lembaga</label>
                      <input type="text" class="form-control" id="exampleInputLastName" name="penanggungjawab">
                    </div>
                    <div class="form-group">
                      <label>Nomor KTP Penanggungjawab</label>
                      <input type="text" class="form-control" id="exampleInputLastName" name="noktp">
                    </div>
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" id="exampleInputLastName" name="username">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword" name="password">
                    </div>
                    <div class="form-group">
                      <label>Deskripsi Lembaga</label>
                      <input type="text" class="form-control" id="exampleInputLastName" name="deskripsi">
                    </div>
                    <div class="row form-group mb-5">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="fullname">Unggah Logo Lembaga</label>
                        <input type="file" id="fullname" class="form-control" name="surat_lembaga">
                        <p>Format .jpg dan .png Maks. Ukuran : 500KB</p>
                      </div>
                    </div>
                    <div class="row form-group mb-5">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="fullname">Unggah Surat Berdirinya Lembaga</label>
                        <input type="file" id="fullname" class="form-control" name="foto_lembaga">
                        <p>Format .jpg dan .png Maks. Ukuran : 500KB</p>
                      </div>
                    </div>
					          <br>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="<?= base_url();?>login/login_lembaga">Sudah Punya Akun?</a>
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>