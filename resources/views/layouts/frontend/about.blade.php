@extends('layouts.frontend.app')

@section('title','About Us')

@push('css')
    <style>
    </style>
@endpush

@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/frontend/images/backgrounds/about.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li>About Us</li>
                </ul>
                <h2>About Us</h2>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box"><br><br>
                                <p class="section-sub-title">About TAMARA GROUP</p>
                                <div class="section-title-shape-1"><br><br>
                                    <img class="fab-icon-main" src="{{ asset('assets/frontend/images/favicons/icon.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <p class="about-three__text" style="text-align: justify">We are a network of knowledgeable and highly experienced professionals familiar with the local Saudi industries, governing laws , regulations, and contracting and procurement practices. Our aim is to share our passion and experience in the energy sector to empower international and local companies and ultimately help them to expand and succeed.</p>
                        <br>
                    </div>
                </div>
            </div>
            <div class="row" style="text-align: justify">
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
            </div><br>
            <div class="row" style="text-align: center">
                <h2 style="color: #99774C" class="d-flex justify-content-center">VALUES</h2><br><br><br>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-two__single1">
                        <div class="services-two__icon1">
                            <img class="ship-icon" src="{{ asset('assets/frontend/images/sector/integrity.png') }}">
                        </div><br>
                        <p>Integrity</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-two__single1">
                        <div class="services-two__icon1">
                            <img class="ship-icon" src="{{ asset('assets/frontend/images/sector/quality.png') }}">
                        </div><br>
                        <p>Reliability</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-two__single1">
                        <div class="services-two__icon1">
                            <img class="ship-icon" src="{{ asset('assets/frontend/images/sector/output-onlinepngtools.png') }}">
                        </div><br>
                        <p>Discipline</p>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br>

    <!--CTA One Start-->
    <section class="cta-one">
        <div class="cta-one__img-box">
            <div class="cta-one__img">
                <img class="img-fluid" src="{{ asset('assets/frontend/images/resources/cta-one-img-1.jpg') }}" alt="">
            </div>
        </div>
        <div class="container">
            <div class="cta-one__inner">
                <div class="cta-one__left">
                    <p class="cta-one__sub-title">Need our help?</p>
                    <h3 class="cta-one__title">WE HELP COMPANY SOLVING THEIR PROBLEM SMARTLY</h3>
                </div>
                <div class="cta-one__btn-box">
                    <a href=""{{ url('contact-us') }} class="thm-btn cta-one__btn"> <i class="fa fa-arrow-right"></i> Reach Us</a>
                </div>
            </div>
        </div>
    </section>
    <!--CTA One End-->
@endsection

@push('js')

@endpush
