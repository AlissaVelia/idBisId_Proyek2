<body id="page-top">
  <div id="wrapper">
  <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
                </div>
                <div class="card-body">
                  <form action="<?php echo base_url('index.php/lembaga/tambah_pelatihan'); ?>" method="post">
                  <div class="form-group">
                            <label>id lembaga</label>
                            <input type="text" name="id_lembaga" value="<?php echo $this->session->userdata('id_lembaga'); ?>" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label>ID Kategori</label>
                            <select class="form-control" name="id_kategori">
                                         <?php
                                          foreach ($data_kategori as $row)
                                                 {
                                                        echo '<option value= "'.$row->id_kategori.'">'.$row->nama_kategori.'</option>';
                                                 }

                                             ?>
                                    </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Pelatihan</label>
                            <input type="text" name="nama_pelatihan"  class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" name="deskripsi"  class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label>Pembayaran</label>
                            <select class="form-control" name="pembayaran">
                                    <option value="Gratis"> Gratis  </option>
                                    <option value="Berbayar"> Berbayar </option>
                             </select> 
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" value="0" class="form-control"> 
                        </div>

                    <!-- <div class="form-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                    </div> -->
                    <!-- <div class="form-group">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                        <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                      </div>
                    </div> -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>


        </div>
  