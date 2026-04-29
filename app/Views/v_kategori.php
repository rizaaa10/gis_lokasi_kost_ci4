<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $judul ?></h3>
        </div>
        <div class="card-body">
        
        <?php 
        //notif insert data
        if (session()->getFlashdata('insert')) : ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>
                <?= session()->getFlashdata('insert') ?>
                </h5>
            </div>
        <?php endif; 
        //notif update data
        if (session()->getFlashdata('update')) : ?>
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i>
    <?= session()->getFlashdata('update') ?>
    </h5>
</div>
<?php endif; 
        //notif delete data
        if (session()->getFlashdata('delete')) : ?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-trash"></i>
                <?= session()->getFlashdata('delete') ?>
                </h5>
            </div>
        <?php endif; 
        ?>

        <table id="example2" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th width="50px">No</th>
                    <th>Kategori</th>
                    <th>Marker</th>
                    <th width="150px">Aksi</th>
                </tr> 
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($kategori as $key => $value) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value['nama_kategori']; ?></td>
                    
                    <!-- Kolom Marker -->
                    <td class="text-center">
                        <img src="<?= base_url('marker/' . $value['marker']) ?>" width="75px" alt="<?= $value['nama_kategori'] ?>">
                    </td>
                    
                    <!-- Kolom Aksi -->
                    <td class="text-center">
                        <button data-toggle="modal" data-target="#edit<?= $value['id_kategori'] ?>" 
                                class="btn btn-sm btn-warning btn-flat">
                            <i class="fas fa-map-marker-alt"></i> Ganti Marker
                        </button>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        
        </div>
    </div>
</div>

<?php foreach ($kategori as $key => $value) { ?>
<div class="modal fade" id="edit<?= $value['id_kategori'] ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Ganti Marker <?= $value['nama_kategori'] ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <?= form_open_multipart('Kategori/UpdateData/' . $value['id_kategori']) ?>
      <div class="modal-body">
        <div class="form-group">
            <label>Upload Marker</label>
            <input type="file" name="marker" class="form-control" accept="image/png">
            <small class="text-danger">Biarkan kosong jika tidak ingin mengganti marker</small>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</div>
<?php } ?>
