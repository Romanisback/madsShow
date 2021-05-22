
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

$(".blogers").animate({
  border: 0,
}, 4000, function() {
 $('.blogers').removeClass('animate__animated animate__fadeIn');
 $('.blogers').removeAttr('style'); 
});

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


$(".cases-slider").animate({
  border: 0,
}, 4000, function() {
 $('.cases-slider').removeClass('animate__animated animate__fadeIn');
 $('.cases-slider').removeAttr('style'); 
});

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

$(".--zaka").animate({
  border: 0,
}, 4000, function() {
 $('.--zaka').removeClass('animate__animated animate__fadeIn');
 $('.--zaka').removeAttr('style'); 
});

$(".--tld").animate({
  border: 0,
}, 4000, function() {
 $('.--tld').removeClass('animate__animated animate__fadeIn');
 $('.--tld').removeAttr('style'); 
});

$(".--wot").animate({
  border: 0,
}, 4000, function() {
 $('.--wot').removeClass('animate__animated animate__fadeIn');
 $('.--wot').removeAttr('style'); 
});


// footer
$(".footer-content").animate({
  border: 0,
}, 4000, function() {
 $('.footer-content').removeClass('animate__animated animate__fadeIn');
 $('.footer-content').removeAttr('style'); 
});

// Review
$(".review").animate({
  border: 0,
}, 4000, function() {
 $('.review').removeClass('animate__animated animate__fadeInLeft');
 $('.review').removeAttr('style'); 
});

// Advantages

$(".advantages").animate({
  border: 0,
}, 4000, function() {
 $('.advantages').removeClass('animate__animated animate__fadeIn');
 $('.advantages').removeAttr('style'); 
});

$(".--item1").animate({
  border: 0,
}, 4000, function() {
 $('.--item1').removeClass('--item1 animate__animated animate__fadeIn').removeAttr('style');
 /* 
 Чтобы убрать аттрибут style нам 
 нужно повесить событие ТОЛЬКО совместо с 
 событием removeClass, тк модификатор --item
 мы удалили
 */
});
$(".--item2").animate({
  border: 0,
}, 4000, function() {
 $('.--item2').removeClass('--item2 animate__animated animate__fadeIn').removeAttr('style');
});
$(".--item3").animate({
  border: 0,
}, 4000, function() {
 $('.--item3').removeClass('--item3 animate__animated animate__fadeIn').removeAttr('style');
});
$(".--item4").animate({
  border: 0,
}, 4000, function() {
 $('.--item4').removeClass('--item4 animate__animated animate__fadeIn').removeAttr('style');
});
$(".--item5").animate({
  border: 0,
}, 4000, function() {
 $('.--item5').removeClass('--item5 animate__animated animate__fadeIn').removeAttr('style');
});
$(".--item6").animate({
  border: 0,
}, 4000, function() {
 $('.--item6').removeClass('--item6 animate__animated animate__fadeIn').removeAttr('style');
});