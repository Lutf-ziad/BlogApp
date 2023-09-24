@extends('layout.main')

@section('content')
    <div class="embed-responsive embed-responsive-21by9">
        <img src="{{ asset('upload/cms/page/12/banner.jpg?a=1') }}" alt="" class="embed-responsive-item">
    </div>

    <div class="content-area">
        <div class="container-fluid mw-1200">
            <h2>WHO WE ARE</h2>
            <p>Almajdouie Motors Company was founded by Shaik Ali Ibrahim Almajdouie in 1985 as a subsidiary of Almajdouie
                Group. Since its inception, Almajdouie Motors has been serving its customers professionally in a highly
                competitive automotive market. It is considered to be one of the leading companies in the automotive
                industry in the Kingdom of Saudi Arabia. Almajdouie Motors Company represents many reputable automotive
                manufactures. Additionally, it strives to tap new markets and look out for new opportunities with an
                extensive range of automotive products and services. Through its advanced dealerships and excellent
                locations, the company covers a vast network and is providing attractive sales, spare parts, and workshop
                centers that are equipped by a highly qualified professional team and advanced equipment’s. The mission of
                Almajdouie Motors is to accelerate customer satisfaction levels by offering the highest quality of products
                and services. Moreover, its vision is to provide the best customer experience through diversified business
                units, which are guided by the core values of Almajdouie Group; care, accountability, transparency,
                commitment, and harmony.</p>
            <div class="py-4">
                <h3>Our Achievements</h3>
                <div class="achievements-slider">
                    <div class="owl-carousel owl-theme" id="achieveSlider">
                        <div class="achieve-slider-col">
                            <a href="javascript:void(0);" class="embed-responsive embed-responsive-16by9">
                                <img src="{{ asset('upload/cms/achievement/6/achievement.jpg?keycode=b1f505b843') }}" alt=""
                                    class="embed-responsive-item">
                                <span class="label">2021</span>
                            </a>
                            <h5 data-mh="achieve-title">
                                <small>changan <span><i class="fa fa-calendar-alt"></i> 2021</span></small>
                                Changan CS35 plus Received the Quality Award for the Year 2020
                            </h5>
                        </div>
                        <div class="achieve-slider-col">
                            <a href="javascript:void(0);" class="embed-responsive embed-responsive-16by9">
                                <img src="{{ asset('upload/cms/achievement/8/achievement.jpg?keycode=344de901b7') }}" alt=""
                                    class="embed-responsive-item">
                                <span class="label">2021</span>
                            </a>
                            <h5 data-mh="achieve-title">
                                <small>changan <span><i class="fa fa-calendar-alt"></i> 2021</span></small>
                                CS95 received the best SUV car of 2020 from Saudi Auto magazine.
                            </h5>
                        </div>
                        <div class="achieve-slider-col">
                            <a href="javascript:void(0);" class="embed-responsive embed-responsive-16by9">
                                <img src="{{ asset('upload/cms/achievement/9/achievement.jpg?keycode=2c00c82e72') }}" alt=""
                                    class="embed-responsive-item">
                                <span class="label">2021</span>
                            </a>
                            <h5 data-mh="achieve-title">
                                <small>changan <span><i class="fa fa-calendar-alt"></i> 2021</span></small>
                                CS35Plus received the best Crossover car of 2020 from Saudi Auto magazine.
                            </h5>
                        </div>
                        <div class="achieve-slider-col">
                            <a href="javascript:void(0);" class="embed-responsive embed-responsive-16by9">
                                <img src="{{ asset('upload/cms/achievement/5/achievement.jpg?keycode=24df2ca1c8') }}" alt=""
                                    class="embed-responsive-item">
                                <span class="label">2020</span>
                            </a>
                            <h5 data-mh="achieve-title">
                                <small>Hyundai <span><i class="fa fa-calendar-alt"></i> 2020</span></small>
                                Appointment of Mr. Abdullah Almajdouie as the Honorary Consul in the Kingdom of Saudi
                                Arabia.
                            </h5>
                        </div>
                        <div class="achieve-slider-col">
                            <a href="javascript:void(0);" class="embed-responsive embed-responsive-16by9">
                                <img src="{{ asset('upload/cms/achievement/10/achievement.jpg?keycode=516b288c1f') }}" alt=""
                                    class="embed-responsive-item">
                                <span class="label">2020</span>
                            </a>
                            <h5 data-mh="achieve-title">
                                <small>Peugeot <span><i class="fa fa-calendar-alt"></i> 2020</span></small>
                                Peugeot achieves the first place on the regional level with a 40% share of total sales and
                                35% volume growth in the KSA market compared to 2019
                            </h5>
                        </div>
                        <div class="achieve-slider-col">
                            <a href="javascript:void(0);" class="embed-responsive embed-responsive-16by9">
                                <img src="{{ asset('upload/cms/achievement/1/achievement.jpg?keycode=179ea4b79d') }}" alt=""
                                    class="embed-responsive-item">
                                <span class="label">2018</span>
                            </a>
                            <h5 data-mh="achieve-title">
                                <small>Hyundai <span><i class="fa fa-calendar-alt"></i> 2018</span></small>
                                We are proud to announce receiving the best service and customer satisfaction award among
                                the Middle East and Africa distributors for 2018.
                            </h5>
                        </div>
                        <div class="achieve-slider-col">
                            <a href="javascript:void(0);" class="embed-responsive embed-responsive-16by9">
                                <img src="{{ asset('upload/cms/achievement/2/achievement.jpg?keycode=8d01c8da41') }}" alt=""
                                    class="embed-responsive-item">
                                <span class="label">2017</span>
                            </a>
                            <h5 data-mh="achieve-title">
                                <small>Hyundai <span><i class="fa fa-calendar-alt"></i> 2017</span></small>
                                Almajdouie Motors is honored to have recently received a prestigious award in recognition
                                for our unparalleled efforts in technical support Operation.
                            </h5>
                        </div>
                        <div class="achieve-slider-col">
                            <a href="javascript:void(0);" class="embed-responsive embed-responsive-16by9">
                                <img src="{{ asset('upload/cms/achievement/3/achievement.jpg?keycode=e235a86713') }}" alt=""
                                    class="embed-responsive-item">
                                <span class="label">2017</span>
                            </a>
                            <h5 data-mh="achieve-title">
                                <small>Hyundai <span><i class="fa fa-calendar-alt"></i> 2017</span></small>
                                AlMajdouie Motors tops all HYUNDAI Distributors in the Middle East and Africa Region for
                                Business Excellence. Awarded by Mobis at St. Petersburg - Russia
                            </h5>
                        </div>
                        <div class="achieve-slider-col">
                            <a href="javascript:void(0);" class="embed-responsive embed-responsive-16by9">
                                <img src="{{ asset('upload/cms/achievement/4/achievement.jpg?keycode=a113601ac1') }}" alt=""
                                    class="embed-responsive-item">
                                <span class="label">2017</span>
                            </a>
                            <h5 data-mh="achieve-title">
                                <small>Hyundai <span><i class="fa fa-calendar-alt"></i> 2017</span></small>
                                Almajdouie Motors received the Excellence Award from Hyundai in after-sales services at the
                                level of
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
