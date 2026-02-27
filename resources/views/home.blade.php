@extends('layouts.app')

@section('title', 'Dr. Girish Ojha - Best Orthopaedic Surgeon in Mira Road')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="doctor-badge">👨‍⚕️ Leading Orthopaedic Surgeon in Mira Road & Bhayandar</div>
                    <h1 class="doctor-name">Dr. Girish T. Ojha</h1>
                    <div class="doctor-qualification">M.B.B.S., D.ORTHO (MUMBAI)</div>
                    <div class="doctor-specialization">Orthopaedic Trauma, Joint Replacement, Arthroscopy & Spine Surgeon</div>
                    
                    <p class="mb-4" style="font-size: 16px; line-height: 1.8;">Providing expert care for bones, joints, and musculoskeletal system with 15+ years of experience. Advanced training in joint replacement and spine surgery.</p>
                    
                    <div class="hero-stats">
                        <div class="stat-item">
                            <div class="stat-number">15+</div>
                            <div class="stat-label">Years Experience</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">10k+</div>
                            <div class="stat-label">Happy Patients</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">2</div>
                            <div class="stat-label">Clinic Locations</div>
                        </div>
                    </div>
                    
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="{{ route('contact') }}#appointment" class="appointment-btn">
                            <i class="fas fa-calendar-check"></i> Book Appointment
                        </a>
                        <a href="tel:+919820116665" class="btn btn-outline-primary rounded-pill px-4 py-2">
                            <i class="fas fa-phone-alt me-2"></i> Call Now
                        </a>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <div class="doctor-card">
                        <div class="doctor-avatar">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h3 class="text-center fw-bold mb-2">Dr. Girish T. Ojha</h3>
                        <p class="text-center text-secondary mb-3">M.B.B.S., D.ORTHO (MUMBAI)</p>
                        
                        <div class="border-top pt-3 mt-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-graduation-cap text-secondary me-3"></i>
                                <span>Training in Advanced Orthopaedics</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-trophy text-secondary me-3"></i>
                                <span>Fellowship in Joint Replacement</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-language text-secondary me-3"></i>
                                <span>English, Hindi, Marathi</span>
                            </div>
                        </div>
                        
                        <div class="mt-4 text-center">
                            <span class="badge bg-secondary px-3 py-2">Consultation Fee: ₹{{ $settings['consultation_fee'] ?? '600' }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Locations Section -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Our Clinics</h2>
                <p class="section-subtitle">Visit us at our conveniently located centers in Mira Road and Bhayandar</p>
            </div>
            
            <div class="row g-4">
                @foreach($locations as $location)
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="location-card">
                        @if($location->is_main)
                        <span class="main-badge"><i class="fas fa-star me-1"></i> Main Clinic</span>
                        @endif
                        <h4><i class="fas fa-map-marker-alt text-secondary me-2"></i>{{ $location->name }}</h4>
                        
                        <div class="location-detail">
                            <i class="fas fa-location-dot"></i>
                            <span>{{ $location->address }}</span>
                        </div>
                        
                        <div class="location-detail">
                            <i class="fas fa-phone"></i>
                            <span>{{ $location->phone }}</span>
                        </div>
                        
                        <div class="location-detail">
                            <i class="far fa-clock"></i>
                            <span>{{ $location->timings }}</span>
                        </div>
                        
                        <a href="https://maps.google.com/?q={{ urlencode($location->address) }}" target="_blank" class="direction-btn">
                            <i class="fas fa-directions me-2"></i> Get Directions
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Services Preview -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Our Specialties</h2>
                <p class="section-subtitle">Comprehensive orthopaedic and dermatology care</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6" data-aos="fade-right">
                    <h3 class="mb-4" style="color: var(--primary);"><i class="fas fa-bone text-secondary me-2"></i> Orthopaedic Services</h3>
                    <div class="row g-3">
                        @foreach($orthopaedicServices as $service)
                        <div class="col-6">
                            <div class="service-card">
                                <div class="service-icon">
                                    <i class="fas fa-{{ $service->icon }}"></i>
                                </div>
                                <h4>{{ $service->name }}</h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="col-md-6" data-aos="fade-left">
                    <h3 class="mb-4" style="color: var(--primary);"><i class="fas fa-hand-holding-heart text-secondary me-2"></i> Dermatology Services</h3>
                    <div class="row g-3">
                        @foreach($dermatologyServices as $service)
                        <div class="col-6">
                            <div class="service-card">
                                <div class="service-icon">
                                    <i class="fas fa-{{ $service->icon }}"></i>
                                </div>
                                <h4>{{ $service->name }}</h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5" data-aos="fade-up">
                <a href="{{ route('services') }}" class="appointment-btn" style="background: var(--primary);">
                    View All Services <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    @if($testimonials->count() > 0)
    <section class="section-padding bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">What Patients Say</h2>
                <p class="section-subtitle">Trusted by thousands of patients across Mumbai</p>
            </div>
            
            <div class="row g-4">
                @foreach($testimonials as $testimonial)
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            {!! $testimonial->rating_stars !!}
                        </div>
                        <p class="testimonial-content">{{ $testimonial->content }}</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                {{ substr($testimonial->patient_name, 0, 1) }}
                            </div>
                            <div class="author-info">
                                <h5>{{ $testimonial->patient_name }}</h5>
                                <p>{{ $testimonial->treatment }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2 class="cta-title">Ready to Start Your Recovery?</h2>
            <p class="cta-text">Book an appointment today and get expert care for your bone, joint, or skin concerns at our Mira Road or Bhayandar clinic.</p>
            <a href="{{ route('contact') }}#appointment" class="cta-button">
                <i class="fas fa-calendar-check me-2"></i> Schedule Appointment
            </a>
        </div>
    </section>
@endsection