<div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $judul ?></h3>

                <div class="card-tools">
                  <a href="<?= base_url('Kost/Input') ?>" class="btn btn-flat btn-primary btn-sm">
                    <i class="fas fa-plus"></i> Tambah
                  </a>
                </div>
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
              <table id="example2" class="table table-sm table-bordered table-striped">
                <thead>
                    <tr class="text-center">
                    <th width="50px">No</th>
                    <th>Nama Kost</th>
                    <th>Alamat</th>
                    <th>Koordinat</th>
                    <th>Foto</th>
                    </tr> 
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($kost as $key => $value) { ?>
                    <tr>
                        <td> <?php echo $no++; ?> </td>
                        <td> <?php echo $value['nama_kost']; ?> </td>
                        <td> <?php echo $value['alamat']; ?> </td>
                         <td> <?php echo $value['koordinat']; ?> </td>
                         <td class="text-center">
                          <a href="<?= base_url('Kost/Edit/' . $value['id_kost']) ?>" class="btn btn-xs btn-success btn-flat"><i class="fas fa-eye"></i></a>
                           <a href="<?= base_url('Kost/Edit/' . $value['id_kost']) ?>" class="btn btn-xs btn-warning btn-flat"><i class="fas fa-pencil-alt"></i></a>
                          <a href="<?= base_url('Kost/Delete/' . $value['id_kost']) ?> " onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-xs btn-danger btn-flat"><i class="fas fa-trash"></i></a>
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


          <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>