@extends('layouts.app')

@section('content')
<div class="container">
  <form action="{{route('post.store')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="">Title</label>
      <input type="text" name="title" class="form-control" placeholder="Write a post title here">
    </div>
    <div class="form-group">
      <label for="">Category</label>
      <select name="category_id" id="" class="form-control">
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="">Content</label>
      <textarea name="content" rows="5" placeholder="Write a content here" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <input type="submit" value="Save" class="btn btn-primary">
    </div>
  </form>
</div>
@endsection