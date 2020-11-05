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
                  <form action="<?php echo base_url('index.php/lembaga/edit_data_kategori'); ?>" method="post">
                    <div class="form-group">
                      <label>ID Kategori</label>
                      <input type="text" class="form-control" name="id_kategori" value="<?php echo $list->id_kategori;?>>
                    
                    </div>
                    <div class="form-group">
                      <label>Nama Kategori</label>
                      <input type="text" class="form-control" name="nama_kategori" value="<?php echo $list-nama_kategori;?>>
                    </div>
                    <div class="form-group">
                      <label>Jumlah Bab</label>
                      <input type="number" class="form-control" name="jml_bab" value="<?php echo $list->jml_bab;?>>
                    </div>
                    <div class="form-group">
                      <label>ID Pelatihan</label>
                      <input type="number" class="form-control" name="id_pelatihan" value="<?php echo $list->id_pelatihan;?>>
                    </div>
                    <div class="form-group">
                      <label>ID User Pelatihan</label>
                      <input type="number" class="form-control" name="id_user_pelatihan" value="<?php echo $list->id_user_pelatihan;?>>
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
  