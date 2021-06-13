$("#sendMail").on("click", function () {
    const email = $("#email").val().trim();
    const name = $("#name").val().trim();
    const message = $("#message").val().trim();
    // const value = $("#value").val();
    // const view = $("#view").val();
    // const click = $("#click").val();
    // const range = $(".slider");

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
    // else if (value.val() == '' & view.val() == '' & click.val() == ''){
    //     value.text("30000");
    //     view.text("300000");
    //     click.text("6000");
    //     range.trigger("reset")
    // }
    
  
});

