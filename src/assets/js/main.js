const $ = jQuery;

$(document).ready(() => {
  let timer;

  $(document).on("mouseenter", ".menu-item", (e) => {
    e.preventDefault();
    clearTimeout(timer);
    $(e.currentTarget).find(".sub-menu").addClass("open");
  });

  $(document).on("mouseleave", ".menu-item", (e) => {
    e.preventDefault();
    let $submenu = $(e.currentTarget).find(".sub-menu");
    timer = setTimeout(() => {
      $submenu.removeClass("open");
    }, 300);
  });

  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      $(".topbar-section").css("opacity", "0"); // Hide top bar
      $(".header-section").addClass("fixed").css("top", "0"); // Fix header
    } else {
      $(".topbar-section").css("opacity", "1"); // Show top bar
      $(".header-section").removeClass("fixed").css("top", "0"); // Unfix header
    }
  });

  $(".mobile-menu-icon").click(function () {
    $(".mobile-menu-icon .fa-bars").toggle();
    $(".mobile-menu-icon .fa-times").toggle();
    $(".mobile-menu").slideToggle("slow");
  });

  $('.menu-item a:contains("Contact")').addClass("exclude-hover");
});
