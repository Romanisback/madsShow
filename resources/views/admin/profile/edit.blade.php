@extends('admin.layouts.app')
@section('title', 'Edit profile')

@section('content')
    <header class="page-header">
        <h2>Edit {{ Auth::user()->name }}</h2>
    </header>

    @include('admin.components._alert_messages')

    <div class="row">
        <div class="col-md-12">
            <section class="panel panel-dark">
                <div class="panel-body">
                    <form class="form-horizontal form-bordered" action="{{ route('admin.profile.edit') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="email">Email</label>
                            <div class="col-md-6">
                                <input type="text" value="{{ Auth::user()->email }}" id="email" class="form-control" readonly="readonly">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Имя</label>
                            <div class="col-md-6">
                                <input type="text" name="name" value="{{ Auth::user()->name }}" id="name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="password">Пароль</label>
                            <div class="col-md-6">
                                <input type="text" name="password" value="" id="password" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="mb-xs mt-xs mr-xs btn btn-primary pull-right">Сохранить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
@endsection
