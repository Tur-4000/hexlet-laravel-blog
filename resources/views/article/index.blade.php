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
                <a href="{{ route('article.create') }}" class="btn btn-outline-primary">Добавить</a>
            </div>
            <table class="table table-sm table-hover mt-1">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>{{ $article->id }}</td>
                        <td>
                            <a href="{{ route('article.show', $article->id) }}">
                                {{ $article->name }}
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
