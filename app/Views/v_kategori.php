 <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $judul ?></h3>

                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
            
            <?php 
            //notif insert data
            if (session()->getFlashdata('insert')) : ?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i>
        <?= session()->getFlashdata('insert') ?>
    </h5></div>
<?php endif; 
            //notif update data
            if (session()->getFlashdata('update')) : ?>
    <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-info"></i>
        <?= session()->getFlashdata('update') ?>
        </h5></div>
<?php endif; 
            //notif delete data
            if (session()->getFlashdata('delete')) : ?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-trash"></i>
        <?= session()->getFlashdata('delete') ?>
        </h5></div>
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
            <button href="<?= base_url('Kategori/Edit/' . $value['id_kategori']) ?>" class="btn btn-sm btn-warning btn-flat">
                <i class="fas fa-map-marker-alt"></i>Ganti Marker</button>
            </a>
            </a>
        </td>
    </tr>
    <?php } ?>
</tbody>

              </table>
            
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>