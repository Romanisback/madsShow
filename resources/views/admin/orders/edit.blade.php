@extends('admin.layouts.app')
@section('title', 'Order edit')

@section('content')
    <header class="page-header">
        <h2>Order / Edit</h2>
    </header>

    @include('admin.components._alert_messages')

    <div class="row">
        <div class="col-md-12">
            <form class="" action="{{ route('admin.orders.edit', ['id' => $order->id]) }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <section class="panel panel-dark">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name" class="control-label">Имя</label>
                                            <input type="text" id="name" name="name" value="{{ old('name', $order->name) }}" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="email" class="control-label">Email</label>
                                            <input type="text" id="email" name="email" value="{{ old('email', $order->email) }}" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message" class="control-label">Сообщение</label>
                                            <textarea name="message"
                                                      id="message"
                                                      class="form-control description" rows="5">{{ old('message', $order->message) }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="col-md-4">
                        <section class="panel panel-dark">
                            <div class="panel-body">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="status" class="control-label">Статус</label>
                                            <select class="form-control mb-md" id="status" name="status">
                                                @foreach(\App\Models\Order::$getStatuses as $key => $status)
                                                    <option value="{{ $key }}" {{ $order->status == $key ? 'selected' : null }}>{{ $status[0] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="value" class="control-label">Бюджет</label>
                                            <input type="text" id="value" name="value" value="{{ old('value', $order->value) }}" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="view" class="control-label">Просмотры</label>
                                            <input type="text" id="view" name="view" value="{{ old('view', $order->view) }}" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="click" class="control-label">Клики</label>
                                            <input type="text" id="click" name="click" value="{{ old('click', $order->click) }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('admin.orders.list') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Назад</a>
                            <button class="btn btn-success"><i class="fa fa-save" aria-hidden="true"></i> Сохранить</button>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('admin.orders.delete', ['id' => $order->id]) }}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Удалить</a>
                        </div>
                    </div>
                </footer>
            </form>
        </div>
    </div>


@endsection
