@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">{{ $article->name }}</h1>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $article->body }}</p>
                </div>
                <div class="card-footer text-muted">
                    Добавлена: {{ $article->created_at }}
{{--                    <form method="post" action="{{ route('articles.destroy', $article->id) }}" class="float-right">--}}
{{--                        @method('DELETE')--}}
{{--                        @csrf--}}
{{--                        <button type="submit" class="btn btn-link">Удалить</button>--}}
{{--                    </form>--}}
                    <a href="{{ route('articles.destroy', $article->id) }}"
                       data-method="delete"
                       data-confirm="Вы уверены?"
                       data-disable-with="Сохраняем"
                       rel="nofollow"
                       class="float-right">
                        Удалить
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
