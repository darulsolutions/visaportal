@extends('frontend.layout.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add File</h1>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!--New File Entry Form Start-->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- form start -->
                        <form role="form">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <h6> New File Entry
                                    <span style="float:right; margin-right:1000px;">
                                        @if(session()->has('success'))
                                            {{ session()->get('success') }}
                                            {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{ session()->get('success') }}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div> --}}
                                        @elseif(session()->has('error'))
                                            {{ session()->get('error') }}
                                            {{-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ session()->get('error') }}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div> --}}
                                        @endif
                                    </span>
                                </h6>

                                <hr>
                                <div class="row">
                                    <div class="form-group col-3">
                                        <label>Country</label>
                                        <select name="country" class="form-control select2 {{ isset($errors) && $errors->has('country') ? 'has_error' : ''}}" style="width: 100%;">
                                            <option value="1" {{ old('country') && old('country') == "1" ? 'selected' : 'selected' }}>Pakistan</option>
                                        </select>
                                        @if($errors->has('country'))
                                            <span class="error">{{ $errors->first('country') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-3">
                                        <label>City</label>
                                        <select name="city" class="form-control select2 {{ isset($errors) && $errors->has('city') ? 'has_error' : ''}}" style="width: 100%;">
                                            <option value="1" {{ old('city') && old('city') == "1" ? 'selected' : '' }}>Karachi</option>
                                            <option value="2" {{ old('city') && old('city') == "2" ? 'selected' : '' }}>Islamabad</option>
                                        </select>
                                        @if($errors->has('city'))
                                            <span class="error">{{ $errors->first('city') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Date</label>
                                        <input type="text" name="date" value="{{ old('date') }}" class="form-control {{ isset($errors) && $errors->has('date') ? 'has_error' : ''}}" id="date_time" readonly>
                                        @if($errors->has('date'))
                                            <span class="error">{{ $errors->first('date') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <h6 class="add_file_section"> Forign Employer Details</h6>
                                <hr>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="">Name Of Employer (English)</label>
                                        <input type="text" name="name" value="{{ old('name') }}"class="form-control {{ isset($errors) && $errors->has('name') ? 'has_error' : ''}}" id="" placeholder="Enter Name Employer (English)">
                                        @if($errors->has('name'))
                                            <span class="error">{{ $errors->first('name') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="">Name Of Employer (Arabic)</label>
                                        <input type="text" name="ar_name" value="{{ old('ar_name') }}" class="form-control {{ isset($errors) && $errors->has('ar_name') ? 'has_error' : ''}}" id="" placeholder="Enter Name Employer (Arabic)">
                                        @if($errors->has('ar_name'))
                                            <span class="error">{{ $errors->first('ar_name') }}<span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-3">
                                        <label>Type of Employer</label>
                                        <select name="type" class="form-control select2 {{ isset($errors) && $errors->has('type') ? 'has_error' : ''}}" style="width: 100%;">
                                            <option selected="selected">Public</option>
                                            <option>Private</option>
                                        </select>
                                        @if($errors->has('type'))
                                            <span class="error">{{ $errors->first('type') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="">Visa Number</label>
                                        <input type="text" name="visa_number" value="{{ old('visa_number') }}" class="form-control {{ isset($errors) && $errors->has('visa_number') ? 'has_error' : ''}}" id="" placeholder="Enter Visa Number">
                                        @if($errors->has('visa_number'))
                                            <span class="error">{{ $errors->first('visa_number') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="">Visa Issue Date (Arabic)</label>
                                        <input type="text" name="issue_date" value="{{ old('issue_date') }}" class="form-control {{ isset($errors) && $errors->has('issue_date') ? 'has_error' : ''}}" id="" placeholder="Enter Issue Date">
                                        @if($errors->has('issue_date'))
                                            <span class="error">{{ $errors->first('issue_date') }}<span>
                                        @endif
                                    </div>
                                    {{-- <div class="form-group col-3">
                                        <label for="">Waqala or Deligation Number</label>
                                        <input type="text" name="" class="form-control {{ isset($errors) && $errors->has('date') ? 'has_error' : ''}}" id="" placeholder="Enter Waqala or Deligation Numberr">
                                        @if($errors->has('country'))
                                            <span class="error">{{ $errors->first('country') }}<span>
                                        @endif
                                    </div> --}}
                                </div>

                                <div class="row">
                                    <div class="form-group col-3">
                                        <label for="">ID Number</label>
                                        <input type="number" name="id_number" value="{{ old('id_number') }}" class="form-control {{ isset($errors) && $errors->has('id_number') ? 'has_error' : ''}}" id="" placeholder="Enter ID Number">
                                        @if($errors->has('id_number'))
                                            <span class="error">{{ $errors->first('id_number') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-3">
                                        <label>City</label>
                                        <select name="employer_city" class="form-control select2 {{ isset($errors) && $errors->has('employer_city') ? 'has_error' : ''}}" style="width: 100%;">
                                            <option value="1" {{ old('employer_city') && old('employer_city') == "1" ? 'selected' : '' }}>Karachi</option>
                                            <option value="2" {{ old('employer_city') && old('employer_city') == "2" ? 'selected' : '' }}>Islamabad</option>
                                        </select>
                                        @if($errors->has('employer_city'))
                                            <span class="error">{{ $errors->first('employer_city') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="">Address</label>
                                        <input type="text" name="address" value="{{ old('address') }}" class="form-control {{ isset($errors) && $errors->has('address') ? 'has_error' : ''}}" id="" placeholder="Enter Address">
                                        @if($errors->has('address'))
                                            <span class="error">{{ $errors->first('address') }}<span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-3">
                                        <label for="">Fax Number</label>
                                        <input type="number" name="fax_number" value="{{ old('fax_number') }}" class="form-control {{ isset($errors) && $errors->has('fax_number') ? 'has_error' : ''}}" id="" placeholder="Enter Fax Number">
                                        @if($errors->has('fax_number'))
                                            <span class="error">{{ $errors->first('fax_number') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="">Mobile Number</label>
                                        <input type="number" name="mobile_number" value="{{ old('mobile_number') }}" class="form-control {{ isset($errors) && $errors->has('mobile_number') ? 'has_error' : ''}}" id="" placeholder="Enter Mobile Number">
                                        @if($errors->has('mobile_number'))
                                            <span class="error">{{ $errors->first('mobile_number') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="">Phone Number</label>
                                        <input type="number" name="phone_number" value="{{ old('phone_number') }}" class="form-control {{ isset($errors) && $errors->has('phone_number') ? 'has_error' : ''}}" id="" placeholder="Enter Phone Number">
                                        @if($errors->has('phone_number'))
                                            <span class="error">{{ $errors->first('phone_number') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="">Email Address</label>
                                        <input type="email" name="email" value="{{ old('email') }}" class="form-control {{ isset($errors) && $errors->has('email') ? 'has_error' : ''}}" id="" placeholder="Enter Email Address">
                                        @if($errors->has('email'))
                                            <span class="error">{{ $errors->first('email') }}<span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="">Website</label>
                                        <input type="text" name="website" value="{{ old('website') }}" class="form-control {{ isset($errors) && $errors->has('website') ? 'has_error' : ''}}" id="" placeholder="Enter Website">
                                        @if($errors->has('website'))
                                            <span class="error">{{ $errors->first('website') }}<span>
                                        @endif
                                    </div>
                                    {{-- <div class="form-group col-4">
                                        <label for="">Date & Time</label>
                                        <input type="datetime-local" name="" class="form-control {{ isset($errors) && $errors->has('date') ? 'has_error' : ''}}" id="">
                                        @if($errors->has('country'))
                                            <span class="error">{{ $errors->first('country') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-2">
                                        <label>Country</label>
                                        <select name="" class="form-control select2 {{ isset($errors) && $errors->has('date') ? 'has_error' : ''}}" style="width: 100%;">
                                            <option selected="selected">Pakistan</option>
                                        </select>
                                        @if($errors->has('country'))
                                            <span class="error">{{ $errors->first('country') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-2">
                                        <label>City</label>
                                        <select name="" class="form-control select2 {{ isset($errors) && $errors->has('date') ? 'has_error' : ''}}" style="width: 100%;">
                                            <option selected="selected">Karachi</option>
                                            <option>Islamabad</option>
                                        </select>
                                        @if($errors->has('country'))
                                            <span class="error">{{ $errors->first('country') }}<span>
                                        @endif
                                    </div> --}}
                                </div>

                                <h6 class="add_file_section"> Forign Employment Details</h6>
                                <hr>

                                <div class="row">

                                     <div class="form-group col-3">
                                        <label>Visa Trade or Category English</label>
                                        <select name="category" class="form-control select2 {{ isset($errors) && $errors->has('category') ? 'has_error' : ''}}" style="width: 100%;">
                                            <option value="1" >Category A</option>
                                            <option value="2">Category B</option>
                                        </select>
                                        @if($errors->has('category'))
                                            <span class="error">{{ $errors->first('category') }}<span>
                                        @endif
                                    </div>

                                      <div class="form-group col-3">
                                        <label>Arabic</label>
                                        <select name="ar_category" class="form-control select2 {{ isset($errors) && $errors->has('ar_category') ? 'has_error' : ''}}" style="width: 100%;">
                                            <option value="1">عالي</option>
                                            <option value="2">عالية</option>
                                        </select>
                                       @if($errors->has('ar_category'))
                                            <span class="error">{{ $errors->first('ar_category') }}<span>
                                        @endif
                                    </div>

                                    <div class="form-group col-6">
                                        <label for="">Job Title</label>
                                        <input type="text" name="job_title" value="{{ old('job_title') }}" class="form-control {{ isset($errors) && $errors->has('job_title') ? 'has_error' : ''}}" id="" placeholder="">
                                        @if($errors->has('job_title'))
                                            <span class="error">{{ $errors->first('job_title') }}<span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-3">
                                        <label for="">Total Visas</label>
                                        <input type="number" name="total_visa" value="{{ old('total_visa') }}" class="form-control {{ isset($errors) && $errors->has('total_visa') ? 'has_error' : ''}}" id="" placeholder="">
                                        @if($errors->has('total_visa'))
                                            <span class="error">{{ $errors->first('total_visa') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="">Salary</label>
                                        <div class="input-group-append">
                                            <input type="number" name="salary" value="{{ old('salary') }}" class="form-control {{ isset($errors) && $errors->has('salary') ? 'has_error' : ''}}" id="" placeholder="">
                                            <select name="salary_unit" class="form-control select2 {{ isset($errors) && $errors->has('salary_unit') ? 'has_error' : ''}}">
                                                <option value="Monthly" selected="selected">Monthly</option>
                                                <option value="Wages">Daily Wages</option>
                                            </select>
                                            <br>
                                            @if($errors->has('salary'))
                                                <span class="error">{{ $errors->first('salary') }}<span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="">Period Of Contract (Years)</label>
                                        <input type="text" name="contract_year" value="{{ old('contract_year') }}" class="form-control {{ isset($errors) && $errors->has('contract_year') ? 'has_error' : ''}}" id="" placeholder="No of Years">
                                        @if($errors->has('contract_year'))
                                            <span class="error">{{ $errors->first('contract_year') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="">Period Of Contract (Months)</label>
                                        <input type="text" name="contract_month" value="{{ old('contract_month') }}" class="form-control {{ isset($errors) && $errors->has('contract_month') ? 'has_error' : ''}}" id="" placeholder="No of Months">
                                        @if($errors->has('contract_month'))
                                            <span class="error">{{ $errors->first('contract_month') }}<span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label>Commision</label>
                                        <select name="commision" class="form-control select2" style="width: 100%;">
                                            <option>Yes</option>
                                            <option selected="selected">No</option>
                                        </select>
                                        @if($errors->has('commision'))
                                            <span class="error">{{ $errors->first('commision') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-4 hide" id="commision_detail_section">
                                        <label>Details</label>
                                        <input type="text" name="commision_detail" value="{{ old('commision_detail') }}" class="form-control">
                                        @if($errors->has('commision_detail'))
                                            <span class="error">{{ $errors->first('commision_detail') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Overtime</label>
                                        <select name="overtime" value="{{ old('overtime') }}" class="form-control select2" style="width: 100%;">
                                            <option>Yes</option>
                                            <option selected="selected">No</option>
                                        </select>
                                        @if($errors->has('overtime'))
                                            <span class="error">{{ $errors->first('overtime') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Free Accommodation</label>
                                        <select name="free_accommodation" value="{{ old('free_accommodation') }}" class="form-control select2 details"
                                            style="width: 100%;">
                                            <option>Yes</option>
                                            <option selected="selected">No</option>
                                        </select>
                                        @if($errors->has('free_accommodation'))
                                            <span class="error">{{ $errors->first('free_accommodation') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-4 hide" id="free_accommodation_detail_section">
                                        <label>Details</label>
                                        <input type="text" name="free_accommodation_detail" value="{{ old('free_accommodation_detail') }}" class="form-control">
                                        @if($errors->has('free_accommodation_detail'))
                                            <span class="error">{{ $errors->first('free_accommodation_detail') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Free Food</label>
                                        <select name="free_food" class="form-control select2 details"
                                            style="width: 100%;">
                                            <option>Yes</option>
                                            <option selected="selected">No</option>
                                        </select>
                                        @if($errors->has('free_food'))
                                            <span class="error">{{ $errors->first('free_food') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-4 hide" id="free_food_detail_section">
                                        <label>Details</label>
                                        <input type="text" name="free_food_detail" value="{{ old('free_food_detail') }}" class="form-control">
                                        @if($errors->has('free_food_detail'))
                                            <span class="error">{{ $errors->first('free_food_detail') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Working Place</label>
                                        <select name="working_place" class="form-control select2 details"
                                            style="width: 100%;">
                                            <option>Yes</option>
                                            <option selected="selected">No</option>
                                        </select>
                                        @if($errors->has('working_place'))
                                            <span class="error">{{ $errors->first('working_place') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-4 hide" id="working_place_detail_section">
                                        <label for="">Details</label>
                                        <input type="text" name="working_place_detail" value="{{ old('working_place_detail') }}" class="form-control">
                                        @if($errors->has('working_place_detail'))
                                            <span class="error">{{ $errors->first('working_place_detail') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Duty Time</label>
                                        <select name="duty_time" class="form-control select2 details"
                                            style="width: 100%;">
                                            <option>Yes</option>
                                            <option selected="selected">No</option>
                                        </select>
                                        @if($errors->has('duty_time'))
                                            <span class="error">{{ $errors->first('duty_time') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-4 hide" id="duty_time_detail_section">
                                        <label for="">Details</label>
                                        <input type="text" name="duty_time_detail" value="{{ old('duty_time_detail') }}" class="form-control" id="" placeholder="No of Months">
                                        @if($errors->has('duty_time_detail'))
                                            <span class="error">{{ $errors->first('duty_time_detail') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Other Benefits</label>
                                        <select name="other_benefits" class="form-control select2 details" style="width: 100%;">
                                            <option>Yes</option>
                                            <option selected="selected">No</option>
                                        </select>
                                        @if($errors->has('other_benefits'))
                                            <span class="error">{{ $errors->first('other_benefits') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-4 hide" id="other_benefits_section">
                                        <label for="">Details</label>
                                        <input type="text" name="other_benefits_detail" value="{{ old('other_benefits_detail') }}" class="form-control" id="" placeholder="No of Months">
                                        @if($errors->has('other_benefits_detail'))
                                            <span class="error">{{ $errors->first('other_benefits_detail') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Free Tickets</label>
                                        <select name="free_tickets" class="form-control select2" style="width: 100%;">
                                            <option>Yes</option>
                                            <option selected="selected">No</option>
                                        </select>
                                        @if($errors->has('free_tickets'))
                                            <span class="error">{{ $errors->first('free_tickets') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-4 hide">
                                        <label for="">Details</label>
                                        <input type="text" name="free_tickets_detail" value="{{ old('free_tickets_detail') }}" class="form-control" id="free_tickets_detail_section" placeholder="No of Months">
                                        @if($errors->has('free_tickets_detail'))
                                            <span class="error">{{ $errors->first('free_tickets_detail') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Medical Insurance</label>
                                        <select name="medical_insurance" class="form-control select2" style="width: 100%;">
                                            <option>Yes</option>
                                            <option selected="selected">No</option>
                                        </select>
                                        @if($errors->has('medical_insurance'))
                                            <span class="error">{{ $errors->first('medical_insurance') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-4 hide">
                                        <label for="">Details</label>
                                        <input type="text" name="medical_insurance_detail" value="{{ old('medical_insurance_detail') }}" class="form-control" id="medical_insurance_detail_section" placeholder="No of Months">
                                        @if($errors->has('medical_insurance_detail'))
                                            <span class="error">{{ $errors->first('medical_insurance_detail') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Transpotation</label>
                                        <select name="transportaion" class="form-control select2" style="width: 100%;">
                                            <option>Yes</option>
                                            <option selected="selected">No</option>
                                        </select>
                                        @if($errors->has('transportaion'))
                                            <span class="error">{{ $errors->first('transportaion') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-4 hide">
                                        <label for="">Details</label>
                                        <input type="text" name="transportaion_detail" value="{{ old('transportaion_detail') }}" class="form-control" id="transportaion_detail_section" placeholder="No of Months">
                                        @if($errors->has('transportaion_detail'))
                                            <span class="error">{{ $errors->first('transportaion_detail') }}<span>
                                        @endif
                                    </div>
                                </div>

                                <h6 class="add_file_section">Sender Details</h6>
                                <hr>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="">Visa Sender Name</label>
                                        <input type="text" name="sender_name" value="{{ old('sender_name') }}" class="form-control {{ isset($errors) && $errors->has('sender_name') ? 'has_error' : ''}}" id="" placeholder="">
                                        @if($errors->has('sender_name'))
                                            <span class="error">{{ $errors->first('sender_name') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-2">
                                        <label for="">Nationality</label>
                                        <input type="text" name="sender_nationality" value="{{ old('sender_nationality') }}" class="form-control {{ isset($errors) && $errors->has('sender_nationality') ? 'has_error' : ''}}" id="" placeholder="">
                                        @if($errors->has('sender_nationality'))
                                            <span class="error">{{ $errors->first('sender_nationality') }}<span>
                                        @endif
                                    </div>
                                    {{-- <div class="form-group col-3">
                                        <label>Nationality</label>
                                        <select name="sender_nationality" class="form-control select2 {{ isset($errors) && $errors->has('sender_nationality') ? 'has_error' : ''}}" style="width: 100%;">
                                            <option selected="selected">Pakistani</option>
                                            <option>Hindu</option>
                                        </select>
                                        @if($errors->has('sender_nationality'))
                                            <span class="error">{{ $errors->first('sender_nationality') }}<span>
                                        @endif
                                    </div> --}}
                                    <div class="form-group col-2">
                                        <label for="">Mobile Number</label>
                                        <input type="number" name="sender_mobile_number" value="{{ old('sender_mobile_number') }}" class="form-control {{ isset($errors) && $errors->has('sender_mobile_number') ? 'has_error' : ''}}" id="" placeholder="">
                                        @if($errors->has('sender_mobile_number'))
                                            <span class="error">{{ $errors->first('sender_mobile_number') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-2">
                                        <label>City</label>
                                        <select name="sender_city" class="form-control select2 {{ isset($errors) && $errors->has('sender_city') ? 'has_error' : ''}}" style="width: 100%;">
                                            <option value="1" {{ old('sender_city') && old('sender_city') == "1" ? 'selected' : '' }}>Karachi</option>
                                            <option value="2" {{ old('sender_city') && old('sender_city') == "2" ? 'selected' : '' }}>Islamabad</option>
                                        </select>
                                        @if($errors->has('sender_city'))
                                            <span class="error">{{ $errors->first('sender_city') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-8">
                                        <label>Processing / Recruitment</label>
                                        <select name="processing_recruitment" class="form-control select2 {{ isset($errors) && $errors->has('processing_recruitment') ? 'has_error' : ''}}" style="width: 100%;">
                                            <option value="Processing" {{ old('processing_recruitment') && old('processing_recruitment') == "1" ? 'selected' : '' }}>Processing</option>
                                            <option value="Recruitment" {{ old('processing_recruitment') && old('processing_recruitment') == "2" ? 'selected' : '' }}>Recruitment</option>
                                        </select>
                                        @if($errors->has('processing_recruitment'))
                                            <span class="error">{{ $errors->first('processing_recruitment') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-2">
                                        <label for="">Amount</label>
                                        <input type="number" name="amount" value="{{ old('amount') }}" class="form-control {{ isset($errors) && $errors->has('amount') ? 'has_error' : ''}}" id="" placeholder="">
                                        @if($errors->has('amount'))
                                            <span class="error">{{ $errors->first('amount') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-2">
                                        <label for="">Other Expenses</label>
                                        <input type="number" name="other_expense" value="{{ old('other_expense') }}" class="form-control {{ isset($errors) && $errors->has('other_expense') ? 'has_error' : ''}}" id="" placeholder="">
                                        @if($errors->has('other_expense'))
                                            <span class="error">{{ $errors->first('other_expense') }}<span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-8">
                                        <label for="">Other Details</label>
                                        <input type="text" name="other_details" value="{{ old('other_details') }}" class="form-control {{ isset($errors) && $errors->has('other_details') ? 'has_error' : ''}}" id="" placeholder="">
                                        @if($errors->has('other_details'))
                                            <span class="error">{{ $errors->first('other_details') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-2">
                                        <label for="">Permission Number</label>
                                        <input type="text" name="permission_number" value="{{ old('permission_number') }}" class="form-control {{ isset($errors) && $errors->has('permission_number') ? 'has_error' : ''}}" id="" placeholder="">
                                        @if($errors->has('permission_number'))
                                            <span class="error">{{ $errors->first('permission_number') }}<span>
                                        @endif
                                    </div>
                                    <div class="form-group col-2">
                                        <label for="">Permission Date</label>
                                        <input type="date" name="permission_date" value="{{ old('permission_date') }}" class="form-control {{ isset($errors) && $errors->has('permission_date') ? 'has_error' : ''}}" id="" placeholder="">
                                        @if($errors->has('permission_date'))
                                            <span class="error">{{ $errors->first('permission_date') }}<span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>

</div>
<!-- /.content-wrapper -->
@stop
