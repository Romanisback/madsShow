$(document).ready(function(){
    $('.clients-slider').slick({
        slide: "li",
        slidesToShow: 3,
        slidesToScroll: 1,
        fade: false,
        adaptiveHeight: true,
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
        breakpoint: 1201,
        settings: {
            slidesToShow: 2,
        }
        },
        {
        breakpoint: 992,
        settings: {
            slidesToShow: 1,
        }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
            }
            }
        ]
    })
})