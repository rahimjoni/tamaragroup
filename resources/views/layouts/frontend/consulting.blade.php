@extends('layouts.frontend.app')

@section('title','Tamara Consulting')

@push('css')
    <style>
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-250px * 7));
            }
        }
        .sliderTest {
            height: 100px;
            margin: auto;
            overflow: hidden;
            position: relative;
            width: auto;
        }
        .sliderTest .slide-track {
            animation: scroll 40s linear infinite;
            display: flex;
            width: calc(250px * 14);
        }
        .sliderTest .slide {
            height: 100px;
            width: 250px;
            margin-top: 25px;
        }
    </style>
@endpush

@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/frontend/images/backgrounds/project.jpg); background-position: center; background-size: cover">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li>Tamara Consulting</li>
                </ul>
                <h2>TAMARA CONSULTING</h2>
            </div>
        </div>
    </section><br><br>

    <section class="">
        <div class="container">
            <div class="row">
                <p class="section-sub-title">ABOUT TAMARA CONSULTING</p>
                <div class="service-details__right">
                    <div class="service-details__content">
                        <p class="service-details__text-1"> We provide <b>consultation and facilitation</b> services to local and international companies to support and expand their business into Saudi Arabia. This include providing market information, developing feasibility studies and collaborating to establish the business locally.</p>

                        <p>We are agile, client-centric and provide world-class services that allay costs and risks, in a capital-intensive sector dominated by large global multinationals. Our offerings are:
                        </p>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-7">
                        <div class="row">
                            <div class="col-xl-6">
                                <ul class="list-unstyled service-details__benefits-points">
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>Business Facilitation and Licensing Services </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>Project Claim and Dispute Resolution </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>Project Management Support Services</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--Brand One Start-->
    <section class="brand-one">
        <div class="brand-one__inner">
            <div class="brand-one__shape-1">
                <img class="img-fluid" src="{{ asset('assets/frontend/images/shapes/brand-one-shape-1.png') }}" alt="">
            </div>
            <div class="brand-one__shape-2 float-bob-y">
                <img class="img-fluid" src="{{ asset('assets/frontend/images/shapes/brand-one-shape-2.png') }}" alt="">
            </div>
            <div class="container">
                <div class="sliderTest">
                    <div class="slide-track">
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/aramco1.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/Nobian1.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/rdw.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/lng1.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/ar.jpg') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/GE1.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/ye1.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="60" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/cbre.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/cargill.jpg') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/3M1.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/eaton.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/sabic1.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/staatsolie_logo_rgb.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/taqa-og-300.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/Philips_logo.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/lynkco.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/huntsman.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br>
    <!--Brand One End-->
@endsection

@push('js')

@endpush
