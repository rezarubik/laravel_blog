@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card mt-3">
        <div class="card-header">Edit Post</div>

        <div class="card-body">
          <form action="{{route('post.update', $post)}}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
              <label for="">Title</label>
              <input type="text" name="title" class="form-control" placeholder="Write a post title here" value="{{$post->title}}">
            </div>
            <div class="form-group">
              <label for="">Category</label>
              <select name="category_id" id="" class="form-control">
                @foreach($categories as $category)
                <option value="{{$category->id}}" @if($category->id === $post->category_id)
                  selected
                  @endif
                  >{{$category->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="">Content</label>
              <textarea name="content" rows="5" placeholder="Write a content here" class="form-control">{{$post->content}}</textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Save" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection