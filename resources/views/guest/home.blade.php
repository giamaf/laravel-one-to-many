@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <header>
        <h1 class="my-3">Welcome to my portfolio</h1>
    </header>

    <section>
        <div class="row row-gap-3">
            @forelse ($projects as $project)
                <div class="col-6">
                    <div class="card text-bg-dark">
                        @if ($project->image)
                            <img src="{{ $project->renderImage() }}" class="card-img" alt="{{ $project->title }}">
                        @endif
                        <div class="card-img-overlay">
                            <h5 class="card-title">{{ $project->name }}</h5>
                            <p class="small">{{ $project->content }}</p>
                            <p class="small"><small>{{ $project->created_at }}</small></p>
                            <a href="{{ route('guest.projects.show', $project->slug) }}" class="btn btn-dark"><i
                                    class="far fa-eye me-1"></i>view</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <h1>No projects available</h1>
                </div>
            @endforelse
        </div>
    </section>

    <div class="my-3">
        @if ($projects->hasPages())
            {{ $projects->links() }}
        @endif
    </div>

@endsection
