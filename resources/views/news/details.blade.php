@extends('layouts.app')

@section('content')
    <h1>{{$details->title}}</h1>
    <small>Write on {{$details->created_at}}</small>
    <div class="news-description">{{$details->description}}</div>
@endsection