@extends('layouts.main')

@section('title', 'Reset Password – Naretu Initiatives')

@section('content')

    <!-- Page Header Start -->
    <section class="page-header">
        <div class="page-header-bg"
             style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>RESET PASSWORD</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">Reset Password</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header End -->

    <!-- Reset Password Section Start -->
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Secure your account</span>
                    <h2 class="section-title__title">Create new password</h2>
                </div>

                <div class="col-xl-8 offset-xl-2">

                    {{-- Session Status --}}
                    @if (session('status'))
                        <div class="alert alert-success text-center mb-4" role="alert">
                            <i class="fa fa-check-circle mr-2"></i>
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.store') }}" class="comment-one__form comment-one__login-form">
                        @csrf

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="row">
                            <!-- Email Address -->
                            <div class="col-xl-12">
                                <div class="comment-form__input-box">
                                    <input type="email"
                                           name="email"
                                           placeholder="Email Address"
                                           value="{{ old('email', $request->email) }}"
                                           required 
                                           autofocus 
                                           autocomplete="username">
                                </div>
                                @error('email')
                                    <small class="text-danger d-block mb-3">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="col-xl-12">
                                <div class="comment-form__input-box">
                                    <input type="password"
                                           name="password"
                                           placeholder="New Password"
                                           required 
                                           autocomplete="new-password">
                                </div>
                                @error('password')
                                    <small class="text-danger d-block mb-3">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div class="col-xl-12">
                                <div class="comment-form__input-box">
                                    <input type="password"
                                           name="password_confirmation"
                                           placeholder="Confirm New Password"
                                           required 
                                           autocomplete="new-password">
                                </div>
                                @error('password_confirmation')
                                    <small class="text-danger d-block mb-3">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="comment-form__btn-box text-center">
                                    <button type="submit"
                                            class="thm-btn comment-form__btn">
                                        Reset Password
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-3">
                            <p>
                                Remember your password?
                                <a href="{{ route('login') }}">
                                    Back to login
                                </a>
                            </p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- Reset Password Section End -->

@endsection