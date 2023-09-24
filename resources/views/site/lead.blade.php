@extends('layout.main')

@section('content')
    <div class="content-area">
        <div class="container-fluid mw-1200">


            <p class="bg-primary text-white px-3 py-2">Please fill the below form.</p>

            <form id="frmdata1" class="has-validation-callback" action="lead.php" method="post">
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
                                    <label for="NationalID">National ID </label>
                                    <input type="number" class="form-control text-center" id="NationalID" name="NationalID"
                                        value="">
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
                                <div class="form-group">
                                    <label for="DOB" style="display: block;">DOB </label>
                                    <!--                                                                        <input type="text" class="form-control text-center datepicker" id="DOB" name="DOB" value="" placeholder="mm/dd/yyyy">-->
                                    <input type="text" class="form-control text-center" id="DOB" name="DOB"
                                        data-format="DD-MM-YYYY" data-template="D MMM YYYY">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="OccupationID">Occupation </label>
                                    <select id="OccupationID" name="OccupationID" class="form-control">
                                        <option value="0">--</option>
                                        <option value="2">Employee Government</option>
                                        <option value="1">Employee Private Sector</option>
                                        <option value="3">Military</option>
                                        <option value="7">No Job</option>
                                        <option value="5">Private Business</option>
                                        <option value="6">Retired</option>
                                        <option value="4">Student</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="LeadChannel">How did you hear about us? <span
                                            class="text-asterisk">*</span></label>
                                    <select id="Channel" name="Channel" class="form-control required">
                                        <option value="" data-chained="">--</option>
                                        <option value="Event">Event</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Friends">Friends</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="Radio">Radio</option>
                                        <option value="Snapchat">Snapchat</option>
                                        <option value="Street poster">Street poster</option>
                                        <option value="Telesales">Telesales</option>
                                        <option value="Twitter">Twitter</option>
                                        <option value="Walk in">Walk in</option>
                                        <option value="Web" selected="">Web</option>
                                        <option value="Webstore">Webstore</option>
                                        <option value="WhatsApp">WhatsApp</option>
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
                                    <label for="BuyPlanID">Purchase Plan <span class="text-asterisk">*</span></label>
                                    <select id="BuyPlanID" name="BuyPlanID" class="form-control required">
                                        <option value="">--</option>
                                        <option value="1">This week</option>
                                        <option value="2">This month</option>
                                        <option value="3">Within 3 months</option>
                                        <option value="4">Within 12 months</option>
                                        <option value="5">Just asking</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CityID">Lead City <span class="text-asterisk">*</span></label>
                                    <select id="CityID" name="CityID" class="form-control required">
                                        <option value="">--</option>
                                        <option value="1">Abha</option>
                                        <option value="2">Abqaiq</option>
                                        <option value="3">Al-Ahssa</option>
                                        <option value="4">Al-Bahah</option>
                                        <option value="5">Al-Dammam</option>
                                        <option value="6">Al-Hufuf</option>
                                        <option value="7">Al-Jawf</option>
                                        <option value="8">Al-Kharj (oasis)</option>
                                        <option value="9">Al-Khubar</option>
                                        <option value="10">Al-Qatif</option>
                                        <option value="11">Al-Taif</option>
                                        <option value="12">Arar</option>
                                        <option value="13">Buraydah</option>
                                        <option value="14">Dhahran</option>
                                        <option value="15">Hail</option>
                                        <option value="16">Jeddah</option>
                                        <option value="17">Jizan</option>
                                        <option value="18">Khamis Mushayt</option>
                                        <option value="19">King Khalid Military City</option>
                                        <option value="20">Mecca</option>
                                        <option value="21">Medina</option>
                                        <option value="22">Najran</option>
                                        <option value="23">Ras Tanura</option>
                                        <option value="24">Riyadh</option>
                                        <option value="25">Sakaka</option>
                                        <option value="26">Tabuk</option>
                                        <option value="27">Yanbu</option>
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
                                            I agree to Almajdouie <a href="" target="_blank">Privacy Policy,
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
                        <input type="hidden" id="token" name="token" value="a406963315">
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
    <script type="text/javascript" src="{{ asset('assets/plugin/combodate-1.0.7/moment.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugin/combodate-1.0.7/combodate.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            //                $(".datepicker").datepicker({format: 'mm/dd/yyyy'});
            $('#DOB').combodate({
                minYear: 1950,
                maxYear: 2000,
                customClass: 'form-control'
            });

            $("#frmdata1").validate({
                rules: {
                    Mobile: {
                        required: true,
                        number: true,
                        minlength: 9,
                        maxlength: 9
                    },
                    NationalID: {
                        required: false,
                        number: true,
                        minlength: 10,
                        maxlength: 10
                    }
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


        });
    </script>
@endsection
