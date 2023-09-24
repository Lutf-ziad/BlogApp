@extends('layout.main')

@section('content')
    <div class="content-area">
        <div class="container-fluid mw-1200">


            <p class="bg-primary text-white px-3 py-2">Please fill the below form.</p>

            <form id="frmdata1" class="has-validation-callback" action="complain" method="post">
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
                                    <label for="DOB" style="display: block;">DOB </label>
                                    <!--                                                                        <input type="text" class="form-control text-center datepicker" id="DOB" name="DOB" value="" placeholder="mm/dd/yyyy">-->
                                    <input type="text" class="form-control text-center" id="DOB" name="DOB"
                                        data-format="DD-MM-YYYY" data-template="D MMM YYYY">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="CarVIN">Car VIN # </label>
                                    <input type="text" class="form-control text-center" id="CarVIN" name="CarVIN"
                                        value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="BrandID">Brand <cite>*</cite></label>
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
                                    <label for="ComplainTypeID">Complain Type <cite>*</cite></label>
                                    <select id="ComplainTypeID" name="ComplainTypeID" class="form-control required">
                                        <option value="">--</option>
                                        <option value="1" data-chained="1">Sales Complain</option>
                                        <option value="4" data-chained="2">Sales Complain</option>
                                        <option value="9" data-chained="4">Sales Complain</option>
                                        <option value="2" data-chained="1">Service Complain</option>
                                        <option value="5" data-chained="2">Service Complain</option>
                                        <option value="10" data-chained="4">Service Complain</option>
                                        <option value="3" data-chained="1">Parts Complain</option>
                                        <option value="6" data-chained="2">Parts Complain</option>
                                        <option value="11" data-chained="4">Parts Complain</option>
                                        <option value="7" data-chained="2">Quick Service</option>
                                        <option value="8" data-chained="2">Body workshop</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="ComplainAreaID">Area <cite>*</cite></label>
                                    <select id="ComplainAreaID" name="ComplainAreaID" class="form-control required">
                                        <option value="" data-chained="">--</option>
                                        <option value="32" data-chained="9">Accessories</option>
                                        <option value="5" data-chained="1">Accessories</option>
                                        <option value="2" data-chained="1">Attitude</option>
                                        <option value="30" data-chained="9">Attitude</option>
                                        <option value="41" data-chained="10">Attitude</option>
                                        <option value="12" data-chained="2">Attitude</option>
                                        <option value="8" data-chained="2">Body & Paint</option>
                                        <option value="37" data-chained="10">Body & Paint</option>
                                        <option value="31" data-chained="9">Car Cleanliness</option>
                                        <option value="3" data-chained="1">Car Cleanliness</option>
                                        <option value="13" data-chained="3">Delay in Delivery</option>
                                        <option value="43" data-chained="11">Delay in Delivery</option>
                                        <option value="36" data-chained="10">Delivery</option>
                                        <option value="29" data-chained="9">Delivery</option>
                                        <option value="7" data-chained="2">Delivery</option>
                                        <option value="1" data-chained="1">Delivery</option>
                                        <option value="6" data-chained="1">Diff Specs</option>
                                        <option value="33" data-chained="9">Diff Specs</option>
                                        <option value="14" data-chained="3">Misbehavior</option>
                                        <option value="44" data-chained="11">Misbehavior</option>
                                        <option value="21" data-chained="5">More Info
                                        </option>
                                        <option value="25" data-chained="6">More Info
                                        </option>
                                        <option value="26" data-chained="7">More Info
                                        </option>
                                        <option value="28" data-chained="8">More Info
                                        </option>
                                        <option value="20" data-chained="4">More Info</option>
                                        <option value="18" data-chained="3">No Parts Available</option>
                                        <option value="48" data-chained="11">No Parts Available</option>
                                        <option value="49" data-chained="11">Price</option>
                                        <option value="19" data-chained="3">Price</option>
                                        <option value="9" data-chained="2">Quick Service</option>
                                        <option value="38" data-chained="10">Quick Service</option>
                                        <option value="22" data-chained="5">Repeated Fix
                                        </option>
                                        <option value="46" data-chained="11">Return Parts</option>
                                        <option value="16" data-chained="3">Return Parts</option>
                                        <option value="23" data-chained="5">Service Appnt
                                        </option>
                                        <option value="27" data-chained="7">Service Appnt
                                        </option>
                                        <option value="40" data-chained="10">Service Appnt</option>
                                        <option value="11" data-chained="2">Service Appnt</option>
                                        <option value="15" data-chained="3">Waiting Feedback </option>
                                        <option value="45" data-chained="11">Waiting Feedback </option>
                                        <option value="24" data-chained="5">Warranty
                                        </option>
                                        <option value="39" data-chained="10">Warranty</option>
                                        <option value="10" data-chained="2">Warranty</option>
                                        <option value="17" data-chained="3">Wrong Parts</option>
                                        <option value="47" data-chained="11">Wrong Parts</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="ComplainAreaSubID">Sub Area</label>
                                    <select id="ComplainAreaSubID" name="ComplainAreaSubID" class="form-control">
                                        <option value="" data-chained="">--</option>
                                        <option value="34" data-chained="20">Accessories
                                        </option>
                                        <option value="68" data-chained="22">Accessories
                                        </option>
                                        <option value="92" data-chained="24">Accessories
                                        </option>
                                        <option value="37" data-chained="21">Accident Inside Work Shop
                                        </option>
                                        <option value="132" data-chained="37">Accident Inside Work Shop
                                        </option>
                                        <option value="5" data-chained="8">Accident Inside Work Shop</option>
                                        <option value="65" data-chained="22">Air Condition
                                        </option>
                                        <option value="89" data-chained="24">Air Condition
                                        </option>
                                        <option value="62" data-chained="22">Airbag
                                        </option>
                                        <option value="86" data-chained="24">Airbag
                                        </option>
                                        <option value="73" data-chained="23">Appointment Not Confirmed
                                        </option>
                                        <option value="115" data-chained="27">Appointment Not Confirmed
                                        </option>
                                        <option value="137" data-chained="40">Appointment Not Confirmed
                                        </option>
                                        <option value="19" data-chained="11">Appointment Not Confirmed</option>
                                        <option value="138" data-chained="40">Appt Slot Availability
                                        </option>
                                        <option value="20" data-chained="11">Appt Slot Availability</option>
                                        <option value="141" data-chained="40">Arrived and No Appt
                                        </option>
                                        <option value="23" data-chained="11">Arrived and No Appt</option>
                                        <option value="58" data-chained="22">Audio/video devices
                                        </option>
                                        <option value="82" data-chained="24">Audio/video devices
                                        </option>
                                        <option value="53" data-chained="22">Back Arms
                                        </option>
                                        <option value="77" data-chained="24">Back Arms
                                        </option>
                                        <option value="67" data-chained="22">Back Bumper Sensors
                                        </option>
                                        <option value="91" data-chained="24">Back Bumper Sensors
                                        </option>
                                        <option value="72" data-chained="22">back Light
                                        </option>
                                        <option value="96" data-chained="24">back Light
                                        </option>
                                        <option value="113" data-chained="26">Bad Service
                                        </option>
                                        <option value="60" data-chained="22">Battery
                                        </option>
                                        <option value="84" data-chained="24">Battery
                                        </option>
                                        <option value="123" data-chained="39">Body
                                        </option>
                                        <option value="14" data-chained="10">Body</option>
                                        <option value="30" data-chained="20">Body Scratches
                                        </option>
                                        <option value="64" data-chained="22">Brake Issue
                                        </option>
                                        <option value="88" data-chained="24">Brake Issue
                                        </option>
                                        <option value="59" data-chained="22">Cameras
                                        </option>
                                        <option value="83" data-chained="24">Cameras
                                        </option>
                                        <option value="36" data-chained="20">Car Cleanliness
                                        </option>
                                        <option value="49" data-chained="21">Car Cleanliness
                                        </option>
                                        <option value="133" data-chained="37">Car Cleanliness
                                        </option>
                                        <option value="6" data-chained="8">Car Cleanliness</option>
                                        <option value="3" data-chained="6">Colors</option>
                                        <option value="136" data-chained="37">Courtesy car
                                        </option>
                                        <option value="9" data-chained="8">Courtesy car</option>
                                        <option value="63" data-chained="22">Cruise control
                                        </option>
                                        <option value="87" data-chained="24">Cruise control
                                        </option>
                                        <option value="1" data-chained="1">Delay</option>
                                        <option value="26" data-chained="20">Delay in Delivery
                                        </option>
                                        <option value="41" data-chained="21">Delay in Delivery
                                        </option>
                                        <option value="105" data-chained="25">Delay in Delivery
                                        </option>
                                        <option value="118" data-chained="28">Delay in Delivery
                                        </option>
                                        <option value="110" data-chained="26">Delay in Service
                                        </option>
                                        <option value="2" data-chained="1">Delivery Issues</option>
                                        <option value="117" data-chained="28">Denting Problem
                                        </option>
                                        <option value="39" data-chained="21">Different prices
                                        </option>
                                        <option value="35" data-chained="20">Different Specifications
                                        </option>
                                        <option value="107" data-chained="25">Diffirent Fees
                                        </option>
                                        <option value="114" data-chained="26">Diffirent Fees
                                        </option>
                                        <option value="28" data-chained="20">Discoloring
                                        </option>
                                        <option value="119" data-chained="28">Discolouring Problem
                                        </option>
                                        <option value="124" data-chained="39">Electrical
                                        </option>
                                        <option value="15" data-chained="10">Electrical</option>
                                        <option value="127" data-chained="39">Fix First Visit
                                        </option>
                                        <option value="18" data-chained="10">Fix First Visit</option>
                                        <option value="47" data-chained="21">Fix Without Approval
                                        </option>
                                        <option value="128" data-chained="38">Fix Without Approval
                                        </option>
                                        <option value="135" data-chained="37">Fix Without Approval
                                        </option>
                                        <option value="8" data-chained="8">Fix Without Approval</option>
                                        <option value="10" data-chained="9">Fix Without Approval</option>
                                        <option value="52" data-chained="22">Front Arms
                                        </option>
                                        <option value="76" data-chained="24">Front Arms
                                        </option>
                                        <option value="66" data-chained="22">Front Bumper Sensors
                                        </option>
                                        <option value="90" data-chained="24">Front Bumper Sensors
                                        </option>
                                        <option value="54" data-chained="22">Front Light
                                        </option>
                                        <option value="78" data-chained="24">Front Light
                                        </option>
                                        <option value="50" data-chained="22">Gear
                                        </option>
                                        <option value="74" data-chained="24">Gear
                                        </option>
                                        <option value="45" data-chained="21">Interior Decoration
                                        </option>
                                        <option value="126" data-chained="39">Long Delivery time
                                        </option>
                                        <option value="131" data-chained="38">Long Delivery time
                                        </option>
                                        <option value="13" data-chained="9">Long Delivery time</option>
                                        <option value="17" data-chained="10">Long Delivery time</option>
                                        <option value="130" data-chained="38">Long wait time
                                        </option>
                                        <option value="140" data-chained="40">Long wait time
                                        </option>
                                        <option value="12" data-chained="9">Long wait time</option>
                                        <option value="22" data-chained="11">Long wait time</option>
                                        <option value="120" data-chained="28">Loss of Gloss
                                        </option>
                                        <option value="125" data-chained="39">Mechanical
                                        </option>
                                        <option value="16" data-chained="10">Mechanical</option>
                                        <option value="106" data-chained="25">Misbehavior
                                        </option>
                                        <option value="111" data-chained="26">Misbehavior
                                        </option>
                                        <option value="27" data-chained="20">Misbehaviour
                                        </option>
                                        <option value="42" data-chained="21">Misbehaviour
                                        </option>
                                        <option value="121" data-chained="28">Misbehaviour
                                        </option>
                                        <option value="70" data-chained="22">Monitor Display
                                        </option>
                                        <option value="94" data-chained="24">Monitor Display
                                        </option>
                                        <option value="139" data-chained="40">No Answer
                                        </option>
                                        <option value="21" data-chained="11">No Answer</option>
                                        <option value="40" data-chained="21">No Feedback After Promised
                                        </option>
                                        <option value="31" data-chained="20">Not Answer Customer Call
                                        </option>
                                        <option value="48" data-chained="21">Not Answer Customer Call
                                        </option>
                                        <option value="108" data-chained="25">Not Answer Customer Call
                                        </option>
                                        <option value="4" data-chained="6">Options</option>
                                        <option value="112" data-chained="26">Other
                                        </option>
                                        <option value="116" data-chained="27">Other
                                        </option>
                                        <option value="122" data-chained="28">Other
                                        </option>
                                        <option value="129" data-chained="38">Price
                                        </option>
                                        <option value="134" data-chained="37">Price
                                        </option>
                                        <option value="7" data-chained="8">Price</option>
                                        <option value="11" data-chained="9">Price</option>
                                        <option value="43" data-chained="21">Refuse To Fix
                                        </option>
                                        <option value="51" data-chained="22">Refuse To Fix
                                        </option>
                                        <option value="75" data-chained="24">Refuse To Fix
                                        </option>
                                        <option value="46" data-chained="21">Remote Key
                                        </option>
                                        <option value="109" data-chained="25">Return Parts
                                        </option>
                                        <option value="143" data-chained="41">Service Advisor
                                        </option>
                                        <option value="25" data-chained="12">Service Advisor</option>
                                        <option value="142" data-chained="41">Service Manager
                                        </option>
                                        <option value="24" data-chained="12">Service Manager</option>
                                        <option value="69" data-chained="22">Side Mirrors
                                        </option>
                                        <option value="93" data-chained="24">Side Mirrors
                                        </option>
                                        <option value="44" data-chained="21">Spare Car
                                        </option>
                                        <option value="55" data-chained="22">Steering
                                        </option>
                                        <option value="79" data-chained="24">Steering
                                        </option>
                                        <option value="56" data-chained="22">Sunroof
                                        </option>
                                        <option value="80" data-chained="24">Sunroof
                                        </option>
                                        <option value="32" data-chained="20">Tiers
                                        </option>
                                        <option value="61" data-chained="22">Tire Pressure Gauge
                                        </option>
                                        <option value="85" data-chained="24">Tire Pressure Gauge
                                        </option>
                                        <option value="71" data-chained="22">Trunk Lock
                                        </option>
                                        <option value="95" data-chained="24">Trunk Lock
                                        </option>
                                        <option value="33" data-chained="20">Waiting Feedback
                                        </option>
                                        <option value="38" data-chained="21">Waiting in Service Area
                                        </option>
                                        <option value="29" data-chained="20">Window Scratches
                                        </option>
                                        <option value="57" data-chained="22">Windows
                                        </option>
                                        <option value="81" data-chained="24">Windows
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="ComplainBranchLocationID">Branch Location <cite>*</cite></label>
                                    <select id="ComplainBranchLocationID" name="ComplainBranchLocationID"
                                        class="form-control required">
                                        <option value="">--</option>
                                        <option value="82" data-chained="1">A11-Dhahran Showroom</option>
                                        <option value="81" data-chained="1">A15-Riyadh Showroom</option>
                                        <option value="83" data-chained="1">A20-Jeddah Showroom</option>
                                        <option value="91" data-chained="3">Al Hassa Service</option>
                                        <option value="85" data-chained="2">Al Hassa service</option>
                                        <option value="59" data-chained="8">AL Khair Showroom
                                        </option>
                                        <option value="22" data-chained="5">AL Khair Showroom
                                        </option>
                                        <option value="92" data-chained="3">All Parts Sup-Dealer</option>
                                        <option value="33" data-chained="6">Arar Industrial
                                        </option>
                                        <option value="10" data-chained="4">Arar Showroom
                                        </option>
                                        <option value="23" data-chained="5">Arar Showroom
                                        </option>
                                        <option value="7" data-chained="3">Changan Parts Dhahran</option>
                                        <option value="99" data-chained="3">Changan Parts Jeddah</option>
                                        <option value="9" data-chained="3">Changan Parts Riyadh</option>
                                        <option value="68" data-chained="2">Changan Service Dammam</option>
                                        <option value="75" data-chained="3">Changan Service Dammam</option>
                                        <option value="93" data-chained="3">Changan Service DJ-Jazan</option>
                                        <option value="84" data-chained="2">Changan Service DJ-Jazan</option>
                                        <option value="71" data-chained="2">Changan Service Jeddah Sari</option>
                                        <option value="78" data-chained="3">Changan Service Jeddah Sari</option>
                                        <option value="79" data-chained="3">Changan Service Jeddah-Khashab</option>
                                        <option value="72" data-chained="2">Changan Service Jeddah-Khashab</option>
                                        <option value="80" data-chained="3">Changan Service Jeddah-Sultan</option>
                                        <option value="73" data-chained="2">Changan Service Jeddah-Sultan</option>
                                        <option value="94" data-chained="3">Changan Service Riyadh NI</option>
                                        <option value="86" data-chained="2">Changan Service Riyadh NI</option>
                                        <option value="87" data-chained="2">Changan Service R–Medina</option>
                                        <option value="95" data-chained="3">Changan Service R–Medina</option>
                                        <option value="5" data-chained="2">Changan Services Dhahran</option>
                                        <option value="88" data-chained="2">Changan Services Riyadh Exit13</option>
                                        <option value="96" data-chained="3">Changan Services Riyadh Exit13</option>
                                        <option value="89" data-chained="2">Changan Services Riyadh Exit17</option>
                                        <option value="97" data-chained="3">Changan Services Riyadh Exit17</option>
                                        <option value="90" data-chained="2">ChanganServiceDJ-KhamisMushait</option>
                                        <option value="98" data-chained="3">ChanganServiceDJ-KhamisMushait</option>
                                        <option value="35" data-chained="6">Dammam 91 Showroom
                                        </option>
                                        <option value="11" data-chained="4">Dammam 91 Showroom
                                        </option>
                                        <option value="24" data-chained="5">Dammam 91 Showroom
                                        </option>
                                        <option value="46" data-chained="7">Dammam 91 Showroom
                                        </option>
                                        <option value="47" data-chained="7">Dammam Al Aziziyah
                                        </option>
                                        <option value="48" data-chained="7">Dammam Al Tobaishi
                                        </option>
                                        <option value="12" data-chained="4">Dareen Showroom
                                        </option>
                                        <option value="66" data-chained="11">Dhahran Showroom
                                        </option>
                                        <option value="65" data-chained="10">Dhahran Showroom
                                        </option>
                                        <option value="64" data-chained="9">Dhahran Showroom
                                        </option>
                                        <option value="36" data-chained="6">Hafar Al Batin Industrial
                                        </option>
                                        <option value="49" data-chained="7">Hafar Al Batin Showroom
                                        </option>
                                        <option value="13" data-chained="4">Hafar Al Batin Showroom
                                        </option>
                                        <option value="37" data-chained="6">Hafar Al Batin Showroom
                                        </option>
                                        <option value="25" data-chained="5">Hafar Al Batin Showroom
                                        </option>
                                        <option value="58" data-chained="8">Hafar Al Batin Showroom
                                        </option>
                                        <option value="50" data-chained="7">Hassa Al Mubaraz
                                        </option>
                                        <option value="57" data-chained="7">Hassa Al Shoaba
                                        </option>
                                        <option value="26" data-chained="5">Hassa Daharan Showroom
                                        </option>
                                        <option value="14" data-chained="4">Hassa Daharan Showroom
                                        </option>
                                        <option value="63" data-chained="8">Hassa Industrial
                                        </option>
                                        <option value="52" data-chained="7">Hassa Industrial
                                        </option>
                                        <option value="21" data-chained="4">Hassa Qatar Road Showroom
                                        </option>
                                        <option value="32" data-chained="5">Hassa Qatar Road Showroom
                                        </option>
                                        <option value="38" data-chained="6">Hassa Qatar Road Showroom
                                        </option>
                                        <option value="16" data-chained="4">Hassa Riyadh Road
                                        </option>
                                        <option value="28" data-chained="5">Hassa Riyadh Road
                                        </option>
                                        <option value="39" data-chained="6">Hassa Riyadh Road
                                        </option>
                                        <option value="40" data-chained="6">Hassa Sanaya Road
                                        </option>
                                        <option value="17" data-chained="4">Jarir Showroom
                                        </option>
                                        <option value="61" data-chained="8">Jubail Showroom
                                        </option>
                                        <option value="18" data-chained="4">Jubail Showroom
                                        </option>
                                        <option value="29" data-chained="5">Jubail Showroom
                                        </option>
                                        <option value="41" data-chained="6">Jubail Showroom
                                        </option>
                                        <option value="53" data-chained="7">Jubail Showroom
                                        </option>
                                        <option value="42" data-chained="6">Khafji workshop
                                        </option>
                                        <option value="62" data-chained="8">Khafji workshop
                                        </option>
                                        <option value="54" data-chained="7">Khafji workshop
                                        </option>
                                        <option value="19" data-chained="4">Khobar Dahran Showroom
                                        </option>
                                        <option value="43" data-chained="6">Khobar Main Showroom
                                        </option>
                                        <option value="20" data-chained="4">Khobar Main Showroom
                                        </option>
                                        <option value="30" data-chained="5">Khobar Main Showroom
                                        </option>
                                        <option value="55" data-chained="7">Khobar Main Showroom
                                        </option>
                                        <option value="60" data-chained="8">Khobar Thuqba Showroom
                                        </option>
                                        <option value="15" data-chained="4">Khobar Thuqba Showroom
                                        </option>
                                        <option value="56" data-chained="7">Khobar Thuqba Showroom
                                        </option>
                                        <option value="31" data-chained="5">Khobar Thuqba Showroom
                                        </option>
                                        <option value="44" data-chained="6">Khobar Thuqba Showroom
                                        </option>
                                        <option value="45" data-chained="6">Khodariya Showroom
                                        </option>
                                        <option value="34" data-chained="6">Qatif Showroom
                                        </option>
                                        <option value="27" data-chained="5">Seehat Showroom
                                        </option>
                                        <option value="51" data-chained="7">Seehat Showroom
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-12">
                        <textarea id="Summary" name="Summary" class="form-control" placeholder="Complain Summary"
                            data-validation="required" rows="4" maxlength="1999"></textarea>
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
                        <div class="g-recaptcha" data-sitekey="6LeO2LYZAAAAAAh9wrPUcrSSbF44AUPlY4EhJGBj"></div>
                        <span class="sp-g-recaptcha-msg" style="display: none; color: red;">Please confirm you are not a
                            robot.</span>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <input type="hidden" id="ComeFrom" name="ComeFrom" value="MW">
                        <input type="hidden" id="token" name="token" value="643ca167b8">
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
    <script type="text/javascript" src="{{ asset('') }}assets/plugin/combodate-1.0.7/combodate.js"></script>

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

            $("#ComplainTypeID").chained("#BrandID");
            $("#ComplainAreaID").chained("#ComplainTypeID");
            $("#ComplainAreaSubID").chained("#ComplainAreaID");
            $("#ComplainBranchLocationID").chained("#ComplainTypeID");

        });
    </script>
@endsection
