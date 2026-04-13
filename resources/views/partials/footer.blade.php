<footer class="footer">
    <div class="footer-container">
        <div class="footer-brand">
            <div class="footer-logo">🚗 Rajbir's Car Rental</div>
            <p>Your trusted travel companion in Kharar, Punjab since 2015. Safe, affordable, and comfortable rides.</p>
            <div class="footer-social">
                <a href="#" aria-label="WhatsApp">📱</a>
                <a href="#" aria-label="Facebook">💬</a>
                <a href="#" aria-label="Instagram">📷</a>
            </div>
        </div>
        <div class="footer-col">
            <h4>Quick Links</h4>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('cars') }}">Our Fleet</a>
            <a href="{{ route('contact') }}">Contact Us</a>
            <a href="{{ route('cars') }}">Book a Car</a>
        </div>
        <div class="footer-col">
            <h4>Our Cars</h4>
            <a href="{{ route('cars') }}">Maruti Suzuki Ertiga</a>
            <a href="{{ route('cars') }}">Maruti Suzuki Alto</a>
            <a href="{{ route('contact') }}">Custom Booking</a>
        </div>
        <div class="footer-col">
            <h4>Contact</h4>
            <p>📍 Kharar, Punjab - 140301</p>
            <p>📞 <a href="tel:+919501737451">+91 95017 37451</a></p>
            <p>📧 <a href="mailto:rajbircarrental@gmail.com">rajbircarrental@gmail.com</a></p>
            <p>⏰ Open 24/7</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; {{ date('Y') }} Rajbir's Car Rental. All rights reserved. | Kharar, Punjab</p>
    </div>
</footer>
