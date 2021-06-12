@extends('admin.layouts.app')
@section('title', 'User create')

@section('content')
    <header class="page-header">
        <h2>User / Create</h2>
    </header>

    @include('admin.components._alert_messages')

    <div class="row">
        <div class="col-md-12">
            <form class="" action="{{ route('admin.users.create') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <section class="panel panel-dark">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name" class="control-label">Имя</label>
                                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="email" class="control-label">Email</label>
                                            <input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="password" class="control-label">Пароль</label>
                                            <input type="text" id="password" name="password" value="{{ old('password') }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

{{--                    <div class="col-md-4">--}}
{{--                        <section class="panel panel-dark">--}}
{{--                            <div class="panel-body">--}}
{{--                                <div class="row">--}}

{{--                                    <div class="col-md-12">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="role_id" class="control-label">Role</label>--}}
{{--                                            <select class="form-control mb-md" id="role_id" name="role_id">--}}
{{--                                                @foreach(\App\Models\Role::$getRoles as $key => $role)--}}
{{--                                                    <option value="{{ $key }}">{{ $role }}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </section>--}}
{{--                    </div>--}}
                </div>

                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('admin.users.list') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Назад</a>
                            <button class="btn btn-success"><i class="fa fa-save" aria-hidden="true"></i> Сохранить</button>
                        </div>
                    </div>
                </footer>
            </form>
        </div>
    </div>


@endsection

@push('scripts')

@endpush
