@extends('admin.layouts.app')
@section('title', 'Client edit')

@section('content')
    <header class="page-header">
        <h2>Client / Edit</h2>
    </header>

    @include('admin.components._alert_messages')

    <div class="row">
        <div class="col-md-12">
            <form class="" action="{{ route('admin.clients.edit', ['id' => $client->id]) }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <section class="panel panel-dark">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name" class="control-label">Название</label>
                                            <input type="text" id="name" name="name" value="{{ old('name', $client->name) }}" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="url" class="control-label">Ссылка</label>
                                            <input type="url" id="url" name="url" value="{{ old('url', $client->url) }}" class="form-control">
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
                                            <label class="control-label">Изображение</label>
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="input-append">
                                                    <div class="uneditable-input">
                                                        <i class="fa fa-file fileupload-exists"></i>
                                                        <span class="fileupload-preview"></span>
                                                    </div>
                                                    <span class="btn btn-default btn-file">
                                                            <span class="fileupload-exists">Изменить</span>
                                                            <span class="fileupload-new">Выбрать файл</span>
                                                            <input type="file" name="image"/>
                                                        </span>
                                                    <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Удалить</a>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($client->image)
                                            <div class="thumb-info mb-md">
                                                <img src="{{ url('storage/' . $client->image) }}" class="rounded img-responsive" alt="">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('admin.clients.list') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Назад</a>
                            <button class="btn btn-success"><i class="fa fa-save" aria-hidden="true"></i> Сохранить</button>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('admin.clients.delete', ['id' => $client->id]) }}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Удалить</a>
                        </div>
                    </div>
                </footer>
            </form>
        </div>
    </div>


@endsection
