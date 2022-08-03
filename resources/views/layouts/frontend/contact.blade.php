@extends('layouts.frontend.app')

@section('title','Contact Us')

@push('css')
    <style></style>
@endpush

@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/frontend/images/backgrounds/contact.png)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li>Contact Us</li>
                </ul>
                <h2>Contact Us</h2>
            </div>
        </div>
    </section>
    <br><br>
    <section class="contact-page">
        <div class="contact-page-shape-1">
            <img src="{{ asset('assets/frontend/images/shapes/contact-page-shape-1.png') }}" alt="">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-sub-title-box">
                    <p class="section-sub-title">Contact Us</p>
                    <div class="section-title-shape-1">
                        <img class="fab-icon-main" src="{{ asset('assets/frontend/images/favicons/icon.png') }}" alt="">
                    </div>
                </div>
                <h2 class="section-title__title">Drop us a line!</h2><br>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact-page__form">
                        <form class="comment-one__form contact-form-validated" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Your name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Email address" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="comment-form__input-box text-message-box">
                                        <textarea name="message" placeholder="Write a message"></textarea>
                                    </div>
                                    <div class="comment-form__btn-box">
                                        <button type="submit" class="thm-btn comment-form__btn"> <i class="fa fa-arrow-right"></i> Send a message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-details">
        <div class="container">
            <ul class="list-unstyled contact-details__list">
                <li>
                    <div class="contact-details__icon">
                        <span class="icon-telephone"></span>
                    </div>
                    <div class="contact-details__content">
                        <h4>
                            <a href="tel:+966 13 830 2223" class="contact-details__number-1">+966 13 830 2223</a>
                        </h4>
                    </div>
                </li>
                <li>
                    <div class="contact-details__icon">
                        <span class="icon-email"></span>
                    </div>
                    <div class="contact-details__content">
                        <h4>
                            <a href="mailto:info@tamara-group.com" class="contact-details__number-1">Info@tamara-group.com </a>
                        </h4>
                    </div>
                </li>
                <li>
                    <div class="contact-details__icon" style="margin-top: 78px">
                        <span class="icon-pin"></span>
                    </div>
                    <div class="contact-details__content">
                        <h4>2682 Bashar Bin Burd Street, <br>Office number 406,<br>
                            Olaya, AlKhobar - 7353 <br>34448 ,Saudi Arabia
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section><br>

    <section class="google-map google-map-two">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3576.7991327223085!2d50.16964931503206!3d26.30061098339501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49e632b0b3df91%3A0x661b5257b00c15a2!2zQWxham1pIEJ1c2luZXNzIFRvd2VyINio2LHYrCDYp9mE2LnYrNmF2Yog2YTZhNij2LnZhdin2YQ!5e0!3m2!1sen!2ssa!4v1658821468309!5m2!1sen!2ssa" class="google-map__one" allowfullscreen=""></iframe>
    </section>

@endsection

@push('js')

@endpush
