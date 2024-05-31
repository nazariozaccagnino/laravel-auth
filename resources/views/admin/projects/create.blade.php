@extends('layouts.admin')
@section('content')
<section>
  <div class="container">
    <form action="{{route('admin.projects.store')}}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Insert a title">
      </div>
      @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
      <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <input type="text" class="form-control" id="content" name="content" placeholder="Insert content">
      </div>
      @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
@endsection