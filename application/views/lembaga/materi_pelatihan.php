
<body>

<!-- <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_ubah" 
onclick="prepare_tambah_materi(' . $id_pelatihan1 . ')">Tambah</a>  -->
<br>
<br>
            <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <!-- <table id="zero_config" class="table table-striped table-bordered no-wrap"> -->
                        <table class="table table-striped table-bordered no-wrap">
                            <h4 class="card-title text-center">Materi Pelatihan </h4>
                            <thead class="bg-warning text-white">
                                <tr>
                                    <th>NO</th>

                                    <th>JUDUL</th>
                                    <th>BAB </td>
                                    <th>PENJELASAN</td>
                                    <th>MATERI</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                     $no = 0;
                                     foreach ($data_materi as $row) {
                                         echo '
                                                         <tr>
                                                             <td>' . ++$no . '</td>
                                                             <td>' . $row->judul . '</td>
                                                             <td>' . $row->bab . '</td>
                                                             
                                                             <td>' . $row->penjelasan . '</td>
                                                             
                                                             <td> <a href="'.base_url('/upload/materi/'.$row->file_materi).'" class="btn btn-primary" target="_blank">Lihat Materi</a>
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