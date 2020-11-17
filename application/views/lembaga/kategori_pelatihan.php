
<body>

<button type="button" class="btn btn-primary" data-toggle="modal"
data-target="#exampleModalScrollable" id="#modalScroll">Tambah Kategori </button>


<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Kategori Pelatihan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('index.php/lembaga/tambah_data_kategori'); ?>" method="post" enctype="multipart/form-data">
      <div class="modal-body">
      <div class="form-group">
                         <!-- <div class="form-group">
                            <label>Tgl.Laporan</label>
                            <input type="date" name="tgl_laporan" value="<?php echo date('Y-m-d'); ?>" class="form-control">
                        </div> -->
                        <div class="form-group">
                            <label>id lembaga</label>
                            <input type="text" name="id_lembaga" value="<?php echo $this->session->userdata('id_lembaga'); ?>" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label>nama kategori</label>
                            <input type="text" name="nama_kategori"  class="form-control"> 
                        </div>
                     
                      
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

<br>
<br>
            <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <!-- <table id="zero_config" class="table table-striped table-bordered no-wrap"> -->
                        <table class="table table-striped table-bordered no-wrap">
                            <h4 class="card-title text-center">Kategori </h4>
                            <thead class="bg-warning text-white">
                                <tr>
                                    <th>NO</th>

                                    <th>NAMA KATEGORI</th>
                                    <th>AKSI </td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    $no = 0;
                                    foreach ($data_kategori as $row) {
                                        echo '
                                                        <tr>
                                                            <td>' . ++$no . '</td>
                                                            <td>' . $row->nama_kategori . '</td>
                                                            <td>
                                                           
                                                            <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal_ubah" 
                                                            onclick="prepare_lihat_laporan(' . $row->id_kategori . ')">Update</a>
                                                            <a href="' . base_url('index.php/lembaga/hapus_kategori/' . $row->id_kategori) . '" 
                                                            class="btn btn-danger btn-sm">Hapus</a>
                                                            </td>
                                                         
                                                           
                                                        </tr>
                                                    ';
                                    }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                 
                </div>
               
            </div>
      
        </div>
  
      <!-- MODAL lihat Laporan -->
      <div class="modal fade" id="modal_ubah" tabindex="-1" role="dialog" aria-labelledby="modal_ubah" aria-hidden="true" data-backdrop="static" 
      data-keyboard="false">
        <div class="modal-dialog">
        <form action="<?php echo base_url('index.php/lembaga/edit_kategori'); ?>" method="post">
               
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-primary">
                    <h4 class="modal-title" id="modal_ubah">Kategori Pelatihan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">

                <div class="form-group">
                        <input type="hidden" name="id_kategori" id="id_kategori" class="form-control">
                    </div>
                    <div class="form-group">
                        Nama Kategori
                        <input type="text" name="nama_kategori" id="nama_kategori" class="form-control">
                    </div>
                


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                    <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                </div>

            </div>
        </form>
            <!-- /.modal-content -->
        </div>
    </div>

    <script type="text/javascript">
    function prepare_lihat_laporan(id_kategori)

    {

        $('#id_kategori').empty();
        $('#nama_kategori').empty();


        $.getJSON('<?php echo base_url(); ?>index.php/lembaga/get_kategori_by_id/' + id_kategori, function(data) {

            $('#id_kategori').val(data.id_kategori);
            $('#nama_kategori').val(data.nama_kategori);
        });
    }
</script>

  <script src="<?= base_url()?>assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url()?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url()?>assets/admin/js/ruang-admin.min.js"></script>
  <script src="<?= base_url()?>assets/admin/vendor/chart.js/Chart.min.js"></script>
  <script src="<?= base_url()?>assets/admin/js/demo/chart-area-demo.js"></script>  

        </div

        