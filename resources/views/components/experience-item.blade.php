@props(['position', 'company', 'period', 'description', 'achievements'])

<div class="experience-item">
    <div class="d-flex justify-content-between align-items-start mb-2">
        <div>
            <h6 class="mb-1 fw-bold">{{ $position }}</h6>
            <p class="mb-1 text-muted">{{ $company }}</p>
        </div>
        <span class="timeline-date">{{ $period }}</span>
    </div>
    <p class="mb-2 text-justify">{{ $description }}</p>
</div>
