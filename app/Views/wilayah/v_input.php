<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $judul ?></h3>
        </div>
        <div class="card-body">
            <?= form_open('Wilayah/InsertData') ?>

            <div class="row">
                <!-- Kolom kiri -->
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama Wilayah</label>
                        <input name="nama_wilayah" 
                               class="form-control <?= validation_show_error('nama_wilayah') ? 'is-invalid' : '' ?>" 
                               value="<?= old('nama_wilayah') ?>">
                        <div class="invalid-feedback">
                            <?= validation_show_error('nama_wilayah') ?>
                        </div>
                    </div>
                </div>

                <!-- Kolom kanan -->
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Warna Wilayah</label>
                        <input name="warna" 
                               class="form-control my-colorpicker1 <?= validation_show_error('warna') ? 'is-invalid' : '' ?>" 
                               value="<?= old('warna') ?>">
                        <div class="invalid-feedback">
                            <?= validation_show_error('warna') ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Baris baru untuk GeoJSON -->
            <div class="form-group">
                <label>GeoJSON</label>
                <textarea name="geojson" 
                          class="form-control <?= validation_show_error('geojson') ? 'is-invalid' : '' ?>" 
                          rows="15"><?= old('geojson') ?></textarea>
                <div class="invalid-feedback">
                    <?= validation_show_error('geojson') ?>
                </div>
            </div>

            <button class="btn btn-primary btn-flat" type="submit">Simpan</button>
            <a href="<?= base_url('Wilayah') ?>" class="btn btn-success btn-flat">Kembali</a>

            <?= form_close() ?>
        </div>
    </div>
</div>

<script>
    // Colorpicker
    $('.my-colorpicker1').colorpicker()
</script>
