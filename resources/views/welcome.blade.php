@extends('layouts.frontend.app')

@section('title','Home')

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
        .serve-p{
            margin-top: 10px;
            color: #fff;
            margin-bottom: 60px;
        }
    </style>
@endpush

@section('content')
    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <section class="main-slider-two clearfix">
        <div class="swiper-container thm-swiper__slider swiper-container-fade swiper-container-initialized swiper-container-horizontal" data-swiper-options="{&quot;slidesPerView&quot;: 1, &quot;loop&quot;: true,
                &quot;effect&quot;: &quot;fade&quot;,
                &quot;pagination&quot;: {
                &quot;el&quot;: &quot;#main-slider-pagination&quot;,
                &quot;type&quot;: &quot;bullets&quot;,
                &quot;clickable&quot;: true
                },
                &quot;navigation&quot;: {
                &quot;nextEl&quot;: &quot;#main-slider__swiper-button-next&quot;,
                &quot;prevEl&quot;: &quot;#main-slider__swiper-button-prev&quot;
                },
                &quot;autoplay&quot;: {
                &quot;delay&quot;: 5000
                }}">
            <div class="swiper-wrapper" style="transition-duration: 0ms;">
                <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" style="width: 1519px; opacity: 1; transform: translate3d(-1519px, 0px, 0px); transition-duration: 0ms;">
                    <div class="image-layer-two" style="background-image: url(assets/frontend/images/backgrounds/CAF-Blog-2019-Apparel-Sourcing-Trends.jpg);"></div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-two__content"><br>
                                    <h2 class="main-slider-two__title">TAMARA GROUP</h2>
                                    <br><br>
                                    <div class="main-slider-two__icon">
                                        <img src="{{ asset('assets/frontend/images/icon/main-slider-arrow.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1" style="width: 1519px; opacity: 1; transform: translate3d(-3038px, 0px, 0px); transition-duration: 0ms;">
                    <div class="image-layer-two" style="background-image: url(assets/frontend/images/backgrounds/shutterstock_104909027-1200x600.jpg);"></div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-two__content"><br>
                                    <h2 class="main-slider-two__title">TAMARA GROUP</h2>
                                    <br><br>
                                    <div class="main-slider-two__icon">
                                        <img src="{{ asset('assets/frontend/images/icon/main-slider-arrow.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- If we need navigation buttons -->
            <div class="main-slider-two__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next" tabindex="0" role="button" aria-label="Next slide">
                    <i class="icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide">
                    <i class="icon-right-arrow"></i>
                </div>
            </div>

            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </div>
    </section><br><br>

    <section class="">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-sub-title-box">
                    <p class="section-sub-title">Tamara Group</p>
                    <div class="section-title-shape-1">
                        <img class="fab-icon-main img-fluid" src="{{ asset('assets/frontend/images/favicons/icon.png') }}" alt="">
                    </div>
                </div>
                <h2 class="section-title__title">We Have Three Enabling Divisions Operating In Different Sectors and Industries</h2>
            </div><br><br>
            <div class="row">
                <!--Services Three Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-4 wow fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                    <div class="services-three__single">
                        <div class="">
                            <a href="https://tamaraconsulting.com/" target="_blank">
                                <div class="services-three__img">
                                    <img class="img-fluid" src="{{ asset('assets/frontend/images/division/tamaraconsulting1.png') }}" alt="">
                                </div>
                            </a>

                        </div>
                        <div class="services-three__content">
                            <h3 class="services-three__title"><a href="{{ url('/consulting') }}">Tamara Consulting</a></h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-4 wow fadeInUp animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                    <div class="services-three__single">
                        <div class="">
                            <a href="https://tamaratradings.com/" target="_blank">
                                <div class="services-three__img">
                                    <img class="img-fluid" src="{{ asset('assets/frontend/images/division/tamaratrading1.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="services-three__content">
                            <h3 class="services-three__title"><a href="{{ url('/trading') }}">Tamara Trading</a></h3>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-4 wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <div class="services-three__single">
                        <div class="">
                            <a href="{{ url('/working') }}" target="_blank">
                                <div class="services-three__img">
                                    <img class="img-fluid" src="{{ asset('assets/frontend/images/division/tamaratech1.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="services-three__content">
                            <h3 class="services-three__title"><a href="{{ url('/tech') }}">Tamara Tech</a></h3>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
            </div>
        </div>
    </section>
     <!--CTA One Start-->
     <section class="cta-one">
        <div class="cta-one__img-box">
            <div class="cta-one__img">
                <img src="{{ asset('assets/frontend/images/resources/cta-one-img-1.jpg') }}" alt="">
            </div>
        </div>
        <div class="container">
            <div class="cta-one__inner">
                <div class="cta-one__left">
                    <p class="cta-one__sub-title">Need our services?</p>
                    <h3 class="cta-one__title">WE OPTIMIZE YOUR PROCUREMENT PROCESS</h3>
                </div>
                <div class="cta-one__btn-box">
                    <a href="{{ url('contact-us') }}" class="thm-btn cta-one__btn"> <i class="fa fa-arrow-right"></i>REQUEST ADVICE</a>
                </div>
            </div>
        </div>
    </section><br><br>
    <!--CTA One End-->

    <!--About One Start-->
    <section class="about-one">
        <div class="about-one__shape float-bob-x">
            <img class="img-fluid" src="{{ asset('assets/frontend/images/shapes/about-one-shape.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                             data-wow-duration="2500ms">
                            <div class="about-one__img">
                                <img class="img-fluid" src="{{ asset('assets/frontend/images/backgrounds/about-home.png') }}" alt="">
                            </div>
                            <div class="about-one__line">
                                <img class="img-fluid" src="{{ asset('assets/frontend/images/shapes/about-one-line.png') }}" alt="">
                            </div>
                            <div class="about-one__satisfied">
                                <div class="about-one__satisfied-inner">
                                    <div class="about-one__satisfied-shape">
                                        <img class="img-fluid" src="{{ asset('assets/frontend/images/shapes/about-one-satisfied-shape-1.png') }}" alt="">
                                    </div>
                                    <div class="about-one__satisfied-content">
                                        <p class="about-one__satisfied-text"> Our aim is to <br> share our passion</p>
                                    </div>
                                </div>
                            </div>
                            <div class="about-one__big-text">Tamara Group</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">About TAMARA GROUP</p>
                                <div class="section-title-shape-1">
                                    <img class="fab-icon-main img-fluid" src="{{ asset('assets/frontend/images/favicons/icon.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <p class="about-one__text">We are a network of knowledgeable and highly experienced professionals familiar with the local Saudi industries, governing laws, regulations, and contracting and procurement practices.</p>
                        <br> <p>Our aim is to share our passion and experience in the energy sector to empower international and local companies and ultimately help them to expand and succeed.</p><br>

                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="faq-one__lef">
                                    <h3 style="color: #99774C">Vision</h3>
                                    <p><b>Empower</b> international and local companies to expand and succeed.</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="faq-one__right">
                                    <h3 style="color: #99774C">Mission</h3>
                                    <p><b>To offer</b> impactful, agile, and high-quality services and products by our consulting, trading, and technology Divisions.</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('/about-us') }}" class="thm-btn about-one__btn"> <i class="fa fa-arrow-right"></i> Discover more</a>
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
