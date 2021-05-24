$("#sendMail").on("click", function () {
    const email = $("#email").val().trim();
    const name = $("#name").val().trim();
    const message = $("#message").val().trim();
    const value = $("#value").val().trim();
    const view = $("#view").val().trim();
    const click = $("#click").val().trim();

    if (email == "") {
        $("#errormess").text("Введите email")
        return false;
    }
    else if (name == "") {
        $("#errormess").text("Введите имя")
        return false;
    }
    else if (message.length < 5) {
        $("#errormess").text("Введите ваш комментарий (не менее 5 символов)")
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
                alert("У нас ошибки, ваше сообщение не доставлено, обратитесь по номеру телефона в контактах");
            } else {
                $("#mailForm").trigger("reset");
            }
            alert(data);
            $("#sendMail").prop("disabled", false);
        }
    });
});