@extends('layouts.frontend.app')

@section('title','Tamara Consulting')

@push('css')
    <style>

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
@endsection

@push('js')

@endpush
