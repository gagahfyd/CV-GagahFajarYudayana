@props(['contacts'])

<div class="contact-info">
    <h5 class="section-title">Informasi Kontak</h5>
    <div class="contact-list">
        @foreach($contacts as $contact)
        <div class="contact-item mb-3">
            <div class="d-flex align-items-center">
                <i class="{{ $contact['icon'] }} me-3 text-primary"></i>
                <div>
                    <strong class="d-block">{{ $contact['label'] }}</strong>
                    <span class="text-muted">{{ $contact['value'] }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
