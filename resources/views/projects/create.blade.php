@extends('layouts.app')

@section('title','Add Project')

@section('content')
<div class="container py-5">
  <h2 class="orbitron text-warning mb-4">Add New Project</h2>

  <form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
      <label class="form-label">Title</label>
      <input type="text" name="title" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Description</label>
      <textarea name="description" class="form-control" rows="4"></textarea>
    </div>

    <div class="mb-3">
      <label class="form-label">Project Image</label>
      <input type="file" name="image" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Project Link</label>
      <input type="url" name="link" class="form-control">
    </div>

    <button class="btn btn-warning fw-bold">Save Project</button>
  </form>
</div>
@endsection
