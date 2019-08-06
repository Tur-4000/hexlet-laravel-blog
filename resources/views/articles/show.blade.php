@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">{{ $article->name }}</h1>
                    <p class="card-text">{{ $article->body }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
