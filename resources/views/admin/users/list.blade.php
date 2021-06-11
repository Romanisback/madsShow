@extends('admin.layouts.app')
@section('title', 'List workers')

@section('content')
    <header class="page-header">
        <h2>Users</h2>
        <a href="{{ route('admin.users.create') }}" class="mb-xs mt-xs mr-xs btn btn-primary pull-right">
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Роль</th>
                                <th width="50px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td class="text-weight-bold">{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role->name }}</td>
                                    <td class="actions text-center">
                                        <a href="{{ route('admin.users.edit', ['id' => $user->id]) }}"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- pagination -->
                        {{ $users->appends( request()->query() )->links() }}
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection