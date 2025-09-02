const startCoordinates = [40, -100];
 
var map = L.map('map').setView(startCoordinates, 4);
 
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    zoomAnimation: true,
    attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
}).addTo(map);
 
async function loadJSON(url) {
    await fetch(url)
      .then(function(res) { return res.json(); })
      .then(function(data) {
        let coord_info = JSON.parse(JSON.stringify(data));
        gotoCoordinates( coord_info.features[0].geometry.coordinates.reverse());
      });
  }
 
  function gotoCoordinates(coordinates) {
    var marker = L.marker(coordinates).addTo(map);
    map.flyTo(coordinates, 10);
  }
 
  loadJSON(url);