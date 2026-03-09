@extends('layouts.app')

@section('title', 'Naretu Initiatives')


@section('content')
    {{-- header --}}
    @include('partials.header')

    <!-- slider Area Start-->

      <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Upcoming Events</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Events</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Events Page Start-->
        <section class="events-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!--Events Single-->
                        <div class="events__single">
                            <div class="events__img">
                                <img src="assets/images/resources/events-img-1.jpg" alt="">
                                <div class="events__date">
                                    <p>20 <br> oct</p>
                                </div>
                            </div>
                            <div class="events__content">
                                <h3 class="events__title"><a href="event-details.html">Hand for Children</a></h3>
                                <ul class="list-unstyled events__meta">
                                    <li><i class="far fa-clock"></i>4:00pm 6:00pm</li>
                                    <li><i class="fas fa-map-marker-alt"></i>New York</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!--Events Single-->
                        <div class="events__single">
                            <div class="events__img">
                                <img src="assets/images/resources/events-img-2.jpg" alt="">
                                <div class="events__date">
                                    <p>20 <br> oct</p>
                                </div>
                            </div>
                            <div class="events__content">
                                <h3 class="events__title"><a href="event-details.html">Play for the World</a></h3>
                                <ul class="list-unstyled events__meta">
                                    <li><i class="far fa-clock"></i>4:00pm 6:00pm</li>
                                    <li><i class="fas fa-map-marker-alt"></i>New York</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!--Events Single-->
                        <div class="events__single">
                            <div class="events__img">
                                <img src="assets/images/resources/events-img-3.jpg" alt="">
                                <div class="events__date">
                                    <p>20 <br> oct</p>
                                </div>
                            </div>
                            <div class="events__content">
                                <h3 class="events__title"><a href="event-details.html">Get Inspire and Help</a></h3>
                                <ul class="list-unstyled events__meta">
                                    <li><i class="far fa-clock"></i>4:00pm 6:00pm</li>
                                    <li><i class="fas fa-map-marker-alt"></i>New York</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!--Events Single-->
                        <div class="events__single">
                            <div class="events__img">
                                <img src="assets/images/resources/events-img-4.jpg" alt="">
                                <div class="events__date">
                                    <p>20 <br> oct</p>
                                </div>
                            </div>
                            <div class="events__content">
                                <h3 class="events__title"><a href="event-details.html">Help for Education</a></h3>
                                <ul class="list-unstyled events__meta">
                                    <li><i class="far fa-clock"></i>4:00pm 6:00pm</li>
                                    <li><i class="fas fa-map-marker-alt"></i>New York</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!--Events Single-->
                        <div class="events__single">
                            <div class="events__img">
                                <img src="assets/images/resources/events-img-5.jpg" alt="">
                                <div class="events__date">
                                    <p>20 <br> oct</p>
                                </div>
                            </div>
                            <div class="events__content">
                                <h3 class="events__title"><a href="event-details.html">Make Donation Today</a></h3>
                                <ul class="list-unstyled events__meta">
                                    <li><i class="far fa-clock"></i>4:00pm 6:00pm</li>
                                    <li><i class="fas fa-map-marker-alt"></i>New York</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!--Events Single-->
                        <div class="events__single">
                            <div class="events__img">
                                <img src="assets/images/resources/events-img-6.jpg" alt="">
                                <div class="events__date">
                                    <p>20 <br> oct</p>
                                </div>
                            </div>
                            <div class="events__content">
                                <h3 class="events__title"><a href="event-details.html">Protect Eco System</a></h3>
                                <ul class="list-unstyled events__meta">
                                    <li><i class="far fa-clock"></i>4:00pm 6:00pm</li>
                                    <li><i class="fas fa-map-marker-alt"></i>New York</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Events Page End-->