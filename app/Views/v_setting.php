<div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $judul ?></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              

          <?php echo form_open() ?>

<!-- BARIS 1 (FULL) -->
<div class="form-group">
    <label>Nama Website</label>
    <input type="text" name="nama_web" class="form-control" placeholder="Nama Website">
</div>

<!-- BARIS 2 (SEJAJAR) -->
<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label>Koordinat Wilayah</label>
            <input type="text" name="coordinat_wilayah" class="form-control" placeholder="Koordinat Wilayah">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label>Zoom View</label>
            <input type="number" name="zoom_view" min="0" max="20" class="form-control" placeholder="Zoom View">
        </div>
    </div>
</div>

<button class="btn btn-primary" type="submit">Simpan</button>

<?php echo form_close() ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <div class="col-md-12">
            <div id="map" style="width: 100%; height: 800px;"></div>
</div>


          <script>
    // Streets (pengganti mapbox streets)
var peta1 = L.tileLayer(
'https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png',
  {
    attribution: '&copy; OpenStreetMap'
  }
);

// Satellite (pakai ESRI)
var peta2 = L.tileLayer(
  'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}',
  {
    attribution: 'Tiles &copy; Esri'
  }
);

// OpenStreetMap (biarin tetap)
var peta3 = L.tileLayer(
  'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
  {
    attribution: '&copy; OpenStreetMap'
  }
);

// Night Mode (CartoDB Dark)
var peta4 = L.tileLayer(
  'https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png',
  {
    attribution: '&copy; OpenStreetMap & CartoDB',
    subdomains: 'abcd'
  }
);

    

//const map = L.map('map').setView([-7.04078220038751, 108.88267961227832], 12);

//	const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
//		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
//	}).addTo(map);

    const map = L.map('map', {
	center: [-7.04078220038751, 108.88267961227832],
	zoom: 12,
	layers: [peta2]
});

const baseMaps = {
	'OpenStreetMap': peta1,
    'satellite': peta2,
    'Streets': peta3,
    'Night': peta4,
};

var layerControl = L.control.layers(baseMaps).addTo(map);
</script>