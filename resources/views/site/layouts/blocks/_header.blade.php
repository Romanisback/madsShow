<header>
    <div class="container">

        <div class="header_wrap">
            <a href="{{ route('home') }}" class="logo_wrap animate__animated animate__fadeIn">
                <img src="../assets/images/Slogo.svg" alt="Logo">
            </a>
            <nav class="menu animate__animated animate__fadeIn">
                <ul>
                    <li><a href="{{ route('home') }}#blogers">Наши блогеры</a></li>
                    <li><a href="{{ route('cases') }}">Кейсы</a></li>
                    <li><a href="{{ route('advantages') }}">Наши преимущества</a></li>
                    <li><a href="{{ route('reviews') }}">Отзывы</a></li>
                    <li><a href="{{ route('clients') }}">Клиенты</a></li>

                </ul>
            </nav>
            <a href="{{ route('form_request') }}" class="request btn_style_header animate__animated animate__fadeIn">
                <span>Оставить заявку</span>
                <span><i></i></span>
            </a>
            <div class="sandwich">
                <span></span>
            </div>
            <nav class="menu-adaptive">
                <ul>
                    <li><a href="{{ route('form_request') }}" class="--foo">Оставить заявку</a></li>
                    <li><a href="{{ route('home') }}#blogers">Наши блогеры</a></li>
                    <li><a href="{{ route('cases') }}">Кейсы</a></li>
                    <li><a href="{{ route('advantages') }}">Наши преимущества</a></li>
                    <li><a href="{{ route('reviews') }}">Отзывы</a></li>
                    <li><a href="{{ route('clients') }}">Клиенты</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
