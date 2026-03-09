@extends('layouts.main')

@section('title', 'Donate | Naretu Initiatives')

@section('content')
    {{-- header --}}
    @include('partials.header')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('assets/images/resources/pic5.jpg') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Donate Now</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">Donate Now</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!-- Scoped Styles - Completely Isolated -->
    <style>
        /* Reset for donation section only */
        .donation-section *,
        .donation-section *::before,
        .donation-section *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        .donation-section {
            background-color: #ffffff;
            color: #333;
            line-height: 1.6;
            overflow: hidden;
        }
        
        .donation-section h1, 
        .donation-section h2, 
        .donation-section h3 {
            margin: 0;
        }
        
        /* Layout */
        .donation-container {
            max-width: 1900px;
            margin: 0 auto;
            padding: 0 10px;
        }
        
        .donation-top {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            gap: 50px;
            padding: 40px 20px;
            flex-wrap: wrap;
        }
        
        .donation-circle {
            width: 500px;
            height: 500px;
            border-radius: 50%;
            overflow: hidden;
            border: 12px solid white;
            box-shadow: 0 10px 40px rgba(0,0,0,0.15);
            flex-shrink: 0;
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .donation-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.5s ease;
        }
        
        .donation-circle:hover img {
            transform: scale(1.1);
        }
        
        .donation-header-text {
            text-align: left;
            max-width: 500px;
            padding-left: 30px;
            animation: slideInRight 0.8s ease-out;
        }
        
        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        .donation-title {
            font-size: 3.5rem;
            font-weight: 700;
            color: #09cc7f;
            margin-bottom: 20px;
            letter-spacing: 0.05em;
            line-height: 1.2;
            font-family: 'Fredoka One', cursive;
            position: relative;
            display: inline-block;
        }
        
        .donation-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 0;
            height: 4px;
            background: linear-gradient(90deg, #09cc7f, #E8B89D);
            border-radius: 2px;
            animation: expandWidth 1s ease-out 0.5s forwards;
        }
        
        @keyframes expandWidth {
            to { width: 100%; }
        }
        
        .donation-subtitle {
            font-size: 1.125rem;
            color: black;
            line-height: 1.75;
            animation: fadeInUp 0.8s ease-out 0.3s both;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Bottom Section */
        .donation-bottom {
            padding: 0 20px 60px;
            animation: fadeInUp 1s ease-out 0.6s both;
        }
        
        .donation-card {
            display: flex;
            flex-direction: row;
            background: white;
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.1);
            overflow: hidden;
            max-width: 1100px;
            margin: 0 auto;
            transform: translateY(0);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .donation-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 70px rgba(0,0,0,0.15);
        }
        
        /* Left Panel */
        .donation-left {
            flex: 1;
            background-color: #09cc7f;
            padding: 40px;
            min-width: 0;
        }
        
        .donation-left h2 {
            font-size: 1.75rem;
            font-weight: 600;
            color: #fff;
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 15px;
        }
        
        .donation-left h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: rgba(255,255,255,0.5);
            border-radius: 2px;
        }
        
        /* Accordion - No borders */
        .accordion-item {
            background: transparent;
            margin-bottom: 8px;
        }
        
        .accordion-header {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 0;
            background: transparent;
            border: none;
            cursor: pointer;
            font-size: 1.125rem;
            font-weight: 500;
            color: #fff;
            font-family: 'DM Sans', sans-serif;
            text-align: left;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .accordion-header:hover {
            color: #fff;
            padding-left: 10px;
        }
        
        .accordion-header::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 0;
            height: 100%;
            background: rgba(255,255,255,0.1);
            border-radius: 8px;
            transition: width 0.3s ease;
            z-index: 0;
        }
        
        .accordion-header:hover::before {
            width: 100%;
        }
        
        .accordion-header span:first-child {
            position: relative;
            z-index: 1;
        }
        
        .accordion-icon {
            font-weight: 300;
            font-size: 1.5rem;
            margin-left: 12px;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            position: relative;
            z-index: 1;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
        }
        
        .accordion-icon.rotating {
            transform: rotate(360deg) scale(1.1);
            background: rgba(255,255,255,0.4);
        }
        
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            padding: 0;
            background: transparent;
            transition: max-height 0.5s cubic-bezier(0, 1, 0, 1), padding 0.4s ease;
        }
        
        .accordion-content.active {
            max-height: 200px;
            padding-bottom: 20px;
            transition: max-height 0.5s ease-in-out, padding 0.4s ease;
        }
        
        .accordion-content p {
            color: rgba(255,255,255,0.9);
            font-size: 0.95rem;
            line-height: 1.8;
            margin: 0;
            font-family: 'DM Sans', sans-serif;
            opacity: 0;
            transform: translateY(-10px);
            transition: all 0.4s ease 0.1s;
        }
        
        .accordion-content.active p {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Right Panel - White */
        .donation-right {
            flex: 1;
            background: white;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-width: 0;
            position: relative;
            overflow: hidden;
        }
        
        .donation-right::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(9,204,127,0.03) 0%, transparent 70%);
            animation: pulse 4s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.5; }
            50% { transform: scale(1.1); opacity: 0.8; }
        }
        
        .donation-right img {
            width: 250px;
            height: auto;
            margin-bottom: 30px;
            opacity: 0.9;
            position: relative;
            z-index: 1;
            animation: gentleBounce 3s ease-in-out infinite;
            filter: drop-shadow(0 10px 20px rgba(0,0,0,0.1));
        }
        
        @keyframes gentleBounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        /* Bottom Gradient */
        .donation-gradient {
            height: 192px;
            background: linear-gradient(to top, #E8B89D 0%, #F4C2A1 60%, transparent 100%);
            margin-top: -60px;
            position: relative;
            z-index: -1;
        }
        
        /* Responsive */
        @media (max-width: 900px) {
            .donation-top {
                flex-direction: column;
                text-align: center;
            }
            
            .donation-header-text {
                text-align: center;
                padding-left: 0;
            }
            
            .donation-title::after {
                left: 50%;
                transform: translateX(-50%);
            }
            
            .donation-circle {
                width: 300px;
                height: 300px;
            }
            
            .donation-title {
                font-size: 2.5rem;
            }
            
            .donation-card {
                flex-direction: column;
            }
            
            .donation-left,
            .donation-right {
                width: 100%;
            }
        }
        
        @media (max-width: 480px) {
            .donation-circle {
                width: 250px;
                height: 250px;
                border-width: 8px;
            }
            
            .donation-title {
                font-size: 2rem;
            }
            
            .donation-left,
            .donation-right {
                padding: 24px;
            }
        }
    </style>

    <!-- Donation Content Section -->
    <div class="donation-section">
        
        <!-- Top Section -->
        <div class="donation-top">
            
            <!-- Large Circle Image -->
            <div class="donation-circle">
                <img src="{{ asset('assets/images/resources/pic5.jpg') }}" 
                     alt="Donation cause image">
            </div>

            <!-- Header Text -->
            <div class="donation-header-text">
                <h1 class="donation-title">Make A Donation</h1>
                <p class="donation-subtitle">
                    Please support us as we prioritise the urgent needs of the Vulnerable.
                </p>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="donation-bottom">
            <div class="donation-card">
                
                <!-- Left: Accordion Panel -->
                <div class="donation-left">
                    <h2>Ways To Donate</h2>
                    
                    <!-- Item 1 -->
                    <div class="accordion-item">
                        <button class="accordion-header" onclick="toggleDonationAccordion(this)">
                            <span>Make a Gift</span>
                            <span class="accordion-icon">+</span>
                        </button>
                        <div class="accordion-content">
                            <p>Your generous gift helps us provide essential resources and support to women in need. Every contribution makes a difference in empowering communities.</p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="accordion-item">
                        <button class="accordion-header" onclick="toggleDonationAccordion(this)">
                            <span>Donate Through Paybill</span>
                            <span class="accordion-icon">+</span>
                        </button>
                        <div class="accordion-content">
                            <p>Paybill Number: 880100, Till Number: PAYUAF365</p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="accordion-item">
                        <button class="accordion-header" onclick="toggleDonationAccordion(this)">
                            <span>Donation Inquiries</span>
                            <span class="accordion-icon">+</span>
                        </button>
                        <div class="accordion-content">
                            <p>For large donations, partnerships, or specific inquiries regarding our programs, please contact our development team at donate@organization.org</p>
                        </div>
                    </div>

                </div>

                <!-- Right: Image & CTA Panel -->
                <div class="donation-right">
                    <img src="{{ asset('assets/images/resources/payment-phone.png') }}" 
                         alt="Payment method illustration">
                </div>

            </div>
        </div>

        <!-- Bottom Gradient -->
        <div class="donation-gradient"></div>
        
    </div>

    <!-- Scoped JavaScript -->
    <script>
        function toggleDonationAccordion(button) {
            const item = button.parentElement;
            const content = button.nextElementSibling;
            const icon = button.querySelector('.accordion-icon');
            const isActive = content.classList.contains('active');
            
            // Close all others with animation
            document.querySelectorAll('.donation-section .accordion-item').forEach(function(otherItem) {
                const otherContent = otherItem.querySelector('.accordion-content');
                const otherIcon = otherItem.querySelector('.accordion-icon');
                
                if (otherItem !== item && otherContent.classList.contains('active')) {
                    otherContent.classList.remove('active');
                    otherIcon.textContent = '+';
                    otherIcon.classList.remove('rotating');
                    setTimeout(() => {
                        otherIcon.style.transform = 'rotate(0deg)';
                    }, 10);
                }
            });
            
            // Toggle current with enhanced animation
            if (isActive) {
                content.classList.remove('active');
                icon.textContent = '+';
                icon.classList.remove('rotating');
                icon.style.transform = 'rotate(0deg)';
            } else {
                content.classList.add('active');
                icon.textContent = '−';
                icon.classList.add('rotating');
                // Add a subtle bounce effect to the button
                button.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    button.style.transform = 'scale(1)';
                }, 150);
            }
        }
        
        // Add hover sound effect simulation (visual feedback)
        document.querySelectorAll('.accordion-header').forEach(header => {
            header.addEventListener('mouseenter', function() {
                this.style.transform = 'translateX(5px)';
            });
            header.addEventListener('mouseleave', function() {
                this.style.transform = 'translateX(0)';
            });
        });
        
        // Initialize first item as closed (removed active class from HTML)
        document.addEventListener('DOMContentLoaded', function() {
            // Optional: Auto-open first item after delay
            // setTimeout(() => {
            //     document.querySelector('.accordion-header').click();
            // }, 1000);
        });
    </script>

    {{-- footer --}}
    @include('partials.footer')
@endsection