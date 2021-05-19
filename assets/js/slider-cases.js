$(document).ready(function(){
    $('.cases-slider').slick({
        infinite: true,
        speed: 800,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
        //   {
        //     breakpoint: 1600,
        //     settings: {
        //       slidesToShow: 5,
        //       slidesToScroll: 1,
        //       infinite: true,
        //     }
        //   },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 420,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
    })
})