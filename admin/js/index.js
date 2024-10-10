$(document).ready(function () {
  if ($("#map").length) {
    var map = L.map("map").setView([52.14481352353405, 6.394056284204322], 13);

    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
      attribution:
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(map);
  }

  if ($(".qrcode-reader").length) {
    $(".qrcode-reader").qrCodeReader({
      callback: function (codes) {
        console.log(codes);

        save_qrcode();
      },
    });
  }

  $('.button[data-action="show_qr"]').click(function (event) {
    get_qrcode(true);
  });

  $(".popup__close").click(function (event) {
    $('[data-popup="qrcode"]').removeClass("open");
  });

  setInterval(function () {
    get_qrcode(false);
  }, 10000);

  $("input[name='data']").on("change", function () {
    if ($("input[name='data']").val() != "") {
      save_qrcode();
    }
  });
});

function get_qrcode(open_popup = false) {
  if ($('[data-popup="qrcode"]').hasClass("open") || open_popup) {
    navigator.geolocation.getCurrentPosition(function (position) {
      $("input.latitude").val(position.coords.latitude);
      $("input.longitude").val(position.coords.longitude);
    });

    setTimeout(() => {
      $.ajax({
        type: "GET",
        cache: false,
        url: "ajax/ajax.qrcode.php",
        dataType: "json",
        data: {
          latitude: $("input.latitude").val(),
          longitude: $("input.longitude").val(),
        },
        success: function (data) {
          $(".qrcode-image").attr("src", data.image);
          $(".qrcode-time").html(data.time);

          if (open_popup) {
            $('[data-popup="qrcode"]').addClass("open");
          }
        },
      });
    }, 500);
  }
}

function save_qrcode() {
  $.ajax({
    type: "POST",
    cache: false,
    url: "ajax/ajax.savescan.php",
    dataType: "json",
    data: {
      data: $("input[name='data']").val(),
    },
    success: function (data) {
      console.log(data);

      $("input[name='data']").val("");
    },
  });
}
