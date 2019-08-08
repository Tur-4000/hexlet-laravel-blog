@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    {{ Form::model($article, ['url' => route('articles.update', ['id' => $article->id]), 'method' => 'PATCH']) }}

                        @include('articles.form')

                        {{ Form::submit('Обновить') }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
