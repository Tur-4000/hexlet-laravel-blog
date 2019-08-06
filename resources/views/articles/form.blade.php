@if($errors->any())
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif

<div class="form-group">
    {{ Form::label('name', 'Название') }}
    {{ Form::text('name') }}
</div>
<div class="form-group">
    {{ Form::label('body', 'Содержание') }}
    {{ Form::textarea('body') }}
</div>
