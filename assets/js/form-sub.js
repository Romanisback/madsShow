$("form").submit(function() {
    const email = $("#email").val().trim();
    const name = $("#name").val().trim();
    const message = $("#message").val().trim();
    const value = $("#value").val().trim();
    const view = $("#view").val().trim();
    const click = $("#click").val().trim();

    let ref = $(this).find("[required]");
    let validforma = true;
    $(ref).each(function() {
      if ( $(this).val() == '' ) {
        validforma = false;
        $(this).focus();
        return false;
      }
    });

   

    if (validforma == true) {
      let th = $(this);
      const ajax = $.ajax({
        type: "POST",
        url: "mail.php",
        data: th.serialize()
      })
      ajax.done(function(){
        alertify.alert("", function(){
          alertify.message(false);
        }).setContent('<h1 class = "al-content-header">Спасибо!</h1><div class = "cheese">Ваша заявка успешно отправлена, наш специалист свяжется с вами в ближайшее время</div>').setHeader('<h1 class="alert-header">Сообщение</h1>').setting({'modal':true,'label': 'Окей'}).show()
      })
    }
    return false;

  });
  
