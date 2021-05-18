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
        infinite: true,
        speed: 800,
        slidesToShow: 4,
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