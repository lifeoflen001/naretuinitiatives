@extends('layouts.main')

@section('title', 'Login – Naretu Initiatives')

@section('content')

    <!-- Page Header Start -->
    <section class="page-header">
        <div class="page-header-bg"
             style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>WELCOME BACK!</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">Login</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header End -->


    <!-- Login Section Start -->
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Find the wellbeing</span>
                    <h2 class="section-title__title">Login to your account</h2>
                </div>

                <div class="col-xl-8 offset-xl-2">

                    {{-- Session Status --}}
                  <!--  @if (session('status'))
                        <div class="alert alert-success text-center">
                            {{ session('status') }}
                        </div>
                    @endif-->
{{-- Add this at the top of your login form section --}}
@if (session('success'))
    <div class="alert alert-success text-center mb-4" role="alert">
        <i class="fa fa-check-circle mr-2"></i>
        {{ session('success') }}
    </div>
@endif
                    <form method="POST" action="{{ url('login') }}" class="comment-one__form comment-one__login-form">
    @csrf
                      <div class="row">
                            <div class="col-xl-12">
                                <div class="comment-form__input-box">
                                    <input type="email"
                                           name="email"
                                           placeholder="Email Address"
                                           value="{{ old('email') }}"
                                           required autofocus>
                                </div>
                                @error('email')
                                    <small class="text-danger d-block mb-3">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="col-xl-12">
                                <div class="comment-form__input-box">
                                    <input type="password"
                                           name="password"
                                           placeholder="Enter Password"
                                           required>
                                </div>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-xl-12 text-center">
                                <div class="form-check d-inline-block">
                                    <input type="checkbox" name="remember" class="form-check-input" id="remember">
                                    <label class="form-check-label small" for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="comment-form__btn-box text-center">
                                    <button type="submit"
                                            class="thm-btn comment-form__btn">
                                        Login now
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-3">
                            @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                                    Forgot your password?
                                </a>
                            @endif
                        </div>

                        <div class="text-center mt-2">
                            <p>
                                Don't have an account?
                                <a href="{{ url('register') }}">
                                    Sign up
                                </a>
                            </p>
                        </div>
                                @error('password')
    <div class="custom-alert custom-alert-error auto-dismiss">
        {{ $message }}
    </div>
@enderror
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- Login Section End -->

@endsection
