@extends('layouts.app')

@section('title', "Our Fleet - Ertiga & Alto | Rajbir's Car Rental Kharar")

@section('content')

<section class="page-hero cars-hero">
    <div class="page-hero-content">
        <span class="section-tag">Available Now</span>
        <h1>Our Fleet</h1>
        <p>Choose from our well-maintained vehicles. All cars are serviced, insured, and ready for your journey.</p>
    </div>
    <div class="page-hero-wave">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,40 C360,80 1080,0 1440,40 L1440,80 L0,80 Z" fill="var(--bg)"/>
        </svg>
    </div>
</section>

{{-- FILTER BAR --}}
<div class="filter-bar">
    <div class="filter-container">
        <span class="filter-label">Filter by:</span>
        <button class="filter-btn active" data-filter="all">All Cars</button>
        <button class="filter-btn" data-filter="family">Family</button>
        <button class="filter-btn" data-filter="economy">Economy</button>
        <button class="filter-btn" data-filter="ac">AC Available</button>
    </div>
</div>

{{-- CAR CARDS --}}
<section class="cars-section">
    <div class="cars-container">

        {{-- ERTIGA CARD --}}
        <div class="car-card" data-tags="family ac" id="ertiga">
            <div class="car-card-badge">Most Popular</div>
            <div class="car-card-visual ertiga-visual">
                <div class="car-3d-scene">
                    <div class="ertiga-body">
                        <div class="ertiga-roof"></div>
                        <div class="ertiga-chassis">
                            <div class="car-win win-1"></div>
                            <div class="car-win win-2"></div>
                            <div class="car-win win-3"></div>
                            <div class="ertiga-light front-l"></div>
                            <div class="ertiga-light rear-l"></div>
                        </div>
                        <div class="car-wh wh-fl"></div>
                        <div class="car-wh wh-fr"></div>
                        <div class="car-wh wh-rl"></div>
                        <div class="car-wh wh-rr"></div>
                    </div>
                    <div class="scene-ground"></div>
                </div>
                <div class="car-name-badge">Maruti Ertiga</div>
            </div>

            <div class="car-card-info">
                <div class="car-header">
                    <div>
                        <h2 class="car-title">Maruti Suzuki Ertiga</h2>
                        <p class="car-subtitle">7-Seater Family MPV</p>
                    </div>
                    <div class="car-rating">
                        <div class="stars">★★★★★</div>
                        <span>5.0</span>
                    </div>
                </div>

                <div class="car-specs-grid">
                    <div class="spec-item">
                        <div class="spec-icon">👥</div>
                        <div class="spec-text">
                            <span class="spec-val">7</span>
                            <span class="spec-label">Seats</span>
                        </div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-icon">❄️</div>
                        <div class="spec-text">
                            <span class="spec-val">AC</span>
                            <span class="spec-label">Climate</span>
                        </div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-icon">⚙️</div>
                        <div class="spec-text">
                            <span class="spec-val">Manual</span>
                            <span class="spec-label">Trans</span>
                        </div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-icon">⛽</div>
                        <div class="spec-text">
                            <span class="spec-val">Petrol</span>
                            <span class="spec-label">Fuel</span>
                        </div>
                    </div>
                </div>

                <div class="car-features">
                    <span class="feature-tag">✓ Music System</span>
                    <span class="feature-tag">✓ Power Windows</span>
                    <span class="feature-tag">✓ Large Dicky</span>
                    <span class="feature-tag">✓ Child Friendly</span>
                    <span class="feature-tag">✓ GPS Navigation</span>
                    <span class="feature-tag">✓ Airbags</span>
                </div>

                <div class="car-pricing">
                    <div class="price-block">
                        <span class="price-label">Starting from</span>
                        <div class="price-amount">₹1,200<span>/day</span></div>
                        <span class="price-note">+ ₹12/km after 100km</span>
                    </div>
                    <div class="price-options">
                        <div class="price-opt">
                            <span>Half Day (4 hrs)</span>
                            <strong>₹700</strong>
                        </div>
                        <div class="price-opt">
                            <span>Full Day</span>
                            <strong>₹1,200</strong>
                        </div>
                        <div class="price-opt">
                            <span>Weekly (7 days)</span>
                            <strong>₹7,500</strong>
                        </div>
                    </div>
                </div>

                <div class="car-actions">
                    <a href="tel:+919876543210" class="btn-book">
                        📞 Book Ertiga
                    </a>
                    <a href="https://wa.me/919501737451?text=Hi%2C%20I%20want%20to%20book%20the%20Ertiga" class="btn-whatsapp">
                        💬 WhatsApp
                    </a>
                </div>
            </div>
        </div>

        {{-- ALTO CARD --}}
        <div class="car-card" data-tags="economy ac" id="alto">
            <div class="car-card-badge economy-badge">Best Value</div>
            <div class="car-card-visual alto-visual">
                <div class="car-3d-scene">
                    <div class="alto-body">
                        <div class="alto-roof"></div>
                        <div class="alto-chassis">
                            <div class="alto-win win-1"></div>
                            <div class="alto-win win-2"></div>
                            <div class="alto-light front-al"></div>
                            <div class="alto-light rear-al"></div>
                        </div>
                        <div class="car-wh wh-al-fl"></div>
                        <div class="car-wh wh-al-rr"></div>
                    </div>
                    <div class="scene-ground alto-ground"></div>
                </div>
                <div class="car-name-badge">Maruti Alto</div>
            </div>

            <div class="car-card-info">
                <div class="car-header">
                    <div>
                        <h2 class="car-title">Maruti Suzuki Alto</h2>
                        <p class="car-subtitle">5-Seater Economy Hatchback</p>
                    </div>
                    <div class="car-rating">
                        <div class="stars">★★★★★</div>
                        <span>4.9</span>
                    </div>
                </div>

                <div class="car-specs-grid">
                    <div class="spec-item">
                        <div class="spec-icon">👥</div>
                        <div class="spec-text">
                            <span class="spec-val">5</span>
                            <span class="spec-label">Seats</span>
                        </div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-icon">❄️</div>
                        <div class="spec-text">
                            <span class="spec-val">AC</span>
                            <span class="spec-label">Climate</span>
                        </div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-icon">⚙️</div>
                        <div class="spec-text">
                            <span class="spec-val">Manual</span>
                            <span class="spec-label">Trans</span>
                        </div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-icon">⛽</div>
                        <div class="spec-text">
                            <span class="spec-val">Petrol</span>
                            <span class="spec-label">Fuel</span>
                        </div>
                    </div>
                </div>

                <div class="car-features">
                    <span class="feature-tag">✓ Music System</span>
                    <span class="feature-tag">✓ Power Steering</span>
                    <span class="feature-tag">✓ Fuel Efficient</span>
                    <span class="feature-tag">✓ City Perfect</span>
                    <span class="feature-tag">✓ Easy Parking</span>
                    <span class="feature-tag">✓ Low Maintenance</span>
                </div>

                <div class="car-pricing">
                    <div class="price-block">
                        <span class="price-label">Starting from</span>
                        <div class="price-amount">₹800<span>/day</span></div>
                        <span class="price-note">+ ₹9/km after 100km</span>
                    </div>
                    <div class="price-options">
                        <div class="price-opt">
                            <span>Half Day (4 hrs)</span>
                            <strong>₹450</strong>
                        </div>
                        <div class="price-opt">
                            <span>Full Day</span>
                            <strong>₹800</strong>
                        </div>
                        <div class="price-opt">
                            <span>Weekly (7 days)</span>
                            <strong>₹5,000</strong>
                        </div>
                    </div>
                </div>

                <div class="car-actions">
                    <a href="tel:+919501737451" class="btn-book">
                        📞 Book Alto
                    </a>
                    <a href="https://wa.me/919501737451?text=Hi%2C%20I%20want%20to%20book%20the%20Alto" class="btn-whatsapp">
                        💬 WhatsApp
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- COMPARISON TABLE --}}
<section class="compare-section">
    <div class="section-container">
        <div class="section-header">
            <span class="section-tag">Side by Side</span>
            <h2>Compare Your Options</h2>
        </div>
        <div class="compare-table-wrapper">
            <table class="compare-table">
                <thead>
                    <tr>
                        <th>Feature</th>
                        <th class="highlight-col">🚐 Ertiga</th>
                        <th>🚗 Alto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Seating</td><td class="highlight-col">7 persons</td><td>5 persons</td></tr>
                    <tr><td>Daily Rate</td><td class="highlight-col">₹1,200</td><td>₹800</td></tr>
                    <tr><td>Per KM (after 100)</td><td class="highlight-col">₹12</td><td>₹9</td></tr>
                    <tr><td>AC</td><td class="highlight-col">✅</td><td>✅</td></tr>
                    <tr><td>Best For</td><td class="highlight-col">Families, Groups</td><td>Solo, Couples, City</td></tr>
                    <tr><td>Luggage Space</td><td class="highlight-col">Large</td><td>Compact</td></tr>
                    <tr><td>Fuel Economy</td><td class="highlight-col">~15 km/l</td><td>~22 km/l</td></tr>
                    <tr><td>Driver Option</td><td class="highlight-col">✅</td><td>✅</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

{{-- INQUIRY SECTION --}}
<section class="inquiry-section">
    <div class="inquiry-container">
        <div class="inquiry-text">
            <h2>Need Something Custom?</h2>
            <p>Airport pickups, wedding cars, outstation trips, monthly rentals — we've got you covered. Reach out via any channel.</p>
            <div class="inquiry-contact-list">
                <a href="tel:+919876543210" class="inquiry-link">
                    <span class="inq-icon">📞</span>
                    <div>
                        <span>Call Us</span>
                        <strong>+91 95017 37451</strong>
                    </div>
                </a>
                <a href="https://wa.me/919501737451" class="inquiry-link">
                    <span class="inq-icon">💬</span>
                    <div>
                        <span>WhatsApp</span>
                        <strong>Chat Instantly</strong>
                    </div>
                </a>
                <a href="mailto:rajbircarrental@gmail.com" class="inquiry-link">
                    <span class="inq-icon">📧</span>
                    <div>
                        <span>Email Us</span>
                        <strong>rajbircarrental@gmail.com</strong>
                    </div>
                </a>
            </div>
        </div>
        <div class="inquiry-form-wrapper">
            <h3>Quick Inquiry</h3>
            <form class="inquiry-form" action="{{ route('inquiry') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="tel" name="phone" placeholder="Phone Number" required>
                <select name="car">
                    <option value="">Select a Car</option>
                    <option value="ertiga">Maruti Ertiga (7-Seater)</option>
                    <option value="alto">Maruti Alto (5-Seater)</option>
                </select>
                <input type="date" name="date" placeholder="Pickup Date">
                <textarea name="message" placeholder="Tell us about your trip (destination, duration, etc.)" rows="3"></textarea>
                <button type="submit" class="btn-submit">Send Inquiry →</button>
            </form>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script src="{{ asset('js/cars.js') }}"></script>
@endsection
