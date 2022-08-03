<header class="main-header clearfix">
    <div class="main-header__logo">
        <a href="{{ url('/') }}">
            <img src="{{ asset('assets/frontend/images/resources/Vertical-Logo-01.png') }}" alt="" class="log-image"></a>
    </div>
    <nav class="main-menu clearfix">
        <div class="main-menu__wrapper clearfix">
            <div class="main-menu__wrapper-inner clearfix">
                <div class="main-menu__left">
                    <div class="main-menu__main-menu-box">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list">
                            <li class="{{ request()->is('/home') ? 'current' : '' }}">
                                <a href={{ url('/') }}>HOME </a>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:;">DIVISIONS</a>
                                <ul class="border-top-2px">
                                    <li><a class="menu-mega" href="{{ url('/consulting') }}">TAMARA CONSULTING</a></li>
                                    <li><a class="menu-mega" href="{{ url('/trading') }}">TAMARA TRADING</a></li>
                                    <li><a class="menu-mega" href="{{ url('/tech') }}">TAMARA TECH</a></li>
                                </ul>
                            </li>
                            <li class="{{ request()->is('about-us') ? 'current' : '' }}">
                                <a href="{{ url('/about-us') }}">ABOUT US</a>
                            </li>
                            <li class="{{ request()->is('contact-us') ? 'current' : '' }}">
                                <a href="{{ url('contact-us') }}">CONTACT US</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="main-menu__right">
                    <div class="main-menu__call">
                        <div class="main-menu__call-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="main-menu__call-content">
                            <p>Call Anytime</p>
                            <a href="tel:+966 13 830 2223 ">+966 13 830 2223 </a>
                        </div>
                    </div>
                    <div class="main-menu__search-box">
                        <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                    </div>
                    <div class="main-menu__btn-box">
                        <a href="{{ url('contact-us') }}" class="thm-btn main-menu__btn"> Information Request <i class="fa fa-arrow-right"></i>  </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
