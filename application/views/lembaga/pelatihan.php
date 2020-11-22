
<body>

<!-- <button type="button" class="btn btn-primary" data-toggle="modal"
data-target="#exampleModalScrollable" id="#modalScroll">Tambah Pelatihan</button> -->

<a href="<?=base_url()?>lembaga/tambah_data_pelatihan"  class="btn btn-primary" > <span class="fa fa-plus"></span>Tambah Pelatihan</a>

<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Pelatihan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
   
      <div class="modal-body">
      <div class="form-group">
                         <!-- <div class="form-group">
                            <label>Tgl.Laporan</label>
                            <input type="date" name="tgl_laporan" value="<?php echo date('Y-m-d'); ?>" class="form-control">
                        </div> -->
                        <form action="<?php echo base_url('index.php/lembaga/tambah_pelatihan'); ?>" method="post">
                        <div class="form-group">
                            <label>id lembaga</label>
                            <input type="text" name="id_lembaga" value="<?php echo $this->session->userdata('id_lembaga'); ?>" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label>ID Kategori</label>
                            
                            <input type="text" name="id_kategori"  class="form-control"> 
                            <select class="form-control" name="id_kategori">
                                         <?php
                                          foreach ($kategori as $row)
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
                            <input type="text" name="pembayaran"  class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga"  class="form-control"> 
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
                            <h4 class="card-title text-center">PELATIHAN </h4>
                            <thead class="bg-warning text-white">
                                <tr>
                                    <th>NO</th>

                                    <th>NAMA PELATIHAN</th>
                                    <!-- <th>DESKRIPSI </td> -->
                                    <th>KATEGORI </td>
                                    <th>PEMBAYARAN</th>
                                    <th>HARGA </td>      
                                                                       
                                    <th>MATERI</td>                              
                                    <th>AKSI </td>

                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    $no = 0;
                                    foreach ($data_pelatihan as $row) {
                                        echo '
                                                        <tr>
                                                            <td>' . ++$no . '</td>
                                                            <td>' . $row->nama_pelatihan . '</td>
                                                            <td>' . $row->nama_kategori . '</td>
                                                            
                                                            <td>' . $row->pembayaran . '</td>
                                                            
                                                            <td>' . $row->harga . '</td>
                                                            <td>     <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_ubah" 
                                                            onclick="prepare_tambah_materi(' . $row->id_pelatihan . ')">Tambah</a> 
                                                            <a href="' . base_url('index.php/lembaga/detail_materi_pelatihan/' . $row->id_pelatihan) . '" class="btn btn-success btn-sm">Lihat Materi</a>
                                                            </td>
                                                            
                                                            <td>
                                                            
                                                            <a href="' . base_url('index.php/lembaga/edit_data_pelatihan/' . $row->id_pelatihan) . '" class="btn btn-warning btn-sm">Ubah</a>
                                                            <a href="' . base_url('index.php/lembaga/hapus_pelatihan/' . $row->id_pelatihan) . '" class="btn btn-danger btn-sm">Hapus</a>
                                                           
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
  
      <!-- MODAL TAMBAH MATERI -->
      <div class="modal fade" id="modal_ubah" tabindex="-1" role="dialog" aria-labelledby="modal_ubah" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
       
           
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-primary">
                    <h4 class="modal-title" id="modal_ubah">Materi Pelatihan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">

                    
                    <div class="form-group">
                        Nama Pelatihan
                        <input type="text" name="nama_pelatihan" id="nama_pelatihan" class="form-control" disabled>
                    </div>
                    <!-- <div class="form-group">
                        Deskripsi
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control">
                    </div> -->
                    <div class="form-group">
                        Kategori
                        <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        Pembayaran 
                        <input type="text" name="pembayaran" id="pembayaran" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        Harga
                        <input type="text" name="harga" id="harga" class="form-control" disabled>
                    </div>
                   
                    <form action="<?php echo base_url('index.php/lembaga/tambah_materi_by_id'); ?>" method="post" enctype="multipart/form-data">
                    
              
                    <div class="form-group">
                        Judul
                        <input type="text" name="judul" class="form-control" >
                    </div>
                    <div class="form-group">
                        Bab
                        <input type="number" name="bab" class="form-control" >
                    </div>
                    <div class="form-group">
                        Penjelasan
                        <input type="text" name="penjelasan"  class="form-control" >
                    </div>
                    
                    <div class="form-group">
                        <input type="text" name="id_pelatihan" id="id_pelatihan" class="form-control">
                    </div>
                    <div class="form-group">
                        File
                        <input type="file" name="file_materi" class="form-control" >
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
    function prepare_tambah_materi(id_pelatihan)

    {

        $('#id_pelatihan').empty();
        $('#nama_pelatihan').empty();
        $('#deskripsi').empty();
        $('#nama_kategori').empty();
        $('#pembayaran').empty();
        $('#harga').empty();


        $.getJSON('<?php echo base_url(); ?>index.php/lembaga/get_pelatihan_by_id/' + id_pelatihan, function(data) {

            $('#id_pelatihan').val(data.id_pelatihan);
            $('#nama_pelatihan').val(data.nama_pelatihan);
            $('#deskripsi').val(data.deskripsi);
            $('#nama_kategori').val(data.nama_kategori);
            $('#pembayaran').val(data.pembayaran);
            $('#harga').val(data.harga);
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

        