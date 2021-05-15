document.addEventListener("DOMContentLoaded", ()=>{
    const images = document.querySelectorAll('.slider .slider-container a img');
    const sliderContainer = document.querySelector('.slider-container');
    
    let count = 0;
    let width;
    
    function init() {
        console.log('resize');
        width = document.querySelector('.slider').offsetWidth;
        console.log(width);
    
    }
    
    init();


})
