<?= form_open('login/proses_login_user')?>
<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <b><h1 class="h4 text-gray-900 mb-4">Login User - idBisid</h1></b>
                  </div>
                  <form class="user">
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputEmail" placeholder="Username" name="unameuser">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="pwduser">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember
                          Me</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-primary btn-block">Login</button>
                    </div>
                    <div class="form-group">
                   
                  </form>
                  <a class="btn btn-warning btn-block" href="<?= base_url();?>login/register_lembaga">Daftar Pelatihan</a>
                    </div>
                  <!-- <center><div class="alert alert-info" role="alert">
                    <?php
                        if(isset($pesan)) {
                            echo $pesan;
                        }
                        else {
                            echo "Masukkan Username Dan Password Anda";
                        }
                    ?>
                </div></center> -->
                <hr>
                <div class="text-center">
                    <a class="font-weight-bold small" href="<?= base_url();?>login/register_user">Create an Account!</a>
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
    </div>
  </div>
<?= form_close();?>