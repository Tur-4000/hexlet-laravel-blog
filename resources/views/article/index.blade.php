@extends('layouts.app')

@section('content')
    <div>
        <table>
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
                    <td>{{ $article->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $articles->links() }}
    </div>
@endsection
