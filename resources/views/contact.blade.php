@extends('layouts.app')

@section('title', "Contact Us - Rajbir's Car Rental Kharar Punjab")

@section('content')

<section class="page-hero contact-hero">
    <div class="page-hero-content">
        <span class="section-tag">Get in Touch</span>
        <h1>Contact Us</h1>
        <p>We're available 24/7. Reach out via phone, email, or just drop by our office in Kharar.</p>
    </div>
    <div class="page-hero-wave">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,40 C360,80 1080,0 1440,40 L1440,80 L0,80 Z" fill="var(--bg)"/>
        </svg>
    </div>
</section>

{{-- CONTACT OPTIONS --}}
<section class="contact-channels">
    <div class="section-container">
        <div class="channels-grid">
            <a href="tel:+919501737451" class="channel-card phone-card">
                <div class="channel-glow"></div>
                <div class="channel-icon">📞</div>
                <h3>Call Us</h3>
                <p class="channel-value">+91 95017 37451</p>
                <p class="channel-note">Available 24/7 — we always pick up</p>
                <div class="channel-cta">Call Now →</div>
            </a>

            <a href="https://wa.me/919501737451" class="channel-card whatsapp-card">
                <div class="channel-glow"></div>
                <div class="channel-icon">💬</div>
                <h3>WhatsApp Chat</h3>
                <p class="channel-value">Quick Responses</p>
                <p class="channel-note">Send message, photos, location — chat just like a friend</p>
                <div class="channel-cta">Open WhatsApp →</div>
            </a>

            <a href="mailto:rajbircarrental@gmail.com" class="channel-card email-card">
                <div class="channel-glow"></div>
                <div class="channel-icon">📧</div>
                <h3>Email Us</h3>
                <p class="channel-value">rajbircarrental@gmail.com</p>
                <p class="channel-note">For detailed bookings, invoices, and corporate inquiries</p>
                <div class="channel-cta">Send Email →</div>
            </a>

            <div class="channel-card address-card">
                <div class="channel-glow"></div>
                <div class="channel-icon">📍</div>
                <h3>Visit Us</h3>
                <p class="channel-value">Kharar, Punjab</p>
                <p class="channel-note">Near Bus Stand, Kharar - 140301, District SAS Nagar</p>
                <div class="channel-cta">Get Directions →</div>
            </div>
        </div>
    </div>
</section>

{{-- CONTACT FORM + INFO --}}
<section class="contact-main-section">
    <div class="contact-layout">
        <div class="contact-form-side">
            <h2>Send Us a Message</h2>
            <p>Fill in the form and we'll get back to you within the hour.</p>

            @if(session('success'))
                <div class="alert-success">✅ {{ session('success') }}</div>
            @endif

            <form class="contact-form" action="{{ route('contact.send') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label>Full Name *</label>
                        <input type="text" name="name" required placeholder="Rajbir Singh" value="{{ old('name') }}">
                        @error('name')<span class="err">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Phone Number *</label>
                        <input type="tel" name="phone" required placeholder="+91 95017 37451" value="{{ old('phone') }}">
                        @error('phone')<span class="err">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="your@email.com" value="{{ old('email') }}">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Car Preference</label>
                        <select name="car">
                            <option value="">Any / Not Sure</option>
                            <option value="ertiga">Ertiga (7-Seater)</option>
                            <option value="alto">Alto (5-Seater)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pickup Date</label>
                        <input type="date" name="pickup_date" value="{{ old('pickup_date') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Your Message *</label>
                    <textarea name="message" rows="5" required placeholder="Tell us about your trip — destination, number of passengers, pickup point, special requirements...">{{ old('message') }}</textarea>
                    @error('message')<span class="err">{{ $message }}</span>@enderror
                </div>
                <button type="submit" class="btn-submit-contact">
                    Send Message 📨
                </button>
            </form>
        </div>

        <div class="contact-info-side">
            <div class="info-card">
                <h3>Office Hours</h3>
                <div class="hours-list">
                    <div class="hour-row">
                        <span>Monday – Sunday</span>
                        <strong>24 Hours Open</strong>
                    </div>
                    <div class="hour-row">
                        <span>Emergency Line</span>
                        <strong class="green">Always Active</strong>
                    </div>
                </div>
            </div>

            <div class="info-card">
                <h3>Our Location</h3>
                <div class="map-placeholder">
                    <div class="map-pin">📍</div>
                    <p>Near Bus Stand<br>Kharar, Punjab - 140301<br>District SAS Nagar</p>
                    <a href="https://maps.google.com/?q=Kharar+Punjab" target="_blank" class="map-link">Open in Google Maps →</a>
                </div>
            </div>

            <div class="info-card">
                <h3>Quick Booking Numbers</h3>
                <div class="qb-list">
                    <a href="tel:+919501737451" class="qb-item">
                        <span>📞 Primary</span>
                        <strong>+91 95017 37451</strong>
                    </a>
                    <a href="tel:+9195" class="qb-item">
                        <span>📞 Alternate</span>
                        <strong>+91 95017 37451</strong>
                    </a>
                    <a href="https://wa.me/919501737451" class="qb-item whatsapp">
                        <span>💬 WhatsApp</span>
                        <strong>+91 95017 37451</strong>
                    </a>
                </div>
            </div>

            <div class="info-card faq-card">
                <h3>Common Questions</h3>
                <div class="faq-list">
                    <div class="faq-item">
                        <strong>Do you provide a driver?</strong>
                        <p>Yes! Both self-drive and driver-included options are available.</p>
                    </div>
                    <div class="faq-item">
                        <strong>Is fuel included?</strong>
                        <p>Fuel is included in selected packages. Ask us when booking.</p>
                    </div>
                    <div class="faq-item">
                        <strong>What documents do I need?</strong>
                        <p>Valid driving license and Aadhaar card for self-drive bookings.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
