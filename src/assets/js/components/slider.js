const $ = jQuery;

$(document).ready(() => {
  $(".slider-items").slick({
    fade: true,
    cssEase: "linear",
    autoplay: false,
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
        breakpoint: 1367,
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

  function setBackgroundHeight() {
    const screenWidth = $(window).width();
    const backgroundDiv = $(".slider_items__item");

    if (screenWidth > 1365) {
      backgroundDiv.css("height", "750px");
    } else {
      const calculatedHeight = Math.max((303 / 1366) * screenWidth, 303);
      backgroundDiv.css("height", calculatedHeight + "px");
    }
  }

  // Call the function initially and on window resize
  setBackgroundHeight();
  $(window).on("resize", function () {
    setBackgroundHeight();
  });
});

let wow = new WOW({
  boxClass: "wow",
  animateClass: "animated",
  offset: 120,
  mobile: true,
  live: true,

  scrollContainer: null,
  resetAnimation: true,
});
wow.init();

AOS.init();
