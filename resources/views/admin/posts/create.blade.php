@extends('layouts.admin')

@section('content')
<div class="container">
  <form action="{{route('admin.posts.store')}}" method="post">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" placeholder="Inserisci titolo">
      </div>
      <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea name="content" class="form-control" id="content"  cols="30" rows="10" placeholder="Inserisci il contenuto">{{old('content')}}</textarea>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" {{old('published') ? 'checked' : ''}} id="published" name="published">
        <label class="form-check-label" for="published" >Pubblicato</label>
      </div>
      <div class="mb-3">
        <label for="category" class="form-label">category</label>
        <select name="category_id" id="category" class="form-control">
            <option disabled selected value value="">Select category</option>
          @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection