var map = L.map('map').setView([46.824775516486575, 6.986696943007135], 10);

L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth/{z}/{x}/{y}{r}.png', {
    minZoom : 10,
    maxZoom : 10,
    attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
}).addTo(map);

/*
L.marker([46.99106243540891, 6.929391593130528]).addTo(map)
    .bindPopup('Neuchâtel');

L.marker([46.58940140320681, 7.082752192149782]).addTo(map)
    .bindPopup('La Gruyère');
*/


L.circle([46.99106243540891, 6.929391593130528], {
    color: '#AE0000',
    fillColor: '#AE0000',
    fillOpacity: 1,
    radius: 500
}).addTo(map).bindPopup('Neuchâtel');

L.circle([46.58940140320681, 7.082752192149782], {
    color: '#AE0000',
    fillColor: '#AE0000',
    fillOpacity: 1,
    radius: 500
}).addTo(map).bindPopup('La Gruyère');