@extends('layouts.app')

@section('title', 'Contact & Appointment - Dr. Girish Ojha')

@section('content')
    <!-- Page Header -->
    <section class="hero" style="padding: 40px 0;">
        <div class="container text-center">
            <h1 class="doctor-name" style="font-size: 36px;">Contact & Appointment</h1>
            <p class="mb-0">Get in touch with us or book your consultation online</p>
        </div>
    </section>

    <!-- Appointment Form Section -->
    <section class="section-padding" id="appointment">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="appointment-form" data-aos="fade-up">
                        <h3 class="text-center mb-4" style="color: var(--primary);">Book an Appointment</h3>
                        <p class="text-center text-muted mb-4">Fill the form below and we'll contact you to confirm your appointment</p>
                        
                        <form action="{{ route('appointment.book') }}" method="POST">
                            @csrf
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Full Name *</label>
                                    <input type="text" class="form-control" name="name" required placeholder="Enter your full name">
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Phone Number *</label>
                                    <input type="tel" class="form-control" name="phone" required placeholder="10-digit mobile number">
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Email (Optional)</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter your email">
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Preferred Location *</label>
                                    <select class="form-select" name="preferred_location" required>
                                        <option value="">Select Clinic</option>
                                        @foreach($locations as $location)
                                        <option value="{{ $location->name }}">{{ $location->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Preferred Date</label>
                                    <input type="date" class="form-control" name="preferred_date" min="{{ date('Y-m-d') }}">
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Preferred Time</label>
                                    <select class="form-select" name="preferred_time">
                                        <option value="">Select Time</option>
                                        <option value="10:00 AM - 11:00 AM">10:00 AM - 11:00 AM</option>
                                        <option value="11:00 AM - 12:00 PM">11:00 AM - 12:00 PM</option>
                                        <option value="12:00 PM - 01:00 PM">12:00 PM - 01:00 PM</option>
                                        <option value="04:00 PM - 05:00 PM">04:00 PM - 05:00 PM</option>
                                        <option value="05:00 PM - 06:00 PM">05:00 PM - 06:00 PM</option>
                                        <option value="06:00 PM - 07:00 PM">06:00 PM - 07:00 PM</option>
                                        <option value="07:00 PM - 08:00 PM">07:00 PM - 08:00 PM</option>
                                    </select>
                                </div>
                                
                                <div class="col-12">
                                    <label class="form-label">Message / Symptoms (Optional)</label>
                                    <textarea class="form-control" name="message" rows="3" placeholder="Briefly describe your condition or symptoms..."></textarea>
                                </div>
                                
                                <div class="col-12">
                                    <button type="submit" class="submit-btn">
                                        <i class="fas fa-paper-plane me-2"></i> Request Appointment
                                    </button>
                                </div>
                                
                                <div class="col-12">
                                    <p class="text-muted small text-center mb-0 mt-3">
                                        <i class="fas fa-info-circle me-1"></i> 
                                        We'll confirm your appointment via phone call within 30 minutes during clinic hours.
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Contact -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4" data-aos="fade-right">
                    <div class="location-card text-center">
                        <i class="fas fa-phone-alt fa-3x text-secondary mb-3"></i>
                        <h4>Emergency Contact</h4>
                        <p class="mb-2">For urgent orthopaedic cases, please call:</p>
                        <h3 class="fw-bold" style="color: var(--primary);">+91 98201 16665</h3>
                        <p class="text-muted small mt-3">Available 24/7 for emergencies</p>
                    </div>
                </div>
                
                <div class="col-md-6 mb-4" data-aos="fade-left">
                    <div class="location-card text-center">
                        <i class="fab fa-whatsapp fa-3x text-success mb-3"></i>
                        <h4>WhatsApp</h4>
                        <p class="mb-2">Connect with us on WhatsApp for quick queries:</p>
                        <h3 class="fw-bold" style="color: var(--primary);">+91 98201 16665</h3>
                        <a href="https://wa.me/919820116665" target="_blank" class="btn btn-success mt-3 rounded-pill px-4">
                            <i class="fab fa-whatsapp me-2"></i> Chat on WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection