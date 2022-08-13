@extends('layouts.frontend.app')

@section('title','MRO SUPPLY')

@push('css')
    <style>

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
@endsection

@push('js')

@endpush
