@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Your projects</h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
    </tr>
  </thead>
  <tbody>
  @foreach($projects as $project)
    <tr>
      <th scope="row">{{$project->id}}</th>
      <td>{{$project->title}}</td>
      <td>{{$project->content}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
        
        
        
        
    </section>
@endsection