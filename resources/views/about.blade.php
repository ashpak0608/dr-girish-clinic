@extends('layouts.app')

@section('title', 'About Dr. Girish Ojha - Orthopaedic Surgeon')

@section('content')
    <!-- Page Header -->
    <section class="hero" style="padding: 40px 0;">
        <div class="container text-center">
            <h1 class="doctor-name" style="font-size: 36px;">About Dr. Girish T. Ojha</h1>
            <p class="mb-0">Dedicated to providing exceptional orthopaedic care with compassion and expertise</p>
        </div>
    </section>

    <!-- Doctor Profile -->
    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4" data-aos="fade-right">
                    <div class="doctor-card text-center">
                        <div class="doctor-avatar mx-auto">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h3 class="fw-bold mb-2">Dr. Girish T. Ojha</h3>
                        <p class="text-secondary fw-bold mb-2">M.B.B.S., D.ORTHO (MUMBAI)</p>
                        <p class="mb-3">Orthopaedic Trauma, Joint Replacement, Arthroscopy & Spine Surgeon</p>
                        
                        <div class="border-top pt-3 mt-3">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-bold">Experience:</span>
                                <span>15+ Years</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-bold">Languages:</span>
                                <span>English, Hindi, Marathi</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="fw-bold">Consultation Fee:</span>
                                <span class="text-secondary fw-bold">₹{{ $settings['consultation_fee'] ?? '600' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-7" data-aos="fade-left">
                    <h2 class="section-title" style="font-size: 32px;">Meet Your Doctor</h2>
                    
                    <p class="lead">Dr. Girish T. Ojha is one of the leading orthopaedic surgeons in Mira Road and Bhayandar, with over 15 years of clinical experience.</p>
                    
                    <p>He specializes in providing expert care for bones, joints, and the musculoskeletal system. Whether you're dealing with chronic pain, a sports injury, or need advanced surgical solutions, Dr. Ojha and his experienced team are here to help.</p>
                    
                    <h4 class="fw-bold mt-4 mb-3" style="color: var(--primary);">Qualifications & Training</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-secondary me-2"></i> M.B.B.S. from Top Medical College</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-secondary me-2"></i> D.ORTHO (MUMBAI) - Specialization in Orthopaedics</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-secondary me-2"></i> Advanced Training in Joint Replacement Surgery</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-secondary me-2"></i> Fellowship in Arthroscopy & Sports Medicine</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-secondary me-2"></i> Training in Spine Surgery from Leading Institutes</li>
                    </ul>
                    
                    <h4 class="fw-bold mt-4 mb-3" style="color: var(--primary);">Areas of Expertise</h4>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-arrow-right text-secondary me-2"></i> Trauma Surgery</li>
                                <li class="mb-2"><i class="fas fa-arrow-right text-secondary me-2"></i> Joint Replacement</li>
                                <li class="mb-2"><i class="fas fa-arrow-right text-secondary me-2"></i> Arthroscopy</li>
                                <li class="mb-2"><i class="fas fa-arrow-right text-secondary me-2"></i> Spine Surgery</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-arrow-right text-secondary me-2"></i> Fracture Management</li>
                                <li class="mb-2"><i class="fas fa-arrow-right text-secondary me-2"></i> Sports Injuries</li>
                                <li class="mb-2"><i class="fas fa-arrow-right text-secondary me-2"></i> Arthritis Management</li>
                                <li class="mb-2"><i class="fas fa-arrow-right text-secondary me-2"></i> Pediatric Orthopaedics</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Why Choose Us?</h2>
                <p class="section-subtitle">What makes our clinic the preferred choice for patients</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card text-center">
                        <div class="service-icon mx-auto">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h4>Expert Doctor</h4>
                        <p>Led by Dr. Girish Ojha, an experienced orthopaedic and spine surgeon with advanced training.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card text-center">
                        <div class="service-icon mx-auto">
                            <i class="fas fa-hospital"></i>
                        </div>
                        <h4>Modern Facilities</h4>
                        <p>Well-equipped clinics with advanced diagnostic and treatment facilities.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card text-center">
                        <div class="service-icon mx-auto">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4>Convenient Locations</h4>
                        <p>Two easily accessible clinics in Mira Road and Bhayandar with flexible timings.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card text-center">
                        <div class="service-icon mx-auto">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h4>Personalized Care</h4>
                        <p>Individual attention and customized treatment plans for every patient.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card text-center">
                        <div class="service-icon mx-auto">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <h4>Affordable Treatment</h4>
                        <p>Quality healthcare at reasonable costs with transparent pricing.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card text-center">
                        <div class="service-icon mx-auto">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h4>Emergency Support</h4>
                        <p>24/7 availability for orthopaedic emergencies and urgent cases.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection