// const w = $(window).width();
// change_menu_class();
// $(window).resize(function() {
//   if ($(window).width()==w) 
//   w = $(window).width();
//   change_menu_class();
//   return;
// });

// function change_menu_class() {
//   if ( $(window).width() < 992 ) {
//     $(".menu").removeClass("menu");
//     $("nav").addClass("mobile_menu");
//   } else {
//     $("nav").removeClass("mobile_menu");
//     $("nav").addClass("menu");
//   }
// }   

$(document).ready(function(){
    $('.sandwich').click(function(){
        $('.sandwich').toggleClass('active');
        $('.menu-adaptive').toggleClass('active animate__animated animate__fadeInRight');
    })
})