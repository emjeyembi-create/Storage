@extends('layouts.app')

@section('title', $project->title)

@section('content')
<div class="container py-5">
    <h2 class="text-light">{{ $project->title }}</h2>

    @if($project->image)
        <img src="{{ asset('storage/'.$project->image) }}" class="my-3" style="width:100%; max-height:400px; object-fit:cover;">
    @endif

    <p class="text-light">{{ $project->description }}</p>

    @if($project->link)
        <a href="{{ $project->link }}" class="btn btn-warning" target="_blank">View Live Project</a>
    @endif

    @if(auth()->id() === $project->user_id)
        <a href="{{ route('projects.edit', $project) }}" class="btn btn-light mt-3">Edit</a>

        <form action="{{ route('projects.destroy', $project) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger mt-3" onclick="return confirm('Delete this project?')">Delete</button>
        </form>
    @endif
</div>
@endsection
