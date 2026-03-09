@extends('layouts.main')

@section('title', 'Donations List - Naretu Initiatives')

@section('content')
    @include('partials.header')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Donations List</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">Donations List</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Donations List Start-->
    <section class="donations-list">
        <div class="container">
            <div class="donations-list__inner">
                <!--Donations List Single-->
                <div class="donations-list__single">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="donations-list__img">
                                <img src="{{ asset('assets/images/resources/donations-list-img-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="donations-list__right">
                                <div class="donations-list__content">
                                    <div class="donations-list__category">
                                        <p>Education</p>
                                    </div>
                                    <h3 class="donations-list__title">
                                        <a href="{{ url('donations/give-them-education') }}">Give African Child a Good Education</a>
                                    </h3>
                                    <p class="donations-list__text">Aellentesque porttitor lacus quis enim varius
                                        sed ipsum dnim veniam quis nos trud exercitation dolor ullamco laboris nisi
                                        ut aliquip ex ea comaody consequat duis aute irure dolor in voluptate
                                        lorem....</p>
                                    <div class="donations-list__progress">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="36%">
                                                <div class="count-text">36%</div>
                                            </div>
                                        </div>
                                        <div class="donations-list__goals">
                                            <p><span>$25,270</span> Raised</p>
                                            <p><span>$30,000</span> Goal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Donations List Single-->
                <div class="donations-list__single donations-list__single-2">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="donations-list__img">
                                <img src="{{ asset('assets/images/resources/donations-list-img-2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="donations-list__right">
                                <div class="donations-list__content">
                                    <div class="donations-list__category">
                                        <p>Medical</p>
                                    </div>
                                    <h3 class="donations-list__title">
                                        <a href="{{ url('donations/start-a-fundraising') }}">A Little Help can Heal their Pains</a>
                                    </h3>
                                    <p class="donations-list__text">Aellentesque porttitor lacus quis enim varius
                                        sed ipsum dnim veniam quis nos trud exercitation dolor ullamco laboris nisi
                                        ut aliquip ex ea comaody consequat duis aute irure dolor in voluptate
                                        lorem....</p>
                                    <div class="donations-list__progress">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="36%">
                                                <div class="count-text">36%</div>
                                            </div>
                                        </div>
                                        <div class="donations-list__goals">
                                            <p><span>$25,270</span> Raised</p>
                                            <p><span>$30,000</span> Goal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Donations List Single-->
                <div class="donations-list__single donations-list__single-3">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="donations-list__img">
                                <img src="{{ asset('assets/images/resources/donations-list-img-3.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="donations-list__right">
                                <div class="donations-list__content">
                                    <div class="donations-list__category">
                                        <p>Food</p>
                                    </div>
                                    <h3 class="donations-list__title">
                                        <a href="{{ url('donations/clean-pure-water') }}">Raise Fund for Clean & Healthy Food</a>
                                    </h3>
                                    <p class="donations-list__text">Aellentesque porttitor lacus quis enim varius
                                        sed ipsum dnim veniam quis nos trud exercitation dolor ullamco laboris nisi
                                        ut aliquip ex ea comaody consequat duis aute irure dolor in voluptate
                                        lorem....</p>
                                    <div class="donations-list__progress">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="36%">
                                                <div class="count-text">36%</div>
                                            </div>
                                        </div>
                                        <div class="donations-list__goals">
                                            <p><span>$25,270</span> Raised</p>
                                            <p><span>$30,000</span> Goal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Donations List Single-->
                <div class="donations-list__single">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="donations-list__img">
                                <img src="{{ asset('assets/images/resources/donations-list-img-4.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="donations-list__right">
                                <div class="donations-list__content">
                                    <div class="donations-list__category">
                                        <p>Education</p>
                                    </div>
                                    <h3 class="donations-list__title">
                                        <a href="{{ url('donations/give-them-education') }}">Give African Child a Good Education</a>
                                    </h3>
                                    <p class="donations-list__text">Aellentesque porttitor lacus quis enim varius
                                        sed ipsum dnim veniam quis nos trud exercitation dolor ullamco laboris nisi
                                        ut aliquip ex ea comaody consequat duis aute irure dolor in voluptate
                                        lorem....</p>
                                    <div class="donations-list__progress">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="36%">
                                                <div class="count-text">36%</div>
                                            </div>
                                        </div>
                                        <div class="donations-list__goals">
                                            <p><span>$25,270</span> Raised</p>
                                            <p><span>$30,000</span> Goal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Donations List End-->

    @include('partials.footer')
@endsection