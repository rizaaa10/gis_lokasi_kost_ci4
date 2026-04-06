<div id="map" style="width: 100%; height: 800px;"></div>

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

