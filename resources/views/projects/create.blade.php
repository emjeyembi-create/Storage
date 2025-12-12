@extends('layouts.app')

@section('title', 'Create Project')

@section('content')
<div class="container py-5">
    <h2 class="text-light mb-4">Create New Project</h2>

    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="glass p-4">
        @csrf

        <div class="mb-3">
            <label class="form-label text-light">Project Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label text-light">Description</label>
            <textarea name="description" class="form-control" rows="4"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label text-light">Live Link (optional)</label>
            <input type="text" name="link" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label text-light">Project Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button class="btn btn-warning">Save Project</button>
    </form>
</div>
@endsection
