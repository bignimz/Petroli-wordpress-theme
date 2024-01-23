const $ = jQuery;
$(document).ready(function () {
  function removeWowClass() {
    if ($(window).width() <= 768) {
      $("div").removeClass("wow");
    }
  }

  removeWowClass();

  $(window).resize(function () {
    removeWowClass();
  });
});
