@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Create Post</h2>
                @if($errors->any())
                    <ul class="alert alert-danger " style="list-style-type:none;">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
                {!! Form::open(['url' => route('blog.store')]) !!}
                    <div class="form-group">
                        {{-- Title --}}
                        {!! Form::label('title', 'Title', ['style' => 'margin-top:20px;']) !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}

                        {{-- Body --}}
                        {!! Form::label('body', 'Body', ['style' => 'margin-top:20px;']) !!}
                        {!! Form::textArea('body', null, ['class' => 'form-control']) !!}

                        {!! Form::submit('Submit', ['class' => 'btn btn-primary float-right ', 'style' => 'margin-top:20px;']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection