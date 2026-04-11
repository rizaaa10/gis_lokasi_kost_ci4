<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $judul ?></h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>

        <div class="card-body">

            <?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i>
        <?= session()->getFlashdata('pesan') ?>
    </h5></div>
<?php endif; ?>
              

            <!-- FORM START -->
           <form action="<?= base_url('admin/updatesetting') ?>" method="post">

            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Nama Website</label>
                        <input name="nama_web"
                               value="<?= $web['nama_web'] ?>"
                               class="form-control"
                               placeholder="Nama Website" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Koordinat Wilayah</label>
                        <input type="text"
                               name="koordinat_wilayah"
                               value="<?= $web['koordinat_wilayah'] ?>"
                               class="form-control"
                               placeholder="Koordinat Wilayah" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>Zoom View</label>
                        <input type="number"
                               name="zoom_view"
                               value="<?= $web['zoom_view'] ?>"
                               min="0"
                               max="20"
                               class="form-control"
                               placeholder="Zoom View" required>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary" type="submit">
                Simpan
            </button>

            <?= form_close() ?>
            <!-- FORM END -->

        </div>
    </div>
</div>

<!-- MAP -->
<div class="col-md-12">
    <div id="map" style="width: 100%; height: 800px;"></div>
</div>

<script>
var peta1 = L.tileLayer(
    'https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png',
    { attribution: '&copy; OpenStreetMap' }
);

var peta2 = L.tileLayer(
    'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}',
    { attribution: 'Tiles &copy; Esri' }
);

var peta3 = L.tileLayer(
    'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
    { attribution: '&copy; OpenStreetMap' }
);

var peta4 = L.tileLayer(
    'https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png',
    {
        attribution: '&copy; OpenStreetMap & CartoDB',
        subdomains: 'abcd'
    }
);

const map = L.map('map', {
    center: [<?= $web['koordinat_wilayah'] ?>],
    zoom: <?= $web['zoom_view'] ?>,
    layers: [peta2]
});

const baseMaps = {
    'OpenStreetMap': peta1,
    'Satellite': peta2,
    'Streets': peta3,
    'Night': peta4
};

L.control.layers(baseMaps).addTo(map);
</script>