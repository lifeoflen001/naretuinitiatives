@extends('layouts.main')

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
                    <h2>Pricing</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Pricing</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->


        <section class="pricing-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Pricing tables</span>
                    <h2 class="section-title__title">Select Your Plan Now</h2>
                </div>
                <div class="text-center">
                    <ul class="nav nav-tabs pricing-one__tab__btns" id="pricingTab" role="tablist">
                        <li role="presentation" class="nav-item "><button class="nav-link active" id="monthly-tab"
                                data-bs-toggle="tab" data-bs-target="#monthly" type="button" role="tab"
                                aria-selected="true">Monthly</button></li>
                        <li role="presentation" class="nav-item"><button class="nav-link" id="yearly-tab"
                                data-bs-toggle="tab" data-bs-target="#yearly" role="tab" type="button"
                                aria-selected="true">Yearly</button></li>
                    </ul><!-- /.nav nav-tabs pricing-one__tab__btns -->
                </div><!-- /.text-center -->
                <div class="tab-content" id="pricingTabContent">
                    <div class="tab-pane fade show active animated fadeInUp" id="monthly" role="tabpanel"
                        aria-labelledby="monthly-tab">
                        <div class="row gutter-y-30">
                            <div class="col-md-12 col-lg-4">
                                <div class="pricing-card">
                                    <div class="pricing-card__icon">
                                        <i class="pifoxen-two-solidarity"></i>
                                    </div><!-- /.pricing-card__icon -->
                                    <h3 class="pricing-card__name">Basic Plan</h3><!-- /.pricing-card__name -->
                                    <p class="pricing-card__amount">
                                        $29
                                        <span>/month</span>
                                    </p><!-- /.pricing-card__amount -->
                                    <p class="pricing-card__tagline">Pricing includes coverage for users</p>
                                    <!-- /.pricing-card__tagline -->
                                    <p class="pricing-card__label">All Services Include:</p>
                                    <!-- /.pricing-card__label -->
                                    <ul class="list-unstyled pricing-card__list">
                                        <li>
                                            <i class="icon-tick"></i>
                                            24/7 system monitoring
                                        </li>
                                        <li>
                                            <i class="icon-tick"></i>
                                            Security management
                                        </li>
                                        <li>
                                            <i class="icon-tick"></i>
                                            Remote free support
                                        </li>
                                        <li>
                                            <i class="icon-tick"></i>
                                            Upgrade options
                                        </li>
                                    </ul><!-- /.list-unstyled pricing-card__list -->
                                    <a href="contact.html" class="thm-btn pricing-card__btn">Start free trial</a>
                                </div><!-- /.pricing-card -->
                            </div><!-- /.col-md-12 col-lg-4 -->
                            <div class="col-md-12 col-lg-4">
                                <div class="pricing-card popular" style="--accent-color: #ff5528;">
                                    <div class="pricing-card__icon">
                                        <i class="pifoxen-two-solidarity-1"></i>
                                    </div><!-- /.pricing-card__icon -->
                                    <h3 class="pricing-card__name">Standard Plan</h3><!-- /.pricing-card__name -->
                                    <p class="pricing-card__amount">
                                        $39
                                        <span>/month</span>
                                    </p><!-- /.pricing-card__amount -->
                                    <p class="pricing-card__tagline">Pricing includes coverage for users</p>
                                    <!-- /.pricing-card__tagline -->
                                    <p class="pricing-card__label">All Services Include:</p>
                                    <!-- /.pricing-card__label -->
                                    <ul class="list-unstyled pricing-card__list">
                                        <li>
                                            <i class="icon-tick"></i>
                                            24/7 system monitoring
                                        </li>
                                        <li>
                                            <i class="icon-tick"></i>
                                            Security management
                                        </li>
                                        <li>
                                            <i class="icon-tick"></i>
                                            Remote free support
                                        </li>
                                        <li>
                                            <i class="icon-tick"></i>
                                            Upgrade options
                                        </li>
                                    </ul><!-- /.list-unstyled pricing-card__list -->
                                    <a href="contact.html" class="thm-btn pricing-card__btn">Start free trial</a>
                                </div><!-- /.pricing-card -->
                            </div><!-- /.col-md-12 col-lg-4 -->
                            <div class="col-md-12 col-lg-4">
                                <div class="pricing-card" style="--accent-color: #2bb1ce;">
                                    <div class="pricing-card__icon">
                                        <i class="pifoxen-two-care"></i>
                                    </div><!-- /.pricing-card__icon -->
                                    <h3 class="pricing-card__name">Premium Plan</h3><!-- /.pricing-card__name -->
                                    <p class="pricing-card__amount">
                                        $49
                                        <span>/month</span>
                                    </p><!-- /.pricing-card__amount -->
                                    <p class="pricing-card__tagline">Pricing includes coverage for users</p>
                                    <!-- /.pricing-card__tagline -->
                                    <p class="pricing-card__label">All Services Include:</p>
                                    <!-- /.pricing-card__label -->
                                    <ul class="list-unstyled pricing-card__list">
                                        <li>
                                            <i class="icon-tick"></i>
                                            24/7 system monitoring
                                        </li>
                                        <li>
                                            <i class="icon-tick"></i>
                                            Security management
                                        </li>
                                        <li>
                                            <i class="icon-tick"></i>
                                            Remote free support
                                        </li>
                                        <li>
                                            <i class="icon-tick"></i>
                                            Upgrade options
                                        </li>
                                    </ul><!-- /.list-unstyled pricing-card__list -->
                                    <a href="contact.html" class="thm-btn pricing-card__btn">Start free trial</a>
                                </div><!-- /.pricing-card -->
                            </div><!-- /.col-md-12 col-lg-4 -->
                        </div><!-- /.row -->
                    </div><!-- /.tab-pane -->
                    <div class="tab-pane fade animated fadeInUp" id="yearly" role="tabpanel"
                        aria-labelledby="yearly-tab">
                        <div class="row gutter-y-30">
                            <div class="col-md-12 col-lg-4">
                                <div class="pricing-card">
                                    <div class="pricing-card__icon">
                                        <i class="pifoxen-two-solidarity"></i>
                                    </div><!-- /.pricing-card__icon -->
                                    <h3 class="pricing-card__name">Basic Plan</h3><!-- /.pricing-card__name -->
                                    <p class="pricing-card__amount">
                                        $99
                                        <span>/year</span>
                                    </p><!-- /.pricing-card__amount -->
                                    <p class="pricing-card__tagline">Pricing includes coverage for users</p>
                                    <!-- /.pricing-card__tagline -->
                                    <p class="pricing-card__label">All Services Include:</p>
                                    <!-- /.pricing-card__label -->
                                    <ul class="list-unstyled pricing-card__list">
                                        <li>
                                            <i class="icon-tick"></i>
                                            24/7 system monitoring
                                        </li>
                                        <li>
                                            <i class="icon-tick"></i>
                                            Security management
                                        </li>
                                        <li>
                                            <i class="icon-tick"></i>
                                            Remote free support
                                        </li>
                                        <li>
                                            <i class="icon-tick"></i>
                                            Upgrade options
                                        </li>
                                    </ul><!-- /.list-unstyled pricing-card__list -->
                                    <a href="contact.html" class="thm-btn pricing-card__btn">Start free trial</a>
                                </div><!-- /.pricing-card -->
                            </div><!-- /.col-md-12 col-lg-4 -->
                            <div class="col-md-12 col-lg-4">
                                <div class="pricing-card popular" style="--accent-color: #ff5528;">
                                    <div class="pricing-card__icon">
                                        <i class="pifoxen-two-solidarity-1"></i>
                                    </div><!-- /.pricing-card__icon -->
                                    <h3 class="pricing-card__name">Standard Plan</h3><!-- /.pricing-card__name -->
                                    <p class="pricing-card__amount">
                                        $199
                                        <span>/year</span>
                                    </p><!-- /.pricing-card__amount -->
                                    <p class="pricing-card__tagline">Pricing includes coverage for users</p>
                                    <!-- /.pricing-card__tagline -->
                                    <p class="pricing-card__label">All Services Include:</p>
                                    <!-- /.pricing-card__label -->
                                    <ul class="list-unstyled pricing-card__list">
                                        <li>
                                            <i class="icon-tick"></i>
                                            24/7 system monitoring
                                        </li>
                                        <li>
                                            <i class="icon-tick"></i>
                                            Security management
                                        </li>
                                        <li>
                                            <i class="icon-tick"></i>
                                            Remote free support
                                        </li>
                                        <li>
                                            <i class="icon-tick"></i>
                                            Upgrade options
                                        </li>
                                    </ul><!-- /.list-unstyled pricing-card__list -->
                                    <a href="contact.html" class="thm-btn pricing-card__btn">Start free trial</a>
                                </div><!-- /.pricing-card -->
                            </div><!-- /.col-md-12 col-lg-4 -->
                            <div class="col-md-12 col-lg-4">
                                <div class="pricing-card" style="--accent-color: #2bb1ce;">
                                    <div class="pricing-card__icon">
                                        <i class="pifoxen-two-care"></i>
                                    </div><!-- /.pricing-card__icon -->
                                    <h3 class="pricing-card__name">Premium Plan</h3><!-- /.pricing-card__name -->
                                    <p class="pricing-card__amount">
                                        $399
                                        <span>/year</span>
                                    </p><!-- /.pricing-card__amount -->
                                    <p class="pricing-card__tagline">Pricing includes coverage for users</p>
                                    <!-- /.pricing-card__tagline -->
                                    <p class="pricing-card__label">All Services Include:</p>
                                    <!-- /.pricing-card__label -->
                                    <ul class="list-unstyled pricing-card__list">
                                        <li>
                                            <i class="icon-tick"></i>
                                            24/7 system monitoring
                                        </li>
                                        <li>
                                            <i class="icon-tick"></i>
                                            Security management
                                        </li>
                                        <li>
                                            <i class="icon-tick"></i>
                                            Remote free support
                                        </li>
                                        <li>
                                            <i class="icon-tick"></i>
                                            Upgrade options
                                        </li>
                                    </ul><!-- /.list-unstyled pricing-card__list -->
                                    <a href="contact.html" class="thm-btn pricing-card__btn">Start free trial</a>
                                </div><!-- /.pricing-card -->
                            </div><!-- /.col-md-12 col-lg-4 -->
                        </div><!-- /.row -->
                    </div><!-- /.tab-pane -->
                </div><!-- /#pricingTabContent.tab-content -->

            </div><!-- /.container -->
        </section><!-- /.pricing-one -->



