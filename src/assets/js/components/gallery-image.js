document.addEventListener("DOMContentLoaded", function () {
  let popupImage = document.getElementById("popupImage");
  let overlay = document.querySelector(".overlay");
  let popup = document.querySelector(".gallery-popup");

  document.querySelectorAll(".popup-trigger").forEach(function (image) {
    image.addEventListener("mouseenter", function (e) {
      e.preventDefault();
    });
    image.addEventListener("click", function (event) {
      event.stopPropagation();
      popupImage.src = this.src;
      overlay.style.display = "block";
      popup.style.display = "block";
      document.body.style.overflow = "hidden"; // Disable body scrolling
    });
  });

  document.body.addEventListener("click", closePopup);

  function closePopup(event) {
    if (!popup.contains(event.target)) {
      overlay.style.display = "none";
      popup.style.display = "none";
      document.body.style.overflow = ""; // Enable body scrolling
    }
  }

  // Add click event for the close-popup span
  document.querySelector(".close-popup").addEventListener("click", function () {
    overlay.style.display = "none";
    popup.style.display = "none";
    document.body.style.overflow = ""; // Enable body scrolling
  });

  overlays = document.querySelectorAll(".gallery_item");
  overlays.forEach(function (overlay) {});
});
