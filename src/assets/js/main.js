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

  let scrolled = false;

  $(window).scroll(function () {
    if ($(this).scrollTop() > 200 && !scrolled) {
      $(".topbar-section").addClass("hidden");
      $(".header-section").addClass("fixed header-slide-in");
      scrolled = true; // Set scrolled to true to prevent retriggering
    } else if ($(this).scrollTop() <= 200 && scrolled) {
      $(".topbar-section").removeClass("hidden");
      $(".header-section").removeClass("fixed header-slide-in");
      scrolled = false; // Set scrolled to false when scrolling back up
    }
  });

  $(".mobile-menu-icon").click(function () {
    $(".mobile-menu-icon .fa-bars").toggle();
    $(".mobile-menu-icon .fa-times").toggle();
    $(".mobile-menu").slideToggle("slow");
  });

  $('.menu-item a:contains("Contact")').addClass("exclude-hover");
});
