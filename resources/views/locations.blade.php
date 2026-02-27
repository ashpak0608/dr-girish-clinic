@extends('layouts.app')

@section('title', 'Our Clinics - Dr. Girish Ojha')

@section('content')
    <!-- Page Header -->
    <section class="hero" style="padding: 40px 0;">
        <div class="container text-center">
            <h1 class="doctor-name" style="font-size: 36px;">Our Clinics</h1>
            <p class="mb-0">Visit us at our conveniently located centers in Mira Road and Bhayandar</p>
        </div>
    </section>

    <!-- Locations Section -->
    <section class="section-padding">
        <div class="container">
            <div class="row g-4">
                @foreach($locations as $location)
                <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="location-card">
                        @if($location->is_main)
                        <span class="main-badge"><i class="fas fa-star me-1"></i> Main Clinic</span>
                        @endif
                        <h3 class="fw-bold mb-3" style="color: var(--primary);">{{ $location->name }}</h3>
                        
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
                        
                        @if($location->email)
                        <div class="location-detail">
                            <i class="fas fa-envelope"></i>
                            <span>{{ $location->email }}</span>
                        </div>
                        @endif
                        
                        <hr class="my-4">
                        
                        <div class="row g-3">
                            <div class="col-6">
                                <a href="tel:{{ $location->phone }}" class="btn btn-outline-primary w-100 rounded-pill">
                                    <i class="fas fa-phone-alt me-2"></i> Call
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="https://maps.google.com/?q={{ urlencode($location->address) }}" target="_blank" class="btn btn-primary w-100 rounded-pill">
                                    <i class="fas fa-directions me-2"></i> Directions
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title text-center">Find Us on Map</h2>
            <p class="text-center mb-5">Click on any location to open in Google Maps</p>
            
            <div class="row">
                <div class="col-12">
                    <div style="height: 400px; border-radius: 20px; overflow: hidden;">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.123456789!2d72.8!3d19.2!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTHCsDAwJzAwLjAiTiA3MsKwMDAnMDAuMCJF!5e0!3m2!1sen!2sin!4v1234567890" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection