
// header and main

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

//agency

$(".h1-agency").animate({
  border: 0,
}, 3000, function() {
 $('.h1-agency').removeClass('animate__animated animate__fadeIn');
 $('.h1-agency').removeAttr('style'); 
});


$(".p-agency").animate({
  border: 0,
}, 3200, function() {
 $('.p-agency').removeClass('animate__animated animate__fadeIn');
 $('.p-agency').removeAttr('style'); 
});

$(".agency__second-item").animate({
  border: 0,
}, 4000, function() {
 $('.agency__second-item').removeClass('animate__animated animate__fadeIn');
 $('.agency__second-item').removeAttr('style'); 
});


//blogers

$(".h2-blogers").animate({
  border: 0,
}, 4000, function() {
 $('.h2-blogers').removeClass('animate__animated animate__fadeInUp');
 $('.h2-blogers').removeAttr('style'); 
});

$(".p-blogers").animate({
  border: 0,
}, 4000, function() {
 $('.p-blogers').removeClass('animate__animated animate__fadeInUp');
 $('.p-blogers').removeAttr('style'); 
});


//cases

$(".--lineage").animate({
  border: 0,
}, 4000, function() {
 $('.--lineage').removeClass('animate__animated animate__fadeIn');
 $('.--lineage').removeAttr('style'); 
});

$(".--skillbox").animate({
  border: 0,
}, 4000, function() {
 $('.--skillbox').removeClass('animate__animated animate__fadeIn');
 $('.--skillbox').removeAttr('style'); 
});

$(".--plarium").animate({
  border: 0,
}, 4000, function() {
 $('.--plarium').removeClass('animate__animated animate__fadeIn');
 $('.--plarium').removeAttr('style'); 
});