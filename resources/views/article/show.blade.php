@extends('layouts.app')

@section('content')
    <div>
        <h1>{{ $article->name }}</h1>
        <p>{{ $article->body }}</p>
    </div>
@endsection
