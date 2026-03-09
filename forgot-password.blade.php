@extends('layouts.main')

@section('title', 'Forgot Password – Naretu Initiatives')

@section('content')

    <!-- Page Header Start -->
    <section class="page-header">
        <div class="page-header-bg"
             style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Forgot Password</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ ('/') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">Reset Password</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header End -->

    <!-- Forgot Password Section Start -->
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Account Recovery</span>
                    <h2 class="section-title__title">Reset your password</h2>
                </div>

  {{-- Session Status --}}
                    @if (session('status'))
                        <div class="alert alert-success text-center">
                            {{ session('status') }}
                        </div>
                    @endif   

                <div class="col-xl-8 offset-xl-2">

                    {{-- Description --}}
                    <div class="text-center mb-4">
                        <p>
                            Forgot your password? No problem. Enter your email address and
                            we will send you a password reset link.
                        </p>
                    </div>

                   

                    <form method="POST"
                          action="{{ route('password.email') }}"
                          class="comment-one__form comment-one__login-form">

                        @csrf

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="comment-form__input-box">
                                    <input type="email"
                                           name="email"
                                           placeholder="Enter your email address"
                                           value="{{ old('email') }}"
                                           required autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="comment-form__btn-box text-center">
                                    <button type="submit"
                                            class="thm-btn comment-form__btn">
                                        Email Password Reset Link
                                    </button>
                                </div>
                            </div>
                        </div>

           <div class="text-center mt-3">
                            <a href="{{ route('login') }}">
                                Back to Login
                            </a>
                        </div>
                               @error('email')
    <div class="custom-alert custom-alert-error auto-dismiss">
        {{ $message }}
    </div>
@enderror
             
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- Forgot Password Section End -->

@endsection
