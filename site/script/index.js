var map = L.map("map", {
	center: [-23.01450514528842, -43.403500026247336],
	zoom: 15,
	scrollWheelZoom: false, // Desabilita o zoom com scroll
});

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
	attribution:
		'&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(map);

var marker = L.marker([-23.01450514528842, -43.403500026247336]).addTo(map);

marker.bindPopup("<b>Quiosque Moana</b>").openPopup();
