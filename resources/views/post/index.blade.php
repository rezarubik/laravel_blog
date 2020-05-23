@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      @foreach($posts as $post)
      <div class="card mt-3">
        <div class="card-header">
          <a href="{{route('post.show', $post)}}">{{$post->title}}</a>
          <div class="float-right">
            <a href="{{route('post.edit', $post)}}" class="btn btn-xs btn-warning">Edit</a>
            <form action="{{route('post.destroy', $post)}}" method="POST">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-xs btn-danger">Delete</button>
            </form>
          </div>
        </div>

        <div class="card-body">
          <p>{{Str::limit($post->content, 100, ' ...')}}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection