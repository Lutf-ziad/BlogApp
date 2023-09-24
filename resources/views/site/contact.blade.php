@extends('layout.main')

@section('content')
    <div class="content-area">
        <div class="container-fluid mw-1200">
            <div class="alm-tabs brands-tabs">
                <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-catid="1" data-toggle="tab" href="#tab1">Almajdouie Motors</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link " data-catid="2" data-toggle="tab" href="#tab2">Changan</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link " data-catid="5" data-toggle="tab" href="#tab3">Hyundai</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link " data-catid="6" data-toggle="tab" href="#tab4">Genesis</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link " data-catid="4" data-toggle="tab" href="#tab5">Peugeot</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link " data-catid="8" data-toggle="tab" href="#tab6">Citroen</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link " data-catid="3" data-toggle="tab" href="#tab7">Raya Financing</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab1">
                        <div class="table-responsive mt-4">
                            <table class="table">
                                <thead class="bg-light text-primary">
                                    <tr>
                                        <th width="33%">Name</th>
                                        <th width="20%">Phone</th>
                                        <th width="20%"><i class="fab fa-whatsapp"></i> WhatsApp</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Almajdouie Motors</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>motors@almajdouie.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade show " id="tab2">
                        <div class="table-responsive mt-4">
                            <table class="table">
                                <thead class="bg-light text-primary">
                                    <tr>
                                        <th width="33%">Name</th>
                                        <th width="20%">Phone</th>
                                        <th width="20%"><i class="fab fa-whatsapp"></i> WhatsApp</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Changan</td>
                                        <td>92 00 199 92</td>
                                        <td>966 535 419 992</td>
                                        <td>changan@almajdouie.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade show " id="tab3">
                        <div class="table-responsive mt-4">
                            <table class="table">
                                <thead class="bg-light text-primary">
                                    <tr>
                                        <th width="33%">Name</th>
                                        <th width="20%">Phone</th>
                                        <th width="20%"><i class="fab fa-whatsapp"></i> WhatsApp</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Hyundai</td>
                                        <td>92 00 155 99</td>
                                        <td>966 55 884 9020</td>
                                        <td>crm@almajdouie.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade show " id="tab4">
                        <div class="table-responsive mt-4">
                            <table class="table">
                                <thead class="bg-light text-primary">
                                    <tr>
                                        <th width="33%">Name</th>
                                        <th width="20%">Phone</th>
                                        <th width="20%"><i class="fab fa-whatsapp"></i> WhatsApp</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Genesis</td>
                                        <td>92 00 155 99</td>
                                        <td>966 55 884 9020</td>
                                        <td>crm@almajdouie.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade show " id="tab5">
                        <div class="table-responsive mt-4">
                            <table class="table">
                                <thead class="bg-light text-primary">
                                    <tr>
                                        <th width="33%">Name</th>
                                        <th width="20%">Phone</th>
                                        <th width="20%"><i class="fab fa-whatsapp"></i> WhatsApp</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Peugeot</td>
                                        <td>920023550</td>
                                        <td>966540407882</td>
                                        <td>contactpeugeot@almajdouie.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade show " id="tab6">
                        <div class="table-responsive mt-4">
                            <table class="table">
                                <thead class="bg-light text-primary">
                                    <tr>
                                        <th width="33%">Name</th>
                                        <th width="20%">Phone</th>
                                        <th width="20%"><i class="fab fa-whatsapp"></i> WhatsApp</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Citroen</td>
                                        <td>920011729</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade show " id="tab7">
                        <div class="table-responsive mt-4">
                            <table class="table">
                                <thead class="bg-light text-primary">
                                    <tr>
                                        <th width="33%">Name</th>
                                        <th width="20%">Phone</th>
                                        <th width="20%"><i class="fab fa-whatsapp"></i> WhatsApp</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Raya Financing</td>
                                        <td>966 8003 043 334</td>
                                        <td>-</td>
                                        <td>info@rayafinancing.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" wire:model.defer="partnerRequest.username" type="text" id="name" placeholder="أدخل عنوان بريدك الالكتروني**" data-listener-added_cb6e8f04="true">
                                                                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" wire:model.defer="email" type="email" id="email" placeholder="أدخل عنوان بريدك الالكتروني*">
                                                                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" wire:model.defer="phone" type="text" id="phone" placeholder="رقم التواصل*">
                                                                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="embed-responsive embed-responsive-21by9 mb-2">
                <div id="contact_map" style="position: initial !important;"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" wire:model.defer="partnerRequest.username" type="text" id="name" placeholder="أدخل عنوان بريدك الالكتروني**" data-listener-added_cb6e8f04="true">
                                                                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" wire:model.defer="email" type="email" id="email" placeholder="أدخل عنوان بريدك الالكتروني*">
                                                                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input class="form-control" wire:model.defer="phone" type="text" id="phone" placeholder="رقم التواصل*">
                                                                </div>
            </div>
        </div>
    </div>

    <a href="{{ url('complain') }}" class="float-complain" target="_blank">
        <i class="fa fa-ticket my-float"></i> Your Valued Feedback </a>

    <!-- Location picker -->
    <script type="text/javascript" src="{{ asset('maps/api/js.html?key=AIzaSyBgosoARzpSnpQc6o-gbDl57md_8JnU5-U&libraries=places') }}">
    </script>

    <script type="text/javascript">
        var markers = [];

        $(document).ready(function() {

            var locations = [
                [1, 'Almajdouie Motors', 26.400941, 50.051713,
                    'https://almajdouiemotors.com/assets/images/pin-almajdouie.png', 'Almajdouie Motors'
                ],
                [2, 'Dammam Showroom', 26.362713, 50.178034,
                    'https://almajdouiemotors.com/assets/images/pin-changan.png', 'Dammam Showroom'
                ],
                [2, 'Dammam Service Center', 26.443840, 50.042311,
                    'https://almajdouiemotors.com/assets/images/pin-changan.png', 'Dammam Service Center'
                ],
                [2, 'Riyadh Showroom', 24.733556, 46.793425,
                    'https://almajdouiemotors.com/assets/images/pin-changan.png', 'Riyadh Showroom'
                ],
                [2, 'Riyadh Service Center', 24.647204, 46.791079,
                    'https://almajdouiemotors.com/assets/images/pin-changan.png', 'Riyadh Service Center'
                ],
                [2, 'Jeddah Showroom', 21.627195, 39.150856,
                    'https://almajdouiemotors.com/assets/images/pin-changan.png', 'Jeddah Showroom'
                ],
                [2, 'Jeddah Service Center', 21.484563, 39.223907,
                    'https://almajdouiemotors.com/assets/images/pin-changan.png', 'Jeddah Service Center'
                ],
                [3, 'Raya Financing', 26.400406, 50.050561,
                    'https://almajdouiemotors.com/assets/images/pin-raya.png', 'Raya Financing'
                ],
                [4, 'Peugeot Jeddah Automall', 21.648313553072214, 39.11309036181223,
                    'https://almajdouiemotors.com/assets/images/pin-peugeot.png', 'Peugeot Jeddah Automall'
                ],
                [4, 'Riyadh Quick Service Center- Exit 13', 24.717522220365126, 46.7596240415899,
                    'https://almajdouiemotors.com/assets/images/pin-peugeot.png',
                    'Riyadh Quick Service Center- Exit 13'
                ],
                [4, 'Riyadh Showroom- Exit 13', 24.717994909729928, 46.75941863974245,
                    'https://almajdouiemotors.com/assets/images/pin-peugeot.png', 'Riyadh Showroom- Exit 13'
                ],
                [4, 'Peugeot Khobar Showroom and Quick Service Center', 26.31991421181223, 50.20959946608155,
                    'https://almajdouiemotors.com/assets/images/pin-peugeot.png',
                    'Peugeot Khobar Showroom and Quick Service Center'
                ],
                [4, 'Peugeot Riyadh Service Center- Alqirawan', 24.85536100, 46.576000,
                    'https://almajdouiemotors.com/assets/images/pin-peugeot.png',
                    'Peugeot Riyadh Service Center- Alqirawan'
                ],
                [4, 'Peugeot Khobar Showroom- King Fahad Road', 26.31990162351437, 50.20926996133238,
                    'https://almajdouiemotors.com/assets/images/pin-peugeot.png',
                    'Peugeot Khobar Showroom- King Fahad Road'
                ],
                [5, 'Almajdouie - Hyundai 28th street AlAziziyah , Dammam', 26.456513032835602,
                    50.08060302620809, 'https://almajdouiemotors.com/assets/images/pin-hyundai.png',
                    'Almajdouie - Hyundai 28th street AlAziziyah , Dammam'
                ],
                [5, 'Hyundai', 26.400406, 50.050561,
                    'https://almajdouiemotors.com/assets/images/pin-hyundai.png', 'Hyundai'
                ],
                [5, 'Hyundai Commerical', 26.408781942046453, 50.13877879793444,
                    'https://almajdouiemotors.com/assets/images/pin-hyundai.png', 'Hyundai Commerical'
                ],
                [5, 'Almajdouie Motors - Hyundai An Nasriyah, طريق الامير عبدالله بن عبدالعزيز بن مساعد‎ عرعر',
                    30.968306170204254, 41.03065874164991,
                    'https://almajdouiemotors.com/assets/images/pin-hyundai.png',
                    'Almajdouie Motors - Hyundai An Nasriyah, طريق الامير عبدالله بن عبدالعزيز بن مساعد‎ عرعر'
                ],
                [5, 'Almajdouie Motors - Hyundai king abdulaziz road hafar albatin', 28.406091708284773,
                    45.96693359815507, 'https://almajdouiemotors.com/assets/images/pin-hyundai.png',
                    'Almajdouie Motors - Hyundai king abdulaziz road hafar albatin'
                ],
                [5, 'Almajdouie Motors - Hyundai طريق الرياض‎ الهفوف والمبرز', 25.36118894383425,
                    49.55022646851571, 'https://almajdouiemotors.com/assets/images/pin-hyundai.png',
                    'Almajdouie Motors - Hyundai طريق الرياض‎ الهفوف والمبرز'
                ],
                [5, 'Almajdouie Motors - Hyundai Qatar Rd Hofuf', 25.342928658453978, 49.61512926851531,
                    'https://almajdouiemotors.com/assets/images/pin-hyundai.png',
                    'Almajdouie Motors - Hyundai Qatar Rd Hofuf'
                ],
                [5, 'Almajdouie Motors - Hyundai services طريق الخليج ، حي النسيم‎ سيهات', 26.507759727555726,
                    50.03659977116501, 'https://almajdouiemotors.com/assets/images/pin-hyundai.png',
                    'Almajdouie Motors - Hyundai services طريق الخليج ، حي النسيم‎ سيهات'
                ],
                [5, 'Almajdouie Motors - Hyundai Khaleej Rd saihat', 26.504322709578183, 50.03763375329918,
                    'https://almajdouiemotors.com/assets/images/pin-hyundai.png',
                    'Almajdouie Motors - Hyundai Khaleej Rd saihat'
                ],
                [5, 'Almajdouie Motors - Hyundai طريق الجبيل , صناعية الخير‎ الدمام', 26.702408615835893,
                    49.89991402883499, 'https://almajdouiemotors.com/assets/images/pin-hyundai.png',
                    'Almajdouie Motors - Hyundai طريق الجبيل , صناعية الخير‎ الدمام'
                ],
                [5, 'Almajdouie Motors - Hyundai الخبر', 26.25440533381103, 50.19927401270886,
                    'https://almajdouiemotors.com/assets/images/pin-hyundai.png',
                    'Almajdouie Motors - Hyundai الخبر'
                ],
                [5, 'صيانة هيونداي المجدوعي Hyundai Service طريق الملك فهد، الدمام', 26.39999323720903,
                    50.0509611550419, 'https://almajdouiemotors.com/assets/images/pin-hyundai.png',
                    'صيانة هيونداي المجدوعي Hyundai Service طريق الملك فهد، الدمام'
                ],
                [5, 'Almajdouie Motors - Hyundai طريق خادم الحرمين الشريفين‎ الخبر', 26.28583639859181,
                    50.189935326204534, 'https://almajdouiemotors.com/assets/images/pin-hyundai.png',
                    'Almajdouie Motors - Hyundai طريق خادم الحرمين الشريفين‎ الخبر'
                ],
                [5, 'Almajdouie Motors - Hyundai طريق الملك فهد‎ الخبر', 26.31791792731349, 50.21057794154518,
                    'https://almajdouiemotors.com/assets/images/pin-hyundai.png',
                    'Almajdouie Motors - Hyundai طريق الملك فهد‎ الخبر'
                ],
                [5, 'Almajdouie Motors - Hyundai حفر الباطن - طريق الملك عبدالعزيز‎ حفر الباطن',
                    28.406129990709044, 45.966872997415386,
                    'https://almajdouiemotors.com/assets/images/pin-hyundai.png',
                    'Almajdouie Motors - Hyundai حفر الباطن - طريق الملك عبدالعزيز‎ حفر الباطن'
                ],
                [5, 'Almajdouie Motors - Hyundai الملك عبدالله‎ طريق قطر‎ مدينة الهفوف', 25.342901403005005,
                    49.61501840102047, 'https://almajdouiemotors.com/assets/images/pin-hyundai.png',
                    'Almajdouie Motors - Hyundai الملك عبدالله‎ طريق قطر‎ مدينة الهفوف'
                ],
                [5, 'Almajdouie Motors - Hyundai طريق الظهران‎ المبرز', 25.44152967293289, 49.5707552261872,
                    'https://almajdouiemotors.com/assets/images/pin-hyundai.png',
                    'Almajdouie Motors - Hyundai طريق الظهران‎ المبرز'
                ],
                [5, 'Almajdouie Motors - Hyundai طريق الرياض، السلمانية الشمالية‎ الهفوف‎', 25.361305670527486,
                    49.55078708395946, 'https://almajdouiemotors.com/assets/images/pin-hyundai.png',
                    'Almajdouie Motors - Hyundai طريق الرياض، السلمانية الشمالية‎ الهفوف‎'
                ],
                [5, 'Almajdouie Motors - Hyundai Ali Ibn Abi Taleb Street الدمام', 26.4102300342088,
                    50.11018972153586, 'https://almajdouiemotors.com/assets/images/pin-hyundai.png',
                    'Almajdouie Motors - Hyundai Ali Ibn Abi Taleb Street الدمام'
                ],
                [5, 'Almajdouie Motors - Hyundai طريق الملك فهد‎ الدمام', 26.40060308053796, 50.05038068398071,
                    'https://almajdouiemotors.com/assets/images/pin-hyundai.png',
                    'Almajdouie Motors - Hyundai طريق الملك فهد‎ الدمام'
                ],
                [5, 'Almajdouie Motors - Hyundai Unnamed Road الجبيل', 26.980885366107966, 49.64720169933502,
                    'https://almajdouiemotors.com/assets/images/pin-hyundai.png',
                    'Almajdouie Motors - Hyundai Unnamed Road الجبيل'
                ],
                [5, 'Almajdouie Motors - Hyundai طريق الامير عبدالله بن عبدالعزيز بن مساعد‎ عرعر',
                    30.968128966341883, 41.03069296874188,
                    'https://almajdouiemotors.com/assets/images/pin-hyundai.png',
                    'Almajdouie Motors - Hyundai طريق الامير عبدالله بن عبدالعزيز بن مساعد‎ عرعر'
                ],
                [6, 'Almajdouie Motors - Genesis طريق الملك فهد‎ الدمام', 26.40060308053796, 50.05038068398071,
                    'https://almajdouiemotors.com/assets/images/pin-almajdouie.png',
                    'Almajdouie Motors - Genesis طريق الملك فهد‎ الدمام'
                ],
                [6, 'Almajdouie Motors - Genesis طريق الرياض، السلمانية الشمالية‎ الهفوف‎', 25.361305670527486,
                    49.55078708395946, 'https://almajdouiemotors.com/assets/images/pin-almajdouie.png',
                    'Almajdouie Motors - Genesis طريق الرياض، السلمانية الشمالية‎ الهفوف‎'
                ],
                [6, 'Almajdouie Motors - Genesis طريق الملك فهد‎ الخبر', 26.31791792731349, 50.21057794154518,
                    'https://almajdouiemotors.com/assets/images/pin-almajdouie.png',
                    'Almajdouie Motors - Genesis طريق الملك فهد‎ الخبر'
                ],
                [8, 'Auto Mall, Al Mohammadiyyah, Jeddah 23617', 21.648313553072214, 39.11309036181223,
                    'https://almajdouiemotors.com/assets/images/pin-almajdouie.png',
                    'Auto Mall, Al Mohammadiyyah, Jeddah 23617'
                ],
            ];
            var map = new google.maps.Map(document.getElementById('contact_map'), {
                zoom: 6,
                center: new google.maps.LatLng(24.7366289, 46.6800653),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var infowindow = new google.maps.InfoWindow();
            var marker, i;

            for (i = 0; i < locations.length; i++) {

                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][2], locations[i][3]),
                    map: map,
                    icon: locations[i][4]
                });

                marker.id = locations[i][0];
                marker.setVisible(false);
                markers.push(marker);

                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        //console.log(locations[i][0] + ' ~ ' + locations[i][1]);
                        infowindow.setContent(
                            "<span style=\"color: #134a88;font-weight: 500;font-size: 110%;\">" +
                            locations[i][5] +
                            "</span><br/><a href=\"https://maps.google.com/?daddr=" + locations[
                                i][2] + "," + locations[i][3] +
                            "\" style=\"color: #0056b3; text-decoration: underline;\" target=\"_blank\" \">Get Directions</a>"
                            );
                        infowindow.open(map, marker);
                    }
                })(marker, i));

            }

            $(document).on('click', 'a.nav-link', function() {
                if ($(this).hasClass('active')) {
                    displayMarkers($(this).data('catid'));
                }
            });
            $('a.nav-link.active').trigger('click');



        });

        function displayMarkers(id) {
            var i;
            for (i = 0; i < markers.length; i++) {
                if (markers[i].id === id) {
                    markers[i].setVisible(true);
                } else {
                    markers[i].setVisible(false);
                }
            }
        }
    </script>
@endsection
