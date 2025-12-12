@extends('layouts.app')

@section('title', 'Edit Project')

@section('content')
<div class="container py-5">
    <h2 class="text-light mb-4">Edit Project</h2>

    <form action="{{ route('projects.update', $project) }}" method="POST" enctype="multipart/form-data" class="glass p-4">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label text-light">Project Title</label>
            <input type="text" name="title" class="form-control" value="{{ $project->title }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label text-light">Description</label>
            <textarea name="description" class="form-control" rows="4">{{ $project->description }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label text-light">Live Link</label>
            <input type="text" name="link" class="form-control" value="{{ $project->link }}">
        </div>

        <div class="mb-3">
            <label class="form-label text-light">Project Image</label>
            <input type="file" name="image" class="form-control">

            @if($project->image)
                <img src="{{ asset('storage/'.$project->image) }}" class="mt-3" style="width:150px;">
            @endif
        </div>

        <button class="btn btn-warning">Update Project</button>
    </form>
</div>
@endsection
