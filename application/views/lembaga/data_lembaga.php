<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Lembaga Pelatihan</h1>
    </div>
    <?php foreach($lembaga_pelatihan as $lp):?>
        <a href="<?= base_url();?>lembaga/edit_data_lembaga/<?=$this->session->userdata('id_lembaga');?>" class="btn btn-success btn-icon-split">
    <?php endforeach;?>
            <span class="text">Edit Profil</span>
        </a><br><br>

        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Profil Lembaga</h6>
        </div>
        <div class="card-body">
            <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?= base_url('upload/lembaga/'.$lp["logo_lembaga"])?>" alt="">
            </div>
            <?php foreach($lembaga_pelatihan as $lp):?>
            <p><?=$lp["deskripsi"];?></p>
            <?php endforeach;?>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Nama Lembaga</h6>
        </div>
        <div class="card-body">
            
        <?php foreach($lembaga_pelatihan as $lp):?>
            <p><?=$lp["nama_lembaga"];?></p>
            <?php endforeach;?>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Alamat Lembaga</h6>
        </div>
        <div class="card-body">
            
        <?php foreach($lembaga_pelatihan as $lp):?>
            <p><?=$lp["alamat"];?></p>
            <?php endforeach;?>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Email Lembaga</h6>
        </div>
        <div class="card-body">
            
        <?php foreach($lembaga_pelatihan as $lp):?>
            <p><?=$lp["alamat"];?></p>
            <?php endforeach;?>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Telepon Lembaga</h6>
        </div>
        <div class="card-body">
            
        <?php foreach($lembaga_pelatihan as $lp):?>
            <p><?=$lp["no_telp"];?></p>
            <?php endforeach;?>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Nama Penanggungjawab</h6>
        </div>
        <div class="card-body">
            
        <?php foreach($lembaga_pelatihan as $lp):?>
            <p><?=$lp["penanggungjawab"];?></p>
            <?php endforeach;?>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Nomor KTP Penanggungjawab</h6>
        </div>
        <div class="card-body">
            
        <?php foreach($lembaga_pelatihan as $lp):?>
            <p><?=$lp["no_ktp"];?></p>
            <?php endforeach;?>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Username Lembaga</h6>
        </div>
        <div class="card-body">
            
        <?php foreach($lembaga_pelatihan as $lp):?>
            <p><?=$lp["username"];?></p>
            <?php endforeach;?>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Password Lembaga</h6>
        </div>
        <div class="card-body">
            
        <?php foreach($lembaga_pelatihan as $lp):?>
            <p><?=$lp["password"];?></p>
            <?php endforeach;?>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Surat Berdirinya Lembaga</h6>
        </div>
        <div class="card-body">
        
            <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?= base_url('upload/lembaga/'.$lp["surat_lembaga"])?>" alt="">
            </div>
        </div>
    </div>
</div>