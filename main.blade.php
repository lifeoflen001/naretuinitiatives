<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="{{ request()->cookie('theme', 'light') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Naretu Initiatives | Empowering Communities')</title>
    <meta name="description" content="@yield('meta_description', 'Naretu Initiatives – Supporting communities through education, health, and empowerment in Tanzania.')">

    <!-- Preconnect (Performance) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Main Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/pifoxen.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pifoxen-responsive.css') }}">

    {{-- Dark mode CSS - conditionally loaded based on cookie --}}
    <link rel="stylesheet" href="{{ asset('assets/css/pifoxen-dark.css') }}">
    
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}" />
    <meta name="description" content="@yield('meta_description', 'Pifoxen HTML Template For Donation')" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Fredoka+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/pifoxen-icons/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/vegas/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/timepicker/timePicker.css') }}" />

    {{-- Logo Switching Styles --}}
    <style>

    </style>

    @stack('styles')
</head>

<body class="@yield('body-class')">

    <main>
        @yield('content')
    </main>

    <!-- vendor scripts -->
    <script src="{{ asset('assets/vendors/jquery/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('assets/vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/vendors/timepicker/timePicker.js') }}"></script>

    <!-- template js -->
    <script src="{{ asset('assets/js/pifoxen.js') }}"></script>

    <script>

    {{-- Password Toggle Script - GLOBAL --}}
        function togglePassword(inputId, btn) {
            const input = document.getElementById(inputId);
            const icon = btn.querySelector('i');
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            }
        }

        document.addEventListener("DOMContentLoaded", function () {
            setTimeout(function () {
                document.querySelectorAll(".auto-dismiss").forEach(function (el) {
                    el.classList.add("hide");
                    setTimeout(function () {
                        el.remove();
                    }, 600);
                });
            }, 2000);
        });

        // Initialize theme on page load
(function() {
    // Check cookie or localStorage for theme preference
    const theme = document.cookie.match(/theme=dark/) ? 'dark' : 'light';
    document.documentElement.setAttribute('data-theme', theme);
    
    // Update all icons and logos immediately
    updateAllThemeIcons(theme);
    updateLogos(theme);
})();

// Global toast function (available on all pages)
function showToast(message) {
    // Try desktop toast first
    let toast = document.getElementById('theme-toast');
    let toastText = document.getElementById('theme-toast-text');
    
    // If not found, create global toast container
    if (!toast) {
        // Remove existing global toast if any
        const existing = document.getElementById('global-theme-toast');
        if (existing) existing.remove();
        
        // Create new global toast
        toast = document.createElement('div');
        toast.id = 'global-theme-toast';
        toast.className = 'theme-toast';
        toast.innerHTML = '<span id="global-theme-toast-text"></span>';
        toast.style.cssText = 'position:fixed;top:20px;left:50%;transform:translateX(-50%) translateY(-20px);background:#09cc7f;color:white;padding:10px 22px;border-radius:6px;font-weight:100;font-size:14px;letter-spacing:4px;z-index:100000;opacity:0;transition:all 0.3s ease;pointer-events:none;white-space:nowrap;box-shadow:0 8px 20px rgba(5,104,77,0.15);';
        
        document.body.appendChild(toast);
        toastText = document.getElementById('global-theme-toast-text');
    }
    
    if (toast && toastText) {
        toastText.textContent = message;
        toast.classList.add('show');
        toast.style.transform = 'translateX(-50%) translateY(0)';
        toast.style.opacity = '1';
        
        setTimeout(() => {
            toast.classList.remove('show');
            toast.style.transform = 'translateX(-50%) translateY(-20px)';
            toast.style.opacity = '0';
        }, 2000);
    }
}

// Global mobile toast function
function showMobileToast(message) {
    let toast = document.getElementById('mobile-theme-toast');
    let toastText = document.getElementById('mobile-theme-toast-text');
    
    // If not found in header, create global mobile toast
    if (!toast) {
        const existing = document.getElementById('global-mobile-theme-toast');
        if (existing) existing.remove();
        
        toast = document.createElement('div');
        toast.id = 'global-mobile-theme-toast';
        toast.className = 'mobile-theme-toast';
        toast.innerHTML = '<span id="global-mobile-theme-toast-text"></span>';
        toast.style.cssText = 'position:fixed;top:65px;left:50%;transform:translateX(-50%) translateY(-20px);background:#10b981;color:white;padding:10px 20px;border-radius:8px;font-weight:600;font-size:13px;z-index:99999;opacity:0;transition:all 0.3s ease;pointer-events:none;white-space:nowrap;display:block;box-shadow:0 8px 20px rgba(5,104,77,0.15);';
        
        document.body.appendChild(toast);
        toastText = document.getElementById('global-mobile-theme-toast-text');
    }
    
    if (toast && toastText) {
        toastText.textContent = message;
        toast.classList.add('show');
        toast.style.transform = 'translateX(-50%) translateY(0)';
        toast.style.opacity = '1';
        
        setTimeout(() => {
            toast.classList.remove('show');
            toast.style.transform = 'translateX(-50%) translateY(-20px)';
            toast.style.opacity = '0';
        }, 2000);
    }
}

// Make these functions globally available
window.showToast = showToast;
window.showMobileToast = showMobileToast;

    </script>

    @stack('scripts')
