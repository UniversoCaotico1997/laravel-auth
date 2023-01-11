@extends('layouts.admin')



@section('content')
<div class="container text-center mt-5">
    <h1>{{$project->title}}</h1>
    <p>{{$project->description}}</p>
</div>
<!-- /.container -->
@endsection