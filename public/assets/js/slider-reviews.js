$(document).ready(function(){
    $('.review-slider').slick({
        slide: "li",
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
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
    })
})