@extends('layouts.main')

@section('title', 'Register – Naretu Initiatives')

@section('content')
    <!-- Page Header Start -->
    <section class="page-header">
        <div class="page-header-bg"
             style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Welcome!</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">Register</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header End -->

    <!-- Register Section Start -->
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Find the wellbeing</span>
                    <h2 class="section-title__title">Create your account</h2>
                </div>

                <div class="col-xl-8 offset-xl-2">

                    {{-- Success Message --}}
                    @if (session('success'))
                        <div class="alert alert-success text-center mb-4 auto-dismiss" role="alert">
                            <i class="fa fa-check-circle mr-2"></i>
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- Session Status --}}
                    @if (session('status'))
                        <div class="alert alert-info text-center mb-4 auto-dismiss">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- Validation Errors Summary --}}
                    @if ($errors->any())
                        <div class="alert alert-danger auto-dismiss">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST"
                          action="{{ route('register') }}"
                          class="comment-one__form comment-one__login-form">

                        @csrf

                        <div class="row">
                            {{-- Name Field --}}
                            <div class="col-xl-12">
                                <div class="comment-form__input-box">
                                    <input type="text"
                                           name="name"
                                           placeholder="Full Name"
                                           value="{{ old('name') }}"
                                           required autofocus>
                                </div>
                                @error('name')
                                    <div class="alert alert-danger auto-dismiss mb-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Email Field --}}
                            <div class="col-xl-12">
                                <div class="comment-form__input-box">
                                    <input type="email"
                                           name="email"
                                           placeholder="Email Address"
                                           value="{{ old('email') }}"
                                           required>
                                </div>
                                @error('email')
                                    <div class="alert alert-danger auto-dismiss mb-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Password Field --}}
                            <div class="col-xl-12">
                                <div class="comment-form__input-box password-wrapper">
                                    <input type="password"
                                           name="password"
                                           id="password"
                                           placeholder="Enter Password"
                                           required>
                                    <span class="toggle-password" onclick="togglePassword('password', this)">
                                        <i class="fa fa-eye"></i>
                                    </span>
                                </div>
                                @error('password')
                                    <div class="alert alert-danger auto-dismiss mb-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Password Confirmation Field --}}
                            <div class="col-xl-12">
                                <div class="comment-form__input-box password-wrapper">
                                    <input type="password"
                                           name="password_confirmation"
                                           id="password_confirmation"
                                           placeholder="Confirm Password"
                                           required>
                                    <span class="toggle-password" onclick="togglePassword('password_confirmation', this)">
                                        <i class="fa fa-eye"></i>
                                    </span>
                                </div>
                                @error('password_confirmation')
                                    <div class="alert alert-danger auto-dismiss mb-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="comment-form__btn-box text-center">
                                    <button type="submit"
                                            class="thm-btn comment-form__btn">
                                       Sign up
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <p>
                               Already have an account?
                                <a href="{{ route('login') }}">
                                    Log in
                                </a>
                            </p>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- Register Section End -->

    <style>
        /* Password toggle styling */
        .password-wrapper {
            position: relative;
        }
        
        .password-wrapper input {
            padding-right: 45px;
        }
        
        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #666;
            font-size: 18px;
            z-index: 10;
        }
        
        .toggle-password:hover {
            color: #333;
        }

        /* Alert full width matching form fields */
        .alert {
            width: 100%;
            border-radius: 4px;
            padding: 12px 15px;
            font-size: 14px;
        }

        /* Smooth fade out animation */
        .auto-dismiss {
            transition: opacity 0.5s ease-out;
        }
        
        .fade-out {
            opacity: 0;
        }
    </style>

    <script>
        // Toggle password visibility
        function togglePassword(inputId, toggleElement) {
            const input = document.getElementById(inputId);
            const icon = toggleElement.querySelector('i');
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }

        // Auto-dismiss alerts after 3 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const alerts = document.querySelectorAll('.auto-dismiss');
            
            alerts.forEach(function(alert) {
                setTimeout(function() {
                    alert.classList.add('fade-out');
                    setTimeout(function() {
                        alert.remove();
                    }, 500);
                }, 3000);
            });
        });
    </script>

@endsection