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
                  <form action="<?php echo base_url();?>index.php/lembaga/edit_pelatihan/<?php echo $list->id_pelatihan;?>" method="post">
                  <div class="form-group">

                        <div class="form-group">
                            <label>Kategori Pelatihan</label>
                            <select class="form-control" name="id_kategori"value="<?php echo $list->id_kategori;?>" >
              
                            <?php
                                          foreach ($data_kategori as $row) { ?>
                                                       <option value="<?= $row->id_kategori; ?>" <?php if($list->id_kategori == $row->id_kategori) echo "selected" ?>><?= $row->nama_kategori; ?></option>
                                                 <?php }

                                             ?>
                                    </select>

                        <div class="form-group">
                            <label>Nama Pelatihan</label>
                            <input type="text" name="nama_pelatihan" value="<?php echo $list->nama_pelatihan;?>" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" name="deskripsi" value="<?php echo $list->deskripsi;?>" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label>Pembayaran</label>
                            <select class="form-control" name="pembayaran"value="<?php echo $list->pembayaran;?>">
                                  <option value="<?php echo $list->pembayaran;?>"><?php echo $list->pembayaran;?></option>
                                    <option value="Gratis"> Gratis  </option>
                                    <option value="Berbayar"> Berbayar </option>
                             </select>  
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" value="<?php echo $list->harga;?>" class="form-control"> 
                        </div>

                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                  </form>
                </div>
              </div>


        </div>
  