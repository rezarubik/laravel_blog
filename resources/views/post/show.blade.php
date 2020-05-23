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
</div>
@endsection