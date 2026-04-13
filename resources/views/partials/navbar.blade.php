<nav class="navbar" id="navbar">
    <div class="nav-container">
        <a href="{{ route('home') }}" class="nav-logo">
            <span class="logo-icon">🚗</span>
            <span class="logo-text">Rajbir's</span>
        </a>
        <div class="nav-links" id="navLinks">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('cars') }}" class="{{ request()->routeIs('cars') ? 'active' : '' }}">Our Fleet</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        </div>
        <a href="{{ route('cars') }}" class="nav-cta">Book Now</a>
        <button class="nav-hamburger" id="hamburger" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</nav>
