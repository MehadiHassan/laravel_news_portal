@extends('layouts.app')

@section('content')
    <h1>News List</h1>
    @if(count($news) > 0)
        @foreach ($news as $value )
            <div class="well">
                <h3><a href="/news/{{$value->id}}">{{$value->title}}</a></h3>
                <small>Written on {{$value->created_at}} </small>
            </div>
        @endforeach
        {{$news->links()}}
    @else 
        <p>No News Found</p>
    @endif
@endsection