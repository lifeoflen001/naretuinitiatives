@extends('layouts.main')

@section('title', 'Naretu Initiatives')

@section('content')
    {{-- header --}}
    @include('partials.header')   
    
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Our Testimonials</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('index') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">Testimonials</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    @php
    $testimonials = [
        [
            'name' => 'Edith Moody',
            'title' => 'Customer',
            'image' => 'assets/images/testimonial/testimonials-2-1.jpg',
            'text' => 'Lorem ipsum is simply free text dolor sit amet, consect notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        ],
        [
            'name' => 'Myra Price',
            'title' => 'Customer',
            'image' => 'assets/images/testimonial/testimonials-2-2.jpg',
            'text' => 'Lorem ipsum is simply free text dolor sit amet, consect notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        ],
        [
            'name' => 'Lulu Rose',
            'title' => 'Customer',
            'image' => 'assets/images/testimonial/testimonials-2-4.jpg',
            'text' => 'Lorem ipsum is simply free text dolor sit amet, consect notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        ],
        [
            'name' => 'Victor Pierce',
            'title' => 'Customer',
            'image' => 'assets/images/testimonial/testimonials-2-3.jpg',
            'text' => 'Lorem ipsum is simply free text dolor sit amet, consect notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        ],
        [
            'name' => 'Bradley Duncan',
            'title' => 'Customer',
            'image' => 'assets/images/testimonial/testimonials-2-6.jpg',
            'text' => 'Lorem ipsum is simply free text dolor sit amet, consect notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        ],
        [
            'name' => 'Vernon Wolfe',
            'title' => 'Customer',
            'image' => 'assets/images/testimonial/testimonials-2-5.jpg',
            'text' => 'Lorem ipsum is simply free text dolor sit amet, consect notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        ]
    ];
    @endphp

    <section class="testimonials-page">
        <div class="container">
            <div class="row testimonials__row">
                @foreach($testimonials as $testimonial)
                <div class="col-lg-4 col-md-6 mb-4">
                    <!--Testimonial Single - Updated Layout-->
                    <div class="testimonial-card">
                        <div class="testimonial-card__inner">
                            {{-- Person Info Box (replaces quote icon) --}}
                            <div class="testimonial-card__person-box">
                                <div class="testimonial-card__person-img">
                                    <img src="{{ asset($testimonial['image']) }}" alt="{{ $testimonial['name'] }}">
                                </div>
                                <div class="testimonial-card__person-info">
                                    <h5 class="testimonial-card__person-name">{{ $testimonial['name'] }}</h5>
                                    <p class="testimonial-card__person-title">{{ $testimonial['title'] }}</p>
                                </div>
                            </div>
                            
                            {{-- Testimonial Text --}}
                            <div class="testimonial-card__content">
                                <p class="testimonial-card__text">{{ $testimonial['text'] }}</p>
                            </div>
                            
                            {{-- Quote icon moved to bottom corner --}}
                            <div class="testimonial-card__quote-icon">
                                <span class="icon-quote"></span>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-lg-4 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.testimonials-page -->

    @include('partials.footer')

@endsection

@push('styles')
<style>
    /* Testimonial Card Styles */
    .testimonial-card {
        height: 100%;
    }

    .testimonial-card__inner {
        background: #fff;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        position: relative;
        height: 100%;
        display: flex;
        flex-direction: column;
        transition: all 0.3s ease;
    }

    .testimonial-card__inner:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
    }

    /* Person Box - Replaces Quote Icon */
    .testimonial-card__person-box {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 20px;
        background: #f8f9fa;
        border-radius: 8px;
        margin-bottom: 20px;
        border-left: 4px solid #09cc7f;
    }

    .testimonial-card__person-img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        overflow: hidden;
        flex-shrink: 0;
        border: 3px solid #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .testimonial-card__person-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .testimonial-card__person-info {
        flex: 1;
    }

    .testimonial-card__person-name {
        margin: 0 0 5px 0;
        font-size: 18px;
        font-weight: 600;
        color: #222;
    }

    .testimonial-card__person-title {
        margin: 0;
        font-size: 14px;
        color: #09cc7f;
        font-weight: 500;
    }

    /* Content Area */
    .testimonial-card__content {
        flex: 1;
    }

    .testimonial-card__text {
        font-size: 15px;
        line-height: 1.8;
        color: #666;
        margin: 0;
        font-style: italic;
    }

    /* Quote Icon - Now in bottom corner */
    .testimonial-card__quote-icon {
        position: absolute;
        bottom: 20px;
        right: 20px;
        width: 40px;
        height: 40px;
        background: #09cc7f;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0.5;
    }

    .testimonial-card__quote-icon span {
        color: #fff;
        font-size: 18px;
    }

    /* Dark Mode Styles */
    [data-theme="dark"] .testimonial-card__inner {
        background: #242836;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
    }

    [data-theme="dark"] .testimonial-card__person-box {
        background: #1e212b;
        border-left-color: #00d4b8;
    }

    [data-theme="dark"] .testimonial-card__person-name {
        color: #e4e6eb;
    }

    [data-theme="dark"] .testimonial-card__person-title {
        color: #00d4b8;
    }

    [data-theme="dark"] .testimonial-card__text {
        color: #b0b3b8;
    }

    [data-theme="dark"] .testimonial-card__quote-icon {
        background: #00d4b8;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .testimonial-card__inner {
            padding: 20px;
        }

        .testimonial-card__person-box {
            padding: 15px;
        }

        .testimonial-card__person-img {
            width: 50px;
            height: 50px;
        }

        .testimonial-card__person-name {
            font-size: 16px;
        }
    }
</style>
@endpush