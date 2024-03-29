@extends('layouts.app')

@section('content')
    @if(session('success'))
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ session()->get('success') }}
                </div>
            </div>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <a href="{{ route('articles.create') }}" class="btn btn-outline-primary">Добавить</a>
            </div>
            <table class="table table-sm table-hover mt-1">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>
                            <a href="{{ route('articles.edit', $article->id) }}">
                                {{ $article->id }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('articles.show', $article->id) }}">
                                {{ $article->name }}
                            </a>
                        </td>
                        <td>
{{--                            <form action="{{ route('articles.destroy', $article->id) }}" method="post">--}}
{{--                                @method('DELETE')--}}
{{--                                @csrf--}}
{{--                                <input type="submit" class="btn btn-link btn-sm" value="Удалить">--}}
{{--                            </form>--}}
                            <a href="{{ route('articles.destroy', $article->id) }}"
                               data-method="delete"
                               data-confirm="Вы уверены?"
                               rel="nofollow"
                               class="float-right">
                                Удалить
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            @if($articles->total() > $articles->count())
                <br>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        {{ $articles->links() }}
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection
