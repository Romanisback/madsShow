@extends('admin.layouts.app')
@section('title', 'Cases')

@section('content')
    <header class="page-header">
        <h2>Cases</h2>
        <a href="{{ route('admin.cases.create') }}" class="mb-xs mt-xs mr-xs btn btn-primary pull-right">
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
                                <th>Изображение</th>
                                <th>Название</th>
                                <th>Описание</th>
                                <th>Просмотры</th>
                                <th width="50px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cases as $case)
                                <tr>
                                    <td>{{ $case->id }}</td>
                                    <td><img src="{{ url('storage/' . $case->image) }}" width="100" alt=""></td>
                                    <td class="text-weight-bold">{{ $case->title }}</td>
                                    <td>{{ $case->description }}</td>
                                    <td>{{ $case->gained_result }}</td>
                                    <td class="actions text-center">
                                        <a href="{{ route('admin.cases.edit', ['id' => $case->id]) }}"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- pagination -->
                        {{ $cases->appends( request()->query() )->links() }}
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
