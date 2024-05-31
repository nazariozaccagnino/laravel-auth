@extends('layouts.admin')

@section('content')
<section id="admin">
    <div class="container">
        <!-- @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif -->
        <div class="text-center">
            <a href="{{route('admin.projects.index')}}" class="btn btn-success">Go to your projects</a>
        </div>
    </div>
</section>
@endsection