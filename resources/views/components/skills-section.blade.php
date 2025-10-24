@props(['skills'])

<div class="mb-4">
    <h5 class="section-title">Keahlian</h5>
    @foreach($skills as $category => $skillList)
    <div class="skill-category mb-4">
        <h6 class="skill-category-title">{{ $category }}</h6>
        <div class="skill-badges-container">
            @foreach($skillList as $skill)
            <span class="skill-badge">{{ $skill }}</span>
            @endforeach
        </div>
    </div>
    @endforeach
</div>
