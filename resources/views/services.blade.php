@extends('layouts.app')

@section('title', 'Our Services - Dr. Girish Ojha')

@section('content')
    <!-- Page Header -->
    <section class="hero" style="padding: 40px 0;">
        <div class="container text-center">
            <h1 class="doctor-name" style="font-size: 36px;">Our Medical Services</h1>
            <p class="mb-0">Comprehensive orthopaedic and dermatology care under one roof</p>
        </div>
    </section>

    <!-- Orthopaedic Services -->
    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-md-8">
                    <h2 class="section-title" style="font-size: 32px;">Orthopaedic Services</h2>
                    <p class="section-subtitle">Expert care for bones, joints, and musculoskeletal system</p>
                </div>
                <div class="col-md-4 text-md-end">
                    <span class="badge bg-secondary px-4 py-2">Led by Dr. Girish T. Ojha</span>
                </div>
            </div>
            
            <div class="row g-4">
                @foreach($orthopaedicServices as $service)
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-{{ $service->icon }}"></i>
                        </div>
                        <h4>{{ $service->name }}</h4>
                        <p class="text-muted small">{{ $service->description ?? 'Advanced treatment for ' . strtolower($service->name) }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Dermatology Services -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-md-8">
                    <h2 class="section-title" style="font-size: 32px;">Dermatology Services</h2>
                    <p class="section-subtitle">Complete skin and hair care solutions</p>
                </div>
                <div class="col-md-4 text-md-end">
                    <span class="badge bg-secondary px-4 py-2">Expert Dermatology Care</span>
                </div>
            </div>
            
            <div class="row g-4">
                @foreach($dermatologyServices as $service)
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-{{ $service->icon }}"></i>
                        </div>
                        <h4>{{ $service->name }}</h4>
                        <p class="text-muted small">{{ $service->description ?? 'Comprehensive care for ' . strtolower($service->name) }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Specialties & Treatments -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Specialized Treatments</h2>
                <p class="section-subtitle">Advanced procedures and treatments we offer</p>
            </div>
            
            <div class="row">
                <div class="col-lg-6 mb-4" data-aos="fade-right">
                    <div class="location-card h-100">
                        <h4 class="fw-bold mb-4" style="color: var(--primary);">
                            <i class="fas fa-bone text-secondary me-2"></i> Orthopaedic Procedures
                        </h4>
                        <ul class="list-unstyled">
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Total Knee Replacement Surgery</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Total Hip Replacement Surgery</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Arthroscopic ACL Reconstruction</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Meniscus Repair Surgery</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Spine Surgery (Microdiscectomy)</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Spinal Fusion Surgery</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Fracture Fixation (ORIF)</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Carpal Tunnel Release</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Trigger Finger Release</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Shoulder Arthroscopy</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Rotator Cuff Repair</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Platelet Rich Plasma (PRP) Therapy</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-4" data-aos="fade-left">
                    <div class="location-card h-100">
                        <h4 class="fw-bold mb-4" style="color: var(--primary);">
                            <i class="fas fa-hand-holding-heart text-secondary me-2"></i> Dermatology Procedures
                        </h4>
                        <ul class="list-unstyled">
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Acne & Scar Treatment</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Chemical Peels</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Microdermabrasion</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Laser Hair Reduction</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> PRP for Hair Fall</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Vitiligo Treatment</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Psoriasis Management</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Eczema Treatment</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Wart Removal</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Mole Removal</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Skin Allergy Treatment</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Anti-Aging Treatments</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facility Features -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Our Facilities</h2>
                <p class="section-subtitle">State-of-the-art infrastructure for advanced care</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="service-card text-center">
                        <i class="fas fa-x-ray fa-3x text-secondary mb-3"></i>
                        <h5>Digital X-Ray</h5>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="150">
                    <div class="service-card text-center">
                        <i class="fas fa-microscope fa-3x text-secondary mb-3"></i>
                        <h5>Pathology Lab</h5>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="service-card text-center">
                        <i class="fas fa-syringe fa-3x text-secondary mb-3"></i>
                        <h5>Day Care OT</h5>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="250">
                    <div class="service-card text-center">
                        <i class="fas fa-truck-medical fa-3x text-secondary mb-3"></i>
                        <h5>Emergency Care</h5>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="service-card text-center">
                        <i class="fas fa-pharmacy fa-3x text-secondary mb-3"></i>
                        <h5>In-House Pharmacy</h5>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="350">
                    <div class="service-card text-center">
                        <i class="fas fa-ambulance fa-3x text-secondary mb-3"></i>
                        <h5>Ambulance Support</h5>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="service-card text-center">
                        <i class="fas fa-credit-card fa-3x text-secondary mb-3"></i>
                        <h5>Insurance Accepted</h5>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="450">
                    <div class="service-card text-center">
                        <i class="fas fa-clock fa-3x text-secondary mb-3"></i>
                        <h5>Flexible Timings</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2 class="cta-title">Need Expert Medical Advice?</h2>
            <p class="cta-text">Consult with Dr. Girish Ojha for all your orthopaedic concerns. Book an appointment today.</p>
            <a href="{{ route('contact') }}#appointment" class="cta-button">
                <i class="fas fa-calendar-check me-2"></i> Book Consultation
            </a>
        </div>
    </section>
@endsection