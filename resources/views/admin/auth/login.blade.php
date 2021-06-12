<!doctype html>
<html class="fixed" lang="{{ str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">

    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin">
    <meta name="author" content="Dmitry Ovsiichuk">

    <title>{{ config('app.admin') }} - Вход</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <link rel="icon" href="{{ asset('img/brand/favicon.png')}}" type="image/png">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{asset('adm/vendor/bootstrap/css/bootstrap.css')}}" />

    <link rel="stylesheet" href="{{asset('adm/vendor/font-awesome/css/font-awesome.css')}}" />

    <link rel="stylesheet" href="{{asset('adm/css/theme.css')}}" />
    <link rel="stylesheet" href="{{asset('adm/css/skins/default.css')}}" />
    <link rel="stylesheet" href="{{asset('adm/css/stylesheets/theme-custom.css')}}" />

</head>
<body>

<section class="body-sign">
    <div class="center-sign">
        <a href="/" class="logo pull-left">
            <img src="{{ asset('adm/images/Slogo.svg') }}" height="54" alt="Faw Admin">
        </a>
        <div class="panel panel-sign">
            <div class="panel-title-sign mt-md text-right">
                <h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Login</h2>
            </div>
            <div class="panel-body">
                @if (session('danger'))
                    <div class="alert alert-danger">{{ session('danger') }}</div>
                @endif
                    <form action="{{ route('admin.login') }}" method="POST">
                    @csrf
                    <div class="form-group mb-lg">
                        <label>Email</label>
                        <div class="input-group input-group-icon">
                            <input name="email" type="text" value="{{ old('email') }}" class="form-control input-lg" />
                            <span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
                        </div>
                    </div>

                    <div class="form-group mb-lg">
                        <div class="clearfix">
                            <label class="pull-left">Пароль</label>
                        </div>
                        <div class="input-group input-group-icon">
                            <input name="password" type="password" class="form-control input-lg" />
                            <span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-8">

                        </div>
                        <div class="col-sm-4 text-right">
                            <button type="submit" class="btn btn-primary hidden-xs">Войти</button>
                            <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Войти</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <p class="text-center text-muted mt-md mb-md">&copy; Copyright {{ date('Y') }}. All Rights Reserved.</p>
    </div>
</section>


</body>
</html>
