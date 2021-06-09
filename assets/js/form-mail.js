$("#sendMail").on("click", function () {
    const email = $("#email").val().trim();
    const name = $("#name").val().trim();
    const message = $("#message").val().trim();
    const value = $("#value").val().trim();
    const view = $("#view").val().trim();
    const click = $("#click").val().trim();

    if (email == "" & name == "" & message.length == "") {
        alertify.alert("Так не пойдет, введите свои данные", function(){
            // alertify.message('OK')
          }).setHeader('Сообщение').set({'label': 'Окей'})
        return false;
    }
    else if (email ==""){
        alertify.alert("", function(){
            alertify.message(false);
          }).setContent('<h1 class = "al-content-header">Спасибо!</h1><div class = "cheese">Ваша заявка успешно отправлена, наш специалист свяжется с вами в ближайшее время</div>').setHeader('<h1 class="alert-header">Сообщение</h1>').setting({'modal':true,'label': 'Окей'}).show()
        return false;
    }
    else if (name == "") {
        alertify.alert("У вас нет имени? Везет :(", function(){
            // alertify.message('OK')
          }).setHeader('Сообщение').set({'label': 'Окей'})
        return false;
    }
    else if (message.length < 5) {
        alertify.alert("Слишком маленький комментарий", function(){
            // alertify.message('OK')
          }).setHeader('Сообщение').set({'label': 'Окей'})
        return false;
    }


    $.ajax({
        url: 'ajax/mail.php',
        type: 'POST',
        cache: false,
        data: { 'name': name, 'email': email, 'message': message, 'value': value, 'view': view, 'click': click },
        dataType: 'html',
        beforeSend: function () {
            $("#sendMail").prop("disabled", true);
        },
        success: function (data) {
            if (!data) {
                
                alertify.alert("У нас ошибки, ваше сообщение не доставлено, обратитесь по номеру телефона в контактах", function(){
                    alertify.message('Вот тут, внизу')
                  })
            } else {
                $("#mailForm").trigger("reset");
            }
            alert(data);
            $("#sendMail").prop("disabled", false);
        }
    });
});

