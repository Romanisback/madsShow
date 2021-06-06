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

    // if (email == "") {
    //   alertify.alert("Вводите email", function(){
    //     alertify.message('OK')
    //   })
    //     return false;
    // }
    // else if (name == "") {
    //   alertify.alert("У вас нет имени? Везет :(", function(){
    //     alertify.message('OK')
    //   })
    //     return false;
    // }
    // else if (message.length < 5) {
    //   alertify.alert("Слишком маленький комментарий", function(){
    //     alertify.message('OK')
    //   })
    //     return false;
    // }

    if (validforma == true) {
      let th = $(this);
      $.ajax({
        type: "POST",
        url: "mail.php",
        data: th.serialize()
      })
    }
    return false;

  });
  
