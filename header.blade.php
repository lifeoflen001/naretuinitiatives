@php
$currentRoute = request()->route()->getName() ?? '';
$currentUrl = request()->url();
@endphp

{{-- Mobile Sticky Header Styles --}}
@push('styles')

<script>
    (function () {
        let theme = localStorage.getItem('theme');

        if (theme === 'dark') {
            document.documentElement.setAttribute('data-theme', 'dark');
        } else {
            document.documentElement.setAttribute('data-theme', 'light');
        }
    })();
</script>

<style>

    .stricky-header {
    z-index: 99999 !important;
}

.stricked-menu .main-menu__list > li.dropdown > ul {
    z-index: 99999;
}
.stricked-menu {
    overflow: visible !important;
}
    /* Mobile Sticky Header Styles */
    .mobile-sticky-header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background: #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        z-index: 9999;
        transform: translateY(-100%);
        transition: transform 0.3s ease-in-out;
        display: none; /* Hidden by default, shown on mobile via media query */
    }

    .mobile-sticky-header.active {
        transform: translateY(0);
    }

    .mobile-sticky-header__inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 8px 15px;
        height: 55px;
        width: 100%;
        box-sizing: border-box;
    }

    .mobile-sticky-header__logo {
        display: flex;
        align-items: center;
        flex-shrink: 0;
    }

    .mobile-sticky-header__logo-img {
        max-height: 35px;
        width: auto;
        max-width: 120px;
        object-fit: contain;
        display: block;
    }

    .mobile-sticky-header__logo--tiny .mobile-sticky-header__logo-img {
        max-height: 28px;
        max-width: 100px;
    }

    .mobile-sticky-header__right {
        display: flex;
        align-items: center;
        gap: 8px;
        flex-shrink: 0;
    }

    .mobile-sticky-header__search,
    .mobile-sticky-header__menu,
    .mobile-sticky-header__lang {
        color: #09cc7f;
        font-size: 16px;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        background: #f5f5f5;
        border-radius: 50%;
        transition: all 0.3s ease;
        flex-shrink: 0;
    }

    .mobile-sticky-header__search:hover,
    .mobile-sticky-header__menu:hover,
    .mobile-sticky-header__lang:hover {
        background: #e0e0e0;
        color: #000;
    }

    /* Show on mobile screens */
    @media (max-width: 991px) {
        .mobile-sticky-header {
            display: block;
        }
        
        body.has-sticky-header {
            padding-top: 55px;
        }
    }

    @media (max-width: 375px) {
        .mobile-sticky-header__logo-img {
            max-height: 28px;
            max-width: 100px;
        }
        
        .mobile-sticky-header__inner {
            padding: 6px 12px;
            height: 50px;
        }
        
        .mobile-sticky-header__search,
        .mobile-sticky-header__menu,
        .mobile-sticky-header__lang {
            width: 34px;
            height: 34px;
            font-size: 15px;
        }

        body.has-sticky-header {
            padding-top: 50px;
        }
    }

    /* Dark mode support for mobile header */
    [data-theme="dark"] .mobile-sticky-header {
        background: #1d1d1d;
        box-shadow: 0 8px 20px rgba(9, 204, 127, 0.35);

    }

    [data-theme="dark"] .mobile-sticky-header__search,
    [data-theme="dark"] .mobile-sticky-header__menu,
    [data-theme="dark"] .mobile-sticky-header__lang {
        background: #1d1d1d;
        color: #09cc7f;
        box-shadow: 0 8px 20px rgba(5, 104, 77, 0.15);
    }

    [data-theme="dark"] .mobile-sticky-header__search:hover,
    [data-theme="dark"] .mobile-sticky-header__menu:hover,
    [data-theme="dark"] .mobile-sticky-header__lang:hover {
        background: #3a3f4b;
        color: #fff;
    }

    /* Desktop dropdown styles - ensure they work */
    .main-menu__list > li.dropdown {
        position: relative;
    }

/* Replace your desktop dropdown styles with these higher z-index values */
/* Normal + Sticky Dropdown */
.main-menu__list > li.dropdown > ul,
.stricked-menu .main-menu__list > li.dropdown > ul {
    position: absolute;
    top: 100%;
    left: 0;
    min-width: 220px;
    background: #ffffff;
    opacity: 0;
    visibility: hidden;
    transform: translateY(15px);
    transition: all 0.3s ease;
    z-index: 9999;
}

/* Show On Hover */
.main-menu__list > li.dropdown:hover > ul,
.stricked-menu .main-menu__list > li.dropdown:hover > ul {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

    .stricky-header {
    z-index: 9999 !important;
}

    /* Dark mode dropdown */
    [data-theme="dark"] .main-menu__list > li.dropdown > ul {
        background: #252525;
        box-shadow: 0 8px 20px rgba(5, 104, 77, 0.15);
    }

    [data-theme="dark"] .main-menu__list > li.dropdown > ul > li > a {
        color: #fff;
    }

    [data-theme="dark"] .main-menu__list > li.dropdown > ul > li > a:hover {
        background: #2d313e;
        color: #09cc7f;
    }
    [data-theme="dark"] .action-item {
        color: black;
        background-color: var(--pifoxen-gray);
  }
    [data-theme="dark"] .action-item:hover {
        color: #09cc7f;
        background-color: #fff;
  }
    
    .main-menu-wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
    }

    .main-menu-wrapper__right {
        display: flex;
        align-items: center;
        gap: 20px;
        float: right;
        padding: 31px 0;
    }

    .action-item {
        font-size: 18.5px;
        cursor: pointer;
        color: black;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        background: #ffffff;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
    }

    .action-item:hover {
        color: #09cc7f;
        transform: translateY(-2px);
        box-shadow: 0 6px 18px rgba(9, 204, 127, 0.25);
    }

    .vertical-divider {
        width: 1px;
        height: 30px;
        background: #a8a8a8;
        box-shadow: 1px 0 3px rgba(0,0,0,0.1);
    }

    /* Hide desktop action items on mobile */
    @media (max-width: 991px) {
        .main-menu-wrapper__right {
            display: none;
        }
    }

    @media (min-width: 992px) and (max-width: 1199px) {
        .main-menu-wrapper__right {
            gap: 10px;
        }

        .action-item {
            width: 34px;
            height: 34px;
            font-size: 17px;
        }

        .donate-btn {
            padding: 10px 20px;
            font-size: 14px;
        }
    }
    
    @media (max-width: 991px) and (min-width: 768px) {
    /* Shows mobile sticky header on tablet */
    /* Hides desktop menu to prevent crowding */
    /* Centers logo in main header */
    /* Shows hamburger menu */
   }

    /* Theme Toast Notification - Above Header Links */
    .theme-toast {
        font-family: 'DM Sans', sans-serif;
        position: absolute;
        top: -50px;
        left: 50%;
        transform: translateX(-50%) translateY(-20px);
        background: #09cc7f;
        color: white;
        padding: 10px 22px;
        border-radius: 6px;
        font-weight: 100;
        font-size: 14px;
        letter-spacing: 4px;
        z-index: 100;
        opacity: 0;
        transition: all 0.3s ease;
        pointer-events: none;
        white-space: nowrap;
        box-shadow: 0 8px 20px rgba(5, 104, 77, 0.15);
    }

    .theme-toast.show {
        transform: translateX(-50%) translateY(0);
        opacity: 1;
    }

    [data-theme="dark"] .theme-toast {
        background: #252525;
        color: #fff;
        box-shadow: 0 8px 20px rgba(5, 104, 77, 0.15);
    }

    .action-item.loading {
        pointer-events: none;
        opacity: 0.7;
        color: #fff;
    }

    .spinner {
        width: 18px;
        height: 18px;
        border: 2px solid transparent;
        border-top-color: currentColor;
        border-radius: 50%;
        animation: spin 0.6s linear infinite;
        color: #fff;
    }

    @keyframes spin {
        to { transform: rotate(360deg); }
    }

    /* Mobile Theme Toast - Below sticky header */
.mobile-theme-toast {
    position: fixed;
    top: 65px;
    left: 50%;
    transform: translateX(-50%) translateY(-20px);
    background: #10b981;
    color: white;
    padding: 10px 20px;
    border-radius: 8px;
    font-weight: 600;
    font-size: 13px;
    z-index: 9998;
    opacity: 0;
    transition: all 0.3s ease;
    pointer-events: none;
    white-space: nowrap;
    display: none;
    box-shadow: 0 8px 20px rgba(5, 104, 77, 0.15);
}

.mobile-theme-toast.show {
    transform: translateX(-50%) translateY(0);
    opacity: 1;
}

/* Spinner for mobile theme button */
.mobile-sticky-header__search.loading {
    pointer-events: none;
    opacity: 0.7;
}

.mobile-sticky-header__search .spinner {
    width: 16px;
    height: 16px;
    border: 2px solid transparent;
    border-top-color: currentColor;
    border-radius: 50%;
    animation: spin 0.6s linear infinite;
}

[data-theme="dark"] .mobile-theme-toast {
    background: #3b82f6;
}
/* Fix spinner visibility */
.spinner {
    color: #09cc7f !important;
}

[data-theme="dark"] .spinner {
    color: #09cc7f !important;
}

/* Show only on mobile */
@media (max-width: 991px) {
    .mobile-theme-toast {
        display: block;
    }
    /* Hide desktop toast on mobile */
    .theme-toast {
        display: none !important;
    }
}
</style>
@endpush

{{-- Page Wrapper --}}
<div class="page-wrapper">

    {{-- Main Header --}}
    <header class="main-header clearfix">
        
        {{-- Top Bar --}}
        <div class="main-header__top">
            <div class="main-header__top-left">
                <p class="main-header__top-text">Official Site for Naretu Initiatives</p>
                <div class="main-header__top-social">
                    <a href="https://wa.me/255759638296  " target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="https://youtube.com/naretu_initiatives_org   " target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="https://instagram.com/naretu_initiatives_org   " target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://facebook.com/naretu_initiatives_org   " target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://tiktok.com/naretu_initiatives_org   " target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
            </div>
            <div class="main-header__top-right">
                <ul class="list-unstyled main-header__top-address">
                    <li>
                        <div class="icon">
                            <span class="icon-pin"></span>
                        </div>
                        <div class="text">
                            <p>P.O.Box 16323 Arusha, Tanzania</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="icon-email"></span>
                        </div>
                        <div class="text">
                            <p><a href="mailto:info@naretuinitiatives.org">info@naretuinitiatives.org</a></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Main Navigation --}}
        <nav class="main-menu clearfix">
            <div class="main-menu-wrapper clearfix">
                
                {{-- Success Message - Positioned above header links --}}
                <div id="theme-toast" class="theme-toast">
                    <span id="theme-toast-text"></span>
                </div>

                {{-- Logo & Call --}}
                <div class="main-menu-wrapper__left">
                    <div class="main-menu-wrapper__logo">
                        <a href="{{ url('/') }}">
                            {{-- Light Logo --}}
                            <img src="{{ asset('assets/images/resources/logo-1.png') }}" 
                                 alt="Naretu Initiatives Logo" 
                                 class="logo-light"
                                 style="{{ $isDark ? 'display: none;' : 'display: block;' }}">
                            
                            {{-- Dark Logo --}}
                            <img src="{{ asset('assets/images/resources/logo-2.png') }}" 
                                 alt="Naretu Initiatives Logo" 
                                 class="logo-dark"
                                 style="{{ $isDark ? 'display: block;' : 'display: none;' }}">
                        </a>
                    </div>
                    <div class="main-menu-wrapper__call">
                        <div class="main-menu-wrapper__call-icon">
                            <span class="icon-call"></span>
                        </div>
                        <div class="main-menu-wrapper__call-number">
                            <p>Call Anytime</p>
                            <h5><a href="tel:+255759638296">+255 759 638 296</a></h5>
                        </div>
                    </div>
                </div>

                {{-- Desktop Menu --}}
                <div class="main-menu-wrapper__main-menu">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    
                    <ul class="main-menu__list">
                        {{-- Home --}}
                        <li class="{{ request()->is('/') ? 'current' : '' }}">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        
                        {{-- About --}}
                        <li class="{{ request()->is('about') ? 'current' : '' }}">
                            <a href="{{ url('about') }}">About</a>
                        </li>

                        {{-- Pages --}}
                        <li class="dropdown">
                            <a href="#">Pages</a>
                            <ul>
                                <li class="{{ request()->is('testimonials*') ? 'current' : '' }}">
                                    <a href="{{ url('testimonials') }}">Testimonials</a>
                                </li>
                                <li class="{{ request()->is('gallery*') ? 'current' : '' }}">
                                    <a href="{{ url('gallery') }}">Gallery</a>
                                </li>
                                <li class="{{ request()->is('faq') ? 'current' : '' }}">
                                    <a href="{{ url('faq') }}">FAQs</a>
                                </li>
                                <li class="{{ request()->is('your-story') ? 'current' : '' }}">
                                    <a href="{{ url('volunteers') }}">Share your story</a>
                                </li>
                            </ul>
                        </li>

                        {{-- Donations --}}
                        <li class="dropdown">
                           <a href="#">Donations</a>
                          <ul>
                                <li class="{{ request()->is('donate-now') ? 'current' : '' }}">
                                    <a href="{{ url('donate') }}">Donate Now</a>
                                </li>
                                <li class="{{ request()->is('differently-abled-kids') ? 'current' : '' }}">
                                    <a href="{{ url('donations_disable_kids') }}">Differently Abled Kids</a>
                                </li>
                                <li class="{{ request()->is('clean-pure-water') ? 'current' : '' }}">
                                    <a href="{{ url('clean_water') }}">Give clean Water</a>
                                </li>
                                <li class="{{ request()->is('give-them-education') ? 'current' : '' }}">
                                    <a href="{{ url('give_education') }}">Give them Education</a>
                                </li>
                                <li class="{{ request()->is('start-a-fundraising') ? 'current' : '' }}">
                                    <a href="{{ url('start_fundraiser') }}">Start a Fundraising</a>
                                </li>
                            </ul>
                        </li>

                        {{-- Events --}}
                        <li class="{{ request()->is('events*', 'event-details') ? 'current' : '' }}">
                            <a href="{{ url('events') }}">Events</a>
                        </li>

                        {{-- Shop --}}
                        <li class="{{ request()->is('products*', 'product-details', 'cart', 'checkout') ? 'current' : '' }}">
                            <a href="{{ url('comingsoon') }}">Shop</a>
                        </li>

                        {{-- Blog --}}
                        <li class="{{ request()->is('blog*') ? 'current' : '' }}">
                            <a href="{{ url('blog') }}">Blogs</a>
                        </li>

                        {{-- Contact --}}
                        <li class="{{ request()->is('contact') ? 'current' : '' }}">
                            <a href="{{ url('contact') }}">Contact</a>
                        </li>

                        {{-- Volunteer--}}
                        <li class="{{ request()->is('volunteer') ? 'current' : '' }}">
                            <a href="{{ url('volunteer') }}">Volunteer</a>
                        </li>

                    </ul>
                </div>

                {{-- Right: Icons + Button --}}
                <div class="main-menu-wrapper__right">
                    {{-- Theme Toggle --}}
                    <a href="javascript:void(0)" onclick="toggleTheme(this)" class="action-item" title="{{ $isDark ? 'Switch to Light Mode' : 'Switch to Dark Mode' }}" id="theme-toggle">
                        <i class="{{ $isDark ? 'fas fa-sun' : 'fas fa-moon' }}" id="theme-icon"></i>
                    </a>

                    {{-- Divider Line --}}
                    <div class="vertical-divider"></div>

                    {{-- Login --}}
                    <a href="{{ url('login') }}" class="action-item">
                        <i class="icon-avatar mini-cart__toggler"></i>
                    </a>

                    {{-- Donate Button --}}
                    <a href="{{ url('donate-now') }}" class="donate-btn">
                        <i class="fa fa-heart"></i> Donate Now
                    </a>

                </div>
            </div>
        </nav>

        {{-- Sticky Header Clone --}}
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>

        {{-- Mobile Sticky Header --}}
        <div class="mobile-sticky-header" id="mobileStickyHeader">
            <div class="mobile-sticky-header__inner" style="padding:4px 12px;">
                {{-- Logo on the left --}}
                <div class="mobile-sticky-header__logo mobile-sticky-header__logo--tiny">
                    <a href="{{ url('/') }}" aria-label="Home">
                        <img src="{{ asset('assets/images/resources/logo-1.png') }}"
                             alt="Naretu Initiatives"
                             class="mobile-sticky-header__logo-img logo-light"
                             style="{{ $isDark ? 'display: none; max-height:24px;' : 'display: block; max-height:24px;' }}">
                        <img src="{{ asset('assets/images/resources/logo-2.png') }}"
                             alt="Naretu Initiatives"
                             class="mobile-sticky-header__logo-img logo-dark"
                             style="{{ $isDark ? 'display: block; max-height:24px;' : 'display: none; max-height:24px;' }}">
                    </a>
                </div>
                
                {{-- Right side: Language, Theme, Menu --}}
                <div class="mobile-sticky-header__right">

                     {{-- Mobile Theme Toggle --}}>
                   <a href="javascript:void(0)" onclick="toggleThemeMobile(this)" class="mobile-sticky-header__search" aria-label="Toggle Dark Mode" title="{{ $isDark ? 'Switch to Light Mode' : 'Switch to Dark Mode' }}">
                   <i class="theme-toggle-icon {{ $isDark ? 'fas fa-sun' : 'fas fa-moon' }}"></i>
                      </a>
                
                    {{-- Divider Line --}}
                    <div class="vertical-divider"></div>
                    {{-- Menu Button --}}
                    <a href="#" class="mobile-sticky-header__menu mobile-nav__toggler" aria-label="Menu">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
            </div>
        </div>
        
        {{-- Mobile Theme Toast --}}
        <div id="mobile-theme-toast" class="mobile-theme-toast">
            <span id="mobile-theme-toast-text"></span>
        </div>
    </header>

    {{-- Mobile Navigation Drawer --}}
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler" aria-label="Close menu">
                <i class="fa fa-times"></i>
            </span>

            <div class="logo-box">
                <a href="{{ url('/') }}" aria-label="Home">
                    {{-- Light Logo --}}
                    <img src="{{ asset('assets/images/resources/logo-1.png') }}" 
                         alt="Naretu Initiatives"
                         class="logo-light"
                         style="{{ $isDark ? 'display: none;' : 'display: block;' }}">
                    
                    {{-- Dark Logo --}}
                    <img src="{{ asset('assets/images/resources/logo-2.png') }}" 
                         alt="Naretu Initiatives"
                         class="logo-dark"
                         style="{{ $isDark ? 'display: block;' : 'display: none;' }}">
                </a>
            </div>

            <div class="mobile-nav__container">
                {{-- Mobile menu items... --}}
                <ul class="mobile-nav__list">
                    <li class="{{ request()->is('/') ? 'current' : '' }}">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#">Pages</a>
                        <ul>
                            <li><a href="{{ url('about') }}">About Us</a></li>
                            <li><a href="{{ url('volunteers') }}">Volunteers</a></li>
                            <li><a href="{{ url('become-volunteer') }}">Become A Volunteer</a></li>
                            <li><a href="{{ url('testimonials') }}">Testimonials</a></li>
                            <li><a href="{{ url('gallery') }}">Gallery</a></li>
                            <li><a href="{{ url('pricing') }}">Pricing</a></li>
                            <li><a href="{{ url('faq') }}">FAQs</a></li>
                        </ul>
                    </li>
                    <li class="dropdown {{ request()->is('donations*', 'donate-now') ? 'current' : '' }}">
                        <a href="#">Donations</a>
                        <ul>
                            <li><a href="{{ url('pages.donating.donations') }}">Our Donations</a></li>
                            <li><a href="{{ url('pages.donating.donate') }}">Donate Now</a></li>
                        </ul>
                    </li>
                    <li class="{{ request()->is('events*') ? 'current' : '' }}">
                        <a href="{{ url('events') }}">Events</a>
                    </li>
                    <li class="{{ request()->is('products*') ? 'current' : '' }}">
                        <a href="{{ url('products') }}">Shop</a>
                    </li>
                    <li class="{{ request()->is('blog*') ? 'current' : '' }}">
                        <a href="{{ url('blog') }}">Blog</a>
                    </li>
                    <li class="{{ request()->is('contact') ? 'current' : '' }}">
                        <a href="{{ url('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:info@naretuinitiatives.org">info@naretuinitiatives.org</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+255759638296">+255 759 638 296</a></li>
            </ul>

            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="https://wa.me/255759638296  " target="_blank" rel="noopener noreferrer" class="fab fa-whatsapp"></a>
                    <a href="https://youtube.com/naretu_initiatives_org   " target="_blank" rel="noopener noreferrer" class="fab fa-youtube"></a>
                    <a href="https://instagram.com/naretu_initiatives_org   " target="_blank" rel="noopener noreferrer" class="fab fa-instagram"></a>
                    <a href="https://facebook.com/naretu_initiatives_org   " target="_blank" rel="noopener noreferrer" class="fab fa-facebook-square"></a>
                    <a href="https://tiktok.com/naretu_initiatives_org   " target="_blank" rel="noopener noreferrer" class="fab fa-tiktok"></a>
                </div>
            </div>
        </div>
    </div>

</div><!-- /.page-wrapper -->

{{-- Scripts --}}
<script>

/* ========================================
   THEME SYSTEM (CLEAN + PROFESSIONAL)
======================================== */

/* Apply saved theme on page load */
document.addEventListener('DOMContentLoaded', function () {

    const savedTheme = localStorage.getItem('theme') || 'light';
    document.documentElement.setAttribute('data-theme', savedTheme);

    updateAllThemeIcons(savedTheme);
    updateLogos(savedTheme);

});


/* Desktop Theme Toggle */
function toggleTheme(btn) {

    const icon = btn.querySelector('i');
    const html = document.documentElement;
    const currentTheme = html.getAttribute('data-theme');
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

    showSpinner(btn, icon);

    setTimeout(() => {

        applyTheme(newTheme);

        btn.title = newTheme === 'dark'
            ? 'Switch to Light Mode'
            : 'Switch to Dark Mode';

        showToast(
            newTheme === 'dark'
                ? ' Switched to dark mode!'
                : ' Switched to light mode!'
        );

    }, 400);
}


/* Mobile Theme Toggle */
function toggleThemeMobile(btn) {

    const icon = btn.querySelector('i');
    const html = document.documentElement;
    const currentTheme = html.getAttribute('data-theme');
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

    showSpinner(btn, icon);

    setTimeout(() => {

        applyTheme(newTheme);

        btn.title = newTheme === 'dark'
            ? 'Switch to Light Mode'
            : 'Switch to Dark Mode';

        showMobileToast(
            newTheme === 'dark'
                ? ' Switched to dark mode!'
                : ' Switched to light mode!'
        );

    }, 400);
}


/* Apply theme globally */
function applyTheme(theme) {

    document.documentElement.setAttribute('data-theme', theme);

    localStorage.setItem('theme', theme);

    updateAllThemeIcons(theme);
    updateLogos(theme);
}


/* Spinner Effect */
function showSpinner(btn, icon) {

    btn.classList.add('loading');
    icon.style.display = 'none';

    const spinner = document.createElement('div');
    spinner.className = 'spinner';
    spinner.style.cssText =
        'width:18px;height:18px;border:2px solid transparent;border-top-color:currentColor;border-radius:50%;animation:spin 0.6s linear infinite;color:#09cc7f;';

    btn.appendChild(spinner);

    setTimeout(() => {
        spinner.remove();
        icon.style.display = '';
        btn.classList.remove('loading');
    }, 400);
}


/* Update All Theme Icons */
function updateAllThemeIcons(theme) {

    const desktopIcon = document.getElementById('theme-icon');
    if (desktopIcon) {
        desktopIcon.className = theme === 'dark'
            ? 'fas fa-sun'
            : 'fas fa-moon';
    }

    const mobileIcon = document.querySelector('.theme-toggle-icon');
    if (mobileIcon) {
        mobileIcon.className =
            'theme-toggle-icon ' +
            (theme === 'dark' ? 'fas fa-sun' : 'fas fa-moon');
    }
}


/* Update Logos */
function updateLogos(theme) {

    const lightLogos = document.querySelectorAll('.logo-light');
    const darkLogos = document.querySelectorAll('.logo-dark');

    if (theme === 'dark') {
        lightLogos.forEach(logo => logo.style.display = 'none');
        darkLogos.forEach(logo => logo.style.display = 'block');
    } else {
        lightLogos.forEach(logo => logo.style.display = 'block');
        darkLogos.forEach(logo => logo.style.display = 'none');
    }
}


/* Desktop Toast */
function showToast(message) {

    const toast = document.getElementById('theme-toast');
    const toastText = document.getElementById('theme-toast-text');

    if (toast && toastText) {
        toastText.textContent = message;
        toast.classList.add('show');

        setTimeout(() => {
            toast.classList.remove('show');
        }, 2000);
    }
}


/* Mobile Toast */
function showMobileToast(message) {

    const toast = document.getElementById('mobile-theme-toast');
    const toastText = document.getElementById('mobile-theme-toast-text');

    if (toast && toastText) {
        toastText.textContent = message;
        toast.classList.add('show');

        setTimeout(() => {
            toast.classList.remove('show');
        }, 2000);
    }
}


/* ========================================
   MOBILE STICKY HEADER SYSTEM
======================================== */

/* Show / Hide Mobile Sticky Header */
(function() {

    const header = document.getElementById("mobileStickyHeader");
    if (!header) return;

    const scrollThreshold = 100;

    function handleScroll() {

        const currentScrollY = window.scrollY || window.pageYOffset;

        if (currentScrollY > scrollThreshold) {
            header.classList.add("active");
            document.body.classList.add("has-sticky-header");
        } else {
            header.classList.remove("active");
            document.body.classList.remove("has-sticky-header");
        }
    }

    window.addEventListener("scroll", handleScroll, { passive: true });
    handleScroll();

})();

</script>