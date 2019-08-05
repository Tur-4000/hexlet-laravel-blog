@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-sm">
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

            {{ $articles->links() }}
        </div>
    </div>
@endsection
