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
                                href="/agreement.pdf">персональных данных.</a></p>
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
