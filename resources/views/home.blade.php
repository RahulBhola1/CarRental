@extends('layouts.app')

@section('title', "Rajbir's Car Rental - Premium Car Rental in Kharar, Punjab")

@section('content')

{{-- 3D HERO SECTION --}}
<section class="hero" id="hero">
    <div class="hero-bg">
        <div class="hero-road"></div>
        <div class="hero-grid"></div>
        <div class="hero-glow glow-1"></div>
        <div class="hero-glow glow-2"></div>
        <div class="hero-particles" id="particles"></div>
    </div>

    <div class="hero-content">
        <div class="hero-badge">📍 Kharar, Punjab</div>
        <h1 class="hero-title">
            <span class="title-line title-sub">Welcome to</span>
            <span class="title-line title-main">Rajbir's</span>
            <span class="title-line title-accent">Car Rental</span>
        </h1>
        <p class="hero-tagline">Your journey, our commitment — drive in comfort across Punjab and beyond</p>
        <div class="hero-contact-bar">
            <a href="tel:+919876543210" class="contact-pill phone">
                <span class="pill-icon">📞</span>
                <div>
                    <span class="pill-label">Call Us Anytime</span>
                    <span class="pill-value">+91 95017 37451</span>
                </div>
            </a>
            <a href="https://wa.me/919501737451" class="contact-pill whatsapp">
                <span class="pill-icon">💬</span>
                <div>
                    <span class="pill-label">WhatsApp</span>
                    <span class="pill-value">Chat Now</span>
                </div>
            </a>
        </div>
        <div class="hero-actions">
            <a href="{{ route('cars') }}" class="btn-primary-3d">
                <span>Explore Our Fleet</span>
                <div class="btn-shine"></div>
            </a>
            <a href="{{ route('contact') }}" class="btn-outline">Get a Quote</a>
        </div>
    </div>

    <div class="hero-car-scene">
        <div class="car-3d-wrapper">
            <div class="car-body">
                <div class="car-top"></div>
                <div class="car-bottom">
                    <div class="car-window car-window-front"></div>
                    <div class="car-window car-window-rear"></div>
                    <div class="car-door-line"></div>
                    <div class="car-headlight headlight-front"></div>
                    <div class="car-headlight headlight-rear"></div>
                </div>
            </div>
            <div class="car-wheel wheel-front"></div>
            <div class="car-wheel wheel-rear"></div>
            <div class="car-shadow"></div>
        </div>
    </div>

    <div class="hero-scroll-hint">
        <span>Scroll to explore</span>
        <div class="scroll-arrow"></div>
    </div>
</section>

{{-- STATS STRIP --}}
<section class="stats-strip">
    <div class="stats-container">
        <div class="stat-item">
            <div class="stat-number" data-target="500">100+</div>
            <div class="stat-label">Happy Customers</div>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
            <div class="stat-number">3+</div>
            <div class="stat-label">Years Experience</div>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
            <div class="stat-number">2</div>
            <div class="stat-label">Premium Cars</div>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
            <div class="stat-number">24/7</div>
            <div class="stat-label">Available</div>
        </div>
    </div>
</section>

{{-- WHY CHOOSE US --}}
<section class="why-section">
    <div class="section-container">
        <div class="section-header">
            <span class="section-tag">Why Choose Us</span>
            <h2>The Rajbir's Difference</h2>
            <p>We don't just rent cars — we deliver experiences</p>
        </div>
        <div class="why-grid">
            <div class="why-card" data-delay="0">
                <div class="why-icon">🛡️</div>
                <h3>Fully Insured</h3>
                <p>All vehicles come with comprehensive insurance. Drive worry-free across Punjab and beyond.</p>
            </div>
            <div class="why-card" data-delay="100">
                <div class="why-icon">⛽</div>
                <h3>Fuel Included</h3>
                <p>Selected packages include fuel. No hidden costs — just transparent, honest pricing.</p>
            </div>
            <div class="why-card" data-delay="200">
                <div class="why-icon">👨‍✈️</div>
                <h3>Expert Driver Option</h3>
                <p>Book with a professional, licensed driver for extra comfort on long routes.</p>
            </div>
            <div class="why-card" data-delay="300">
                <div class="why-icon">🔧</div>
                <h3>Well-Maintained Fleet</h3>
                <p>Regular servicing and checks. Every ride is smooth, safe, and reliable.</p>
            </div>
            <div class="why-card" data-delay="400">
                <div class="why-icon">📍</div>
                <h3>Local Expertise</h3>
                <p>Based in Kharar, we know every road from Chandigarh to Amritsar and Shimla.</p>
            </div>
            <div class="why-card" data-delay="500">
                <div class="why-icon">💰</div>
                <h3>Best Rates</h3>
                <p>Competitive pricing with no compromise on quality. Flexible daily, weekly, monthly plans.</p>
            </div>
        </div>
    </div>
</section>

{{-- POPULAR ROUTES --}}
<section class="routes-section">
    <div class="section-container">
        <div class="section-header">
            <span class="section-tag">Popular Routes</span>
            <h2>Where We Take You</h2>
        </div>
        <div class="routes-scroll">
            <div class="route-chip">Kharar → Chandigarh</div>
            <div class="route-chip">Kharar → Amritsar</div>
            <div class="route-chip">Kharar → Shimla</div>
            <div class="route-chip">Kharar → Delhi</div>
            <div class="route-chip">Kharar → Manali</div>
            <div class="route-chip">Kharar → Ludhiana</div>
            <div class="route-chip">Kharar → Jalandhar</div>
            <div class="route-chip">Airport Transfers</div>
            <div class="route-chip">Wedding Rentals</div>
        </div>
    </div>
</section>

{{-- CTA SECTION --}}
<section class="cta-section">
    <div class="cta-bg"></div>
    <div class="cta-content">
        <h2>Ready to Hit the Road?</h2>
        <p>Call us now or browse our fleet to find your perfect ride</p>
        <div class="cta-actions">
            <a href="tel:+919501737451" class="btn-primary-3d">
                <span>📞 +91 95017 37451</span>
                <div class="btn-shine"></div>
            </a>
            <a href="{{ route('cars') }}" class="btn-outline">View Cars</a>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script src="{{ asset('js/home.js') }}"></script>
@endsection
