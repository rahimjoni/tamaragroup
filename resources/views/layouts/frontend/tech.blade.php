@extends('layouts.frontend.app')

@section('title','MRO SUPPLY')

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
        <div class="page-header-bg" style="background-image: url(assets/frontend/images/backgrounds/pipe.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li>Tamara Tech</li>
                </ul>
                <h2>TAMARA TECH</h2>
            </div>
        </div>
    </section><BR><BR>

    <section class="">
        <div class="container">
            <div class="row">
                <p class="section-sub-title">ABOUT TAMARA TECH</p>
                <div class="service-details__right">
                    <div class="service-details__content">
                        <p class="service-details__text-1"> Tamara Technology have partnered with international companies to provide industrial 4.0 revolution technologies, such as block- chain, IoT, data analytics, and artificial intelligence to support oil & gas companies in the region. Also, it has established a global cloud-based B2B procurement e-marketplace system for connecting multiple buyers to multiple suppliers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br>

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
