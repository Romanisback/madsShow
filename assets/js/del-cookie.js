document.addEventListener('DOMContentLoaded', ()=>{

    $('body').on('click', '.cookies_button', function(){
        $('.cookies').hide();
        $.cookie('hideModal', false, { expires: 7, path: '/' });
    });
    $(function() {
        if (!$.cookie('hideModal')) {
            var delay_popup = 500;
            
            setTimeout("document.getElementById('CookieInfo').style.display='block'", delay_popup);
        }
    });
   
})