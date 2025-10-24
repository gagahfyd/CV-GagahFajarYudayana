@props(['degree', 'institution', 'period', 'gpa', 'description'])

<div class="education-item">
    <div class="d-flex justify-content-between align-items-start mb-2">
        <div>
            <h6 class="mb-1 fw-bold">{{ $degree }}</h6>
            <p class="mb-1 text-muted">{{ $institution }}</p>
        </div>
        <span class="timeline-date">{{ $period }}</span>
    </div>
</div>
