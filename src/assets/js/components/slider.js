const $ = jQuery;

$(document).ready(() => {
  $(".slider-items").slick({
    fade: true,
    cssEase: "linear",
    autoplay: true,
    prevArrow: $(".custom-prev-arrow"),
    nextArrow: $(".custom-next-arrow"),
  });

  // Gallery Slider Settings
  $(".gallery_section").slick({
    fade: false,
    cssEase: "linear",
    autoplay: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1366,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          nav: false,
        },
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 550,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  // Logo Slider Settings
  $(".partners_section").slick({
    fade: false,
    cssEase: "linear",
    autoplay: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1366,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          nav: false,
        },
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 550,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
});
