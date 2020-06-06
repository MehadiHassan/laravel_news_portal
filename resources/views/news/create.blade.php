@extends('layouts.app')

@section('content')
    <h1>News Create</h1>
    {!! Form::open(['action' => 'NewsController@store', 'method' => 'POST']) !!}
    
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class'=>'form-control', 'placeholder' => 'News Title'])}}
        </div>

        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', '', ['class'=>'form-control', 'placeholder' => 'Description', 'id'=> 'news-ckeditor'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection