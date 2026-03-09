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
            <h2>Volunteers</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><span>/</span></li>
                <li class="active">Volunteers</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

@php
$volunteers = [
    [
        'name' => 'Sarah Albert',
        'title' => 'Volunteers',
        'image' => 'assets/images/team/volunteers-1-1.jpg',
        'social' => [
            'twitter' => 'https://twitter.com/sarahalbert',
            'facebook' => 'https://facebook.com/sarahalbert',
            'pinterest' => 'https://pinterest.com/sarahalbert',
            'instagram' => 'https://instagram.com/sarahalbert'
        ]
    ],
    [
        'name' => 'Kevin Martin',
        'title' => 'Volunteers',
        'image' => 'assets/images/team/volunteers-1-2.jpg',
        'social' => [
            'twitter' => 'https://twitter.com/kevinmartin',
            'facebook' => 'https://facebook.com/kevinmartin',
            'pinterest' => '#',
            'instagram' => 'https://instagram.com/kevinmartin'
        ]
    ],
    [
        'name' => 'Jeesica Brown',
        'title' => 'Volunteers',
        'image' => 'assets/images/team/volunteers-1-3.jpg',
        'social' => [
            'twitter' => '#',
            'facebook' => 'https://facebook.com/jeesicabrown',
            'pinterest' => 'https://pinterest.com/jeesicabrown',
            'instagram' => 'https://instagram.com/jeesicabrown'
        ]
    ],
    [
        'name' => 'Mike Hardson',
        'title' => 'Volunteers',
        'image' => 'assets/images/team/volunteers-1-4.jpg',
        'social' => [
            'twitter' => 'https://twitter.com/mikehardson',
            'facebook' => '#',
            'pinterest' => 'https://pinterest.com/mikehardson',
            'instagram' => 'https://instagram.com/mikehardson'
        ]
    ],
    [
        'name' => 'Aleesha Rose',
        'title' => 'Volunteers',
        'image' => 'assets/images/team/volunteers-1-5.jpg',
        'social' => [
            'twitter' => 'https://twitter.com/aleesharose',
            'facebook' => 'https://facebook.com/aleesharose',
            'pinterest' => '#',
            'instagram' => '#'
        ]
    ],
    [
        'name' => 'David Smith',
        'title' => 'Volunteers',
        'image' => 'assets/images/team/volunteers-1-6.jpg',
        'social' => [
            'twitter' => '#',
            'facebook' => 'https://facebook.com/davidsmith',
            'pinterest' => 'https://pinterest.com/davidsmith',
            'instagram' => 'https://instagram.com/davidsmith'
        ]
    ]
];
@endphp

<!--Volunteers Page Start-->
<section class="volunteers-one">
    <div class="container">
        <div class="row">
            @foreach($volunteers as $volunteer)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <!--Volunteers One Single-->
                <div class="volunteers-one__single">
                    <div class="volunteers-one__img">
                        <img src="{{ asset($volunteer['image']) }}" alt="{{ $volunteer['name'] }}">
                        <div class="volunteers-one__social">
                            <a href="{{ $volunteer['social']['twitter'] }}" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="{{ $volunteer['social']['facebook'] }}" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="{{ $volunteer['social']['pinterest'] }}" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                            <a href="{{ $volunteer['social']['instagram'] }}" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="volunteers-one__content">
                        <h4 class="volunteers-one__name">{{ $volunteer['name'] }}</h4>
                        <p class="volunteers-one__title">{{ $volunteer['title'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!--Volunteers Page End-->

     @include('partials.footer')

     @endsection