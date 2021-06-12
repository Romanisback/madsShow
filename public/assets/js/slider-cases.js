$(document).ready(function(){
    $('.cases-slider').slick({
      rows: 2,
      slidesPerRow: 3,
      fade: false,
      adaptiveHeight: false,
      infinite: true,
      pauseOnFocus: true,
      draggable: true,
      centerMode: false,
      variableWidth: false,
      autoplay: false,
      autoplaySpeed: 5000,
      arrows: true,
      dots: false,
      responsive: [
      {
        breakpoint: 1600,
        settings: {
          slidesPerRow: 2,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesPerRow: 1,
        }
      },
      {
        breakpoint: 768,
        settings: {
          rows: 2,
          arrows: false,
          slidesPerRow: 1,
        }
      }
      ]
      });
})