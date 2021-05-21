$(".logo_wrap").animate({
    border: 0,
    /* 
    Просто задаем не нужный нам стиль
    и убираем классы, добавленые предварительно в hmtl
    
    */
 }, 2500, function() {
   $('.logo_wrap').removeClass('animate__animated animate__fadeIn');
   $('.logo_wrap').removeAttr('style'); 
   // И тут убираем ненужный атрибут html
 });

 $(".menu").animate({
    border: 0,
 }, 3000, function() {
   $('.menu').removeClass('animate__animated animate__fadeIn');
   $('.menu').removeAttr('style'); 
 });

$(".btn_style_header").animate({
  border: 0,
}, 3200, function() {
 $('.btn_style_header').removeClass('animate__animated animate__fadeIn');
 $('.btn_style_header').removeAttr('style'); 
});

$(".h1-agency").animate({
  border: 0,
}, 3000, function() {
 $('.btn_style_header').removeClass('animate__animated animate__fadeIn');
 $('.btn_style_header').removeAttr('style'); 
});

