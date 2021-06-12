function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

$("#sendMail").on("click", function (e) {
    e.preventDefault();

    const email = $("#email").val().trim();
    const name = $("#name").val().trim();
    const message = $("#message").val().trim();
    const value = $("#value").val().trim();
    const view = $("#view").val().trim();
    const click = $("#click").val().trim();
    const range = $(".slider");

    if (!validateEmail(email)) {
        alertify.alert("Так не пойдет, вы ввели не email", function(){
            // alertify.message('OK')
        }).setHeader('Сообщение').set({'label': 'Окей'})
        return false;
    }

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

    if (value == '' & view == '' & click == ''){
        value.trigger("reset");
        view.trigger("reset");
        click.trigger("reset");
        range.trigger("reset");
    }

    let _form = $('#mailForm');

    $.ajax({
        url: _form.attr('action'),
        type: 'POST',
        cache: false,
        data: { name: name, email: email, message: message, value: value, view: view, click: click },
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {

            if (data.status === 200) {
                setTimeout(function () {
                    _form.trigger("reset");
                    alertify.alert("", function () {

                    })
                        .setHeader('<h1 class="alert-header">Сообщение</h1>')
                        .setContent(`<h1 class = "al-content-header">Спасибо, ${name}
                          !</h1><div class = "cheese">Наша будущая с вами кампания соберет: ~${view}
                          просмотров и ~${click} активных кликов по ссылке при бюджете ~${value} рублей</div>
                          <div class = "cheese">Специалист свяжется с вами в ближайшее время</div>`)
                        .setting({'modal': true, 'label': 'Окей'})
                        .show()
                }, 1000);
            }
        },
        error: function (data) {
            $.each(data.responseJSON.errors, function( index, value ) {
                let message = value;
                alertify.alert('', function() {

                })
                    .setHeader('Сообщение').set({'label': 'Окей'})
                    .setContent(`${message}`)
            });
        },
    });

    return false;
});
