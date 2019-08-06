@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    {{ Form::model($article, ['url' => route('article.store')]) }}

                        @include('article.form')

                        {{ Form::submit('Сохранить') }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
