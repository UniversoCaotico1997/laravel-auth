@extends('layouts.admin')



@section('content')
<div class="container">
    <h1>Create a New Project</h1>
    @include('partials.errors')
    <form action="{{route('admin.projects.update',$project->slug)}}" method="post">
        @csrf
        @METHOD('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Write Title" aria-describedby="helpId" value="{{old('title', $project->title)}}">
            <small id="helpTitle" class="text-muted">Please Enter The Title</small>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="5">{{old('description',$project->description)}}</textarea>
            <small id="helpDescription" class="text-muted">Please Enter The Description</small>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('admin.projects.index')}}" class="btn btn-info">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg>
            </a>
        </div>
    </form>
</div>
<!-- /.container -->
@endsection