@extends('layouts.main')

@section('title', 'Naretu Initiatives')


@section('content')
    {{-- header --}}
    @include('partials.header')   
    <!-- slider Area Start-->

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Become a Volunteer</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('index') }}">Home</a></li>
                <li><span>/</span></li>
                <li class="active">Volunteer Today</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

@php
$volunteerImages = [
    'assets/images/resources/become-volunteer-img-1.jpg',
    'assets/images/resources/become-volunteer-img-2.jpg'
];

$requirements = [
    'Nsectetur cing do not elit.',
    'Suspe ndisse suscipit sagittis in leo.',
    'Entum estibulum dignissim lipsm posuere.'
];

$contactInfo = [
    'phone' => '+1 (307) 776-0608',
    'email' => 'needhelp@company.com'
];
@endphp

        <!--Become Volunteer Start-->
        <section class="become-volunteer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="become-volunteer__Left">
                            <div class="become-volunteer__images">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="become-volunteer__img-single">
                                            <img src="{{ asset ('assets/images/resources/become-volunteer-img-1.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="become-volunteer__img-single">
                                            <img src="{{ asset ('assets/images/resources/become-volunteer-img-2.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="become-volunteer__content">
                                <h3 class="become-volunteer__title">Our Requirements</h3>
                                <p class="become-volunteer__text">Make a difference in our charity mission! Whether you're passionate about helping families, organizing events, or spreading awareness, your time and energy can change lives. Our volunteers are the heart of our work—last year alone, they helped serve 50+ families and raise $10,000. No experience needed; just bring your enthusiasm!
</p>
                                <ul class="list-unstyled become-volunteer__points">
                                    <li>Commit to a minimum of 3 hours (or more) per day.</li>         
                                    <li>Feel the joy of direct impact on real causes.</li>
                                    <li>Connect with like-minded people in Tanzania and beyond.</li>
                                    <li>Gain skills in teamwork, event planning, and community outreach.</li>
                                    <li>Be at least 18 years old (or have parental consent if younger).</li>  
                                    <li>Pass a basic background check for roles involving vulnerable groups.</li>
                                </ul>
                                <div class="become-volunteer__contact">
                                   <!-- <p>
                                        <a href="tel:1307776-0608" class="become-volunteer__phone">+255 (0)759 638 296
                                            </a>
                                        <a href="mailto:needhelp@company.com"
                                            class="become-volunteer__email">info@naretuinitiatives.org</a>
                                    </p> -->
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="col-xl-6 col-lg-6">
                <div class="become-volunteer__right">

                    <!-- AJAX Message -->
                    <div id="formMessage" class="alert-message" style="display:none;">

                        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
                    </div>

                    <form id="contactForm" 
      class="become-volunteer__form" 
      action="{{ route('volunteer.store') }}" 
      method="POST">
    @csrf
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="become-volunteer__input">
                                    <input type="text" placeholder="Full Name" name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="become-volunteer__input">
                                    <input type="email" placeholder="Email Address" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="become-volunteer__input">
                                    <input type="text" placeholder="Phone Number" name="phone" value="{{ old('phone') }}">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="become-volunteer__input">
                                    <input type="text" placeholder="Address" name="address" value="{{ old('address') }}">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="become-volunteer__input">
                                    <input type="text" placeholder="Date of Birth" name="date_of_birth" id="datepicker" value="{{ old('date_of_birth') }}">
                                    @error('date_of_birth')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="become-volunteer__input">
                                    <input type="text" placeholder="Occupation" name="occupation" value="{{ old('occupation') }}">
                                    @error('occupation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="become-volunteer__input become-volunteer__message-box">
                                    <textarea name="message" placeholder="Why do you want to volunteer?">{{ old('message') }}</textarea>
                                    @error('message')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="become-volunteer__btn-box">
                                    <button type="submit" class="thm-btn become-volunteer__btn">Submit Request</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Become Volunteer End-->

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
                    messageBox.innerHTML = data.message || 'Thanks! Request Sent, We will contact you soon!.';
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