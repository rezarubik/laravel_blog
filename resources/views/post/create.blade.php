@extends('layouts.app')

@section('content')
<div class="container">
  <form action="{{route('post.store')}}" method="post">
    @csrf
    <div class="form-group" has-feedback{{$errors->has('title') ? ' has-error ' : ''}}>
      <label for="">Title</label>
      <input type="text" name="title" class="form-control" placeholder="Write a post title here" value="{{old('title')}}">
      @if($errors->has('title'))
      <span class="help-block">
        <p> {{$errors->first('title')}} </p>
      </span>
      @endif
    </div>
    <div class="form-group">
      <label for="">Category</label>
      <select name="category_id" id="" class="form-control">
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group" has-feedback{{$errors->has('content') ? ' has-error ' : ''}}>
      <label for="">Content</label>
      <textarea name="content" rows="5" placeholder="Write a content here" class="form-control">{{old('content')}}</textarea>
      @if($errors->has('content'))
      <span class="help-block">
        <p> {{$errors->first('content')}} </p>
      </span>
      @endif
    </div>
    <div class="form-group">
      <input type="submit" value="Save" class="btn btn-primary">
    </div>
  </form>
</div>
@endsection