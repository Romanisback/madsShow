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

    if (email == "" & name == "" & message.length == "") {
      alertify.alert("Так не пойдет, введите свои данные", function(){
          // alertify.message('OK')
        }).setHeader('Сообщение').set({'label': 'Окей'})
      return false;
  }
  else if (email < 1 & message.length < 5){
      alertify
      .alert(`Имя конечно у вас красивое, ${name}, но вы забыли про email и комментарий`, 
      function(){
          // alertify.message('OK')
        }).setHeader('Сообщение').set({'label': 'Окей'})
      return false;
  }
  else if(name < 1 & message.length > 5){
      alertify
      .alert(`Вы добавили email и комментарий, но забыли представиться`,
       function(){
          // alertify.message('OK')
        }).setHeader('Сообщение').set({'label': 'Окей'})
        return false;
  }
  else if (email == "") {
      alertify
      .alert(`Имя конечно у вас красивое, ${name}, но вы забыли про email`, 
      function(){
          // alertify.message('OK')
        }).setHeader('Сообщение').set({'label': 'Окей'})
      return false;
  }
  else if (name == "") {
      alertify
      .alert("У вас нет имени? Везет :(",
       function(){
          // alertify.message('OK')
        }).setHeader('Сообщение').set({'label': 'Окей'})
      return false;
  }
  else if (message.length < 5) {
      alertify
      .alert("Слишком маленький комментарий",
       function(){
          // alertify.message('OK')
        }).setHeader('Сообщение').set({'label': 'Окей'})
      return false;
  }


    if (validforma == true) {
      let th = $(this);
      $.ajax({
        type: "POST",
        url: "assets/php/mail.php",
        data: th.serialize(),
        // beforeSend: function(){
        //   console.log($.cookie('requestForm'), false ,{expires: 7 , path: '/form.html'});
        // }
      }).done(function(text) {
        setTimeout(function() {
          th.trigger("reset");
          console.log(text);
          alertify.alert("", function(){
       
          })
          .setHeader('<h1 class="alert-header">Сообщение</h1>')
          .setContent(`<h1 class = "al-content-header">Спасибо, ${name}
          !</h1><div class = "cheese">Наша будущая с вами кампания соберет: ~${view} 
          просмотров и ~${click} активных кликов по ссылке при бюджете ~${value} рублей</div>
          <div class = "cheese">Специалист свяжется с вами в ближайшее время</div>`)
          .setting({'modal':true,'label': 'Окей'})
          .show()
        }, 1000);
      });

     
    }
    return false;
  });
  
