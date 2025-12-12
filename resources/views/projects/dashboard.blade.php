{{-- resources/views/dashboard.blade.php --}}
@extends('layouts.app')

@section('title','Dashboard')

@section('content')
<div class="container py-5">
    <h2 class="text-light mb-4">Dashboard</h2>

    <div class="mb-3">
        <a href="{{ route('projects.create') }}" class="btn btn-warning">Create New Project</a>
    </div>

    @if($projects->count())
        <div class="row g-4">
            @foreach($projects as $project)
                <div class="col-md-6">
                    <div class="card bg-dark text-white h-100">
                        @if($project->image)
                            <img src="{{ asset('storage/'.$project->image) }}" class="card-img-top" style="height:200px; object-fit:cover;">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->title }}</h5>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($project->description, 120) }}</p>
                            <a href="{{ route('projects.show', $project) }}" class="btn btn-sm btn-light">View</a>
                            <a href="{{ route('projects.edit', $project) }}" class="btn btn-sm btn-secondary">Edit</a>

                            <form action="{{ route('projects.destroy', $project) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this project?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-light">You have no projects yet.</p>
    @endif
</div>
@endsection
