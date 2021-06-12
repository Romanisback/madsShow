@extends('admin.layouts.app')
@section('title', 'Orders')

@section('content')
    <header class="page-header">
        <h2>Orders</h2>
    </header>

    <div class="row">
        <div class="col-md-12">
            <section class="panel panel-dark">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered mb-none">
                            <thead>
                            <tr>
                                <th width="50px">#</th>
                                <th>Имя</th>
                                <th>Email</th>
                                <th>Сообщение</th>
                                <th>Бюджет</th>
                                <th>Просмотры</th>
                                <th>Клики</th>
                                <th>Статус</th>
                                <th>Дата</th>
                                <th width="50px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td class="text-weight-bold">{{ $order->name }}</td>
                                    <td>{{ $order->email }}</td>
                                    <td>{{ $order->message }}</td>
                                    <td>{{ $order->value }}</td>
                                    <td>{{ $order->view }}</td>
                                    <td>{{ $order->click }}</td>
                                    <td>{!! $order->statusUI !!}</td>
                                    <td>{{ $order->created_at->format('d-m-Y') }}</td>
                                    <td class="actions text-center">
                                        <a href="{{ route('admin.orders.edit', ['id' => $order->id]) }}"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- pagination -->
                        {{ $orders->appends( request()->query() )->links() }}
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
