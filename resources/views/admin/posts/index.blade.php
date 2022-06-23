@extends('layouts.admin')


@section('content')
<div class="container">

  <a href="{{route('admin.posts.create')}}" class="btn btn-primary my-2">Crea nuovo post</a>
  <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Creation Date</th>
          <th scope="col">Modifica</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
          <tr>
            <td><a href="{{route('admin.posts.show', $post->id)}}">{{$post->id}}</a></td>
            <td><a href="{{route('admin.posts.show', $post->id)}}">{{$post->title}}</a></td>
            <td>{{$post->created_at}}</td>
            <td><a class="btn btn-primary" href="{{route('admin.posts.edit', $post->id)}}">Modifica</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection