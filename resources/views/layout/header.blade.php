<div class="site-header">
    <div class="site-logo">
        <a href="{{ url('/') }}">
            <img src="{{ asset('assets/images/logo-almajdouie.png') }}" alt="">
            <img src="{{ asset('assets/images/logo-almajdouie-white.png') }}" alt="" class="site-logo-white">
        </a>
    </div>
    <div class="sh-top-bar">
        <div class="container-fluid mw-1200">
            <div class="shtb-sm-icons">
                <a href="https://www.facebook.com/AlmajdouieMotors/" target="_blank"><i
                        class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/AlmajdouieM" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/company/almajdouie-motors" target="_blank"><i
                        class="fab fa-linkedin-in"></i></a>
                <a href="https://www.instagram.com/almajdouiemotors/" target="_blank"><i
                        class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCcrSU-A_SJayXn_1pG94Mvg" target="_blank"><i
                        class="fab fa-youtube"></i></a>
            </div>
            <div class="shtb-tagline">
                Access our services from home & follow Covid-19 prevention measures.
            </div>
            <div class="shtb-lang-switch">
                <a class="btnLanguage" href="javascript:void(0)" title="Change to Arabic" data-lang="Ar">عربي</a>
            </div>
            <div class="theme-switch">
                <input type="checkbox" class="theme-switch-input" id="themeSwitch">
                <label for="themeSwitch">
                    <span class="theme-switch-dark">Dark Mode</span>
                    <span class="theme-switch-light">Light Mode</span>
                </label>
            </div>
        </div>
    </div>
    <div class="sh-nav-bar">
        <div class="container-fluid mw-1200">
            <div class="sh-nav-wrap">
                <div class="mob-nav-icon"><i class="fa fa-bars fa-2x"></i></div>
                <div class="sh-nav">
                    <div class="mob-nav-closer"><i class="fa fa-angle-left fa-2x"></i></div>
                    <ul>
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li class="has-submenu "><a href="javascript:void(0)">Our Brands</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('changan') }}">Changan</a></li>
                                <li><a href="{{ url('hyundai') }}">Hyundai</a></li>
                                <li><a href="{{ url('genesis') }}">Genesis</a></li>
                                <li><a href="{{ url('peugeot') }}">Peugeot</a></li>
                                <li><a href="{{ url('citroen') }}">Citroen</a></li>
                                <li><a href="{{ url('hyundai_commercial') }}">Hyundai - Commercial Vehicles</a></li>
                                <li><a href="{{ url('rayafinancing') }}">Raya Financing</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('book-a-service') }}">Book A Service</a></li>
                        <li><a href="{{ url('offers') }}">Offers</a></li>

                        <li><a href="{{ url('about') }}">About Us</a></li>
                        <li><a href="{{ url('contact') }}">Contact us </a></li>
                    </ul>
                </div>
                <div class="mob-nav-bg"></div>
            </div>
        </div>
    </div>
</div>
