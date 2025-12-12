@extends('layouts.app')

@section('title', 'My Projects')

@section('content')
<div class="container py-5">
    <h2 class="text-light mb-4">My Projects</h2>

    @auth
        <a href="{{ route('projects.create') }}" class="btn btn-warning mb-3">Add New Project</a>
    @endauth

    <div class="row g-4">
        @forelse($projects as $project)
            <div class="col-md-4">
                <div class="card bg-dark text-white h-100">
                    @if($project->image)
                        <img src="{{ asset('storage/'.$project->image) }}" class="card-img-top" style="height:200px; object-fit:cover;">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $project->title }}</h5>
                        <p class="card-text">{{ Str::limit($project->description, 100) }}</p>

                        <a href="{{ route('projects.show', $project) }}" class="btn btn-sm btn-warning">View</a>

                        @if(auth()->id() === $project->user_id)
                            <a href="{{ route('projects.edit', $project) }}" class="btn btn-sm btn-light">Edit</a>

                            <form method="POST" action="{{ route('projects.destroy', $project) }}" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this project?')">Delete</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <p class="text-light">No projects available.</p>
        @endforelse
    </div>

    <div class="mt-3">
        {{ $projects->links() }}
    </div>
</div>
@endsection
