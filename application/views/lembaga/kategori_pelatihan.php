<body id="page-top">
<div>
            <a href="<?=base_url()?>/lembaga/tambah_kategori"  class="btn btn-primary" > <span class="fa fa-plus"></span>Tambah Kategori</a>
  </div>
  <br>
  <br>
  <div id="wrapper">
    

            <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <!-- <table id="zero_config" class="table table-striped table-bordered no-wrap"> -->
                        <table class="table table-striped table-bordered no-wrap">
                            <h4 class="card-title text-center">STATUS LAPORAN SAYA</h4>
                            <thead class="bg-warning text-white">
                                <tr>
                                    <th>NO</th>

                                    <th>ID KATEGORI</th>
                                    <th> KATEGORI</th>
                                    <th>JML BAB</th>

                                    <th>ID PELATIHAN</th>
                                    <th>ID USER PELATIHAN</th>
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
                                                            <td>' . $row->id_kategori . '</td>
                                                            <td>' . $row->nama_kategori . '</td>
                                                            <td>' . $row->jml_bab . '</td>
                                                            <td>' . $row->id_pelatihan . '</td>
                                                            <td>' . $row->id_user_pelatihan . '</td>
                                                            <td>
                                                            <a href="' . base_url('index.php/lembaga/lihat_kategori/' . $row->id_kategori) . '" class="btn btn-warning" >Ubah</a>
                                                            <a href="' . base_url('index.php/lembaga/hapus_kategori/' . $row->id_kategori) . '" class="btn btn-danger btn-sm">Hapus</a>
                                                           
                                                            </td>
                                                         
                                                           
                                                        </tr>
                                                    ';
                                    }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        </div