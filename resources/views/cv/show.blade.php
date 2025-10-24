@extends('layouts.cv')

@section('title', 'CV - Gagah Fajar')

@section('content')
        <div class="row g-4">
            <!-- Left Column -->
            <div class="col-lg-5">
        <!-- Informasi Kontak -->
        <x-contact-info :contacts="$contactInfo" />
        
        <!-- Section Keahlian -->
        <x-skills-section :skills="$skills" />
        
        <!-- Bahasa -->
        <div class="mb-4">
            <h5 class="section-title">Bahasa</h5>
            <ul class="list-unstyled">
                <li><strong>Indonesia:</strong> Baik</li>
                <li><strong>Inggris:</strong> Dasar</li>
            </ul>
        </div>
        
        <!-- Portofolio dan Project -->
        <div class="mb-4">
            <h5 class="section-title">Portofolio dan Project</h5>
            <div class="portfolio-links">
                <div class="portfolio-item mb-3">
                    <div class="d-flex align-items-center">
                        <i class="fab fa-github me-3 text-primary"></i>
                        <div>
                            <strong class="d-block">GitHub</strong>
                            <span class="text-muted">github.com/gagahfyd</span>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="d-flex align-items-center">
                        <i class="fab fa-behance me-3 text-primary"></i>
                        <div>
                            <strong class="d-block">Behance</strong>
                            <span class="text-muted">behance.net/gagahfyd</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
            <!-- Right Column -->
            <div class="col-lg-7">
        <!-- Ringkasan Profesional -->
        <div class="mb-4">
            <h5 class="section-title">Tentang Saya</h5>
            <p class="text-justify">
                Saya adalah individu yang memiliki minat tinggi dalam bidang desain grafis dan teknologi informasi, dengan kemampuan beradaptasi cepat terhadap perkembangan digital. Memiliki etos kerja yang baik, komunikatif, dan berorientasi pada hasil, serta mampu bekerja secara mandiri maupun dalam tim untuk mencapai tujuan profesional.
            </p>
        </div>
        
        <!-- Pengalaman Kerja -->
        <div class="mb-4">
            <h5 class="section-title">Pengalaman Kerja</h5>
            @foreach($experiences as $experience)
            <x-experience-item 
                :position="$experience['position']"
                :company="$experience['company']"
                :period="$experience['period']"
                :description="$experience['description']"
            />
            @endforeach
        </div>
        
        <!-- Pendidikan -->
        <div class="mb-4">
            <h5 class="section-title">Pendidikan</h5>
            @foreach($educations as $education)
            <x-education-item 
                :degree="$education['degree']"
                :institution="$education['institution']"
                :period="$education['period']"
            />
            @endforeach
        </div>
        
        <!-- Pengalaman Organisasi/Kegiatan -->
        <div class="mb-4">
            <h5 class="section-title">Pengalaman Organisasi/Kegiatan</h5>
            @foreach($organizations as $organization)
            <x-organization-item 
                :position="$organization['position']"
                :organization="$organization['organization']"
                :period="$organization['period']"
                :description="$organization['description']"
            />
            @endforeach
        </div>
        
    </div>
</div>
@endsection

@push('styles')
<style>
    .text-justify {
        text-align: justify;
    }
    .card {
        border: none;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .badge {
        font-size: 0.8rem;
    }
</style>
@endpush
