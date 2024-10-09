$(document).ready(function () {
  if ($("#map").length) {
    var map = L.map("map").setView([52.14481352353405, 6.394056284204322], 13);

    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
      attribution:
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(map);
  }

  if ($(".qrcode-reader").length) {
    $(".qrcode-reader").qrCodeReader();
  }

  $('.button[data-action="show_qr"]').click(function (event) {
    $.ajax({
      type: "GET",
      cache: false,
      url: "../ajax/ajax.qrcode.php",
      dataType: "json",
      success: function (data) {
        console.log("succes");
      },
    });
  });
});
