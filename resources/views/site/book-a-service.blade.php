@extends('layout.main')

@section('content')
    <div class="embed-responsive embed-responsive-21by9">
        <img src="{{ asset('upload/cms/page/17/banner.jpg?a=1') }}" alt="" class="embed-responsive-item">
    </div>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="booking-box white-box" style="position: inherit; margin-bottom: 0px;">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3>Book A Service</h3>
                    </div>
                    <div class="col-md-12">
                        <form id="frmBooking" name="frmBooking" method="POST" action="">
                            <div class="my-4 p-4 row-brands text-center card">
                                <h4 class="mb-2">Choose car brand</h4>
                                <div class="d-flex justify-content-around">
                                    <button type="button" class="btn   " data-brand="1">
                                        <img src="{{ asset('assets/logos/1.png') }}">
                                    </button>
                                    <button type="button" class="btn   " data-brand="2">
                                        <img src="{{ asset('assets/logos/2.png') }}">
                                    </button>
                                    <button type="button" class="btn   " data-brand="3">
                                        <img src="{{ asset('assets/logos/3.png') }}">
                                    </button>
                                    <button type="button" class="btn   " data-brand="4">
                                        <img src="{{ asset('assets/logos/4.png') }}">
                                    </button>
                                </div>
                                <select id="BrandID" name="BrandID" class="d-none">
                                    <option value="1">Changan </option>
                                    <option value="2">Hyundai </option>
                                    <option value="3">Genesis </option>
                                    <option value="4">Peugeot </option>
                                </select>
                            </div>
                            <p>&nbsp;</p>

                            <div class="card p-4 row-service-types d-none">
                                <div class="mb-3 text-center">
                                    <h4 class="mb-0">Service Type</h4>
                                    <br>
                                    <div class="switcher-container d-flex justify-content-center">

                                        <select name="chkServiceType" id="chkServiceType" style="min-width: 200px;">

                                            <option value="1">Periodic Maintenance </option>
                                            <option value="2">General Repair</option>
                                        </select>
                                    </div>
                                </div>

                                <div id="box-service-info" class="text-center">
                                    Service Type:
                                    <span class="quick-service">
                                        <b class="badge badge-info">Periodic Maintenance</b>
                                    </span>
                                    <span class="general-repair d-none">
                                        <b class="badge badge-info">General Repair: includes Mechanical, Electrical ...</b>
                                    </span>
                                </div>
                                <div id="box-quick-service" class="my-3 row-locations d-flex justify-content-center">
                                    <div class="col-12 col-md-6 p-0">
                                        <div class="form-group text-center">
                                            <select id="QuickServiceBranchID" name="QuickServiceBranchID"
                                                class="form-control select2" required="required" style="min-width: 245px;">
                                                <option></option>
                                                <optgroup label="Arar">
                                                    <option value="38" data-chained="2">Hyundai Almajdouie - Arar
                                                        service center</option>
                                                </optgroup>
                                                <optgroup label="Eastern">
                                                    <option value="24" data-chained="1">Changan Almajdouie Al Khobar -
                                                        king Fahad Road -Service</option>
                                                    <option value="3" data-chained="1">Changan Almajdouie Al-Ahsaa -
                                                        Service</option>
                                                    <option value="1" data-chained="1">Changan Almajdouie Dammam
                                                        -Service</option>
                                                    <option value="28" data-chained="3">Genesis Almajdouie - Al Khobar -
                                                        Services</option>
                                                    <option value="47" data-chained="2">Hyundai Almajdouie - Al Hassa
                                                        Qatar Rd.</option>
                                                    <option value="39" data-chained="2">Hyundai Almajdouie - Al Hassa
                                                        Riyadh Rd.</option>
                                                    <option value="25" data-chained="2">Hyundai Almajdouie - Al Khobar -
                                                        Quick service</option>
                                                    <option value="37" data-chained="2">Hyundai Almajdouie - Hafr AL
                                                        Baten</option>
                                                    <option value="34" data-chained="2">Hyundai Almajdouie - Sehat
                                                        (Service)</option>
                                                    <option value="32" data-chained="2">Hyundai Almajdouie - Tobashi
                                                        (Quick service)</option>
                                                    <option value="36" data-chained="2">Hyundai Almajdouie - Toqba
                                                        (Quick service)</option>
                                                    <option value="10" data-chained="4">Peugeot Almajdouie - Al Khobar
                                                        - Quick Service</option>
                                                </optgroup>
                                                <optgroup label="Makkah">
                                                    <option value="29" data-chained="1">Changan Almajdouie Jeddah -
                                                        Asfan</option>
                                                    <option value="7" data-chained="1">Changan Almajdouie Jeddah -
                                                        Ba-Khashab-Service</option>
                                                    <option value="9" data-chained="1">Changan Almajdouie Jeddah -
                                                        Prince Sultan-Service</option>
                                                    <option value="50" data-chained="1">Changan Almajdouie Asfan Spare
                                                        parts</option>
                                                    <option value="41" data-chained="4">Peugeot Almajdouie - Automall
                                                        Service (Passenger Vehicles)</option>
                                                    <option value="12" data-chained="4">Peugeot Almajdouie - Jeddah
                                                        Alamal - Service</option>
                                                </optgroup>
                                                <optgroup label="Riyadh">
                                                    <option value="5" data-chained="1">Changan Almajdouie Riyadh -
                                                        Exit 13- Service</option>
                                                    <option value="6" data-chained="1">Changan Almajdouie Riyadh -
                                                        North Industry -Service</option>
                                                    <option value="14" data-chained="4">Peugeot Almajdouie - Riyadh
                                                        north industrial</option>
                                                    <option value="17" data-chained="4">Peugeot Almajdouie - Ryiadh
                                                        Exit 13 - Quick Service</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div id="box-repair" class="my-3 row-locations d-none justify-content-center">
                                    <div class="col-12 col-md-6 p-0">
                                        <div class="form-group text-center">
                                            <select id="RepairBranchID" name="RepairBranchID"
                                                class="form-control select2" required="required"
                                                style="min-width: 245px;">
                                                <option></option>
                                                <optgroup label="Arar">
                                                    <option value="38" data-chained="2">Hyundai Almajdouie - Arar
                                                        service center</option>
                                                </optgroup>
                                                <optgroup label="Eastern">
                                                    <option value="24" data-chained="1">Changan Almajdouie Al Khobar -
                                                        king Fahad Road -Service</option>
                                                    <option value="3" data-chained="1">Changan Almajdouie Al-Ahsaa -
                                                        Service</option>
                                                    <option value="1" data-chained="1">Changan Almajdouie Dammam
                                                        -Service</option>
                                                    <option value="47" data-chained="2">Hyundai Almajdouie - Al Hassa
                                                        Qatar Rd.</option>
                                                    <option value="39" data-chained="2">Hyundai Almajdouie - Al Hassa
                                                        Riyadh Rd.</option>
                                                    <option value="42" data-chained="2">Hyundai Almajdouie - Al Jubail
                                                        Service</option>
                                                    <option value="26" data-chained="2">Hyundai Almajdouie - Al Khobar
                                                        - Services</option>
                                                    <option value="40" data-chained="2">Hyundai Almajdouie - Dammam
                                                        main</option>
                                                    <option value="37" data-chained="2">Hyundai Almajdouie - Hafr AL
                                                        Baten</option>
                                                    <option value="34" data-chained="2">Hyundai Almajdouie - Sehat
                                                        (Service)</option>
                                                    <option value="11" data-chained="4">Peugeot Almajdouie - Al Khobar
                                                        - Repair</option>
                                                </optgroup>
                                                <optgroup label="Makkah">
                                                    <option value="29" data-chained="1">Changan Almajdouie Jeddah -
                                                        Asfan</option>
                                                    <option value="41" data-chained="4">Peugeot Almajdouie - Automall
                                                        Service (Passenger Vehicles)</option>
                                                    <option value="12" data-chained="4">Peugeot Almajdouie - Jeddah
                                                        Alamal - Service</option>
                                                </optgroup>
                                                <optgroup label="Riyadh">
                                                    <option value="5" data-chained="1">Changan Almajdouie Riyadh -
                                                        Exit 13- Service</option>
                                                    <option value="6" data-chained="1">Changan Almajdouie Riyadh -
                                                        North Industry -Service</option>
                                                    <option value="4" data-chained="1">Changan Almajdouie - Riyadh
                                                        Exit 17</option>
                                                    <option value="14" data-chained="4">Peugeot Almajdouie - Riyadh
                                                        north industrial</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="my-5 row-calendar d-none">
                                <div class="d-flex justify-content-between">
                                    <h4 class="">Choose date and time</h4>
                                    <i id="loader_slots" class="fa fa-spinner fa-spin fa-2x d-none"></i>
                                </div>
                                <p id="msg_available_days" class="d-none alert alert-warning">Based on your selection,
                                    we have found <span id="num_available_days">X</span> days for available slots. <span
                                        id="more_available_days">Please use Next and Previous buttons to view more
                                        dates.</span></p>
                                <div class="alert alert-secondary switch-toggle d-flex align-items-center">
                                    <label class="switch">
                                        <input type="checkbox" id="chkCallRequest" name="chkCallRequest" value="1">
                                        <span class="slider round"></span>
                                    </label>
                                    <span class="mx-3">
                                        If you can't find a suitable time slot, please click here.<br> Please fill in
                                        your information and we will contact you.
                                        <span>
                                        </span></span>
                                </div>
                                <div class="slot-calendar d-flex justify-content-center">
                                    <div class="slot-item col-sm-2 p-0 slot-heading-pre">
                                        <div class="text-center sticky">
                                            <div class="slot-heading"><i class="fa fa-chevron-left"></i></div>
                                        </div>
                                        <div class="text-center">

                                        </div>
                                    </div>
                                    <div id="slot-table" class="col-sm-8 p-0 d-flex">
                                        <div class="slot-item col-sm-12 p-0">
                                            <div class="slot-heading"></div>
                                        </div>
                                    </div>
                                    <div class="slot-item col-sm-2 p-0 slot-heading-next">
                                        <div class="text-center sticky">
                                            <div class="slot-heading"><i class="fa fa-chevron-right"></i></div>
                                        </div>
                                        <div class="text-center">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="my-5 row-information d-none">
                                <h4 class="">Fill your information</h4>
                                <div class="m-0 p-4 card">
                                    <div class="row">
                                        <div class="col-12 col-md-8">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="FirstName">Full Name <span
                                                                class="text-asterisk">*</span></label>
                                                        <input type="text" class="form-control" id="FirstName"
                                                            name="FirstName" value="" placeholder=""
                                                            required="required">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="Mobile">Mobile# <span
                                                                style="font-size:85%;">(5xxxxxxxx)</span><span
                                                                class="text-asterisk">*</span></label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">+966</span>
                                                            </div>
                                                            <input type="number" class="form-control text-center"
                                                                id="Mobile" name="Mobile" value=""
                                                                placeholder="500000000" required="required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="PlateNumber">Plate Digits <span
                                                                class="text-danger font-weight-bold">*</span></label>
                                                        <input type="number" class="form-control text-center"
                                                            id="PlateNumber" name="PlateNumber" value=""
                                                            placeholder="" required="required" maxlength="4">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="PlateText">Plate Characters <span
                                                                class="text-danger font-weight-bold">*</span></label>
                                                        <input type="text" class="form-control text-center"
                                                            id="PlateText" name="PlateText" value=""
                                                            placeholder="" required="required" maxlength="5"
                                                            lettersonly="true">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 text-center">
                                            <img src="assets/images/sa-plate.png" width="172" class="pt-5">
                                            <input type="hidden" id="SaveAppointment" name="SaveAppointment"
                                                value="1">
                                            <input type="hidden" id="CalendarID" name="CalendarID" value="1">
                                            <input type="hidden" id="SlotID" name="SlotID" value="1">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row-action col-12 text-center d-none">
                                <button id="btn-submit" type="submit" class="btn btn-primary btn-page-type-b">Confirm
                                    Booking</button>
                                <button id="btn-request" type="submit"
                                    class="btn btn-primary btn-page-type-b d-none">Call Me</button>
                                <i id="loader-submit" class="fa fa-spinner fa-spin fa-2x d-none"></i>
                            </div>
                        </form>

                        <div id="resultBooking" class="d-none">
                            <div class="row">
                                <div class="col-12 col-md-2"></div>
                                <div class="col-12 col-md-8 text-center" id="div-msg"></div>
                                <div class="col-12 col-md-2"></div>
                            </div>
                        </div>

                        <div id="viewCallRequest" class="d-none my-5">
                            <div class="alert alert-success">
                                Dear <span class="FirstName"></span>, your request has been recorded. Our customer care
                                will contact you.
                                <p>Responses typically in 24 hours during working week.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/plugin/jquery_chained-2.x/jquery.chained.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugin/jquery-validate/jquery.validate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugin/jquery-validate/additional-methods.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugin/bootstrap-datepicker/bootstrap-datepicker.min.js') }}">

    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            jQuery.validator.addMethod("lettersonly", function(value, element) {
                return this.optional(element) || /^[a-z\s]+$/i.test(value) || /[\u0600-\u06FF\u0750-\u077F]/
                    .test(value);
            }, "Only alphabetical characters are allowed");

            $("#QuickServiceBranchID").chained("#BrandID");
            $("#RepairBranchID").chained("#BrandID");
            $('#frmBooking').validate();

            $(document).on('submit', '#frmBooking', function(e) {
                e.preventDefault();
                $('#loader-submit').removeClass('d-none');
                $('#btn-submit, #btn-request').addClass('d-none');
                $('div#div-msg').html('');

                if ($('#chkCallRequest').is(':checked')) {
                    $('.FirstName').html($('#FirstName').val());

                    $('#frmBooking').addClass('d-none');
                    $.post('', 'SaveCallRequest=1&' + $(this).serialize(), function(data) {
                        if (data.Status == 1) {
                            $('#viewCallRequest').removeClass('d-none');
                        } else {
                            var html = '        <br />';
                            html +=
                                '        <div class="alert alert-danger left-icon-alert" role="alert" style="font-size: 20px;text-align: center;">';
                            html +=
                                '            <b>Sorry</b> There are some issue, please try again.';
                            html += '        </div>';
                            html += '        <br />';
                            html += '        <br />';
                            $('div#div-msg').html(html);
                            $('#resultBooking').removeClass('d-none');
                            $('#frmBooking').removeClass('d-none');
                        }
                    }, 'json');
                    return false;
                }

                $.post('', $(this).serialize(), function(data) {
                    var html = '';
                    if (data.Status == 1) {
                        html += '        <br />';
                        html +=
                            '        <div class="alert alert-success left-icon-alert" role="alert" style="font-size: 20px;text-align: center;">';
                        html +=
                            '            <b>Thank you</b> for using Almajdouie Motors appointment service. Your appointment has been confirmed. Followings are the appointment details:';
                        html += '        </div>';
                        html += '        <br />';
                        html += '        <br />';
                        html += '       <table class="table" style="direction:ltr;">';
                        html += '           <tr>';
                        html +=
                            '               <td class="text-right" style="width: 50%;">Branch: </td>';
                        html += '               <td class="text-left" style="width: 50%;">' + data
                            .Detail.BranchEN + '</td>';
                        html += '           </tr>';
                        html += '           <tr>';
                        html += '               <td class="text-right">Service: </td>';
                        html += '               <td class="text-left">' + data.Detail.ServiceEN +
                            '</td>';
                        html += '           </tr>';
                        html += '           <tr>';
                        html += '               <td class="text-right">Customer: </td>';
                        html += '               <td class="text-left">' + data.Detail.FullName +
                            '</td>';
                        html += '           </tr>';
                        html += '           <tr>';
                        html += '               <td class="text-right">Appointment Time: </td>';
                        html += '               <td class="text-left">' + data.Detail.CDate + ' ' +
                            data.Detail.S + '</td>';
                        html += '           </tr>';
                        html += '           <tr>';
                        html += '               <td class="text-right">Mobile No.: </td>';
                        html += '               <td class="text-left">' + data.Detail.Mobile +
                            '</td>';
                        html += '           </tr>';
                        html += '       </table>';
                        html +=
                            '        <p>Appointment information also sent to your provided mobile number. Please use your mobile number while visiting our service center for better service.</p>';
                        html += '        <br />';

                        $('div#div-msg').html(html);

                    } else if (data.Status == 0 && data.Error == "slot") {
                        html += '        <br />';
                        html +=
                            '        <div class="alert alert-danger left-icon-alert" role="alert" style="font-size: 20px;text-align: center;">';
                        html +=
                            '            <b>Sorry</b> Selected slot is not avaiable anymore, please try again with an other time slot.';
                        html += '        </div>';
                        html += '        <br />';
                        html += '        <br />';
                        $('div#div-msg').html(html);
                    } else if (data.Status == 0 && data.Error == "error") {
                        html += '        <br />';
                        html +=
                            '        <div class="alert alert-danger left-icon-alert" role="alert" style="font-size: 20px;text-align: center;">';
                        html += '            <b>Sorry</b> There are some issue, please try again.';
                        html += '        </div>';
                        html += '        <br />';
                        html += '        <br />';
                        $('div#div-msg').html(html);
                    }

                    $('#frmBooking').addClass('d-none');
                    $('#resultBooking').removeClass('d-none');
                }, 'json');

                return false;
            });

            var url_string = window.location;
            var url = new URL(url_string);
            var brandId = url.searchParams.get("brandID");
            if (brandId != null) {
                $('#BrandID').val(brandId).trigger('change');
                $(".row-service-types").removeClass('d-none');
                $('html, body').animate({
                    scrollTop: $(".row-service-types").offset().top
                }, 1000);

                $('.row-calendar, .row-information, #btn-submit, #btn-request').addClass('d-none');
                initCustomSelect();
            }


            $(document).on('click', '.row-brands button', function() {
                $('#BrandID').val($(this).data('brand')).trigger('change');

                $('.row-brands button').removeClass('selected');
                $(this).addClass('selected');

                $(".row-service-types").removeClass('d-none');
                $('html, body').animate({
                    scrollTop: $(".row-service-types").offset().top
                }, 1000);

                $('.row-calendar, .row-information, #btn-submit, #btn-request').addClass('d-none');
                initCustomSelect();
            });

            $(document).on('change', '#QuickServiceBranchID, #RepairBranchID', function() {
                getBranchSlots($(this).val());
            });

            $(document).on('change', '#chkServiceType', function() {
                $('#box-quick-service, #box-repair').toggleClass('d-none d-flex');
                $('.row-calendar, .row-information, #btn-submit, #btn-request').addClass('d-none');

                $('.general-repair, .quick-service').addClass('d-none');
                if ($('#chkServiceType').val() == 1) {
                    $('.quick-service').removeClass('d-none');
                } else {
                    $('.general-repair').removeClass('d-none');
                }
                initCustomSelect();
            });
            $(document).on('change', '#chkCallRequest', function() {
                $('#btn-request, #btn-submit').addClass('d-none');

                if ($(this).is(':checked')) {
                    $('#btn-request').removeClass('d-none');
                } else {
                    $('#btn-submit').removeClass('d-none');
                }

                $('.row-information, .row-action').removeClass('d-none');

                if ($(this).is(':checked')) {
                    $('html, body').animate({
                        scrollTop: $(".row-information").offset().top
                    }, 1000);
                }
            });

            $(document).on('click', 'div[data-slot]', function() {
                $('div[data-slot].selected').removeClass('selected');
                $(this).addClass('selected');
                $('#SlotID').val($(this).data('slot'));
                $('#CalendarID').val($(this).data('calendar'));

                $('div.row-action, div.row-information').removeClass('d-none');
                $('html, body').animate({
                    scrollTop: $(".row-information").offset().top
                }, 1000);
            });

            $(document).on('click', '.slot-heading-next i', function() {
                if (totalPages > 3 && page < (totalPages - 3)) {
                    page = page + 1;
                    showPageSlots();
                }
            });
            $(document).on('click', '.slot-heading-pre i', function() {
                if (page > 1) {
                    page = page - 1;
                    showPageSlots();
                }
            });
        });

        var page = 1;
        var totalPages = 1;

        function getBranchSlots(value) {
            if (value == '') return;

            $('.row-information').addClass('d-none');
            $(".row-calendar").removeClass('d-none');
            $('html, body').animate({
                scrollTop: $(".row-calendar").offset().top
            }, 1000);

            $('#loader_slots').removeClass('d-none');

            $.post('', {
                GetSlot: 1,
                BranchID: value,
                ProblemTypeID: ($('#chkServiceType').val())
            }, function(data) {
                console.log(data.records);
                $('#slot-table').html(data.html);

                $('#msg_available_days').removeClass('d-none');
                $('#num_available_days').html(data.total);
                $('#more_available_days').addClass('d-none');
                if (data.total > 3) {
                    $('#more_available_days').removeClass('d-none');
                }

                $('.slot-calendar').removeClass('d-none');
                $('.slot-calendar').addClass('d-flex');


                if (data.total == 0) {
                    $('.slot-calendar').addClass('d-none');
                    $('.slot-calendar').removeClass('d-flex');
                    $('#chkCallRequest').prop('checked', true).trigger('change');
                } else {
                    $('#chkCallRequest').prop('checked', false).trigger('change');
                }

                totalPages = data.total;
                showPageSlots();



                $('#loader_slots').addClass('d-none');
            }, 'json');
        }

        function showPageSlots() {
            $('#slot-table > div').addClass('d-none');
            for (let i = page; i < (page + 3); i++) {
                $('#slot-table > div:nth-child(' + i + ')').removeClass('d-none');
            }
        }

        function initCustomSelect() {
            $('select.select2').select2({
                placeholder: "Select City - Branch"
            });

            $('select.select2').on('select2:open', function(e) {
                var selectTimeout = setTimeout(() => {
                    $('li.select2-results__option--group').each(function() {
                        if ($(this).find('ul li').length == 0) {
                            $(this).css('visibility', 'hidden');
                        } else {
                            $(this).css('visibility', 'visible');
                        }
                        clearTimeout(selectTimeout);
                    });
                }, 100);
            });
        }
    </script>
@endsection
