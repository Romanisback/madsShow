@extends('admin.layouts.app')
@section('title', 'Reviews')

@section('content')
    <header class="page-header">
        <h2>Reviews</h2>
        <a href="{{ route('admin.reviews.create') }}" class="mb-xs mt-xs mr-xs btn btn-primary pull-right">
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
                                <th width="80px">Аватар</th>
                                <th>Отзыв</th>
                                <th>Ссылка</th>
                                <th width="50px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($reviews as $review)
                                <tr>
                                    <td>{{ $review->id }}</td>
                                    <td><img src="{{ url('storage/' . $review->avatar) }}" width="70" alt=""></td>
                                    <td>{{ $review->review }}</td>
                                    <td>{{ $review->url }}</td>
                                    <td class="actions text-center">
                                        <a href="{{ route('admin.reviews.edit', ['id' => $review->id]) }}"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- pagination -->
                        {{ $reviews->appends( request()->query() )->links() }}
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
