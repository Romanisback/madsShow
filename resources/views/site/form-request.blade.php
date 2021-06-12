@extends('site.layouts.app')
@section('title', 'Форма заявки')

@section('content')
    <div class="form" id="form">
        <div class="container">
            <h2>Отправить</h2>
            <form action="{{ route('form_request') }}" autocomplete="off" id="mailForm">
                <div class="sendler">
                    <div class="form__left-child">
                        <div class="title-form">
                            Форма заявки
                        </div>
                        <p>Оставьте заявку</p>
                        <input type="text" name="Имя" id="name" placeholder="Ваше имя:" required>
                        <input type="email" name="Email" id="email" placeholder="Ваш email:" required>
                        <button type="submit" id="sendMail">
                            Отправить
                        </button>
                        <p class="--center">Ответим в течение часа</p>
                        <p class=" --defence">Нажимая на кнопку отправить, я даю согласие на обработку <a
                                href="{{ asset('pdf/agreement.pdf') }}" target="_blank">персональных данных.</a></p>
                        <div class="errormess" id="#errormess"></div>
                        <input type="hidden" name="form_name" value="Заявка с Mads Show">
                    </div>
                    <div class="form__right-child">
                    <textarea name="Сообщение" wrap="hard" placeholder="Комментарий:" id="message" cols="30" rows="10"
                              required>
                    </textarea>
                        <div class="indicators">
                            <div class="indicator-input --budget">
                                <p>Бюджет*:</p>
                                <input type="text" name="Бюджет" class="some-input" id="value">
                            </div>
                            <div class="indicator-input --view">
                                <p>Просмотры*:</p>
                                <input type="text" name="Просмотры" class="some-input" id="view">
                            </div>
                            <div class="indicator-input --click">
                                <p>Клики*:</p>
                                <input type="text" name="Клики" class="some-input" id="click">
                            </div>
                        </div>
                        <input type="range" class="slider" id="range" value="30000" min="10000" step="10000"
                               max="5000000">
                    </div>
                </div>

            </form>
        </div>

    </div>

@endsection

@push('scripts')
    <script>
        $("#sendMail").on("click", function (e) {
            e.preventDefault();

            const email = $("#email").val().trim();
            const name = $("#name").val().trim();
            const message = $("#message").val().trim();
            const value = $("#value").val().trim();
            const view = $("#view").val().trim();
            const click = $("#click").val().trim();
            const range = $(".slider");

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
                            // _form.trigger("reset");
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
                        .setContent(${message})
                    });
                },
            });

            return false;
        });

    </script>
@endpush
