@props(['title', 'description', 'technologies', 'link', 'github'])

<div class="card mb-3">
    <div class="card-body">
        <h6 class="card-title fw-bold">{{ $title }}</h6>
        <p class="card-text">{{ $description }}</p>
        <div class="mb-2">
            @foreach($technologies as $tech)
            <span class="badge bg-secondary me-1">{{ $tech }}</span>
            @endforeach
        </div>
        <div>
            @if($link)
            <a href="{{ $link }}" target="_blank" class="btn btn-sm btn-outline-primary me-2">
                <i class="fas fa-external-link-alt"></i> Demo Langsung
            </a>
            @endif
            @if($github)
            <a href="{{ $github }}" target="_blank" class="btn btn-sm btn-outline-dark">
                <i class="fab fa-github"></i> GitHub
            </a>
            @endif
        </div>
    </div>
</div>
