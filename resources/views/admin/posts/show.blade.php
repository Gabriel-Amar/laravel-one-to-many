@extends('layouts.admin')


@section('content')
    <h1>
        {{$post->title}}
    </h1>
    <p>
        {{$post->content}}
    </p>
    <small>{{$post->created_at}}</small>
    <h5>
        Pubblicato: {{$post->published ? 'Published' : 'Unpublished'}}
    </h5>
    <p>
        <h2>{{$post->category ? $post->category->name : ''}}</h2>
    </p>
@endsection