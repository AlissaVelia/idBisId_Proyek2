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
                    <b><h1 class="h4 text-gray-900 mb-4">Register - idBisid</h1></b>
                  </div>
                  <form>
                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control" id="exampleInputFirstName" name="nama">
                    </div>
                    <div class="form-group">
                      <label>Telepon</label>
                      <input type="text" class="form-control" id="exampleInputLastName" name="telepon">
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
                      <label>Username</label>
                      <input type="text" class="form-control" id="exampleInputLastName" name="username">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword">
					</div>
					<br>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="<?= base_url();?>login/index">Sudah Punya Akun?</a>
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