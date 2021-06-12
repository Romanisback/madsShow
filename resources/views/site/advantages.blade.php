@extends('site.layouts.app')
@section('title', 'Наши преимущества')

@section('content')
    <div class="advantages animate__animated animate__fadeIn" id="advantages">
        <div class="container">
            <h2>Наши преимущества</h2>
            <div class="advantages-container">
                <div class="item --item1 animate__animated animate__fadeIn">
                    <div class="item-rk-container">
                        <img src="{{ asset('dist/assets/images/blockq.svg') }}" alt="">
                        <img src="{{ asset('dist/assets/images/rect.svg') }}" alt="">
                    </div>
                    <div class="item-container">
                        <div class="title">Отдел маркетинга</div>
                        <p>Проводим рекламные кампании, съемку, монтаж, составляем продающий синопсис.</p>
                    </div>

                </div>
                <div class="item --item2 animate__animated animate__fadeIn">
                    <div class="item-rk-container">
                        <img src="{{ asset('dist/assets/images/advantage/animation.png') }}" alt="">
                        <img src="{{ asset('dist/assets/images/rect.svg') }}" alt="">
                    </div>
                    <div class="item-container">
                        <div class="title">Стабильность</div>
                        <p>Рост популярности канала прямо пропорционален росту трафика. Все видео остаются на канале.</p>
                    </div>

                </div>
                <div class="item --item3 animate__animated animate__fadeIn">
                    <div class="item-rk-container">
                        <img src="{{ asset('dist/assets/images/advantage/stat.png') }}" alt="">
                        <img src="{{ asset('dist/assets/images/rect.svg') }}" alt="">
                    </div>
                    <div class="item-container">
                        <div class="title">Свежие цены</div>
                        <p>Работаем с блогерами напрямую. Не переплачивайте за посредников.инопсис.</p>
                    </div>

                </div>
                <div class="item --item4 animate__animated animate__fadeIn">
                    <div class="item-rk-container">
                        <img src="{{ asset('dist/assets/images/advantage/cube.png') }}" alt="">
                        <img src="{{ asset('dist/assets/images/rect.svg') }}" alt="">
                    </div>
                    <div class="item-container">
                        <div class="title">Безопасность</div>
                        <p>Готовы заключить договор по KPI. В ином случае - проводим рекламу повторно.</p>
                    </div>

                </div>
                <div class="item --item5 animate__animated animate__fadeIn">
                    <div class="item-rk-container">
                        <img src="{{ asset('dist/assets/images/advantage/Pocket-Knife.png') }}" alt="">
                        <img src="{{ asset('dist/assets/images/rect.svg') }}" alt="">
                    </div>
                    <div class="item-container">
                        <div class="title">Универсальность</div>
                        <p>Создаем рекламные материалы, включая анимацию, без дополнительной платы.</p>
                    </div>

                </div>
                <div class="item --item6 animate__animated animate__fadeIn">
                    <div class="item-rk-container">
                        <img src="{{ asset('dist/assets/images/advantage/strategic-plan.png') }}" alt="">
                        <img src="{{ asset('dist/assets/images/rect.svg') }}" alt="">
                    </div>
                    <div class="item-container">
                        <div class="title">Маркетинговые стратегии</div>
                        <p>Повышаем узнаваемость бренда, лояльность к продукту, увеличиваем продажи.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
