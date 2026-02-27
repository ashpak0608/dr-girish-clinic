<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <meta name="description" content="Dr. Girish T. Ojha - Best Orthopaedic Surgeon in Mira Road & Bhayandar. Specializing in Joint Replacement, Arthroscopy, Spine Surgery & Trauma Care.">
    <meta name="keywords" content="Orthopaedic Surgeon, Joint Replacement, Arthroscopy, Spine Surgery, Dr. Girish Ojha, Mira Road, Bhayandar">
    <title>@yield('title', 'Dr. Girish Ojha') - Orthopaedic Surgeon</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --primary: #1a5f7a;
            --primary-dark: #0e4b63;
            --secondary: #2c9a7a;
            --accent: #f7b731;
            --light: #f8f9fa;
            --dark: #2c3e50;
            --text: #4a5568;
            --white: #ffffff;
            --shadow: 0 10px 40px rgba(0,0,0,0.08);
            --shadow-hover: 0 20px 60px rgba(26, 95, 122, 0.15);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--text);
            overflow-x: hidden;
            background: var(--white);
            line-height: 1.6;
        }

        /* Top Bar */
        .top-bar {
            background: var(--primary);
            color: var(--white);
            padding: 8px 0;
            font-size: 13px;
            position: relative;
            z-index: 1030;
        }

        .top-bar a {
            color: var(--white);
            text-decoration: none;
            margin-right: 20px;
            transition: opacity 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .top-bar a:hover {
            opacity: 0.9;
            color: var(--accent);
        }

        .top-bar i {
            font-size: 12px;
        }

        /* Header */
        .header {
            background: var(--white);
            box-shadow: 0 2px 20px rgba(0,0,0,0.05);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1020;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
            line-height: 1.2;
        }

        .logo span {
            display: block;
            font-size: 12px;
            font-weight: 400;
            color: var(--secondary);
            letter-spacing: 0.5px;
        }

        .nav-menu {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .nav-link {
            color: var(--dark);
            font-weight: 500;
            padding: 8px 16px;
            text-decoration: none;
            transition: all 0.3s;
            border-radius: 30px;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--white);
            background: var(--primary);
        }

        .appointment-btn {
            background: var(--secondary);
            color: var(--white);
            padding: 10px 24px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 5px 15px rgba(44, 154, 122, 0.3);
        }

        .appointment-btn:hover {
            background: #238b6e;
            color: var(--white);
            transform: translateY(-2px);
        }

        /* Mobile Menu */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            color: var(--primary);
            cursor: pointer;
        }

        .mobile-menu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 85%;
            max-width: 350px;
            height: 100vh;
            background: var(--white);
            z-index: 1050;
            padding: 30px 20px;
            box-shadow: -5px 0 30px rgba(0,0,0,0.15);
            transition: right 0.3s ease;
            overflow-y: auto;
        }

        .mobile-menu.active {
            right: 0;
        }

        .mobile-menu-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .close-menu {
            background: none;
            border: none;
            font-size: 24px;
            color: var(--primary);
            cursor: pointer;
        }

        .mobile-nav {
            list-style: none;
            padding: 0;
        }

        .mobile-nav li {
            margin-bottom: 10px;
        }

        .mobile-nav a {
            display: block;
            padding: 15px 20px;
            color: var(--dark);
            text-decoration: none;
            font-weight: 500;
            border-radius: 10px;
            transition: all 0.3s;
            background: #f8f9fa;
        }

        .mobile-nav a:hover,
        .mobile-nav a.active {
            background: var(--primary);
            color: var(--white);
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.5);
            z-index: 1040;
            display: none;
            backdrop-filter: blur(3px);
        }

        .overlay.active {
            display: block;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 60px 0;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(26,95,122,0.03) 0%, transparent 70%);
            border-radius: 50%;
        }

        .doctor-badge {
            display: inline-block;
            background: var(--accent);
            color: var(--dark);
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .doctor-name {
            font-size: 42px;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 10px;
            line-height: 1.2;
        }

        .doctor-qualification {
            font-size: 18px;
            color: var(--secondary);
            font-weight: 600;
            margin-bottom: 10px;
        }

        .doctor-specialization {
            font-size: 20px;
            color: var(--dark);
            margin-bottom: 20px;
            font-weight: 500;
        }

        .hero-stats {
            display: flex;
            gap: 30px;
            margin: 30px 0;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 28px;
            font-weight: 800;
            color: var(--primary);
            line-height: 1;
        }

        .stat-label {
            font-size: 12px;
            color: var(--text);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .doctor-card {
            background: var(--white);
            border-radius: 20px;
            padding: 30px;
            box-shadow: var(--shadow);
            position: relative;
            z-index: 2;
        }

        .doctor-avatar {
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: var(--white);
            font-size: 48px;
        }

        /* Section Styles */
        .section-padding {
            padding: 80px 0;
        }

        .section-title {
            font-size: 36px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 15px;
            position: relative;
            padding-bottom: 15px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--secondary);
        }

        .section-subtitle {
            font-size: 16px;
            color: var(--text);
            margin-bottom: 40px;
        }

        .text-center .section-title::after {
            left: 50%;
            transform: translateX(-50%);
        }

        /* Cards */
        .location-card {
            background: var(--white);
            border-radius: 20px;
            padding: 30px;
            box-shadow: var(--shadow);
            transition: all 0.3s;
            height: 100%;
            border: 1px solid rgba(0,0,0,0.03);
        }

        .location-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .main-badge {
            background: var(--accent);
            color: var(--dark);
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 15px;
        }

        .location-card h4 {
            font-size: 20px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 15px;
        }

        .location-detail {
            display: flex;
            gap: 12px;
            margin-bottom: 12px;
            font-size: 14px;
        }

        .location-detail i {
            color: var(--secondary);
            width: 20px;
            margin-top: 3px;
        }

        .direction-btn {
            display: inline-block;
            background: var(--primary);
            color: var(--white);
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            margin-top: 15px;
            transition: all 0.3s;
        }

        .direction-btn:hover {
            background: var(--secondary);
            color: var(--white);
        }

        /* Service Cards */
        .service-card {
            background: var(--white);
            border-radius: 15px;
            padding: 25px;
            box-shadow: var(--shadow);
            transition: all 0.3s;
            height: 100%;
            border: 1px solid rgba(0,0,0,0.03);
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .service-icon {
            width: 60px;
            height: 60px;
            background: rgba(44, 154, 122, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .service-icon i {
            font-size: 24px;
            color: var(--secondary);
        }

        .service-card h4 {
            font-size: 18px;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .service-card p {
            font-size: 13px;
            color: var(--text);
            margin: 0;
            line-height: 1.6;
        }

        /* Testimonials */
        .testimonial-card {
            background: var(--white);
            border-radius: 20px;
            padding: 30px;
            box-shadow: var(--shadow);
            height: 100%;
            position: relative;
        }

        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 80px;
            color: rgba(44, 154, 122, 0.1);
            font-family: serif;
        }

        .testimonial-rating {
            margin-bottom: 15px;
        }

        .testimonial-content {
            font-size: 14px;
            line-height: 1.8;
            margin-bottom: 20px;
            color: var(--text);
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            background: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 600;
            font-size: 18px;
        }

        .author-info h5 {
            font-size: 16px;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 5px;
        }

        .author-info p {
            font-size: 12px;
            color: var(--text);
            margin: 0;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: var(--white);
            padding: 60px 0;
            text-align: center;
        }

        .cta-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .cta-text {
            font-size: 16px;
            opacity: 0.9;
            margin-bottom: 30px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-button {
            background: var(--white);
            color: var(--primary);
            padding: 15px 40px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s;
            display: inline-block;
        }

        .cta-button:hover {
            background: var(--accent);
            color: var(--primary);
            transform: translateY(-2px);
        }

        /* Appointment Form */
        .appointment-form {
            background: var(--white);
            border-radius: 20px;
            padding: 40px;
            box-shadow: var(--shadow);
        }

        .form-control, .form-select {
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 12px 16px;
            font-size: 14px;
            transition: all 0.3s;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--secondary);
            box-shadow: 0 0 0 3px rgba(44, 154, 122, 0.1);
        }

        .submit-btn {
            background: var(--secondary);
            color: var(--white);
            border: none;
            padding: 14px 30px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s;
            cursor: pointer;
            width: 100%;
        }

        .submit-btn:hover {
            background: #238b6e;
            transform: translateY(-2px);
        }

        /* Footer */
        .footer {
            background: var(--dark);
            color: var(--white);
            padding: 60px 0 20px;
        }

        .footer h5 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer h5::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: var(--secondary);
        }

        .footer ul {
            list-style: none;
            padding: 0;
        }

        .footer ul li {
            margin-bottom: 10px;
        }

        .footer ul li a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            font-size: 13px;
            transition: all 0.3s;
        }

        .footer ul li a:hover {
            color: var(--secondary);
            padding-left: 5px;
        }

        .footer-contact li {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
            font-size: 13px;
            color: rgba(255,255,255,0.7);
        }

        .footer-contact i {
            color: var(--secondary);
            width: 20px;
            margin-top: 3px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            width: 36px;
            height: 36px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            transition: all 0.3s;
        }

        .social-links a:hover {
            background: var(--secondary);
            transform: translateY(-3px);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            margin-top: 40px;
            padding-top: 20px;
            text-align: center;
            font-size: 12px;
            color: rgba(255,255,255,0.5);
        }

        /* Responsive */
        @media (max-width: 991px) {
            .nav-menu {
                display: none;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .doctor-name {
                font-size: 32px;
            }
            
            .section-title {
                font-size: 28px;
            }
        }

        @media (max-width: 768px) {
            .top-bar .row {
                flex-direction: column;
                gap: 5px;
                text-align: center;
            }
            
            .top-bar a {
                margin: 0 8px;
            }
            
            .hero-stats {
                justify-content: center;
            }
            
            .doctor-card {
                margin-top: 30px;
            }
            
            .section-padding {
                padding: 50px 0;
            }
        }

        /* Utility Classes */
        .text-secondary { color: var(--secondary) !important; }
        .bg-primary-custom { background: var(--primary); }
        .bg-secondary-custom { background: var(--secondary); }
    </style>
    @stack('styles')
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <a href="tel:+919820116665"><i class="fas fa-phone-alt"></i> +91 98201 16665</a>
                    <a href="mailto:contact@drgirish.com"><i class="fas fa-envelope"></i> contact@drgirish.com</a>
                    <a href="#"><i class="fas fa-map-marker-alt"></i> Mira Road & Bhayandar</a>
                </div>
                <div class="col-md-4 text-end">
                    <a href="https://facebook.com/drgirishojha" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://instagram.com/drgirishojha" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('home') }}" class="logo">
                    Dr. Girish Ojha
                    <span>Orthopaedic & Spine Surgeon</span>
                </a>

                <!-- Desktop Menu -->
                <div class="nav-menu">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                    <a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
                    <a href="{{ route('locations') }}" class="nav-link {{ request()->routeIs('locations') ? 'active' : '' }}">Locations</a>
                    <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                    <a href="{{ route('contact') }}#appointment" class="appointment-btn">
                        <i class="fas fa-calendar-check"></i> Book Appointment
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="mobile-menu-btn" id="menuToggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-header">
            <div class="logo">Dr. Girish Ojha</div>
            <button class="close-menu" id="closeMenu"><i class="fas fa-times"></i></button>
        </div>
        <ul class="mobile-nav">
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}"><i class="fas fa-home me-3"></i>Home</a></li>
            <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}"><i class="fas fa-user-md me-3"></i>About</a></li>
            <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}"><i class="fas fa-stethoscope me-3"></i>Services</a></li>
            <li><a href="{{ route('locations') }}" class="{{ request()->routeIs('locations') ? 'active' : '' }}"><i class="fas fa-map-marker-alt me-3"></i>Locations</a></li>
            <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}"><i class="fas fa-envelope me-3"></i>Contact</a></li>
            <li><a href="{{ route('contact') }}#appointment" class="active" style="background: var(--secondary); color: white;"><i class="fas fa-calendar-check me-3"></i>Book Appointment</a></li>
        </ul>
    </div>

    <!-- Overlay -->
    <div class="overlay" id="overlay"></div>

    <!-- Main Content -->
    <main>
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <h5>Dr. Girish T. Ojha</h5>
                    <p style="font-size: 13px; line-height: 1.8; opacity: 0.8;">One of the best orthopaedic surgeons in Mira Road & Bhayandar, specializing in joint replacement, arthroscopy, spine surgery and trauma care.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('locations') }}">Locations</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Our Locations</h5>
                    <ul>
                        <li><a href="#">Mira Road Clinic (Main)</a></li>
                        <li><a href="#">Bhayandar Clinic</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Contact Info</h5>
                    <ul class="footer-contact">
                        <li><i class="fas fa-phone-alt"></i> +91 98201 16665</li>
                        <li><i class="fas fa-phone-alt"></i> +91 90041 97855</li>
                        <li><i class="fas fa-envelope"></i> contact@drgirish.com</li>
                        <li><i class="fas fa-map-marker-alt"></i> Mira Road & Bhayandar</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Dr. Girish T. Ojha. All rights reserved. | Designed for better healthcare</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true
        });

        // Mobile Menu
        const menuToggle = document.getElementById('menuToggle');
        const closeMenu = document.getElementById('closeMenu');
        const mobileMenu = document.getElementById('mobileMenu');
        const overlay = document.getElementById('overlay');

        function openMenu() {
            mobileMenu.classList.add('active');
            overlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeMenuFunc() {
            mobileMenu.classList.remove('active');
            overlay.classList.remove('active');
            document.body.style.overflow = '';
        }

        menuToggle.addEventListener('click', openMenu);
        closeMenu.addEventListener('click', closeMenuFunc);
        overlay.addEventListener('click', closeMenuFunc);

        // Close menu when clicking a link
        document.querySelectorAll('.mobile-nav a').forEach(link => {
            link.addEventListener('click', closeMenuFunc);
        });

        // Smooth scroll for appointment links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
    @stack('scripts')
</body>
</html>