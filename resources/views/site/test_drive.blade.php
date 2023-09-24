@extends('layout.main')

@section('content')
    <div class="content-area">
        <div class="container-fluid mw-1200">


            <p class="bg-primary text-white px-3 py-2">Please fill the below form.</p>

            <form id="frmdata1" class="has-validation-callback" action="test_drive.php" method="post">
                <div class="row mt-4">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="FirstName">First Name <span class="text-asterisk">*</span></label>
                                    <div class="row">
                                        <div class="col-sm-4" style="padding-right: 2px;"><select id="TitleID"
                                                name="TitleID" class="form-control">
                                                <option value="1">Mr.</option>
                                                <option value="2">Mrs.</option>
                                                <option value="3">Miss.</option>
                                            </select></div>
                                        <div class="col-sm-8" style="padding-left: 2px;"><input type="text"
                                                class="form-control required" id="FirstName" name="FirstName" value=""
                                                placeholder=""></div>
                                        <div class="col-sm-12">
                                            <label id="FirstName-error" class="error" for="FirstName"
                                                style="display: none;"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="LastName">Last Name <span class="text-asterisk">*</span></label>
                                    <input type="text" class="form-control required" id="LastName" name="LastName"
                                        value="" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="Mobile">Mobile# <span style="font-size:85%;">(5xxxxxxxx)</span><span
                                            class="text-asterisk">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">+966</span>
                                        </div>
                                        <input type="number" class="form-control text-center required" id="Mobile"
                                            name="Mobile" value="" placeholder="500000000">
                                    </div>
                                    <label id="Mobile-error" class="error" for="Mobile" style="display: none;"></label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="Email">Email </label>
                                    <input type="email" class="form-control" id="Email" name="Email" value=""
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <label for="PreferableDate">Preferable Dates <span class="text-asterisk">*</span></label>
                                <input type="text" id="PreferableDate" name="PreferableDate"
                                    class="form-control text-center required" placeholder="">
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="PreferableTimeID">Preferable Time <span
                                            class="text-asterisk">*</span></label>
                                    <select id="PreferableTimeID" name="PreferableTimeID" class="form-control"
                                        required="">
                                        <option value="">--</option>
                                        <option value="1">Morning</option>
                                        <option value="2">Noon</option>
                                        <option value="3">Evening</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="BrandID">Model <span class="text-asterisk">*</span></label>
                                    <select id="BrandID" name="BrandID" class="form-control required">
                                        <option value="">--</option>
                                        <option value="1">Changan</option>
                                        <option value="2">Hyundai</option>
                                        <option value="3">Genesis</option>
                                        <option value="4">Peugeot</option>
                                        <option value="5">Hyundai - Commercial Vehicles</option>
                                        <option value="7">Citroen</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="VehicleID">-</label>
                                    <select id="VehicleID" name="VehicleID" class="form-control required">
                                        <option value="">--</option>
                                        <option value="71" data-chained="7">C3</option>
                                        <option value="52" data-chained="4">208</option>
                                        <option value="17" data-chained="2">ACCENT</option>
                                        <option value="20" data-chained="2">KONA</option>
                                        <option value="54" data-chained="3">G70 New</option>
                                        <option value="78" data-chained="7">C5</option>
                                        <option value="74" data-chained="7">C4</option>
                                        <option value="70" data-chained="4">The All New Landtrek</option>
                                        <option value="15" data-chained="2">ELANTRA</option>
                                        <option value="26" data-chained="3">G80</option>
                                        <option value="47" data-chained="4">All New 2008</option>
                                        <option value="63" data-chained="2">ELANTRA HYBRID</option>
                                        <option value="49" data-chained="4">New 3008</option>
                                        <option value="64" data-chained="2">CRETA 5 SEAT</option>
                                        <option value="61" data-chained="2">ELANTRA N</option>
                                        <option value="43" data-chained="4">Traveller</option>
                                        <option value="21" data-chained="2">TUCSON</option>
                                        <option value="16" data-chained="2">SONATA</option>
                                        <option value="68" data-chained="4">Rifter</option>
                                        <option value="23" data-chained="2">SANTA FE</option>
                                        <option value="1" data-chained="2">AZERA</option>
                                        <option value="4" data-chained="1">ALSVIN</option>
                                        <option value="80" data-chained="4">New 408</option>
                                        <option value="12" data-chained="4">Boxer</option>
                                        <option value="9" data-chained="4">508</option>
                                        <option value="13" data-chained="4">Expert</option>
                                        <option value="14" data-chained="4">Partner</option>
                                        <option value="48" data-chained="4">New 5008</option>
                                        <option value="50" data-chained="1">EADO PLUS</option>
                                        <option value="53" data-chained="3">GV70</option>
                                        <option value="6" data-chained="1">CS35 Plus</option>
                                        <option value="31" data-chained="5">County Bus</option>
                                        <option value="32" data-chained="5">Mighty HD</option>
                                        <option value="33" data-chained="5">Mighty HD65 Double Cabin</option>
                                        <option value="34" data-chained="5">Mighty HD Dump</option>
                                        <option value="51" data-chained="1">CS75 PLUS</option>
                                        <option value="38" data-chained="5">HD78 GT</option>
                                        <option value="39" data-chained="5">Universe Luxury Bus</option>
                                        <option value="65" data-chained="1">UNI-K</option>
                                        <option value="40" data-chained="5">Xcient GT Tractor Head & Dump Truck
                                        </option>
                                        <option value="66" data-chained="1">UNI-T</option>
                                        <option value="67" data-chained="1">UNI-V</option>
                                        <option value="41" data-chained="3">GV80</option>
                                        <option value="29" data-chained="1">CS85</option>
                                        <option value="8" data-chained="1">CS95</option>
                                        <option value="60" data-chained="2">VELOSTER N</option>
                                        <option value="59" data-chained="2">STARIA</option>
                                        <option value="46" data-chained="1">Hunter</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="BranchLocationID">Branch Location <span
                                            class="text-asterisk">*</span></label>
                                    <select id="BranchLocationID" name="BranchLocationID" class="form-control required">
                                        <option value="">--</option>
                                        <option value="25" data-chained="3">Al Khobar
                                        </option>
                                        <option value="14" data-chained="2">Al Khobar
                                        </option>
                                        <option value="5" data-chained="2">Arar Industrial Area</option>
                                        <option value="16" data-chained="3">Arar Industrial Area</option>
                                        <option value="4" data-chained="2">Dammam Showroom</option>
                                        <option value="15" data-chained="3">Dammam Showroom</option>
                                        <option value="17" data-chained="3">Dareen Mall</option>
                                        <option value="6" data-chained="2">Dareen Mall</option>
                                        <option value="1" data-chained="1">Dhahran Showroom</option>
                                        <option value="7" data-chained="2">Hafar Al Batin Main</option>
                                        <option value="18" data-chained="3">Hafar Al Batin Main</option>
                                        <option value="8" data-chained="2">Hassa Dahran Road</option>
                                        <option value="19" data-chained="3">Hassa Dahran Road</option>
                                        <option value="24" data-chained="3">Hassa Qatar Road
                                        </option>
                                        <option value="13" data-chained="2">Hassa Qatar Road
                                        </option>
                                        <option value="9" data-chained="2">Hassa Riyad Road</option>
                                        <option value="20" data-chained="3">Hassa Riyad Road</option>
                                        <option value="10" data-chained="2">Jarir</option>
                                        <option value="21" data-chained="3">Jarir</option>
                                        <option value="31" data-chained="4">Jeddah Showroom</option>
                                        <option value="3" data-chained="1">Jeddah Showroom</option>
                                        <option value="22" data-chained="3">Jubail Main</option>
                                        <option value="11" data-chained="2">Jubail Main</option>
                                        <option value="23" data-chained="3">Khobar Dahran
                                        </option>
                                        <option value="12" data-chained="2">Khobar Dahran
                                        </option>
                                        <option value="33" data-chained="1">Khobar Showroom</option>
                                        <option value="30" data-chained="4">Khobar Showroom</option>
                                        <option value="32" data-chained="4">Riyadh Showroom</option>
                                        <option value="2" data-chained="1">Riyadh Showroom</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <table>
                                <tr>
                                    <td style="width: 20px;"><input type="checkbox" id="IAgree" name="IAgree"
                                            class="form-control required" value="123"></td>
                                    <td>
                                        <label for="IAgree"
                                            style="padding-top: 8px; padding-left: 7px; padding-right: 7px; font-size:90%;">
                                            I agree to Almajdouie <a href="terms.php.html" target="_blank">Privacy Policy,
                                                Disclaimer and Terms &AMP; Conditions</a>. </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label id="IAgree-error" class="error" for="IAgree"
                                            style="display: none;"></label></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-12">
                        <hr>
                    </div>
                </div>
                <div class="row" style="direction: ltr;">
                    <div class="col-12 col-md-6 col-lg-6">
                        <input type="hidden" id="ComeFrom" name="ComeFrom" value="MW">
                        <input type="hidden" id="token" name="token" value="6d8943d8bc">
                        <img id="img-progress" src="{{ asset('admin/assets/images/ajax-loader.gif') }}" style="display: none;">
                        <button type="submit" id="btnSave1" name="btnSave1" class="btn btn-primary"
                            style="float: right;">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <script type="text/javascript" src="{{ asset('assets/plugin/jquery-validate/jquery.validate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugin/jquery-validate/additional-methods.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugin/jquery_chained-2.x/jquery.chained.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugin/daterangepicker-master/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugin/daterangepicker-master/daterangepicker.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            //$(".datepicker").datepicker({format: 'mm/dd/yyyy'});
            //$.validate({form: '#frmdata1', modules: 'security'});

            $("#frmdata1").validate({
                rules: {
                    Mobile: {
                        required: true,
                        number: true,
                        minlength: 9,
                        maxlength: 9
                    },
                },
                submitHandler: function(form) {
                    {
                        $('button#btnSave1').hide();
                        $('img#img-progress').show();
                        form.submit();
                    }
                }
            });

            $('#frmdata1').preventDoubleSubmission();

            $("#VehicleID").chained("#BrandID");
            $("#BranchLocationID").chained("#BrandID");

            $("#BrandID").val("").change();
            $("#VehicleID").val("").change();


            $('input#PreferableDate').daterangepicker({
                minDate: new Date(),
                startDate: moment().add(1, 'days'),
                endDate: moment().add(7, 'days'),
                ranges: {
                    'Today': [moment(), moment()],
                    'Tomorrow': [moment().add(1, 'days'), moment().add(1, 'days')],
                    'Next 7 Days': [moment().add(1, 'days'), moment().add(7, 'days')],
                }
            });

        });
    </script>
@endsection
