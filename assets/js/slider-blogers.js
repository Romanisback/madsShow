//BROKEN
    // const images = document.querySelectorAll('.slider .slider-container img');
    // const sliderContainer = document.querySelector('.slider-container');
    
    // let count = 0;
    // let width;
    
    // function init() {
    //     console.log('resize');
    //     width = document.querySelector('.slider').offsetWidth;
    //     sliderContainer.style.width = width * images.length + 'px';
    //     images.forEach(item =>{
    //         item.style.width = width + 'px';
    //         item.style.height = 'auto';
    //     })
      
    //     rollSlider();
    // }

    // window.addEventListener('resize', init);

    // init();
    // document.querySelector('.slider-prev').addEventListener('click', function(){
    //     count--;
    //     if(count<0 ){
    //         count = images.length - 1;
    //     }
    //     rollSlider();
    // })


    // document.querySelector('.slider-next').addEventListener('click', function(){
    //     count++;
    //     if(count>= images.length){
    //         count = 0;
    //     }
    //     rollSlider();
    // })

    // function rollSlider(){
    //     sliderContainer.style.transform = 'translate(-' + count * width + 'px';
    // }
    
// in a module
$('#item'); // <= just works
jQuery('#item'); // <= just works
// $ is automatically set to the exports of module "jquery"

$(document).ready(function(){
    $('.slider-blogers').slick({
        slidesToShow: 5,
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
          breakpoint: 1600,
          settings: {
            slidesToShow: 4,
          }
        },
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            slidesToShow: 1,
          }
        }
        ]
  });
})

