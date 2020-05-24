@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card mt-3">
        <div class="card-header">
          {{$post->title}} | <small> {{$post->category->name}} </small>
        </div>
        <div class="card-body">
          <p>
            {{$post->content}}
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card mt-3">
        <div class="card-header">
          Tambahkan Komentar
        </div>
        @foreach($post->comments()->get() as $comment)
        <div class="card-body">
          <h3> {{$comment->user->name}} | {{$comment->created_at->diffForHumans()}} </h3>
          <p> {{$comment->message}} </p>
        </div>
        @endforeach
        <div class="card-body">
          <form action="{{route('post.comment.store', $post)}}" method="POST" class="form-horizontal">
            @csrf
            <div class="form-group">
              <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Give a comment"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Komentar" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection