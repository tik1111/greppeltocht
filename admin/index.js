$(document).ready(function () {
  var map = L.map("map").setView([52.14481352353405, 6.394056284204322], 13);

  L.tileLayer("https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png", {
    maxZoom: 20,
    attribution: "",
  }).addTo(map);
});
