@extends('admin.layouts.app')
@section('title', 'Clients')

@section('content')
    <header class="page-header">
        <h2>Clients</h2>
        <a href="{{ route('admin.clients.create') }}" class="mb-xs mt-xs mr-xs btn btn-primary pull-right">
            <i class="fa fa-plus-circle" aria-hidden="true"></i> Создать
        </a>
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
                                <th width="160px">Изображение</th>
                                <th>Название</th>
                                <th>Ссылка</th>
                                <th width="50px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clients as $client)
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td><img src="{{ url('storage/' . $client->image) }}" width="150" alt=""></td>
                                    <td class="text-weight-bold">{{ $client->name }}</td>
                                    <td>{{ $client->url }}</td>
                                    <td class="actions text-center">
                                        <a href="{{ route('admin.clients.edit', ['id' => $client->id]) }}"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- pagination -->
                        {{ $clients->appends( request()->query() )->links() }}
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
