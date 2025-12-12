@extends('layouts.app')

@section('title','Manage Projects')

@section('content')
<div class="container py-5">

  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="orbitron text-warning">My Projects (CRUD)</h2>
    <a href="{{ route('projects.create') }}"
       class="btn btn-warning fw-bold">
      + Add Project
    </a>
  </div>

  <div class="row g-4">
    @forelse($projects as $project)
      <div class="col-md-4">
        <div class="card bg-dark text-light h-100">
          @if($project->image)
            <img src="{{ asset('storage/'.$project->image) }}"
                 class="card-img-top"
                 style="height:200px; object-fit:cover;">
          @endif

          <div class="card-body">
            <h5>{{ $project->title }}</h5>
            <p>{{ Str::limit($project->description, 100) }}</p>
          </div>

          <div class="card-footer d-flex justify-content-between">
            <a href="{{ route('projects.edit',$project) }}"
               class="btn btn-sm btn-warning">Edit</a>

            <form method="POST"
                  action="{{ route('projects.destroy',$project) }}">
              @csrf
              @method('DELETE')
              <button class="btn btn-sm btn-danger"
                      onclick="return confirm('Delete this project?')">
                Delete
              </button>
            </form>
          </div>
        </div>
      </div>
    @empty
      <p class="text-center text-muted">No projects yet.</p>
    @endforelse
  </div>

</div>
@endsection
