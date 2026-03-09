@extends('layouts.main')

@section('title', 'Naretu Initiatives')

@section('content')
    @include('partials.header')

    <!-- Page Header Start -->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }})"></div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Contact Us</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">Contact Page</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Contact Page Start -->
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <!-- Left Info -->
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-page__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Contact us</span>
                            <h2 class="section-title__title">Get in Touch!</h2>
                        </div>
                        <p class="contact-page__text">
                            Make a difference with Naretu Initiatives! Whether you're passionate about helping families or spreading awareness, your time can change lives.
                        </p>
                        <div class="contact-page__social">
                            <a href="https://youtube.com/naretu_initiatives_org" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="https://instagram.com/naretu_initiatives_org" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://facebook.com/naretu_initiatives_org" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="https://tiktok.com/naretu_initiatives_org" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-tiktok"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Form -->
                <div class="col-xl-8 col-lg-7">
                    <div class="contact-page__right">
                        <!-- AJAX Success/Error Messages -->
                        <div id="formMessage" style="display: none;" class="alert-message"></div>

                        <!-- Contact Form -->
                        <form id="contactForm" method="POST" action="{{ url('contact.submit') }}">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" required>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" name="phone" placeholder="Phone Number" value="{{ old('phone') }}">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <select name="subject" required>
                                            <option value="">Select Subject</option>
                                            <option value="donation" {{ old('subject') == 'donation' ? 'selected' : '' }}>Query about Donation</option>
                                            <option value="volunteer" {{ old('subject') == 'volunteer' ? 'selected' : '' }}>Want to be a Volunteer</option>
                                            <option value="general" {{ old('subject') == 'general' ? 'selected' : '' }}>Just Saying Hi</option>
                                        </select>
                                        @error('subject')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="comment-form__input-box text-message-box">
                                        <textarea name="message" placeholder="Write your Message" required>{{ old('message') }}</textarea>
                                        @error('message')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="comment-form__btn-box">
                                        <button type="submit" class="thm-btn comment-form__btn">Submit Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info -->
    <section class="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="contact-info__single">
                        <h4 class="contact-info__title">About</h4>
                        <p class="contact-info__text">Naretu Initiatives - Empowering communities through education and support.</p>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="contact-info__single contact-info__single-3">
                        <h4 class="contact-info__title">Address</h4>
                        <p class="contact-info__text">19th floor - Room 540 -Naura Springs Tower - Sanawari, P.O.Box 16323 Arusha, Tanzania</p>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="contact-info__single contact-info__single-2">
                        <h4 class="contact-info__title">Contact</h4>
                        <p class="contact-info__email-phone">
                            <a href="mailto:info@naretuinitiatives.org" class="contact-info__email">info@naretuinitiatives.org</a><br>
                            <a href="tel:+2550759638296" class="contact-info__phone">+255 (0)759 638 296</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Clean Styles -->
    <style>
        .alert-message {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s ease;
            border: 1px solid;
        }
        .alert-message.success { 
            background: #d4edda; 
            color: #155724; 
            border-color: #c3e6cb; 
        }
        .alert-message.error { 
            background: #f8d7da; 
            color: #721c24; 
            border-color: #f5c6cb; 
        }
        .text-danger { 
            font-size: 0.875rem; 
            display: block;
            margin-top: 5px;
        }
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background: white;
            height: 50px;
        }
    </style>

    <!-- Clean JavaScript - 2 Second Alerts -->
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const form = this;
            const formData = new FormData(form);
            const messageBox = document.getElementById('formMessage');
            
            // Hide previous messages
            messageBox.style.display = 'none';
            
            fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    messageBox.innerHTML = data.message || 'Thank you! Your message has been sent.';
                    messageBox.className = 'alert-message success';
                    form.reset();
                } else if (data.errors) {
                    const errorMsg = Object.values(data.errors).flat().join('<br>');
                    messageBox.innerHTML = errorMsg || 'Please check your inputs.';
                    messageBox.className = 'alert-message error';
                } else {
                    messageBox.innerHTML = data.message || 'Something went wrong. Please try again.';
                    messageBox.className = 'alert-message error';
                }
                
                messageBox.style.display = 'block';
                
                // Auto-hide after exactly 2 seconds
                setTimeout(() => {
                    messageBox.style.display = 'none';
                }, 3000);
            })
            .catch(error => {
                console.error('Form submission error:', error);
                messageBox.innerHTML = 'Network error. Please try again.';
                messageBox.className = 'alert-message error';
                messageBox.style.display = 'block';
                setTimeout(() => {
                    messageBox.style.display = 'none';
                }, 3000);
            });
        });
    </script>

    @include('partials.footer')
@endsection
