@extends('layouts.frontend.app')

@section('title','Tamara Trading')

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
                    <li>Tamara Trading</li>
                </ul>
                <h2>TAMARA TRADING</h2>
            </div>
        </div>
    </section><BR><BR>

    <section class="">
        <div class="container">
            <div class="row">
                <p class="section-sub-title">ABOUT TAMARA TRADING</p>
                <div class="service-details__right">
                    <div class="service-details__content">
                        <p class="service-details__text-1"> Tamara Trading is an innovative provider of global procurement, logistics, and supply chain manage- ment. Tamara Group has an exclusive agency with a highly respected company “Corlido Group”, which has a network of twenty-four procurement offices around the world, providing procurement services to Oil & Gas companies and various industries since 1995.</p>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br>
@endsection

@push('js')

@endpush
